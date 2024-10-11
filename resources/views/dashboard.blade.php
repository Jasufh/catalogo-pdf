<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Catalogo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                   {{--  <a href="{{ route('generar.pdf') }}"
                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Generar
                        Catalogo</a> --}}

                    {{-- <a href="{{ route('catalogo.create') }}"
                        class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Crear
                        Catalogo</a> --}}

                    <!-- Botón para abrir el modal -->
                    <button id="openModal"
                        class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                        Crear Ctalogo
                    </button>

                    <!-- Modal -->
                    <div id="myModal"
                        class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
                        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                            <h2 class="text-2xl font-bold mb-4">Crear nuevo catalogo</h2>
                            <form action="{{ route('catalogo.store') }}" method="POST">
                                @csrf
                                <div class="flex flex-col justify-center mb-4">
                                    <label for="nombre">Ingresa nombre del catalogo</label>
                                    <input type="text" class="rounded-md" name="nombre">
                                </div>
                                <div class="flex justify-end">
                                    <button id="closeModal" type="button"
                                        class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 mr-2">
                                        Cancelar
                                    </button>
                                    <button type="submit"
                                        class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">
                                        Confirmar
                                    </button>
                                </div>


                            </form>

                        </div>
                    </div>
                    <h3 class="text-center text-xl"><strong>Lista de Catalogos</strong></h3>
                    @foreach ($catalogos as $catalogo)
                    <div class="flex items-center justify-between p-4 mb-4 border rounded-lg shadow-sm bg-white">
                        <p class="text-lg font-semibold text-gray-800">{{ $catalogo->nombre }}</p>
                        <a href="{{ route('catalogo.create', $catalogo->id) }}"
                           class="inline-block px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                           Ver
                        </a>
                    </div>
                    
                @endforeach


                    <script>
                        // Obtén los elementos
                        const openModal = document.getElementById('openModal');
                        const modal = document.getElementById('myModal');
                        const closeModal = document.getElementById('closeModal');

                        // Abre el modal
                        openModal.addEventListener('click', function() {
                            modal.classList.remove('hidden');
                        });

                        // Cierra el modal
                        closeModal.addEventListener('click', function() {
                            modal.classList.add('hidden');
                        });
                    </script>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
