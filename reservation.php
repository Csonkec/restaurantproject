<?php 
    include "nav.php";
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Adrenalin BBQ & GRILL</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/reservation.css">
</head>
<body>
    <section class="hero mb-5">
        <p class="fw-bold text-light text-shadow">Asztalfoglalás</p>
        <p class="text-light text-shadow">Válaszd ki a dátumot, az időpontot és az asztalt, majd erősítsd meg a foglalásodat.</p>
    </section>

    
    <section class="container">
        <h1 class="h1 mt-4 mb-4 fs-1">Asztalfoglalás</h1>
        <div class="wrapper">
            <header>
                <p class="current-date">Augusztus 2025</p>
                <div class="header-icons">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                        <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
                        </svg>
                    </span>
                    <span>
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
                <ul class="days">
                    <li class="inactive">27</li>
                    <li class="inactive">28</li>
                    <li class="inactive">29</li>
                    <li class="inactive">30</li>
                    <li class="inactive">31</li>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li>10</li>
                    <li>11</li>
                    <li>12</li>
                    <li class="active">13</li>
                    <li>14</li>
                    <li>15</li>
                    <li>16</li>
                    <li>17</li>
                    <li>18</li>
                    <li>19</li>
                    <li>20</li>
                    <li>21</li>
                    <li>22</li>
                    <li>23</li>
                    <li>24</li>
                    <li>25</li>
                    <li>26</li>
                    <li>27</li>
                    <li>28</li>
                    <li>29</li>
                    <li>30</li>
                    <li>31</li>
                    <li class="inactive">1</li>
                    <li class="inactive">2</li>
                    <li class="inactive">3</li>
                    <li class="inactive">4</li>
                    <li class="inactive">5</li>
                    <li class="inactive">6</li>
                </ul>
            </div>
        </div>
    </section>


    <?php 
    include "footer.php";
    ?>
</body>