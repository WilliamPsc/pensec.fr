    <?php
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);

    session_start(); // Ensure the session is started if you're using session variables
    include "template/header.php";
    include "template/menu.php";
    ?>

    <?php
    include "../assets/googlescholar/googlescholar.php";

    if ($json_data === FALSE) {
        die('<h1 class="align-middle text-center">Error fetching JSON data.</h1>');
    }

    // Decode the JSON data to a PHP array
    $data = json_decode($json_data, true);

    // Extract the number of citations and publications
    $nb_citations = $data['total_citations'];
    $nb_publications = count($data['publications']);
    $hindex = $data['hindex'];
    $index10 = $data['indexi10'];
    ?>

    <br><br>
    <div class="container">
        <h2 class="text-center"><u>Chercheur post-doctorant</u></h2>
        <div class="table-responsive-md">
            <h4 class="text-center">Évaluation de la sécurité des implémentations FPGA de réseaux neuronaux sur RISC-V</h4><br>
            <!-- <h4>Université Jean Monnet, UMR CNRS 5516, Laboratoire Hubert Curien (LabHC) - Saint-Étienne</h4> -->
            <br><br>
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <td class="align-middle text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg> Contact :
                        </td>
                        <td class="align-middle text-center">+33 04.77.91.57.59 (Pro)</td>
                        <td class="align-middle text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                            </svg> Email :
                        </td>
                        <td class="align-middle text-center">
                            <script src="../js/script.js"></script>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center">
                            <i class="fa-brands fa-google-scholar"></i> <a href="https://scholar.google.com/citations?user=AJE3er8AAAAJ" target="_blank">Google Scholar :</a>
                        </td>
                        <td class="align-middle text-center"><?php echo "$nb_citations citations / $nb_publications publications"; ?></td>
                        <td class="align-middle text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                                <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z" />
                            </svg> Institution :
                        </td>
                        <td class="align-middle text-center">
                            <a href="https://laboratoirehubertcurien.univ-st-etienne.fr/en/teams/secure-embedded-systems-hardware-architectures.html" target="_blank">Université Jean Monnet,<br>UMR CNRS 5516, Laboratoire Hubert Curien (LabHC) -<br> Équipe SESAM - Saint-Étienne</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center" colspan="2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                            </svg> <a href="https://github.com/WilliamPsc/" target="_blank">GitHub</a>
                        </td>
                        <td class="align-middle text-center" colspan="2">
                            <a href="https://www.linkedin.com/in/william-pensec-7464a217b/" target="_blank" class="btn btn-info" role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                </svg>
                                LinkedIn
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center" colspan="2">
                            <i class="fa-brands fa-orcid"></i> <a href="https://orcid.org/0009-0006-0234-8213" target="_blank">ORCID : 0009-0006-0234-8213</a>
                        </td>
                        <td class="align-middle text-center" colspan="2">H-Index : <?php echo "$hindex"; ?> / Index i10 : <?php echo "$index10"; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-responsive-md">
            <iframe width="100%" height="350" src="https://www.openstreetmap.org/export/embed.html?bbox=4.384360313415528%2C45.4522172679292%2C4.387900829315186%2C45.45382787736185&amp;layer=mapnik&amp;marker=45.4530225783951%2C4.3861305713653564" style="border: 1px solid black"></iframe>
            <br/><small><a href="https://www.openstreetmap.org/?mlat=45.453023&amp;mlon=4.386131#map=19/45.453023/4.386131" target="_blank">Afficher une carte plus grande</a></small>
        </div>
    </div>

    <?php
    $dateMajFile = date("d/m/Y H:i.", filemtime(basename(__FILE__)));
    include "template/footer.php";
    ?>