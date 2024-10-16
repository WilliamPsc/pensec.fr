<?php
// Include the Composer autoloader
require 'vendor/autoload.php';

// Use the simple_html_dom library
use voku\helper\HtmlDomParser;

// Function to fetch the HTML content using curl
function fetch_html($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36");

    $output = curl_exec($ch);
    curl_close($ch);

    return $output;
}

// Function to parse the HTML and extract data using simple_html_dom
function parse_html($html) {
    $dom = HtmlDomParser::str_get_html($html);

    if (!$dom) {
        throw new Exception('Failed to parse HTML');
    }

    // Extract total citations
    $totalCitations = 0;
    $hindex = 0;
    $index_10 = 0;

    // Find all 'td' elements with the class 'gsc_rsb_std'
    $citationElement = $dom->find('td.gsc_rsb_std');

    // Store the values in different variables
    $totalCitations = isset($citationElement[0]) ? $citationElement[0]->text() : null;
    $hindex = isset($citationElement[1]) ? $citationElement[2]->text() : null;
    $index_10 = isset($citationElement[2]) ? $citationElement[4]->text() : null;

    // Extract publication details
    $publications = [];
    foreach ($dom->findMulti('tr.gsc_a_tr') as $publicationElement) {
        $titleElement = $publicationElement->findOne('a.gsc_a_at');
        $title = $titleElement ? trim($titleElement->text()) : '';

        $authorElements = $publicationElement->findMulti('div.gs_gray');
        $authors = $authorElements && count($authorElements) > 0 ? trim($authorElements[0]->text()) : '';
        $venue = $authorElements && count($authorElements) > 1 ? trim($authorElements[1]->text()) : '';

        $citationElement = $publicationElement->findOne('a.gsc_a_ac');
        $citations = $citationElement ? (int) trim($citationElement->text()) : 0;

        $yearElement = $publicationElement->findOne('span.gsc_a_h');
        $year = $yearElement ? (int) trim($yearElement->text()) : 0;

        $publications[] = [
            'title' => $title,
            'authors' => $authors,
            'venue' => $venue,
            'citations' => $citations,
            'year' => $year
        ];
    }

    return [
        'total_citations' => $totalCitations,
        'publications' => $publications,
        'hindex' => $hindex,
        'indexi10' => $index_10
    ];
}

// URL of the Google Scholar profile
$url = "https://scholar.google.com/citations?user=AJE3er8AAAAJ&hl=fr";

// Fetch the HTML content
$html = fetch_html($url);

try {
    // Parse the HTML and extract data
    $data = parse_html($html);

    // Output the results as JSON
    // header('Content-Type: application/json');
    $json_data = json_encode($data, JSON_PRETTY_PRINT);
} catch (Exception $e) {
    // Handle errors
    header('Content-Type: application/json');
    echo json_encode(['error' => $e->getMessage()]);
}
?>
