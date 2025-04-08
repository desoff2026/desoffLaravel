@extends('layouts.app')

@section('contend')

<!-- Formulario de Reporte -->
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <!-- Contenedor del formulario de reporte -->
        <h1 class="text-2xl font-bold mb-4">FORMULARIO DE REPORTE</h1>
        <!-- Título del formulario -->
        <p class="mb-6">POR FAVOR, COMPLETE EL FORMULARIO DE MANERA EXHAUSTIVA PARA ASEGURAR UN BUEN SEGUIMIENTO DE SU REPORTE.</p>
        <!-- Instrucciones para el usuario -->

        <form id="reportForm" action="https://formspree.io/f/mzzdkzkv" method="post" onsubmit="return reporte.guardarReporte()">
            <!-- Formulario con acción para enviar datos a Formspree -->
            <!-- Tipo de Desastre -->
            <div class="mb-6">
                <h2 class="font-bold mb-2">TIPO DE DESASTRE</h2>
                <!-- Subtítulo para la sección de tipo de desastre -->
                <div class="space-y-2">
                    <!-- Lista de opciones de tipo de desastre -->
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-black" name="disasterType" value="Incendio">
                        <span class="ml-2">Incendio</span>
                    </label>
                    <!-- Opción para incendio -->
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-black" name="disasterType" value="Derrumbe">
                        <span class="ml-2">Derrumbe</span>
                    </label>
                    <!-- Opción para derrumbe -->
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-black" name="disasterType" value="Avalancha">
                        <span class="ml-2">Avalancha</span>
                    </label>
                    <!-- Opción para avalancha -->
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-black" name="disasterType" value="Tormenta Eléctrica">
                        <span class="ml-2">Tormenta Eléctrica</span>
                    </label>
                    <!-- Opción para tormenta eléctrica -->
                </div>
            </div>

            <!-- Descripción del Reporte -->
            <div class="mb-6">
                <h2 class="font-bold mb-2">DESCRIPCIÓN DEL REPORTE</h2>
                <!-- Subtítulo para la sección de descripción -->
                <textarea id="descripcion" name="descripcion" rows="5" class="w-full border border-gray-300 p-2 rounded" placeholder="Describa el desastre"></textarea>
                <!-- Área de texto para la descripción del desastre -->
            </div>

            <!-- Ubicación del Reporte -->
            <div class="mb-6">
                <h2 class="font-bold mb-2">UBICACIÓN DEL REPORTE</h2>
                <!-- Subtítulo para la sección de ubicación -->
                <div class="space-y-2">
                    <!-- Opciones de ubicación -->
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-black" name="location" value="Mi ubicación actual">
                        <span class="ml-2">Mi ubicación actual</span>
                    </label>
                    <!-- Opción para usar la ubicación actual -->
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-black" name="location" value="Otra ubicación">
                        <span class="ml-2">Otra ubicación, ¿Cuál?</span>
                    </label>
                    <!-- Opción para especificar otra ubicación -->
                    <input type="text" class="w-full border border-gray-300 p-2 rounded" name="otherLocation" placeholder="Especificar otra ubicación">
                    <!-- Campo de texto para otra ubicación -->
                </div>
            </div>

            <!-- Botones para Agregar, Modificar y Eliminar -->
            <div class="mb-6">
                <button type="button" onclick="reporte.agregarRegistro()" class="bg-blue-500 text-white px-4 py-2 rounded mr-2">Agregar Registro</button>
                <!-- Botón para agregar registro -->
                <button type="button" onclick="reporte.modificarRegistro()" class="bg-yellow-500 text-white px-4 py-2 rounded mr-2">Modificar Registro</button>
                <!-- Botón para modificar registro -->
                <button type="button" onclick="reporte.eliminarRegistro()" class="bg-red-500 text-white px-4 py-2 rounded">Eliminar Registro</button>
                <!-- Botón para eliminar registro -->
            </div>

            <!-- Mostrar el registro actual -->
            <div class="mb-6">
                <h3 class="font-bold mb-2">Registro Actual</h3>
                <!-- Subtítulo para la sección de registro actual -->
                <p id="registro-container" class="text-gray-700">No hay registro.</p>
                <!-- Contenedor para mostrar el registro actual -->
            </div>

            <!-- Enviar Formulario -->
            <div class="mb-6">
                <input type="submit" value="GUARDAR REPORTE" class="bg-black text-white px-4 py-2 rounded cursor-pointer">
                <!-- Botón para enviar el formulario -->
            </div>
        </form>
    </div>
    @endsection