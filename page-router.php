<?php
    if ($_GET) {
        switch($_GET['page']) {
            case 'Proyeksi' :
                if (!file_exists("pages/proyeksi.php")) die ("Sorry, page is not available!");
                include "pages/proyeksi.php";
                break;
            case 'Proyeksi-Klasifikasi' :
                if (!file_exists("pages/proyeksi_klasifikasi.php")) die ("Sorry, page is not available!");
                include "pages/proyeksi_klasifikasi.php";
                break;
            case 'Koordinat' :
                if (!file_exists("pages/koordinat.php")) die ("Sorry, page is not available!");
                include "pages/koordinat.php";
                break;
            case 'Koordinat-Klasifikasi' :
                if (!file_exists("pages/koordinat_klasifikasi.php")) die ("Sorry, page is not available!");
                include "pages/koordinat_klasifikasi.php";
                break;
            default :
                if (!file_exists("pages/home.php")) die ("Sorry, page is not available!");
                include "pages/home.php";
                break;
       }
    }
?>