<div class="">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between">
            <div class="container mx-auto p-6">
                <div class="overflow-x-auto shadow-md rounded-lg">
                    <div class="grid grid-cols-12 min-w-[1000px] font-bold text-l hover:bg-gray-700">
                        <div class="col-span-1 ps-4">ID</div>
                        <div class="col-span-2">Nombre de Usuario</div>
                        <div class="col-span-2">Área</div>
                        <div class="col-span-1">Marca</div>
                        <div class="col-span-1">Modelo</div>
                        <div class="col-span-1">No. Serie</div>
                        <div class="col-span-1">Tipo</div>
                        <div class="col-span-1">Oficina</div>
                    </div>
                        @foreach ($hardware as $hw)
                            <div class="grid grid-cols-12 min-w-[1000px] border-b border-gray-200 py-1 hover:bg-gray-700">
                                <div class="col-span-1 ps-4">
                                    {{ $hw->id }}
                                </div> 
                                <div class="col-span-2 truncate">
                                    {{ $hw->usuarioAsignado }}
                                </div> 
                                <div class="col-span-2 truncate">
                                    {{ $hw->usuarioArea }}
                                </div> 
                                <div class="col-span-1 truncate">
                                    {{ $hw->marcaHardware }}
                                </div> 
                                <div class="col-span-1 truncate">
                                    {{ $hw->modeloHardware }}
                                </div> 
                                <div class="col-span-1 truncate">
                                    {{ $hw->serieHardware }}
                                </div> 
                                <div class="col-span-1 truncate">
                                    {{ $hw->tipoHardware }}
                                </div> 
                                <div class="col-span-1 truncate">
                                    {{ $hw->oficinaResponsable }}
                                </div>
                                <a href="{{ route('hardware.edit', $hw->id) }}" class=" bg-indigo-600 py-1 rounded-lg text-white text-xs font-bold uppercase text-center content-center">
                                    Editar
                                </a>
                                <a href="{{ route('hardware.show', $hw->id) }}" class=" bg-green-900 py-1 mx-1 rounded-lg text-white text-xs font-bold uppercase text-center content-center">
                                    Detalles
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>  
                <div class=" flex flex-col items-stretch gap-3  mt-5 md:mt-0">
                    
                </div>
    
            </div>    
    </div>
    <div class="mt-10">
        {{ $hardware->links() }}
    </div>
</div>

