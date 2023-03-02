<?php

if(isset($_GET['url'])){

    switch($_GET['url']){

        case'tulis-pengaduan';
        include'tulis-pengaduan.php';
        break;

        case'lihat-pengaduan';
        include'lihat-pengaduan.php';
        break;

        default:
        echo'Halaman Tidak Ditemukan';
        break;
    }

    }else{

        echo 'Selamat Datang Di Aplikasi Pelaporan Pengaduan Masyarakat
        Aplikasi Ini Dibuat Untuk Melaporkan Tindakan Yang Menyimpang Dari Ketentuan<hr>';
        echo 'Anda Login sebagai: '.$_SESSION['nama'];

    }

