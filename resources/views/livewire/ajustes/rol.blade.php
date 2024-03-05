<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="m-5 bg-white dark:bg-gray-900 antialiased">

        @if ($vista == 'lista')
            <div class=" sm:rounded-lg">

                <div class="flex items-center justify-between flex-column md:flex-row flex-wrap md:space-y-0 py-4 bg-white dark:bg-gray-900">
                    <div>
                        <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-white">Roles</h3>
                    </div>
                    <div class="flex items-center justify-between flex-column md:flex-row flex-wrap md:space-y-0">
                        {{-- @can('crear rol') --}}
                            <button wire:click="crear()" type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white
                                                                            bg-blue-600 border border-transparent rounded-md shadow-sm dark:bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Crear Rol
                            </button>
                        {{-- @endcan --}}
                    </div>
                </div>


                <div class="flex items-center justify-between flex-column md:flex-row flex-wrap md:space-y-0 py-4 bg-white dark:bg-gray-900">
                    <div>
                        <select wire:model.change="perPage" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            <option selected value="5">Mostrar 5</option>
                            <option value="10">Mostrar 10</option>
                            <option value="25">Mostrar 25</option>
                            <option value="50">Mostrar 50</option>
                            <option value="100">Mostrar 100</option>
                        </select>
                    </div>
                    <label for="table-search" class="sr-only">Buscar</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="text" wire:model.live="search" style="padding-left: 2rem !important;" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar..."/>
                    </div>
                </div>

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right">
                        <thead class="text-sm items-center text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">ID</th>
                                <th scope="col" class="px-6 py-3">ROL</th>
                                <th scope="col" class="px-6 py-3">PERMISOS</th>
                                <th scope="col" class="px-6 py-3">ACCION </th>
                            </tr>
                        </thead>
                        <tbody class="class="text-xs ">
                            @foreach ($roles as $item)
                                <tr wire:key="{{ $item->id }}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->id }}
                                    </td>
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->name }}
                                    </td>
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <small>
                                            @foreach ($item->permissions as $permiso)
                                                <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-600/20">{{ $permiso->name }}</span>
                                            @endforeach
                                        </small>
                                    </td>
                                    <th class="px-6 py-4">
                                        {{-- @can('editar rol') --}}
                                            <button wire:click="editar({{ $item->id }})" type="button" class="font-medium text-indigo-600 dark:text-indigo-500 hover:underline">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600 dark:text-blue-500">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                            </button>
                                        {{-- @endcan --}}
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    {{ $roles->links() }}
                </div>
            </div>
        @endif

        @if ($vista == 'form')
            <div class=" sm:rounded-lg">
                <div class="flex items-center justify-between flex-column md:flex-row flex-wrap md:space-y-0 py-4 bg-white dark:bg-gray-900">
                    <div>
                        <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-white">Datos del Rol</h3>
                    </div>
                    <div class="flex items-center justify-between flex-column md:flex-row flex-wrap md:space-y-0">
                        {{-- @can('crear rol') --}}
                            <button wire:click="cancelar()" type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white
                                                                            bg-blue-600 border border-transparent rounded-md shadow-sm dark:bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Listar
                            </button>
                        {{-- @endcan --}}
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2">
                    <div class="mt-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Nombre del Rol</label>
                        <input wire:model="name" type="text" id="name" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Permisos</label>
                        <div class="grid grid-cols-1 gap-4 mt-2 sm:grid-cols-2">
                            @foreach ($permisos as $permiso)
                                <div class="flex items-center">
                                    <input wire:model="seleccionados" type="checkbox" value="{{ $permiso->name }}" @if(in_array($permiso->name, $seleccionados)) checked @endif class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <label for="comments" class="ml-2 block text-sm text-gray-900 dark:text-white">{{ $permiso->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- boton de guardar --}}
                    <div class="mt-4">

                        @if ($rol_id > 0)
                            <button wire:click="actualizar()" type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white
                                                    bg-blue-600 border border-transparent rounded-md shadow-sm dark:bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Actualizar
                            </button>
                        @else
                            <button wire:click="guardar()" type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white
                                                                            bg-blue-600 border border-transparent rounded-md shadow-sm dark:bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Guardar
                            </button>
                        @endif

                    </div>
                </div>
            </div>
        @endif

    </div>



</div>
