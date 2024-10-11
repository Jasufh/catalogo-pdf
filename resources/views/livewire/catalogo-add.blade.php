<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-xl text-center uppercase mb-10">Catalogo {{ $catalogo->nombre }}</h1>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <form wire:submit="save">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-first-name">
                                Ingresa un modelo
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                type="text" wire:model="modelo">
                            <button type="submit"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Agregar
                            </button>
                        </form>
                    </div>
                    @if (session()->has('status'))
                        <div class="mt-4 bg-green-200 text-green-800 p-2 rounded">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (session()->has('error'))
                        <div class="mt-4 bg-red-200 text-red-800 p-2 rounded">
                            {{ session('error') }}
                        </div>
                    @endif
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Tipo</th>
                                <th class="px-4 py-2">Color</th>
                                <th class="px-4 py-2">Modelo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                            <tr>
                                <td class="border px-4 py-2">{{ $producto->tipo }}</td>
                                <td class="border px-4 py-2">{{ $producto->color }}</td>
                                <td class="border px-4 py-2">{{ $producto->modelo }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4 text-center">
                        <!-- Botón para generar PDF -->
                        <button wire:click="report"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5">
                            Generar Catálogo PDF
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
