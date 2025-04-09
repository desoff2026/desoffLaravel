@extends('layouts.app')

@section('contend')
<!-- Propósito del Grupo -->
<section class="text-center py-12 bg-white">
        <h2 class="text-3xl font-bold">PROPÓSITO DE LAS ENTIDADES TERRITORIALES</h2>
        <div class="container mx-auto flex flex-col md:flex-row justify-around mt-8">
            <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <h3 class="text-blue-600 font-bold">MORALES-CAUCA</h3>
                <p class="text-gray-700 mt-4">
                    Las entidades territoriales son responsables de gestionar desastres a través de la prevención, respuesta y recuperación. Esto implica identificar riesgos, coordinar acciones de emergencia, implementar alertas tempranas y proporcionar asistencia a las comunidades afectadas. Además, fomentan la cultura de prevención y la preparación de la población para mitigar los impactos sociales, económicos y ambientales de los desastres.
                </p>
            </div>
        </div>
    </section>

    <!-- seccion con entidades territoriales -->
    <section class="bg-white py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold">ENTIDADES TERRITORIALES INTEGRADAS EN DESOFF</h2>
            <div class="flex flex-wrap justify-center mt-8">
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 p-4">
                    <div class="bg-white p-4 shadow-lg hover:shadow-xl transition-shadow duration-300 developer-card cursor-pointer"  >
                        <a href="https://portal.gestiondelriesgo.gov.co" target="_blank">
                            <img alt="ENTIDAD TERRITORIAL" class="w-full h-70 object-cover cursor-pointer" src="img/ungn.png"/>
                        </a>
                        <a href="https://portal.gestiondelriesgo.gov.co" class="mt-2 bg-black text-white py-2 px-4 rounded inline-block">
                            Gestion riesgo
                        </a>
                        <p class="text-gray-700">ENTIDAD TERRITORIAL</p>
                        
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 p-4">
                    <div class="bg-white p-4 shadow-lg hover:shadow-xl transition-shadow duration-300 developer-card cursor-pointer" >
                        <a href="https://anterior.cauca.gov.co/etiquetas/bombero" target="_blank">
                            <img alt="ENTIDAD TERRITORIAL" class="w-full h-70 object-cover cursor-pointer" src="img/bombe.png"/>
                        </a>
                        <a href="https://anterior.cauca.gov.co/etiquetas/bombero" class="mt-2 bg-black text-white py-2 px-4 rounded inline-block">
                            Bomberos
                        </a>
                        <p class="text-gray-700">ENTIDAD TERRITORIAL</p>
                        

                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 p-4">
                    <div class="bg-white p-4 shadow-lg hover:shadow-xl transition-shadow duration-100 developer-card cursor-pointer">
                        <a href="https://www.defensacivil.gov.co/nuestra-institucion-1/seccionales/cauca" target="_blank">
                            <img alt="ENTIDAD TERRITORIAL" class="w-full h-70 object-cover cursor-pointer" src="img/defensa civil.png"/>
                        </a>                        
                    <a href="https://www.defensacivil.gov.co/nuestra-institucion-1/seccionales/cauca" class="mt-2 bg-black text-white py-2 px-4 rounded inline-block">
                        Defensa civil
                    </a>
                        <p class="text-gray-700">ENTIDADTERRITORIAL</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div id="infoModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white p-6 rounded shadow-lg">
            <h3 id="modalTitle" class="text-xl font-bold"></h3>
            <p id="modalContent" class="mt-2 text-gray-700"></p>
            <button onclick="App.closeModal()" class="mt-4 bg-blue-600 text-white py-2 px-4 rounded">Cerrar</button>
        </div>
    </div>

    

