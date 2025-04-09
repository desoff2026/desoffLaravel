@extends('layouts.app')

@section('contend')
        <!-- DEJO PENDIENTE LAS RUTAS PARA ESTA Y LAS VISTAS PROXIMAS -->
    <!-- Main Content -->
    <div class="container mx-auto p-4">
        <!-- Misión y Visión -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-gray-800 text-white p-6 rounded-lg card">
                <h2 class="text-2xl font-bold mb-4">MISIÓN</h2>
                <p>Nuestro propósito es ser una herramienta que maneja la diferencia en momentos críticos. Queremos facilitar la comunicación entre las comunidades y las entidades que las protegen, entregando una solución que respeta el uso de desastres natural hacia la dirección que merece, ayudando a salvar vidas y mitigar pérdidas.</p>
            </div>
            <div class="bg-gray-800 text-white p-6 rounded-lg card">
                <h2 class="text-2xl font-bold mb-4">VISIÓN</h2>
                <p>Soñamos con un futuro en el que ninguna emergencia quede sin respuesta. Aspiramos a construir un mundo donde las entidades territoriales y las comunidades estén perfectamente conectadas, actuando con rapidez y eficiencia en la gestión de desastres, minimizando el impacto y salvando vidas.</p>
            </div>
        </div>

        <!-- Descripción de DESOFF -->
        <div class="mt-8 text-center">
            <h2 class="text-2xl font-bold mb-4">DESCRIPCIÓN DE DESOFF</h2>
            <p class="mb-4">DESOFF no es solo una herramienta, es la solución que revoluciona cómo enfrentamos los desastres naturales. Diseñado para optimizar la comunicación y la gestión de emergencias, DESOFF conecta comunidades y entidades territoriales de manera eficiente, permitiendo actuar con rapidez cuando más importa.</p>
            <p class="mb-4">Nuestro enfoque es claro: comunicación, minimizar riesgos y mejorar la respuesta ante emergencias. Con tecnología moderna, reportes inmediatos y notificaciones en tiempo real, DESOFF transforma la manera en que nos preparamos y actuamos para construir comunidades más seguras y preparadas.</p>
            <p>Haz de DESOFF la solución en la gestión de desastres. Juntos, podemos marcar la diferencia y avanzar hacia un mañana más seguro y conectado. ¡Conoce cómo podemos ayudarte!</p>
        </div>

        <!-- Transformamos el Caos en Acción -->
        <div class="mt-12 grid grid-cols-3 md:grid-cols-2 gap-4">
            <div class="text-center md:text-left">
                <h2 class="text-25x25 font-bold mb-4">¡TRANSFORMAMOS EL CAOS EN ACCIÓN!</h2>
                <p class="mb-4">En Morales, Cauca, la falta de herramientas modernas complicaba la gestión de emergencias. Hoy, gracias a la implementación de DESOFF, la comunidad está mejor preparada, logrando la comunicación efectiva y la respuesta rápida ante cualquier eventualidad.</p>
                <p>DESOFF ha permitido la creación de redes de apoyo, la coordinación de recursos y la reducción de riesgos, protegiendo vidas y propiedades. Este es solo un ejemplo de cómo DESOFF está transformando la gestión de desastres, protegiendo comunidades y salvando vidas.</p>
            </div>
            <div class="flex justify-center items-center">
                <img src="img/AX.png" alt="" class="rounded-lg"/>
            </div>
        </div>

        <!-- Cards -->
        <div class="flex flex-col md:flex-row justify-center items-center md:space-x-4 p-4 mt-8">
            <!-- Card 1 -->
            <div class="bg-gray-800 text-white p-6 flex-1 m-2 rounded-lg card">
                <h2 class="text-lg font-bold mb-2">COMUNICACIÓN EFICIENTE DE DESASTRES NATURALES</h2>
                <p class="mb-4">Sistema web para reportar, gestionar y notificar desastres entre comunidades y entidades territoriales.</p>
                <div class="text-white text-2xl">
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-blue-600 text-white p-6 flex-1 m-2 rounded-lg card">
                <h2 class="text-lg font-bold mb-2">OPTIMIZACIÓN DE LA RESPUESTA INSTITUCIONAL</h2>
                <p class="mb-4">Facilita validación, coordinación y gestión de emergencias por Bomberos, Defensa Civil y UNGRD.</p>
                <div class="text-white text-2xl">
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-gray-800 text-white p-6 flex-1 m-2 rounded-lg card">
                <h2 class="text-lg font-bold mb-2">INNOVACIÓN EN GESTIÓN TECNOLÓGICA</h2>
                <p class="mb-4">Provee una plataforma moderna y accesible para mejorar comunicación en el municipio de Morales Cauca.</p>
                <div class="text-white text-2xl">
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>

        <!-- Logos -->
        <div class="w-full bg-white flex flex-col items-center p-8">
            <div class="flex justify-center space-x-4 mb-8">
                <img src="img/ungn.png" alt="Icono UNGN" class="w-16 h-16">
                <img src="img/defensa civil.png" alt="Icono Defensa Civil" class="w-16 h-16">
                <img src="img/bombe.png" alt="Icono Bomberos" class="w-16 h-16">
            </div>
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
            </div>
        </div>
    </section>
@endsection