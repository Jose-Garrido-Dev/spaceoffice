<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/logo_admin.ico" type="image/x-icon">
    <link rel="stylesheet" href="./output.css">
    <link rel="stylesheet" href="./other.css">


  <!--LIGHTBOX PARA GALLERY-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css">





    <title>Landing Tailwind</title>
</head>
<body>
<div class="loader">
        <!-- Puedes personalizar el contenido del loader, como un spinner o un mensaje de carga -->
        <div class="spinner"></div>
        <p>Cargando...</p>
    </div>
    <div class="" id="hero">
    <?php
    require_once('./components/navbar.php');
    require_once('./components/hero.php');
    ?>
    </div>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-400">
    <div class="container" id="service">
    <?php
    require_once('./components/service.php');
    ?>
    </div>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-400">
    <div class="" id="service2">
    <?php
    require_once('./components/service2.php');
    ?>
    </div>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-400">
    <div class="" id="gallery">
    <?php
    require_once('./components/gallery.php');
    ?>
    </div>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-400">
    <div class="" id="contact">
    <?php
    require_once('./components/contact.php');
    ?>
    </div>

    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-400">

    <div class="">
    <?php
    require_once('./components/footer.php');
    ?>
    </div>



    <script src="../path/to/flowbite/dist/flowbite.min.js"></script> <!---Este codigo es de flowbite-->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
          const menuButton = document.querySelector("[data-collapse-toggle='navbar-sticky']");
          const navbar = document.getElementById("navbar-sticky");
        
          menuButton.addEventListener("click", function() {
            navbar.classList.toggle("hidden");
          });
        });
        </script>
    <!--loader-->
    <script>
    window.addEventListener('load', () => {
        // Cuando la página ha terminado de cargar, oculta el loader y muestra el contenido.
        const loader = document.querySelector('.loader');
        const content = document.querySelector('.content');

        loader.style.display = 'none';
        content.style.display = 'block';
    });
</script>

  <!--LIGHTBOX PARA GALLERY-->
<script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
<!-- component -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    });
});
</script>

  <!--pagination-->
  <script src="https://cdn.jsdelivr.net/npm/paginationjs@2.1.5/dist/pagination.min.js"></script>

<script>
  // Initialization for ES Users
import {
  Collapse,
  initTE,
} from "tw-elements";

initTE({ Collapse });
</script>

<!--Incluyendo jquery-->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- paginacion galeria -->

<script>
$(document).ready(function() {
    let allVisible = false;
    const maxGroups = 3;  // Cambia esto al número total de grupos que tengas

    // Función para mostrar u ocultar todas las imágenes
    function toggleAllImages() {
        for (let i = 1; i <= maxGroups; i++) {
            $(`.image-group-${i}`).toggle();
        }
    }

    // Botón "Cargar Todas" y su evento click
    $('#load-more').on('click', function() {
        if (!allVisible) {
            toggleAllImages();
            $('#load-more').text('Ocultar');
        } else {
            toggleAllImages();
            $('#load-more').text('Cargar Todas');
        }
        allVisible = !allVisible;
    });

    // Oculta todas las imágenes excepto el primer grupo al cargar la página
    for (let i = 2; i <= maxGroups; i++) {
        $(`.image-group-${i}`).hide();
    }
});
</script>

<!--paginacion de scroll-->
<script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuLinks = document.querySelectorAll(".menu-link");

            menuLinks.forEach(link => {
                link.addEventListener("click", function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute("data-target");
                    const targetSection = document.getElementById(targetId);

                    if (targetSection) {
                        window.scrollTo({
                            top: targetSection.offsetTop - document.querySelector('nav').offsetHeight,
                            behavior: "smooth",
                            duration: 2000 // Duración en milisegundos (1 segundo en este caso)
                        });
                    }
                });
            });
        });
    </script>


<!--flowbite-->

<script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
    
</body>
</html>

</body>
</html>