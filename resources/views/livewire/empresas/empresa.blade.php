<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Empresas') }}
                </h2>

                <!-- Botones a la derecha -->
                <div class="ml-4">
                    <button wire:click="create()" class="inline-flex items-center rounded-md @if ($vista == 'form') bg-indigo-700 text-white hover:bg-gray-50 hover:text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 @else bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 @endif px-4 py-2 text-sm font-semibold ">
                        Nueva Empresa
                    </button>
                </div>

            </div>
        </div>
    </header>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if ($vista == 'lista')
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">

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
                                    {{-- propietario_id
                                    nombre
                                    representante
                                    nit
                                    foto_nit
                                    foto_seprec
                                    foto_fundaempresa
                                    foto_cooperativa
                                    logo
                                    foto
                                    direccion
                                    telefono
                                    telefono2
                                    email
                                    estado --}}

                                    <th scope="col" class="px-6 py-3">ID</th>
                                    <th scope="col" class="px-6 py-3">EMPRESA</th>
                                    <th scope="col" class="px-6 py-3">REPRESENTANTE</th>
                                    <th scope="col" class="px-6 py-3">NIT</th>
                                    <th scope="col" class="px-6 py-3">DIRECCION</th>
                                    <th scope="col" class="px-6 py-3">TELEFONOS</th>
                                    {{-- <th scope="col" class="px-6 py-3">TELEFONO 2</th> --}}
                                    <th scope="col" class="px-6 py-3">EMAIL</th>
                                    <th scope="col" class="px-6 py-3">ESTADO</th>
                                    <th scope="col" class="px-6 py-3">PROPIETARIO</th>
                                    <th scope="col" class="px-6 py-3">ACCION </th>
                                </tr>
                            </thead>
                            <tbody class="class="text-xs ">
                                @foreach ($empresas as $item)
                                    <tr wire:key="{{ $item->id }}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->id }}
                                        </td>
                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->nombre }}
                                        </td>
                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->representante }}
                                        </td>
                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->nit }}
                                        </td>
                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->direccion }}
                                        </td>
                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->telefono }} <br> {{ $item->telefono2 }}
                                        </td>
                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->email }}
                                        </td>
                                        {{-- estado, switch para cambiar --}}
                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <div class="flex items-center justify-center">
                                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                                    <input wire:click="cambiarEstado({{ $item->id }})" type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer dark:bg-gray-800 dark:border-gray-600"/>
                                                    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer dark:bg-gray-600"></label>
                                                </div>
                                                <label for="toggle" class="text-xs text-gray-700 dark:text-gray-400">Activo</label>
                                            </div>
                                        </td>
                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->propietario?->name }}
                                        </td>

                                        <th class="px-6 py-4">
                                            {{-- @can('editar empresa') --}}
                                                <button wire:click="edit({{ $item->id }})" type="button" class="font-medium text-indigo-600 dark:text-indigo-500 hover:underline">
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
                        {{ $empresas->links() }}
                    </div>
                </div>
            @endif

            @if ($vista == 'form')
                {{-- FORM AQUI --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:space-y-0">
                    <div class="col-span-1">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                            <div class="flex items-center mt-3 mb-3 justify-between flex-column md:flex-row flex-wrap md:space-y-0">
                                <div>
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                        {{ __('Datos del propietario') }}
                                    </h2>
                                </div>
                            </div>


                            <div class="mt-4">
                                <x-label for="nacionalidad" value="{{ __('Nacionalidad') }}" />
                                <select wire:model="nacionalidad" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                    @foreach($paises as $pais)
                                        <option value="{{ $pais }}" >{{ $pais }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-4">
                                <x-label for="name" value="{{ __('Nombre completo') }}" />
                                <x-input wire:model="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
                            </div>

                            {{-- en dos columnas agregar tipo_documento y documento --}}
                            <div class="grid grid-cols-2 gap-4 mt-4">
                                <div>
                                    <x-label for="tipo_documento" value="{{ __('Tipo de documento') }}" />
                                    <select wire:model="tipo_documento" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                        <option value="CI" >CI</option>
                                        <option value="NIT" >NIT</option>
                                        <option value="PASAPORTE" >PASAPORTE</option>
                                        <option value="OTRO" >OTRO</option>
                                    </select>
                                </div>
                                <div>
                                    <x-label for="documento" value="{{ __('Documento') }}" />
                                    <x-input wire:model="documento" class="block mt-1 w-full" type="text" name="documento" required autofocus />
                                </div>
                            </div>

                            <div class="mt-4">
                                <x-label for="telefono" value="{{ __('Telefono') }}" />
                                <x-input wire:model="telefono" class="block mt-1 w-full" type="text" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input wire:model="email" class="block mt-1 w-full" type="email" required />
                            </div>

                            <div class="mt-4">
                                <x-label for="password" value="{{ __('Password') }}" />
                                <x-input wire:model="password" class="block mt-1 w-full" type="password" required autocomplete="new-password" />
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                            {{-- titulo  --}}
                            <div class="flex items-center mt-3 mb-3 justify-between flex-column md:flex-row flex-wrap md:space-y-0">
                                <div>
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                        {{ __('Datos de la empresa') }}
                                    </h2>
                                </div>
                            </div>

                            <div class="mt-4">
                                <x-label for="empresa" value="{{ __('Nombre de la empresa') }}" />
                                <x-input wire:model="empresa" class="block mt-1 w-full" type="text" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-label for="representante" value="{{ __('Representante') }}" />
                                <x-input wire:model="representante" class="block mt-1 w-full" type="text" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-label for="nit" value="{{ __('NIT') }}" />
                                <x-input wire:model="nit" class="block mt-1 w-full" type="text" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-label for="direccion" value="{{ __('Direccion') }}" />
                                <x-input wire:model="direccion" class="block mt-1 w-full" type="text" required autofocus />
                            </div>

                            <div class="grid grid-cols-2 gap-4 mt-4">
                                <div>
                                    <x-label for="telefono" value="{{ __('Telefono') }}" />
                                    <x-input wire:model="telefono" class="block mt-1 w-full" type="text" required autofocus />
                                </div>
                                <div>
                                    <x-label for="telefono2" value="{{ __('Telefono 2') }}" />
                                    <x-input wire:model="telefono2" class="block mt-1 w-full" type="text" required autofocus />
                                </div>
                            </div>

                            <div class="mt-4">
                                <x-label for="emailEmpresa" value="{{ __('Email de la empresa') }}" />
                                <x-input wire:model="emailEmpresa" class="block mt-1 w-full" type="text" required autofocus />
                            </div>

                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                            {{-- titulo  --}}
                            <div class="flex items-center mt-3 mb-3 justify-between flex-column md:flex-row flex-wrap md:space-y-0">
                                <div>
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                        {{ __('Documentos') }}
                                    </h2>
                                </div>
                            </div>

                            <div class="mt-4">
                                <x-label for="logo" value="{{ __('Logo') }}" />
                                <x-input wire:model="logo" class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-label for="foto" value="{{ __('Portada') }}" />
                                <x-input wire:model="foto" class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-label for="foto_nit" value="{{ __('Foto NIT') }}" />
                                <x-input wire:model="foto_nit" class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-label for="foto_seprec" value="{{ __('Foto SEPREC') }}" />
                                <x-input wire:model="foto_seprec" class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-label for="foto_fundaempresa" value="{{ __('Foto FUNDAEMPRESA') }}" />
                                <x-input wire:model="foto_fundaempresa" class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-label for="foto_cooperativa" value="{{ __('Foto Asociacion Cooperativa') }}" />
                                <x-input wire:model="foto_cooperativa" class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" required autofocus />
                            </div>

                        </div>
                    </div>
                </div>
            @endif


        </div>
    </div>


</div>
