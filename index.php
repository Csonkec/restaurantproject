<?php 
    include "nav.php";
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Adrenalin BBQ & GRILL</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <section class="hero mb-5">
        <p class="fw-bold text-light text-shadow">Foglalj asztalt könnyedén nálunk!</p>
        <a href="reservation.php" class="btn btn-danger btn-lg">Foglalás most</a>
    </section>

    <section class="container">
        <h1 class="h1 mt-4 mb-4 fs-1">Röviden rólunk</h1>
        <p class="fs-4">Adrenalin BBQ & GRILL egy fiatalos, lendületes étterem Ada szívében, ahol a szenvedélyes grillezés és a füstös BBQ ízek találkoznak. Küldetésünk, hogy minőségi alapanyagokból, frissen készült fogásokkal hozzuk el vendégeinknek az amerikai barbecue hangulatot – mindezt barátságos, laza környezetben.</p>
        <p class="fs-4">Kínálatunkban megtalálhatók a klasszikus hamburgerek, házi tortillák, lassan füstölt húsok és ínycsiklandó BBQ boxok, amelyek minden húsimádó szívét megdobogtatják. Legyen szó gyors ebédről, esti lazulásról vagy hétvégi összejövetelről, nálunk garantáltan megtalálod a kedvencedet.</p>
        <p class="fs-4 mb-5">Látogass el hozzánk, és tapasztald meg az adrenalinban gazdag grillélményt – az ízek nálunk tényleg életre kelnek!</p> 
    </section>

    
    <section class="container-fluid bg-dark bg-gradient pt-4 pb-4">
        <div class="container">
            <h1 class="h1 fs-1 text-center mb-2 mt-4 text-light">Népszerű ételek</h1>
            <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Burger"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="BBQ"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Box"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/carousel1.jpg" alt="Jam burger" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Jam burger</h5>
                            <p>Buci, 2x80g hús, sajt, bacon, szilva lekvár, burger szósz, sült hagyma</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/carousel2.jpg" alt="BBQ borda" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>BBQ Borda</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/carousel3.jpg" alt="Porky box" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Porky box</h5>
                            <p>Pomfrit, tépett hús, sajt, porky szósz, bbq szósz</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="d-flex justify-content-center">
                <a href="https://jezeroadrenalin.com/wp-content/uploads/2025/06/AdrenalinBBQNewMENU-HU1Website-scaled.jpg" target="blank_" class="btn btn-danger btn-lg mt-4">Teljes étlap megtekintése</a>
            </div>
        </div>
    </section>

    <section class="container">
        <h1 class="h1 text-center mt-5">Nem vagy még tag? Regisztrálj be és jelentkezz be most!</h1>
        <div class="d-flex justify-content-center mb-5">
            <a href="login.php" class="btn btn-danger btn-lg mt-1 me-1">Bejelentkezés</a>
            <a href="register.php" class="btn btn-danger btn-lg mt-1 ms-1">Regisztrálás</a>
        </div>
    </section>
    
    <?php 
    include "footer.php";
    ?>
</body>
</html>