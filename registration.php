<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="design.css">
</head>
<body class="registration">
   
    <ul>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="branches">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registration.php">Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="images.php">Images</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="branches.php">Branches</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Option 1</a>
                        <a class="dropdown-item" href="#">Option 2</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    

    <h1>Registration</h1>
    <form action="submit_registration.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br><br>
        
        <input type="submit" value="Register">
    </form>
</body>

</html>
