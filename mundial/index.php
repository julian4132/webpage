<!DOCTYPE html>
<?php
session_start();
$user = $_SESSION['user_name'];
?>
<html>
<meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1">
<head>
    <script src="jquery.js"></script>
	<title>Qatar 2022</title>
	<link rel="shortcut icon" href="logo_title.png">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="scrollbar.css">
</head>
<body>
	<div class="w3-row container myHeader">
		<nav class="w3-container w3-left">
			<div class="row">
				<a href="index.html" target="_blank">
					<div class="column">
						<img src="images/logo_title.png" alt="Logo Mundial" class="myImg w3-left " width="25px">
					</div>
					<div class="column big-dev">
						<img src="images/logo_text.png" alt="Texto Logo" class="myImg w3-left" width="190px" style="padding-top:5px;">
					</div>
				</a>
			</div>
		</nav>
        <nav class="w3-sidebar w3-bar-block w3-card" id="mySidebar" style="background-color: rgb(212, 212, 212)">
            <div class="w3-container w3-theme-d2">
              <span onclick="closeSidebar()" class="w3-button w3-display-topright w3-large">X</span>
              <br>
            </div>
            <a class="w3-bar-item w3-button" href="#">Información reciente</a>
            <a class="w3-bar-item w3-button" href="#">Quiénes somos</a>
            <a class="w3-bar-item w3-button" href="accounts/login.html">Iniciar Sesión</a>
            <a class="w3-bar-item w3-button" href="accounts/signup.html">Registrarse</a>
            </nav>
            
		<ul class="w3-container w3-left big-dev">
			<li class="headerLink"><a href="#" style="text-decoration: none;"><b>Quiénes somos</b> </a> </li>
			<li class="headerLink"><a href="#" style="text-decoration: none;"><b>Información reciente</b> </a> </li>
		</ul>
		<div class="w3-container w3-right w3-animate-right big-dev" style="padding-top: 3px;">
			<a href="accounts/login.html"  id="loginBtn" class="w3-button w3-round-xlarge w3-border" style="color: #a52a2a !important; border-color:#a52a2a !important;"><b>Iniciar Sesión</a>
			<a href="accounts/signup.html" id="signupBtn" class="w3-button w3-red w3-round-xlarge" style="background-color: #a52a2a !important;">Registrarse</a>
            <?= $user ?>
		</div>
        <div class="column small-dev w3-right">
            <button class="w3-bar-item w3-button w3-xxxlarge w3-hover-theme" onclick="openSidebar()" style="font-size: 20px !important;">Menú</button>
        </div>
	</div>

	<div class="slideshow-container">
		<div class="mySlides fade img">
            <img src="images/pedri.jpg" style="width:100%">
            <div class="text">Pedri, España</div>
		</div>
		
		<div class="mySlides fade img">
            <img src="images/messi.jpg" style="width:100%">
            <div class="text">Lionel Messi, Argentina</div>
		</div>
		
		<div class="mySlides fade img">
            <img src="images/cristiano.jpg" style="width:100%">
            <div class="text">Cristiano Ronaldo, Portugal</div>
		</div>	

		<div class="mySlides fade img">
            <img src="images/debruyne.jpg" style="width:100%">
            <div class="text">Kevin De Bruyne, Inglaterra</div>
		</div>	
		
		<div class="mySlides fade img">
            <img src="images/suarez.jpg" style="width:100%">
            <div class="text">Luis Suárez, Uruguay</div>
		</div>	

		<div class="mySlides fade img">
            <img src="images/lewandoski.jpg" style="width:100%">
            <div class="text">Robert Lewandoski, Polonia</div>
		</div>	

		<div class="mySlides fade img">
            <img src="images/van_dijk.jpg" style="width:100%">
            <div class="text">Virgil van Dijk, Países Bajos</div>
		</div>	

		<div class="mySlides fade img">
            <img src="images/paqueta.jpg" style="width:100%">
            <div class="text">Lucas Paquetá, Brasil</div>
		</div>	

	</div> 

	<div class="w3-container">
		<div class="w3-card title-card" >
			<p class="bigtext" >EL MEJOR LUGAR PARA INFORMARTE Y CONSEGUIR TUS ENTRADAS</p>
		</div>
	</div>

	<div style="text-align:center">
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	</div>
	<script src="slider.js"></script>

    <section>
        <div class="flex-container">
            <div class="flex-item left-item">
                <div class="reveal fade-right feature-title">
                    <h1><b>Noticias</b></h1>
                </div>
                <div class="reveal fade-right-slow feature-text">
                    <p>Las ultimas novedades relacionadas al mundial de futbol 2022, todas en un mismo lugar. </p>
                </div>
                <div class="feature-text">
                    <a href="#" class="w3-button w3-red w3-round-xlarge" style="background-color: #a52a2a !important;">Acceder</a>
                </div>
            </div>
            <div style="margin-left:auto" class="flex-item right-item">
                <img src="images/001-news.png" style="float: right">
            </div>
        </div>

        <div style="background-color: rgb(25,25,25)"; class="flex-container">
            <div class="flex-item left-item">
                <img src="images/002-fixtures.png">
            </div>
            <div style="margin-left:auto" class="flex-item">
                <div class="reveal fade-left feature-title">
                    <h1><b>Fixture</b></h1>
                </div>
                <div class="reveal fade-left-slow feature-text">
                    <p>Mira los grupos y crea tus predicciones para los futuros partidos. </p>
                </div>
                <div class="feature-text">
                    <a href="#" class="w3-button w3-red w3-round-xlarge" style="background-color: #a52a2a !important;">Acceder</a>
                </div>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item left-item">
                <div class="reveal fade-right feature-title">
                    <h1><b>Entradas</b></h1>
                </div>
                <div class="reveal fade-right-slow feature-text">
                    <p>Adquiere por anticipado los boletos para los partidos, exclusivemente desde nuestra tienda digital </p>
                </div>
                <div class="feature-text">
                    <a href="#" class="w3-button w3-red w3-round-xlarge" style="background-color: #a52a2a !important;">Acceder</a>
                </div>
            </div>
            <div style="margin-left:auto" class="flex-item right-item">
                <img src="images/004-football-ticket.png" style="float: right">
            </div>
        </div>
    </section>


	<script type="text/javascript" src="scrollReveal.js"></script>
    <script>
        closeSidebar();
        function openSidebar() {
          document.getElementById("mySidebar").style.display = "block";
        }
        
        function closeSidebar() {
          document.getElementById("mySidebar").style.display = "none";
        }
    </script>

</body>




</html>