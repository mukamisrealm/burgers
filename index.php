<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Web Page</title>
    <link rel="stylesheet" href="include/#style.css">
</head>
<body class ="about">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">My Webpage</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Sign Up</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>


<?php
include_once("db_connect.php");
include_once("header.php");
?>

<div class="container my-4">
    <h1>Home</h1>
    <img src="Photos/Park West Gallery Bringing Fine Art to Las Vegas.jpeg" class="img-fluid" alt="Park West Gallery Bringing Fine Art to Las Vegas">
    <p>This is a website that helps you see art pieces. Prepare to get stunned!
        Discover different types of art, build creativity.</p>
    <ul>
        <li>Explore ceramic artwork</li>
        <li>Experience life-changing poem pieces</li>
        <li>Check out afrocentric clothing designs</li>
        <li>See breathtaking jewelry pieces</li>
    </ul>
