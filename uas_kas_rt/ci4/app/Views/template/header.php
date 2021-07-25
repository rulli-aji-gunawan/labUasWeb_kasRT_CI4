<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>
<body>
    <div id="container">
    <h2>APLIKASI KAS WARGA RT</h2>
    <br>
        <nav class="navMenu">
            <a href="<?= base_url('/page/home'); ?>" class="<?php echo($_SERVER['REQUEST_URI']=="/home") ? "active" : ""; ?>" >Home</a>  
            <a href="<?= base_url('/warga/warga_index'); ?>" class="<?php echo($_SERVER['REQUEST_URI']=="/warga") ? "active" : ""; ?>" >Data Warga</a>
            <a href="<?= base_url('/iuran/iuran_index'); ?>" class="<?php echo($_SERVER['REQUEST_URI']=="/iuran") ? "active" : ""; ?>" >Data Iuran Kas</a>
            <a href="<?= base_url('/laporan/laporan_index'); ?>" class="<?php echo($_SERVER['REQUEST_URI']=="/laporan") ? "active" : ""; ?>" >Laporan</a>
        </nav>
        <section id="wrapper"> 
            <section id="main">

