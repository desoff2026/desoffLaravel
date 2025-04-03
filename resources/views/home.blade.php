<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESOFT - Sistemas de Información de Desastres</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Header -->
    <header class="bg-blue-600 text-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4">
            <div class="h-12" height="50" width="150">
                <!-- Logo placeholder -->
            </div>
            <div class="flex items-center">
                <button id="menu-toggle" class="md:hidden focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
                <nav id="menu" class="hidden md:flex space-x-4 ml-auto">
                    <a class="nav-link hover:bg-white hover:bg-opacity-20 transition duration-300 px-4 py-2 rounded" href="1-vista-home.html">HOME</a>
                    <a class="nav-link hover:bg-white hover:bg-opacity-20 transition duration-300 px-4 py-2 rounded" href="2-vista-nuestroProyecto.html">NUESTRO PROYECTO</a>
                    <a class="nav-link hover:bg-white hover:bg-opacity-20 transition duration-300 px-4 py-2 rounded" href="4-vista-formulario.html">REPORT ES</a>
                    <a class="nav-link hover:bg-white hover:bg-opacity-20 transition duration-300 px-4 py-2 rounded" href="5-vista-INFO-entidad.html">PORTAFOLIO</a>
                    <a class="nav-link hover:bg-white hover:bg-opacity-20 transition duration-300 px-4 py-2 rounded" href="http://www.proteccioncivil.gob.mx/work/models/ProteccionCivil/Resource/32/1/images/Formato3.pdf">SOLICITUD RECURSOS</a>
                    <a class="nav-link hover:bg-white hover:bg-opacity-20 transition duration-300 px-4 py-2 rounded" href="6-vista-equipo.html">ACERCA DE NOSOTROS</a>
                    <a class="nav-link hover:bg-white hover:bg-opacity-20 transition duration-300 px-4 py-2 rounded" href="8-vista-inicio-de-sesion.html">INICIAR SESIÓN</a>
                    <a class="nav-link hover:bg-white hover:bg-opacity-20 transition duration-300 px-4 py-2 rounded" href="8-vista-inicio-de-sesion.html"><i class="fas fa-user-circle"></i></a>
                </nav>
            </div>
        </div>
        <!-- Logo -->
        <div class="flex justify-center py-4">
            <img src="img/DESOFF-PROYECTO.png" alt="Logo DESOFT" class="logo">
        </div>
    </header>

    <!-- Menú desplegable para móviles -->
    <div id="mobile-menu" class="md:hidden bg-blue-600 text-white hidden">
        <nav class="flex flex-col space-y-2 p-4">
            <a class="nav-link hover:bg-white hover:bg-opacity-20 transition duration-300 px-4 py-2 rounded" href="1-vista-home.html">HOME</a>
            <a class="nav-link hover:bg-white hover:bg-opacity-20 transition duration-300 px-4 py-2 rounded" href="2-vista-nuestroProyecto.html">NUESTRO PROYECTO</a>
            <a class="nav-link hover:bg-white hover:bg-opacity-20 transition duration-300 px-4 py-2 rounded" href="4-vista-formulario.html">REPORTES</a>
            <a class="nav-link hover:bg-white hover:bg-opacity-20 transition duration-300 px-4 py-2 rounded" href="7-manual.html">PORTAFOLIO</a>
            <a class="nav-link hover:bg-white hover:bg-opacity-20 transition duration-300 px-4 py-2 rounded" href="http://www.proteccioncivil.gob.mx/work/models/ProteccionCivil/Resource/32/1/images/Formato3.pdf">SOLICITUD RECURSOS</a>
            <a class="nav-link hover:bg-white hover:bg-opacity-20 transition duration-300 px-4 py-2 rounded" href="6-vista-equipo.html">ACERCA DE NOSOTROS</a>
            <a class="nav-link hover:bg-white hover:bg-opacity-20 transition duration-300 px-4 py-2 rounded" href="8-vista-inicio-de-sesion.html">INICIAR SESIÓN</a>
            <a class="nav-link hover:bg-white hover:bg-opacity-20 transition duration-300 px-4 py-2 rounded" href="8-vista-inicio-de-sesion.html"><i class="fas fa-user-circle"></i></a>
        </nav>
    </div>

    <script>
        // Script para alternar el menú móvil
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
    <!-- Main Content -->
    <main class="bg-gray-100">
       
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-blue-600 text-sm font-bold">BIENVENIDOS A DESOFF</h1>
            <h2 class="text-4xl font-bold mt-2">SISTEMA DE INFORMACION</h2>
            <h2 class="text-4xl font-bold">PARA LA COMUNICACION</h2>
            <h2 class="text-4xl font-bold">DE DESASTRES NATURALES</h2>
            <p class="text-lg mt-4">Sistema digital que centraliza, procesa y difunde información crítica sobre desastres naturales para facilitar respuestas rápidas y coordinación efectiva.</p>

            <button class="bg-blue-600 text-white px-4 py-2 mt-6 font-bold">
                <a href="2-vista-nuestroProyecto.html" class="text-white">NUESTRO PROYECTO</a>
            </button>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
                <div class="bg-gray-800 text-white p-4">
                    <h3 class="text-xl font-bold">COMUNICACIÓN EFICIENTE DE DESASTRES NATURALES</h3>
                    <p class="mt-2">Sistema web para reportar, gestionar y notificar desastres entre comunidades y entidades territoriales.</p>
                    <i class="fas fa-arrow-right mt-4"></i>
                </div>
                <div class="bg-blue-600 text-white p-4">
                    <h3 class="text-xl font-bold">OPTIMIZACIÓN DE LA RESPUESTA INSTITUCIONAL</h3>
                    <p class="mt-2">Facilita validación, coordinación y gestión de emergencias por Bomberos, Defensa Civil y UNGRD.</p>
                    <i class="fas fa-arrow-right mt-4"></i>
                </div>
                <div class="bg-gray-800 text-white p-4">
                    <h3 class="text-xl font-bold">INNOVACIÓN EN GESTIÓN TECNOLÓGICA</h3>
                    <p class="mt-2">Provee una plataforma moderna y accesible para mejorar comunicación en el municipio de Morales Cauca.</p>
                    <i class="fas fa-arrow-right mt-4"></i>
                </div>
            </div>
        </div>
        <section class="container mx-auto py-8">
            <div class="relative">
                <img alt="Publicación del Muro" class="w-full" src="https://placehold.co/1200x400" />
                
                <h2 class="text-4xl font-bold text-black">PUBLICACION DEL MURO</h2>
                
                <div class="container mx-auto p-4">
                    <a href="3-vista-entidad.html"><h2 class="text-blue-500 font-bold text-lg mb-4">
                     PUBLICACIONES RECIENTES
                    </h2></a>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                     <!-- Card 1 -->
                     <div class="bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg">
                      <img alt="Image of a forest with a river" class="w-full h-48 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/UO3keFQL0A3jRST0UQQkb0BjRieFKNIbbpdekBf7XutGuctPB.jpg" width="600"/>
                      <div class="p-4">
                       <h3 class="font-bold text-xl mb-2">
                        DESASTRE EN LA ZONA......
                       </h3>
                       <p class="text-gray-400 text-sm">
                        MUESTRA EL EJEMPLO PARA LAS PUBLICACIONES DE LAS ENTIDADES GUBERNAMENTALES, SOLO ES PARA PROBAR
                       </p>
                      </div>
                      <div class="flex justify-between items-center p-4 border-t border-gray-700">
                       <i class="fas fa-thumbs-up">
                       </i>
                       <i class="fas fa-comment">
                       </i>
                      </div>
                     </div>
                     <!-- Card 2 -->
                     <div class="bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg">
                      <img alt="Image of a forest fire" class="w-full h-48 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/HCS8uLgfA2UqV6M4hc4u7fZEeWi2eXUwe1nCs6KgdATxb5afE.jpg" width="600"/>
                      <div class="p-4">
                       <h3 class="font-bold text-xl mb-2">
                        DESASTRE EN LA ZONA......
                       </h3>
                       <p class="text-gray-400 text-sm">
                        MUESTRA EL EJEMPLO PARA LAS PUBLICACIONES DE LAS ENTIDADES GUBERNAMENTALES, SOLO ES PARA PROBAR
                       </p>
                      </div>
                      <div class="flex justify-between items-center p-4 border-t border-gray-700">
                       <i class="fas fa-thumbs-up">
                       </i>
                       <i class="fas fa-comment">
                       </i>
                      </div>
                     </div>
                     <!-- Card 3 -->
                     <div class="bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg">
                      <img alt="Image of a person holding water" class="w-full h-48 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/ZXC1c7LeextbIUwUxynITrLM4KC0BhhY1cWG6C2o1YufWu2nA.jpg" width="600"/>
                      <div class="p-4">
                       <h3 class="font-bold text-xl mb-2">
                        DESASTRE EN LA ZONA......
                       </h3>
                       <p class="text-gray-400 text-sm">
                        MUESTRA EL EJEMPLO PARA LAS PUBLICACIONES DE LAS ENTIDADES GUBERNAMENTALES, SOLO ES PARA PROBAR
                       </p>
                      </div>
                      <div class="flex justify-between items-center p-4 border-t border-gray-700">
                       <i class="fas fa-thumbs-up">
                       </i>
                       <i class="fas fa-comment">
                       </i>
                      </div>
                     </div>
                   
                     
                    </div>
                   </div>
                  

            </div>
        </section>
        <section class="container mx-auto py-8">
            >
            <section class="container mx-auto py-8">
                <div class="container mx-auto p-4">
                    <div class="text-left mb-4">
                        <h2 class="text-blue-700 font-bold">REPORTES</h2>   
                        <h1 class="text-4xl font-bold">DESASTRES NATURALES</h1>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Tarjeta de Incendio -->
                        <a id="incendio-card" href="4-vista-formulario.html" class="bg-gray-800 text-white p-6 rounded-lg shadow-lg">
                            <div class="flex items-center mb-4">
                                <i class="fas fa-fire text-2xl"></i>
                                <h3 class="ml-2 text-xl font-bold">INCENDIO</h3>
                            </div>
                            <p>El sistema permite reportar incendios rápidamente, conectando comunidades con entidades para atención inmediata.</p>
                        </a>
            
                        <!-- Tarjeta de Avalancha -->
                        <a id="avalancha-card" href="4-vista-formulario.html" class="bg-blue-600 text-white p-6 rounded-lg shadow-lg">
                            <div class="flex items-center mb-4">
                                <i class="fas fa-mountain text-2xl"></i>
                                <h3 class="ml-2 text-xl font-bold">AVALANCHA</h3>
                            </div>
                            <p>Facilita el registro de avalanchas, notificando a las autoridades para evaluar daños y coordinar respuestas efectivas.</p>
                        </a>
            
                        <!-- Tarjeta de Tormenta Eléctrica -->
                        <a id="tormenta-card" href="4-vista-formulario.html" class="bg-blue-600 text-white p-6 rounded-lg shadow-lg">
                            <div class="flex items-center mb-4">
                                <i class="fas fa-bolt text-2xl"></i>
                                <h3 class="ml-2 text-xl font-bold">TORMENTA ELECTRICA</h3>
                            </div>
                            <p>Registra impactos de tormentas eléctricas, alertando a comunidades y entidades sobre riesgos y necesidades inmediatas.</p>
                        </a>
            
                        <!-- Tarjeta de Inundaciones -->
                        <a id="inundaciones-card" href="4-vista-formulario.html" class="bg-gray-800 text-white p-6 rounded-lg shadow-lg">
                            <div class="flex items-center mb-4">
                                <i class="fas fa-water text-2xl"></i>
                                <h3 class="ml-2 text-xl font-bold">INUNDACIONES</h3>
                            </div>
                            <p>Permite informar sobre inundaciones, gestionando solicitudes de recursos y alertas para mitigar riesgos en Morales Cauca.</p>
                        </a>
                    </div>
                </div>
            </section>
            
            </div>
       
           
            <div class="container mx-auto p-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                 <div class="flex flex-col justify-center">
                    <h2 class="text-blue-700 font-bold">ENTIDADES</h2>
                  <h1 class="text-4xl font-bold mt-2">
                   GESTIÓN INTEGRAL DE EMERGENCIAS CON ENTIDADES TERRITORIALES
                  </h1>
                  <p class="text-gray-600 mt-4">
                   Bomberos, Defensa Civil y UNGRD validan reportes, coordinan respuestas y emiten notificaciones para garantizar atención eficiente en desastres naturales en Morales Cauca.
                  </p>

                  <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded mt-6 w-32"><a href="7-manual.html">PORTAFOLIO</a>
                   
                  </button>
                  
                 </div>
                 <div class="relative">
                  <img alt="Firefighter in action" class="w-full h-auto" height="400" src="img/d1.jpeg" width="600"/>
                  <img alt="Civil Defense team in action" class="w-full h-auto mt-4" height="400" src="img/d3.jpg" width="600"/>
                  <div class="absolute inset-0 flex items-center justify-center">
                   <img alt="UNGRD logo" class="w-3/4 h-auto" height="150" src="img/d2.jpg" width="300"/>
                  </div>
                 </div>
                </div>
               </div>
        <section class="container mx-auto py-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-gray-800 text-white p-4">
                    <h4 class="font-bold">DESCARGA DEL FORMULARIO DE SOLICITUD DE RECURSOS</h4>
                    <p>Si has sufrido pérdidas debido a un desastre natural, aquí puedes descargar el formulario para solicitar recursos. Completa los datos requeridos y asegúrate de incluir toda la información necesaria para agilizar el proceso </p>
                    <a href="http://www.proteccioncivil.gob.mx/work/models/ProteccionCivil/Resource/32/1/images/Formato3.pdf" target="_blank">
                        <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded mt-6 w-32">
                            DESCARGAR
                        </button>
                    </a>
                    </DIv>
                <div class="bg-gray-800 text-white p-4">
                    <h4 class="font-bold">ENVÍA TU FORMULARIO DILIGENCIADO PARA REVISIÓN</h4>
                    <p>Una vez que hayas completado el formulario, envíalo directamente a la Alcaldía para su revisión y validación. Solo haz clic en el botón a continuación y adjunta tu formulario.</p>
                    <a href="https://www.morales-cauca.gov.co/" target="_blank">
                        <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded mt-6 w-32">
                            ENVIAR
                        </button>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <div class="w-full bg-white flex flex-col items-center p-8">
        <div class="flex justify-center space-x-4 mb-8">
            <img src="img/ungn.png" alt="Icono UNGN" class="w-16 h-16">
            <img src="img/defensa civil.png" alt="Icono Defensa Civil" class="w-16 h-16">
            <img src="img/bombe.png" alt="Icono Bomberos" class="w-16 h-16">
        </div>
    </div>       
    <!-- Call to Action -->
    <section class="bg-blue-600 text-white py-12">
        <div class="container mx-auto flex flex-col md:flex-row">
            <!-- Columna de Texto y Botón -->
            <div class="w-full flex flex-col items-center justify-center text-center p-8 bg-blue-600">
                <h2 class="text-2xl font-bold">
                    ¡CONECTATE CON NOSOTROS Y TRANSFORMA LA FORMA EN QUE GESTIONAS EMERGENCIAS! TU SOLUCIÓN ESTÁ A UN CLIC DE DISTANCIA.
                </h2>
                <button class="mt-8 bg-black text-white py-2 px-4 rounded"><a href="6-vista-equipo.html">CONTACTANOS</a>
                    
                </button>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-black text-white py-12">
        <div class="container mx-auto flex flex-wrap justify-between">
            <div class="w-full md:w-1/3 p-4">
                <h3 class="font-bold">INFORMATION</h3>
                <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                <div class="flex space-x-4 mt-4">
                    <a class="text-white" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="text-white" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="text-white" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="text-white" href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-4">
                <h3 class="font-bold">NAVIGATION</h3>
                <ul class="mt-4 space-y-2">
                    <li><a class="hover:underline" href="1-vista-home.html">Home</a></li>
                    <li><a class="hover:underline" href="2-vista-nuestroProyecto.html">nuetro proyecto</a></li>
                    <li><a class="hover:underline" href="4-vista-formulario.html">Reporte</a></li>
                    <li><a class="hover:underline" href="5-vista-INFO-entidad.html">portafolio</a></li>
                    <li><a class="hover:underline" href="6-vista-equipo.html">acerca de nosotros</a></li>
                </ul>
            </div>
            <div class="w-full md:w-1/3 p-4">
                <h3 class="font-bold">CONTACT US</h3>
                <p class="mt-4">Lumbung Hidup East Java</p>
                <p class="mt-2">Hello@Homco.com</p>
                <input class="mt-4 p-2 w-full rounded" placeholder="Email Address" type="email"/>
                <button class="mt-4 bg-blue-600 text-white py-2 px-4 rounded">REGISTRATE</button>
            </div>
        </div>
    </footer>
    <script src="1vista.js" defer></script>
</body>
</html>
