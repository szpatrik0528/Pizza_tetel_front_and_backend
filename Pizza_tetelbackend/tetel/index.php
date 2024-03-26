<?php

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        require_once 'tetel/gettetel.php';
        break;
    case 'POST':
        require_once 'tetel/posttetel.php';
        break;
    case 'DELETE':
        require_once 'tetel/deletetetel.php';
        break;
    case 'PUT':
        require_once 'tetel/puttetel.php';
        break;
    default:
        break;
}