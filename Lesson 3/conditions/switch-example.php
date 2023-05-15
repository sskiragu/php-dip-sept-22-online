<?php
$selected = "random";
switch ($selected) {
    case 'profile':
        echo "You viewed the profile";
        break;
    case 'reports':
        echo "You viewed the reports";
        break;
    case 'services':
        echo "You viewed the services";
        break;
    default:
        echo "Page not found";
        break;
}
?>