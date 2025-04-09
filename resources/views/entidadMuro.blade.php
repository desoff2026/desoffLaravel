@extends('layouts.appEntidad')

@section('contend')
<div class="container mx-auto p-4">
    <header class="mb-8">
        <h1 class="text-sm text-blue-500 font-bold">INFORMACION Y PUBLICACIONn</h1>
        <h2 class="text-3xl font-bold mt-2">BIENVENIDO, PUBLICA INFORMACION RELEVANTE</h2>
        <p class="text-lg mt-4">Sistema digital que centraliza, procesa y difunde información crítica sobre desastres naturales para facilitar respuestas rápidas y coordinación efectiva.</p>
    </header>
    <section>
        <h3 class="text-sm text-blue-500 font-bold mb-4">PUBLICAR</h3>
        <div class="flex flex-col items-center">
            <div class="flex items-center mb-4 w-full justify-start">
                <i class="fas fa-user-circle text-3xl mr-2"></i>
                <span class="text-lg font-bold">ENTIDAD</span>
            </div>
            <div class="flex items-start w-full max-w-4xl justify-between">
                <div class="w-1/2 flex flex-col items-center">
                    <div class="w-64 h-48 bg-gray-200 flex items-center justify-center mb-4">
                        <img alt="Icono de subida de imagen" class="w-16 h-16" id="imagePreview" src="https://placehold.co/100x100" />
                    </div>
                    <input accept="image/*" class="hidden" id="imageInput" onchange="Publicacion.previewImage(event)" type="file"/>
                    <label class="cursor-pointer bg-blue-500 text-white py-2 px-4" for="imageInput">Subir Imagen</label>
                </div>
                <div class="w-1/2 pl-8">
                    <div class="mb-4">
                        <label class="block text-left font-bold mb-2" for="title">AGREGAR TITULO:</label>
                        <input class="w-full border border-gray-300 p-2" id="title" placeholder="TITULO" type="text"/>
                    </div>
                    <div class="mb-4">
                        <label class="block text-left font-bold mb-2" for="description">AGREGAR DESCRIPCIÓN:</label>
                        <textarea class="w-full border border-gray-300 p-2" id="description" placeholder="AGREGAR DESCRIPCION"></textarea>
                    </div>
                    <button class="bg-black text-white py-2 px-4" onclick="publicacion.addPost()">PUBLICAR</button>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="container mx-auto py-8">
    <div class="relative">
        <h2 class="text-4xl font-bold text-black">PUBLICACION DEL MURO</h2>
        <div class="container mx-auto p-4" id="post-container">
            <!-- Aquí se agregarán las publicaciones dinámicamente -->
        </div>
    </div>
</section>

<section class="bg-blue-600 text-white py-12">
    <div class="container mx-auto flex flex-col md:flex-row">
        <div class="w-full flex flex-col items-center justify-center text-center p-8 bg-blue-600">
            <h2 class="text-2xl font-bold">
                ¡CONECTATE CON NOSOTROS Y TRANSFORMA LA FORMA EN QUE GESTIONAS EMERGENCIAS! TU SOLUCIÓN ESTÁ A UN CLIC DE DISTANCIA.
            </h2>
            <button class="mt-8 bg-black text-white py-2 px-4 rounded"><a href="6-vista-equipo.html">CONTACTANOS</a></button>
        </div>
    </div>
</section>
@endsection