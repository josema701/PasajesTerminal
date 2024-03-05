<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Ajustes') }}
                </h2>

                <!-- Botones a la derecha -->
                <div class="ml-4">
                    <button wire:click="verVista('roles')" class="inline-flex items-center rounded-md @if ($vistaAdmin == 'roles') bg-indigo-700 text-white hover:bg-gray-50 hover:text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 @else bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 @endif px-4 py-2 text-sm font-semibold ">
                        Roles
                    </button>
                    <button wire:click="verVista('permisos')" class="inline-flex items-center rounded-md @if ($vistaAdmin == 'permisos') bg-indigo-700 text-white hover:bg-gray-50 hover:text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 @else bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 @endif px-4 py-2 text-sm font-semibold ">
                        Permisos
                    </button>
                    {{-- <button wire:click="verVista('estados')" class="inline-flex items-center rounded-md @if ($vistaAdmin == 'estados') bg-indigo-700 text-white hover:bg-gray-50 hover:text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 @else bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 @endif px-4 py-2 text-sm font-semibold ">
                        Estados
                    </button>
                    <button wire:click="verVista('internos')" class="inline-flex items-center rounded-md @if ($vistaAdmin == 'internos') bg-indigo-700 text-white hover:bg-gray-50 hover:text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 @else bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 @endif px-4 py-2 text-sm font-semibold ">
                        Estados internos
                    </button>
                    <button wire:click="verVista('carteras')" class="inline-flex items-center rounded-md @if ($vistaAdmin == 'carteras') bg-indigo-700 text-white hover:bg-gray-50 hover:text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 @else bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 @endif px-4 py-2 text-sm font-semibold ">
                        Carteras
                    </button>
                    <button wire:click="verVista('juzgados')"  class="inline-flex items-center rounded-md @if ($vistaAdmin == 'juzgados') bg-indigo-700 text-white hover:bg-gray-50 hover:text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 @else bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 @endif px-4 py-2 text-sm font-semibold ">
                        Juzgados
                    </button>
                    <button wire:click="verVista('monedas')"  class="inline-flex items-center rounded-md @if ($vistaAdmin == 'monedas') bg-indigo-700 text-white hover:bg-gray-50 hover:text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 @else bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 @endif px-4 py-2 text-sm font-semibold ">
                        Monedas
                    </button>
                    <button wire:click="verVista('cuadernos')"  class="inline-flex items-center rounded-md @if ($vistaAdmin == 'cuadernos') bg-indigo-700 text-white hover:bg-gray-50 hover:text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 @else bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 @endif px-4 py-2 text-sm font-semibold ">
                        Cuadernos
                    </button> --}}
                </div>

            </div>
        </div>
    </header>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ">


                @if ($vistaAdmin == null)

                <div class="items-center text-center">
                    <h1 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-5xl dark:text-white">Administracion de datos</h1>
                    <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Administre los datos necesarios desde una sola ventana.</p>
                </div>



                <div class="grid grid-cols-1 m-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 items-center">

                    <button wire:click="verVista('roles')" class="bg-white p-4 rounded-lg shadow-md text-center bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 px-4 py-2 text-sm font-semibold">
                        <div class="text-4xl mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 mx-auto mb-4 border rounded-full border-gray-300 p-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                        </div>
                        <h2 class="text-lg font-semibold">Roles</h2>
                    </button>
                    <button wire:click="verVista('permisos')" class="bg-white p-4 rounded-lg shadow-md text-center bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 px-4 py-2 text-sm font-semibold">
                        <div class="text-4xl mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 mx-auto mb-4 border rounded-full border-gray-300 p-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                            </svg>
                        </div>
                        <h2 class="text-lg font-semibold">Permisos</h2>
                    </button>





                    {{-- <!-- Tarjeta 1 -->
                    <button wire:click="verVista('materias')" class="bg-white p-4 rounded-lg shadow-md text-center bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 px-4 py-2 text-sm font-semibold">
                        <div class="text-4xl mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 mx-auto mb-4 border rounded-full border-gray-300 p-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.666 3.888A2.25 2.25 0 0013.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 01-.75.75H9a.75.75 0 01-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 011.927-.184" />
                            </svg>
                        </div>
                        <h2 class="text-lg font-semibold">Materias</h2>
                    </button>
                    <button wire:click="verVista('submaterias')" class="bg-white p-4 rounded-lg shadow-md text-center bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 px-4 py-2 text-sm font-semibold">
                        <div class="text-4xl mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 mx-auto mb-4 border rounded-full border-gray-300 p-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                            </svg>
                        </div>
                        <h2 class="text-lg font-semibold">Submaterias</h2>
                    </button>
                    <button wire:click="verVista('estados')" class="bg-white p-4 rounded-lg shadow-md text-center bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 px-4 py-2 text-sm font-semibold">
                        <div class="text-4xl mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 mx-auto mb-4 border rounded-full border-gray-300 p-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                        </div>
                        <h2 class="text-lg font-semibold">Estados</h2>
                    </button>
                    <button wire:click="verVista('internos')" class="bg-white p-4 rounded-lg shadow-md text-center bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 px-4 py-2 text-sm font-semibold">
                        <div class="text-4xl mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 mx-auto mb-4 border rounded-full border-gray-300 p-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                            </svg>
                        </div>
                        <h2 class="text-lg font-semibold">Estados Internos</h2>
                    </button>
                    <!-- Agrega nueva fila -->
                    <button wire:click="verVista('carteras')" class="bg-white p-4 rounded-lg shadow-md text-center bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 px-4 py-2 text-sm font-semibold">
                        <div class="text-4xl mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 mx-auto mb-4 border rounded-full border-gray-300 p-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.875 14.25l1.214 1.942a2.25 2.25 0 001.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 011.872 1.002l.164.246a2.25 2.25 0 001.872 1.002h2.092a2.25 2.25 0 001.872-1.002l.164-.246A2.25 2.25 0 0116.954 9h4.636M2.41 9a2.25 2.25 0 00-.16.832V12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 01.382-.632l3.285-3.832a2.25 2.25 0 011.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0021.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </div>
                        <h2 class="text-lg font-semibold">Carteras</h2>
                    </button>
                    <button wire:click="verVista('juzgados')" class="bg-white p-4 rounded-lg shadow-md text-center bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 px-4 py-2 text-sm font-semibold">
                        <div class="text-4xl mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 mx-auto mb-4 border rounded-full border-gray-300 p-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                            </svg>
                        </div>
                        <h2 class="text-lg font-semibold">Juzgados</h2>
                    </button>
                    <button wire:click="verVista('monedas')" class="bg-white p-4 rounded-lg shadow-md text-center bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 px-4 py-2 text-sm font-semibold">
                        <div class="text-4xl mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 mx-auto mb-4 border rounded-full border-gray-300 p-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                            </svg>
                        </div>
                        <h2 class="text-lg font-semibold">Monedas</h2>
                    </button>
                    <button wire:click="verVista('cuadernos')" class="bg-white p-4 rounded-lg shadow-md text-center bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 px-4 py-2 text-sm font-semibold">
                        <div class="text-4xl mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 mx-auto mb-4 border rounded-full border-gray-300 p-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </div>
                        <h2 class="text-lg font-semibold">Cuadernos</h2>
                    </button>
                    <button wire:click="verVista('etapas')" class="bg-white p-4 rounded-lg shadow-md text-center bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 px-4 py-2 text-sm font-semibold">
                        <div class="text-4xl mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 mx-auto mb-4 border rounded-full border-gray-300 p-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 4.5h14.25M3 9h9.75M3 13.5h5.25m5.25-.75L17.25 9m0 0L21 12.75M17.25 9v12" />
                            </svg>
                        </div>
                        <h2 class="text-lg font-semibold">Etapas</h2>
                    </button> --}}


                </div>



                @endif


                {{-- Aqui el contenido --}}

                {{-- Mat: {{ $materia_id }} {{ $vistaAdmin }} --}}

                @if ($vistaAdmin == 'roles')
                    <livewire:ajustes.rol />
                @endif
                @if ($vistaAdmin == 'permisos')
                    <livewire:ajustes.permiso />
                @endif
                {{-- @if ($vistaAdmin == 'juzgados')
                    <livewire:administracion.juzgados />
                @endif
                @if ($vistaAdmin == 'carteras')
                    <livewire:administracion.carteras />
                @endif

                @if ($vistaAdmin == 'materias')
                    <livewire:administracion.materias />
                @endif

                @if ($vistaAdmin == 'submaterias')
                    <livewire:administracion.submaterias :materia_id="$materia_id" />
                @endif

                @if ($vistaAdmin == 'estados')
                    <livewire:administracion.estados :materia_id="$materia_id" />
                @endif

                @if ($vistaAdmin == 'internos')
                    <livewire:administracion.estados-internos />
                @endif

                @if ($vistaAdmin == 'etapas')
                    <livewire:administracion.etapas />
                @endif --}}

            </div>
        </div>
    </div>


</div>
