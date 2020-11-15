<?php
    if ($_GET) {
        switch($_GET['page']) {
            case 'Sistem-Proyeksi' :
                if (!file_exists("pages/sistem_proyeksi.php")) die ("Sorry, page is not available!");
                include "pages/sistem_proyeksi.php";
                break;
            case 'Sistem-Koordinat' :
                if (!file_exists("pages/sistem_koordinat.php")) die ("Sorry, page is not available!");
                include "pages/sistem_koordinat.php";
                break;
            default :
                if (!file_exists("pages/home.php")) die ("Sorry, page is not available!");
                include "pages/home.php";
                break;
       }
    }
?>