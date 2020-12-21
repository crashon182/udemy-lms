

<x-app-layout>

    <!-- Portada-->
    <section class="bg-cover" style="background-image: url({{asset('img/home/people.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Academia Web, Tu mejor Aliado en Capacitación</h1>
                <p class="text-white text-lg mt-2 mb-4">Capacitate en diferentes cursos de diseño web, desarrollo de videojuegos, diseño multimedia, diseño gráfico y logra avanzar en tu vida profesional</p>
                <!-- component -->
                <!-- This is an example component -->
            @livewire('search')
            </div>
        </div>

    </section>

    <!-- Seccion contenidos -->
    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">Contenido</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
    <article>
        <figure>
            <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/1.jpg')}}" alt="">
        </figure>
        <header class="mt-2">
            <h1 class="text-center text-xl text-gray-700">cursos y proyectos</h1>
        </header>
        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis enim laborum magni mollitia neque porro
            </p>
    </article>

        <article>
            <figure>
                <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/2.jpg')}}" alt="">
            </figure>
            <header class="mt-2">
                <h1 class="text-center text-xl text-gray-700">Blog</h1>
            </header>
            <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis enim laborum magni mollitia neque porro
            </p>
        </article>

        <article>
            <figure>
                <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/4.jpg')}}" alt="">
            </figure>
            <header class="mt-2">
                <h1 class="text-center text-xl text-gray-700">Plugins y templates</h1>
            </header>
            <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis enim laborum magni mollitia neque porro
            </p>
        </article>

        <article>
            <figure>
                <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/3.jpg')}}" alt="">
            </figure>
            <header class="mt-2">
                <h1 class="text-center text-xl text-gray-700">Recursos para diseñadores</h1>
            </header>
            <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis enim laborum magni mollitia neque porro
            </p>
        </article>
        </div>

    </section>
    <!-- Seccion background - catalogo de cursos -->
    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">¿Queres dar un paso más en tu vida profesional?</h1>
        <p class="text-center text-white">Dirígite a nuestro catálogo de cursos y aumenta tus skills</p>
        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Catálogo de Cursos
            </a>
        </div>
    </section>

    <!--Seccion Ultimos Cursos -->
    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">ÚLTIMOS CURSOS</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach($courses as $course)
                <x-course-card :course="$course" />

            @endforeach

        </div>

    </section>



</x-app-layout>
