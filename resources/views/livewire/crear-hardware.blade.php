<form class=" md:w-1/2 space-y-5" wire:submit.prevent='crearHardware'>
    <div>
        <x-input-label for="usuarioAsignado" :value="__('Usuario Asignado')" />
        <x-text-input id="usuarioAsignado" class="block mt-1 w-full" type="text" wire:model="usuarioAsignado" :value="old('usuarioAsignado')" placeholder="Usuario al que se le asigna el Hardware." />                                  
        <x-input-error :messages="$errors->get('usuarioAsignado')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="usuarioArea" :value="__('Área del Usuario Asignado')" />
        <x-text-input id="usuarioArea" class="block mt-1 w-full" type="text" wire:model="usuarioArea" :value="old('usuarioArea')" placeholder="Área del usuario que se le asigna el Hardware."/>
        <x-input-error :messages="$errors->get('usuarioArea')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="marcaHardware" :value="__('Marca del Hardware')" />
        <x-text-input id="marcaHardware" class="block mt-1 w-full" type="text" wire:model="marcaHardware" :value="old('marcaHardware')" placeholder="Marca del equipo de Hardware (DELL, HP, Lenovo, etc)." />
        <x-input-error :messages="$errors->get('marcaHardware')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="modeloHardware" :value="__('Modelo del Hardware')" />
        <x-text-input id="modeloHardware" class="block mt-1 w-full" type="text" wire:model="modeloHardware" :value="old('modeloHardware')" placeholder="Modelo del equipo de Hardware (Thinkbook, Notebook, Thinkcentre, etc)." />
        <x-input-error :messages="$errors->get('modeloHardware')" class="mt-2" />
    </div>     
    <div>
        <x-input-label for="serieHardware" :value="__('Número de serie del Hardware')" />
        <x-text-input id="serieHardware" class="block mt-1 w-full" type="text" wire:model="serieHardware" :value="old('serieHardware')" placeholder="Número de serie del Hardware." />
        <x-input-error :messages="$errors->get('serieHardware')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="tipoHardware" :value="__('Tipo de Hardware')" />
        <x-text-input id="tipoHardware" class="block mt-1 w-full" type="text" wire:model="tipoHardware" :value="old('tipoHardware')" placeholder="Tipo de Hardware (Laptop, PC, Impresora, etc)." />
        <x-input-error :messages="$errors->get('tipoHardware')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="oficinaResponsable" :value="__('Oficina responsable del Hardware')" />
        <x-text-input id="oficinaResponsable" class="block mt-1 w-full" type="text" wire:model="oficinaResponsable" :value="old('oficinaResponsable')" placeholder="Ubicación de la oficina responsable (México, Veracruz, Guadalajara, etc)." />
        <x-input-error :messages="$errors->get('oficinaResponsable')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="descripcionHardware" :value="__('Descripcion del Hardware')" />
        <textarea id="descripcionHardware" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm h-60" type="text" wire:model="descripcionHardware" :value="old('descripcionHardware')" placeholder="Memoria, almacenamiento, calidad, etc"></textarea>
        <x-input-error :messages="$errors->get('descripcionHardware')" class="mt-2" />
    </div>
    <div class="flex items-center justify-end mt-4">
        <x-primary-button class=" w-full justify-center">
            {{ __('Agregar Hardware') }}
        </x-primary-button>
    </div>
    
    

</form>