<!-- Razón del Grupo -->
<section class="text-center py-12 bg-white">
    <h2 class="text-3xl font-bold">Políticas locales de gestión del riesgo.</h2>
    <div class="container mx-auto mt-8">
        <div>
            <p class="text-gray-700 mt-4">
                <a href="https://portal.gestiondelriesgo.gov.co/Documents/Lineamientos-Int/Politicas-administracion-riesgos.pdf" class="mt-2 bg-black text-white py-2 px-4 rounded inline-block">
                    POLITICAS
                </a>
            </p>
        </div>
    </div>
    
    <h2 class="text-3xl font-bold mt-12">Planes de emergencia y contingencia actualizados.</h2>
    
    <div class="container mx-auto mt-8">
        <div>
            <p class="text-gray-700 mt-4">
                <a href="https://repositorio.gestiondelriesgo.gov.co/bitstream/handle/20.500.11762/20349/Planes%20de%20emergencias%20y%20Contingencias.PDF?sequence=1&isAllowed=y" class="mt-4 bg-black text-white py-2 px-4 rounded inline-block">
                    PLANES
                </a>
            </p>
        </div>
    </div>
</section>
        <div class="w-full bg-white flex flex-col items-center p-8">
            <div class="flex justify-center space-x-4 mb-8">
                <img src="img/ungn.png" alt="Icono UNGN" class="w-16 h-16">
                <img src="img/defensa civil.png" alt="Icono Defensa Civil" class="w-16 h-16">
                <img src="img/bombe.png" alt="Icono Bomberos" class="w-16 h-16">
            </div>
        </div>       
    


    <section class="p-10 bg-gray-50">
        <h2 class="text-3xl font-bold text-center text-blue-700 mb-6">TESTIMONIOS</h2>
        
        <!-- Contenedor donde se mostrarán los testimonios agregados -->
        <div id="contenedorTestimonios" class="space-y-6"></div>
        
        <div class="flex justify-center space-x-4 mt-6">
            <h2 class="text-2xl font-bold">
                Nos ayudarías a recaudar información sobre las entidades mencionadas. 
                Agrega tu testimonio si han atendido eventualidades previas ya sea con éxito o sin respuesta.
            </h2>
        </div>
    
        <!-- Entradas de texto para agregar un testimonio y el nombre del autor -->
        <div class="flex justify-center space-x-2 mt-4">
            <input type="text" id="inputTestimonio" class="border p-2 rounded-lg w-1/2" placeholder="Escribe tu testimonio aquí...">
            <input type="text" id="autorTestimonio" class="border p-2 rounded-lg w-1/4" placeholder="Tu nombre (opcional)">
        </div>
    
        <!-- Botones para agregar, modificar y eliminar testimonios -->
        <div class="flex justify-center space-x-4 mt-4">
            <button class="bg-blue-700 text-white px-6 py-2 rounded-lg shadow-md hover:bg-blue-800 transition" onclick="app.agregarTestimonio()">Agregar Testimonio</button>
            <button class="bg-gray-600 text-white px-6 py-2 rounded-lg shadow-md hover:bg-gray-700 transition" onclick="app.modificarTestimonio()">Modificar Testimonio</button>
            <button class="bg-red-600 text-white px-6 py-2 rounded-lg shadow-md hover:bg-red-700 transition" onclick="app.eliminarTestimonio()">Eliminar Testimonio</button>
        </div>
    
        <!-- Campo de entrada para escribir el ID del testimonio a modificar/eliminar -->
        <div class="flex justify-center space-x-2 mt-4">
            <input type="number" id="idTestimonio" class="border p-2 rounded-lg w-1/4" placeholder="ID del testimonio a modificar/eliminar">
        </div>
    </section>
    

    <section class="bg-blue-600 text-white py-12">
    <div class="container mx-auto flex flex-col md:flex-row">
        <!-- Columna de Logos -->
        
        <!-- Columna de Texto y Botón -->
        <div class="w-full flex flex-col items-center justify-center text-center p-8 bg-blue-600">
            <h2 class="text-2xl font-bold">
                ¡CONECTATE CON NOSOTROS Y TRANSFORMA LA FORMA EN QUE GESTIONAS EMERGENCIAS! TU SOLUCIÓN ESTÁ A UN CLIC DE DISTANCIA.
            </h2>
            <button class="mt-8 bg-black text-white py-2 px-4 rounded"><a href="6-vista-equipo.html">CONTACTANOS</a>
        </div>
    </div>
</section>
@endsection
