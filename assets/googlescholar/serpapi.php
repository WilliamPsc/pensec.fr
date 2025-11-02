<?php
// === CONFIGURATION ===
$api_key = '91e3f8273a2df2b536e71a00c142f6dab544e7e4f23932703f87243f98fce1a8';
$author_id = 'AJE3er8AAAAJ';
$cache_file = __DIR__ . '/serpapi_cache.json';
$cache_lifetime = 24 * 3600; // 1 jour

// === FONCTION UTILITAIRE POUR LA DATE ===
function get_month_key() {
    return date('Y-m'); // Exemple : "2025-11"
}

// === Si le cache existe et est récent, on le lit ===
if (file_exists($cache_file) && (time() - filemtime($cache_file) < $cache_duration)) {
    $data = json_decode(file_get_contents($cache_file), true);
    if ($data) {
        return; // On sort du script, $data est prêt
    }
}

// === Construction de l'URL ===
$url = "https://serpapi.com/search.json"
     . "?engine=google_scholar_author"
     . "&author_id={$author_id}"
     . "&api_key={$api_key}";

// === Récupération du JSON depuis SerpApi ===
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");
$response = curl_exec($ch);
if ($response === false) {
    die("Erreur cURL : " . curl_error($ch));
}
curl_close($ch);

// === Décodage du JSON ===
$data = json_decode($response, true);
if ($data === null) {
    die("Erreur de décodage JSON");
}

// === Étape 3 : extraire les métriques ===
$total_citations = $data['cited_by']['table'][0]['citations']['all'] ?? 0;
$hindex          = $data['cited_by']['table'][1]['h_index']['all'] ?? 0;
$i10index        = $data['cited_by']['table'][2]['i10_index']['all'] ?? 0;

// === Étape 4 : extraire la liste des publications ===
$publications = [];
if (!empty($data['articles'])) {
    foreach ($data['articles'] as $article) {
        $publications[] = [
            'title'     => $article['title'] ?? '',
            'citations' => $article['cited_by']['value'] ?? 0,
            'year'      => $article['year'] ?? '',
            'link'      => $article['link'] ?? ''
        ];
    }
}

// === Étape 5 : structurer la sortie ===
$result = [
    'total_citations' => $total_citations,
    'hindex'          => $hindex,
    'indexi10'        => $i10index,
    'publications'    => $publications,
    'last_update'     => date('Y-m-d H:i:s')
];

// === Sauvegarde dans le cache ===
file_put_contents($cache_file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

header('Content-Type: application/json');