<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['user_name'])){
    $user = $_SESSION['user_name'];
}
?>
<html>
<meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="images/favicon.ico"/>
<head>
    <script src="jquery.js"></script>
    <script src="main.js"></script>
	<title>Qatar 2022</title>
	<link rel="shortcut icon" href="logo_title.png">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="scrollbar.css">
</head>
<body>
    <nav>
        <div style="margin-right: auto;">
            <img class="logo" src="images/logo_title.png" alt="Logo Mundial">
            <img class="logo-text" src="images/logo_text.png" alt="Texto Logo">
        </div>
        <span class="hamburger" id="hamburger">
            <i class="material-symbols-outlined">menu</i>
        </span>
        <ul class="nav__links" id="nav__links">
            <li><a href="#funciones">Funciones</a></li>
            <li><a href="#quienes-somos">Quienes somos</a></li>
            <li><a href="#contacto">Contacto</a></li>
            <li id="login-bt"><a href="accounts/login.html"><button class="login-bt" >Ingresar</button></a></li>
            <li id="my-acc"><a href="accounts/profile.php"><button class="login-bt" >Mi Cuenta</button></a></li>
        </ul>
    </nav>
    <section>
        <div class="slideshow-container">
            <div class="mySlides fade img">
                <img src="images/pedri.jpg" style="width:100%">
            </div>
            
            <div class="mySlides fade img">
                <img src="images/messi.jpg" style="width:100%">
            </div>
            
            <div class="mySlides fade img">
                <img src="images/cristiano.jpg" style="width:100%">
            </div>	

            <div class="mySlides fade img">
                <img src="images/debruyne.jpg" style="width:100%">
            </div>	
            
            <div class="mySlides fade img">
                <img src="images/suarez.jpg" style="width:100%">
            </div>	

            <div class="mySlides fade img">
                <img src="images/lewandoski.jpg" style="width:100%">
            </div>	

            <div class="mySlides fade img">
                <img src="images/van_dijk.jpg" style="width:100%">
            </div>	

            <div class="mySlides fade img">
                <img src="images/paqueta.jpg" style="width:100%">
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
    </section>

    <section style="padding-top: 30px" id="funciones">
        <div class="flex-container">
            <div class="flex-item left-item">
                <div class="reveal fade-right feature-title">
                    <h1><b>Noticias</b></h1>
                </div>
                <div class="reveal fade-right-slow feature-text">
                    <p>Las ultimas novedades relacionadas al mundial de futbol 2022, todas en un mismo lugar. </p>
                </div>
                <div class="feature-text">
                    <a href="#"><button>Acceder</button></a>
                </div>
            </div>
            <div style="margin-left:auto" class="flex-item right-item">
                <img src="images/001-news.png" style="float: right">
            </div>
        </div>

        <div style="background-color: var(--backcolor2)"; class="flex-container">
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
                    <a href="#"><button>Acceder</button></a>
                </div>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item left-item">
                <div class="reveal fade-right feature-title">
                    <h1><b>Entradas</b></h1>
                </div>
                <div class="reveal fade-right-slow feature-text">
                    <p>Adquiere por anticipado los boletos para los partidos, exclusivamente desde nuestra tienda digital </p>
                </div>
                <div class="feature-text">
                    <a href="#"><button>Acceder</button></a>
                </div>
            </div>
            <div style="margin-left:auto" class="flex-item right-item">
                <img src="images/004-football-ticket.png" style="float: right">
            </div>
        </div>
    </section>

    <hr>

    <section class="info-section" id="quienes-somos">
        <div>
            <h1 class="reveal fade-right-slow"><b>Quienes Somos</b></h1>
            <hr>
            <p class="reveal fade-right">
            Somos una organización sin fines de lucro que apunta a ser una fuente de información de excelencia acerca de la Copa Mundia de Fútbol Qatar 2022. Este proyecto, inicialmente promovido por cuatro estudiantes del Instituto Politécnico Superior, aspira a fomentar las actividades deportivas, lúdicas y sociales, consiguiendo generar un espacio propicio para cultivar y transmitir la pasión por este deporte emblemático, que nos hace tan argentinos.
Nosotros creemos que, si hay algo que nos define, es el compromiso. El compromiso por garantizar el acceso a información actualizada y verídica, obtenida a partir de fuentes certificadas y presentada de manera simple, clara y concisa.
            </p> 
        </div>
        <div>
            <img src="images/pet.png" alt="la'eeb">
        </div>
    </section>

    <footer class="contact" id="contacto">
        <ul>
            <li><a href="https://youtu.be/dQw4w9WgXcQ"><i class="fa fa-instagram"></i> Instagram</a></li>
            <li><a href="https://youtu.be/dQw4w9WgXcQ"><i class="fa fa-twitter"></i> Twitter</a></li>
            <li><a href="https://youtu.be/dQw4w9WgXcQ"><i class="fa fa-phone"></i> +54 9 341 696-9578</a></li>
        </ul>
    </footer>
    
</body>

</html>
