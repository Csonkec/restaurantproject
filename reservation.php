<?php 
    include "nav.php";
    include "db-config.php";
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/reservation.css">
    <script src="scripts/reservation.js" defer></script>
</head>
<body>
    <section class="hero mb-5">
        <p class="fw-bold text-light text-shadow">Asztalfoglalás</p>
        <p class="text-light text-shadow">Válaszd ki a dátumot, az időpontot és az asztalt, majd erősítsd meg a foglalásodat.</p>
    </section>

    
    <section class="container">
        <h1 class="h1 mt-4 mb-4 fs-1">Asztalfoglalás</h1>
        <div class="d-flex justify-content-between mb-5 direction">
            <div class="left-side">
                <div class="wrapper">
                    <header>
                        <p class="current-date"></p>
                        <div class="header-icons">
                            <span id="prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
                                </svg>
                            </span>
                            <span id="next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                            </span>
                        </div>
                    </header>
                    <div class="calendar">
                        <ul class="weeks">
                            <li>Mon</li>
                            <li>Tue</li>
                            <li>Wed</li>
                            <li>Thu</li>
                            <li>Fri</li>
                            <li>Sat</li>
                            <li>Sun</li>
                        </ul>
                        <ul class="days"></ul>
                    </div>
                </div>
            </div>
            <div class="vr"></div>
            <hr class="hr">
            <div class="right-side">
                <form action="" method="post">
                    <div class="mb-4">
                        <label for="guestCount" class="form-label">Vendégek száma:</label>
                        <input type="number" name="guestCount" id="guestCount" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="tableId" class="form-label">Asztal sorszáma:</label>
                        <select name="tableId" id="tableId" class="form-select">
                            <option value="-">--Válassz asztalt--</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="time" class="form-label">Érkezés időpontja:</label>
                        <select name="time" id="time" class="form-select">
                            <option value="-">--Válassz időpontot--</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="comment" class="form-label">Megjegyzés:</label>
                        <textarea name="comment" id="comment" rows="3" class="form-control"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-lg btn-primary">Foglalás</button>
                        <button type="reset" class="btn btn-lg btn-danger">Törlés</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <?php 
    include "footer.php";
    ?>
</body>