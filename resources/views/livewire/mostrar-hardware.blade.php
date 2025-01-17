<div class="">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        @foreach ($hardware as $hw)
            <div class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between">
                <div class=" space-y-3">
                    <a href="#" class=" font-bold text-xl">
                        {{ $hw->usuarioAsignado }}
                        --
                        {{ $hw->usuarioArea }}
                        --
                        {{ $hw->marcaHardware }}
                        --
                        {{ $hw->modeloHardware }}
                        --
                        {{ $hw->serieHardware }}
                        --
                        {{ $hw->tipoHardware }}
                        --
                        {{ $hw->oficinaResponsable }}
                        --
                        {{ $hw->descripcionHardware }}
                        
                    </a>
                </div>
                <div class=" flex flex-col items-stretch gap-3  mt-5 md:mt-0">
                    <a href="{{ route('hardware.edit', $hw->id) }}" class=" bg-indigo-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                        Editar
                    </a>
                </div>
    
            </div>    
        @endforeach
    </div>
    <div class="mt-10">
        {{ $hardware->links() }}
    </div>
</div>

