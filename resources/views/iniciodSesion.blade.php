@extends('layouts.app')

@section('contend')

<!-- hola cara de   bola-->
<main class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Iniciar Sesión</h2>
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Correo Electrónico</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Correo Electrónico" disabled>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Contraseña</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Contraseña" disabled>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="role">Rol</label>
                    <div class="relative">
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="role" disabled>
                            <option value="comunidad">Comunidad</option>
                            <option value="entidad">Entidad</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Iniciar Sesión
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-600 hover:text-blue-800" href="#">
                        ¿Olvidaste tu contraseña?
                    </a>
                </div>
                <div class="mt-6 text-center">
                    <a href="https://accounts.google.com/AccountChooser/signinchooser?service=mail&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&flowName=GlifWebSignIn&flowEntry=AccountChooser&ec=asw-gmail-globalnav-signin&ddm=1"><button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="button">
                        <i class="fab fa-google mr-2"></i> Iniciar sesión con Google
                    </button></a>
                </div>
            </form>
        </div>
    </main>

    <!-- Modal de Términos y Condiciones -->
    <div id="terms-modal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-11/12 max-w-md text-center">
            <h2 class="text-xl font-bold mb-4">Términos y Condiciones</h2>
            <p class="text-sm mb-4">
                Al utilizar este servicio, aceptas los siguientes términos y condiciones:
                <ul class="list-disc list-inside text-left">
                    <li>1. El uso de este servicio es bajo tu propio riesgo.</li>
                    <li>2. No se permite el uso indebido de la plataforma.</li>
                    <li>3. Nos reservamos el derecho de modificar estos términos en cualquier momento.</li>
                    <li>4. Para más información, consulta nuestra política de privacidad.</li>
                </ul>
            </p>
            <div class="flex items-center justify-center mb-4">
                <input type="checkbox" id="terms-checkbox" class="mr-2">
                <label for="terms-checkbox" class="text-sm">Acepto los <a href="#" class="text-blue-600">Términos y Condiciones</a>.</label>
            </div>
            <button id="accept-terms" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded" disabled>Aceptar</button>
        </div>
    </div>
    @endsection