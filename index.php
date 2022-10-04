<?php

include_once './layouts/header.php';


// if (condition) {
//     # code...
// }

// elseif (condition) {
//     # code...
// }
// elseif (condition) {
//     # code...
// }
// else {
//     # code...
// }


switch ($_SERVER['REQUEST_URI']) {
    case './layouts/home.php':
        include 'home.php';
        break;
    case './layouts/notre-approche.php':
        include 'notre-approche.php';
        break;
    default:
        include 'notfound.php';
        break;
}

// include_once './layouts/home.php';

include_once './layouts/footer.php';

?>




