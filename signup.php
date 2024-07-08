<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="design.css">
</head>
<body class="signin">
    <div class="container">
        <header>
            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="about.php">About Us</a>
                <a href="registration.php">Registration</a>
                <a href="contact.php">Contacts</a>
                <a href="images.php">Images</a>
                <a href="branches.php">Branches</a>
                <a href="signup.php">Sign up</a>
            </nav>
        </header>

        <main>
            <section class="signin-form">
                <h2>Sign In</h2>
                <form>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required><br><br>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required><br><br>
                    </div>
                    <button type="submit">Sign In</button>
                </form>
            </section>
        </main>

        <footer>
            <p>&copy; 2024 Artsquare. All rights reserved.</p>
        </footer>
    </div>

    <script src="https://code.jquery.com
