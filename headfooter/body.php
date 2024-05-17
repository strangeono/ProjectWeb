<?php
    /*
        страница оснвной машрутизатор на основе get-агрументы page
    */
    
    switch( array_key_exists('page', $_GET) ?  $_GET['page'] : 'default' )
    {
        default:
        case 'main':
            require('content\indexcontent.php');
        break;

        case 'catalog':
            require('content\page1.php');
        break;

        case 'contacts':
            require('content\contactscontent.php');
        break;

        case 'about':
            require('content\aboutContent.php');
        break;

        case 'login':
            require('content\logincontent.php');
        break;

        case 'signup':
            require('content\signupcontent.php');
        break;

        case 'product':
            require('product.php');
        break;
        
        case 'profile':
            require('content\profilecontent.php');
        break;
    }
    
?>