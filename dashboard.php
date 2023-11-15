<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2a421485f4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/script/script.js"></script>
    <title>Dashboard</title>
</head>
<body>
<div class="dashboard">
    <div class="container-dash">
        <div class="navigation-dash" id="board">
            <ul>
                <li>
                    <a href="index.php">
                        <span class="icon"></span>
                        <span class="tittle">DASHBOARD</span>
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        <span class="icon"><i class="fa-solid fa-house"></i></span>
                        <span class="tittle">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-handshake"></i></span>
                        <span class="tittle">Services</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-motorcycle"></i></span>
                        <span class="tittle">Moto</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-taxi"></i></span>
                        <span class="tittle">Taxi</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-user"></i></span>
                        <span class="tittle">User</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="main">
    <div class="topbar">
        <div class="toggle">
        <i class="fa-solid fa-bars" onclick="board()"></i>
        </div>
        <!-- ----------------------SEARCH BOX ------------------------>
        <div class="search">
            <label>
                <input type="text" placeholder="Search here">
             </label>
        </div>
        <!--------------- USER IMAGE -------------------------------->
        <div class="user">
            <img src="assets/images/bck.jpg">
        </div>
    </div>

       <!-- -------------------CARDS ---------------------------->

       <div class="cardbox">
        <div class="cards">
            <div>
                <div class="numbers">1,504</div>
                <div class="cardname">daily Movements</div>
            </div>
            <div class="iconbox">
            <i class="fa-solid fa-route"></i>
            </div>
        </div>
        <div class="cards">
            <div>
                <div class="numbers">80</div>
                <div class="cardname">Motos</div>
            </div>
            <div class="iconbox">
                <i class="fa-solid fa-motorcycle"></i>
            </div>
        </div>
        <div class="cards">
            <div>
                <div class="numbers">208</div>
                <div class="cardname">Taxis</div>
            </div>
            <div class="iconbox">
                <i class="fa-solid fa-taxi"></i>
            </div>
        </div>
        <div class="cards">
            <div>
                <div class="numbers">$44545</div>
                <div class="cardname">daily earn</div>
            </div>
            <div class="iconbox">
                <i  class="fa-solid fa-motorcycle"></i>
            </div>
        </div>
       </div>

     <!-- -------------------  HISTORY ---------------------------->
     <div class="details">
        <div class="recentorders">
            <div class="cardheader">
                <h2>Recents</h2>
                <a href="#" class="bnt">View All</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <td>DATE</td>
                        <td>NAMES</td>
                        <td>PHONE</td>
                        <td>LOCATION</td>
                        <td>TITTLE</td>
                        <td>CLEAR</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>11/12/2023</td>
                        <td>TUYIZERE Bruno</td>
                        <td>0788234590</td>
                        <td>Kagugu</td>
                        <td>Driver</td>
                        <td><a href="#" class="bnt-two">Remove</a></td>
                    </tr>
                    <tr>
                        <td>11/12/2023</td>
                        <td>NIYONIZERA Alexis</td>
                        <td>078765430</td>
                        <td>Gasanze</td>
                        <td>Driver</td>
                        <td><a href="#" class="bnt-two">Remove</a></td>
                    </tr>
                    <tr>
                        <td>11/12/2023</td>
                        <td>TUYISHIME Bruce</td>
                        <td>0788239450</td>
                        <td>Batsinda</td>
                        <td>Taxi Driver</td>
                        <td><a href="#" class="bnt-two">Remove</a></td>
                    </tr>
                    <tr>
                        <td>11/12/2023</td>
                        <td>TUYISENGE Eddy</td>
                        <td>0722234590</td>
                        <td>Kacyiru</td>
                        <td>Driver</td>
                        <td><a href="#" class="bnt-two">Remove</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
     </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<div id="map"></div>
<script>
    function initMap() {
        // Create a new map centered on the user's location
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15
        });

        // Try to get the user's current location
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var userLocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                // Center the map on the user's location
                map.setCenter(userLocation);

                // Add a marker at the user's location
                var marker = new google.maps.Marker({
                    position: userLocation,
                    map: map,
                    title: 'Your Location'
                });
            });
        }
    }
</script>
<script>
    window.onload = function() {
        initMap();
    };
</script>

</body>
</html>