<?php

if (isset($_GET['page'])) {
    $resquested_page = $_GET['page'];
} else {
    $resquested_page = 'home';
}

switch ($resquested_page) {
    case 'home':
        include './views/home.php';
        break;
    case 'notre-approche':
        include './views/notre-approche.php';
        break;
    case 'notre-equipe':
        include './views/notre-equipe.php';
        break;
    case 'ateliers-culinaires':
        include './views/ateliers-culinaires.php';
        break;
    case 'cours-dietetique':
        include './views/cours-dietetique.php';
        break; 
    case 'actualites':
        include './views/actualites.php';
        break;
    case 'contact':
        include './views/contact.php';
        break;
    case 'espace-patient':
        include './views/espace-patient.php';
        break;
    case 'boutique':
        include './views/boutique.php';
        break;
    /*case 'controllers-contact':
        include './controllers/contact.php';
        break;*/
    default:
        include './views/notfound.php';
        break;
}

?>




