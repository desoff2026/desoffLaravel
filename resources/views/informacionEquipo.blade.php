@extends('layouts.app')

@section('contend')

<!-- Proposito del grupo -->
<section class="p-10"> <!-- Seccion para la mision y vision del grupo -->
  <h2 class="text-3xl font-bold text-center mb-6">PROPOSITO DEL GRUPO</h2>
  <div class="grid grid-cols-2 gap-10"> <!-- Division en dos columnas -->
    <div>
      <h3 class="text-blue-600 font-bold">MISION</h3>
      <p>Como desarrolladores nuestra mision es aprovechar los conocimientos y habilidades que tenemos para desarrollar soluciones tecnologicas innovadoras que respondan a las necesidades reales de las comunidades</p>
    </div>
    <div>
      <h3 class="text-blue-600 font-bold">VISION</h3>
      <p>Ser reconocidos como un equipo de desarrolladores lideres en la creacion de sistemas de informacion efectivos que contribuyan al desarrollo sostenible y la seguridad en las comunidades</p>
    </div>
  </div>
</section>

<!-- Seccion del equipo de trabajo -->
<section class="p-10 bg-gray-200"> <!-- Seccion para mostrar los miembros del equipo -->
  <h2 class="text-3xl font-bold text-center mb-6">EQUIPO DE TRABAJO</h2>
  <div class="grid grid-cols-3 gap-6"> <!-- Division en tres columnas -->
    <div class="bg-white shadow-lg"> <!-- Tarjeta de miembro del equipo -->
      <div class="h-64 bg-gray-300"></div> <!-- Espacio para la imagen del miembro -->
      <div class="p-4">
        <p class="text-xs text-gray-500">DESARROLLADORA FULL STACK</p>
        <h3 class="font-bold">ALBA MICHELLE JIMENEZ MORALES</h3>
      </div>
    </div>
    <div class="bg-white shadow-lg">
      <div class="h-64 bg-gray-300"></div>
      <div class="p-4 bg-black text-white">
        <p class="text-xs">DESARROLLADORA FULL STACK</p>
        <h3 class="font-bold">CARMEN ADRIANA MORENO CASTILLO</h3>
      </div>
    </div>
    <div class="bg-white shadow-lg">
      <div class="h-64 bg-gray-300"></div>
      <div class="p-4">
        <p class="text-xs text-gray-500">DESARROLLADOR FULL STACK</p>
        <h3 class="font-bold">DAVID ALEXANDER MARTINEZ LOPEZ</h3>
      </div>
    </div>
  </div>
  <div class="grid grid-cols-3 gap-6"> <!-- Division en tres columnas -->
    <div class="bg-white shadow-lg">
        <div class="h-64 bg-gray-300"></div>
        <div class="p-4 bg-black text-white">
          <p class="text-xs">DESARROLLADORA FULL STACK</p>
          <h3 class="font-bold">JAIRO ENRIQUE MONTES JOJOA</h3>
        </div>
      </div>
      <div class="bg-white shadow-lg">
        <div class="h-64 bg-gray-300"></div>
        <div class="p-4">
          <p class="text-xs text-gray-500">DESARROLLADOR FULL STACK</p>
          <h3 class="font-bold">KEVIN ALEJANDRO PEÑA RAMÍREZ</h3>
        </div>
      </div>
    <div class="bg-white shadow-lg">
        <div class="h-64 bg-gray-300"></div>
        <div class="p-4 bg-black text-white">
          <p class="text-xs">DESARROLLADORA FULL STACK</p>
          <h3 class="font-bold">LUIS MIGUEL TAO ACHICUE
            
          </h3>
        </div>
      </div>
  </div>
</section>

<section class="p-10 bg-gray-50">
    <h2 class="text-3xl font-bold text-center text-blue-700 mb-6">TESTIMONIOS</h2>
    <div id="contenedorTestimonios" class="space-y-6"></div>
    
    <div class="flex justify-center space-x-4 mt-6">
      <button class="bg-blue-700 text-white px-6 py-2 rounded-lg shadow-md hover:bg-blue-800 transition" onclick="agregarTestimonio()">Agregar Testimonio</button>
      <button class="bg-gray-600 text-white px-6 py-2 rounded-lg shadow-md hover:bg-gray-700 transition" onclick="modificarTestimonio()">Modificar Testimonio</button>
      <button class="bg-red-600 text-white px-6 py-2 rounded-lg shadow-md hover:bg-red-700 transition" onclick="eliminarTestimonio()">Eliminar Testimonio</button>
    </div>
  </section>

@endsection