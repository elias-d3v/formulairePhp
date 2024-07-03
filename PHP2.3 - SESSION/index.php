<?php
    session_start();

    if (isset($_SESSION["loggedUser"]) && !empty($_SESSION["loggedUser"])){
        header('Location: profile.php');
        exit(); 
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <section>
        <form action="handleLogin.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"
                name="email">
                <?php if (isset($_GET["errorMail"])) :?>
                    <p class="error-message"><?= $_GET["errorMail"] ?></p>
                <?php endif; ?>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                name="password">
            </div>
            <?php if (isset($_GET["errorPassword"])) :?>
                <p class="error-message"><?= $_GET["errorPassword"] ?></p>
            <?php endif; ?>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <?php if (isset($_GET["errorEmpty"])) :?>
                <p class="error-message"><?= $_GET["errorEmpty"] ?></p>
            <?php endif; ?>
        </form>
    </section>
</body>
</html>