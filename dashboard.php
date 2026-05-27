<?php session_start(); ?>
<link rel="stylesheet" href="css/estilo_pro.css">

<div class="sidebar">
    <img src="img/logo.png" width="120">

    <a href="dashboard.php">🏠 Inicio</a>
    <a href="clientes/listar.php">👤 Clientes</a>
    <a href="vehiculos/listar.php">🚗 Vehículos</a>
    <a href="ordenes/listar.php">📋 Órdenes</a>
    <a href="reportes/index.php">📊 Reportes</a>
    <a href="correo/index.php">✉️ Correo</a>
</div>

<div class="header">MotorLab - Panel del Taller</div>

<div class="main">

<h2>Bienvenido</h2>

<!-- CARRUSEL -->
<div class="carrusel">
    <div class="slides">
        <img src="img/taller1.jpg">
        <img src="img/taller2.jpg">
        <img src="img/taller3.jpg">
    </div>
</div>

<p>Administra tu taller mecánico de forma profesional.</p>

<!-- 📍 MAPA -->
<h3>Ubicación</h3>
<iframe 
src="https://www.google.com/maps?q=Tuxtla+Gutierrez&output=embed"
width="100%" height="300">
</iframe>

<!-- 🌐 REDES -->
<div class="redes">
    <h3>Síguenos</h3>
    <a href="#">Facebook</a>
    <a href="#">Instagram</a>
    <a href="#">WhatsApp</a>
</div>

</div>