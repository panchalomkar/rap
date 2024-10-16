<?php
// Include common header


// // Determine the page to load
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
include 'header.php';
switch ($page) {
    case 'home':
        include 'pages/home.html';
        break;
    case 'corporate':
        include 'pages/products/corporate.html';
        break;
    case 'education':
        include 'pages/products/education.html';
        break;
    case 'video-creation':
        include 'pages/products/video-creation.html';
        break;
    case 'smart-video':
        include 'pages/products/smart-video.html';
        break;
    case 'smart-presentation':
        include 'pages/products/smart-presentation.html';
        break;
    case 'virtual-reality':
        include 'pages/products/virtual-reality.html';
        break;
    case 'e-learning':
        include 'pages/services/e-learning.html';
        break;
    case 'plugin':
        include 'pages/services/plugin.html';
        break;
    case 'ui-ux':
        include 'pages/services/ui-ux.html';
        break;
    default:
        include 'pages/home.php';
        break;
}

// Include common footer
include 'footer.php';