<?php 
    include "nav.php";
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <div class="d-flex align-items-center justify-content-center min-vh-100">
        <div class="p-5 pb-1 rounded-5 text-light" style="background-color: rgba(90, 90, 90, 1);">
            <h1 class="mb-4 me-5">Bejelentkezés</h1>
            <form action="" method="post">
                <div class="mb-4">
                    <label for="username" class="form-label">Felhasználónév:</label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Jelszó:</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="mb-4">
                    <button type="submit" class="btn btn-primary">Bejelentkezés</button>
                    <button type="reset" class="btn btn-danger">Törlés</button>
                </div>  
            </form>
            <p>Nem vagy még tag? <span><a href="register.php">Regisztrálj itt!</a></span></p>
        </div>
    </div>
</body>