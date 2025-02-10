<div class=" p-10">
    <h3 class=" font-bold text-3xl my-3">
        Nombre del Usuario: {{ $hardware->usuarioAsignado}}
    </h3>
    <div class=" mb-5 md:grid md:grid-cols-2 bg-gray-700 p-4 rounded-md">
        <div class=" font-bold uppercase my-3">
            <p>Área del Usuario: <span class=" normal-case font-normal"> {{ $hardware->usuarioArea }}</span> </p>
        </div>
        <div class=" font-bold uppercase my-3">
            <p>Marca del Hardware: <span class=" normal-case font-normal"> {{ $hardware->marcaHardware }}</span> </p>
        </div>
        <div class=" font-bold uppercase my-3">
            <p>Modelo del Hardware: <span class=" normal-case font-normal"> {{ $hardware->modeloHardware }}</span> </p>
        </div>
        <div class=" font-bold uppercase my-3">
            <p>Serie del Hardware: <span class=" normal-case font-normal"> {{ $hardware->serieHardware }}</span> </p>
        </div>
        <div class=" font-bold uppercase my-3">
            <p>Tipo de Hardware: <span class=" normal-case font-normal"> {{ $hardware->tipoHardware }}</span> </p>
        </div>
        <div class=" font-bold uppercase my-3">
            <p>Oficina responsable: <span class=" normal-case font-normal"> {{ $hardware->oficinaResponsable }}</span> </p>
        </div>
        <div class=" font-bold uppercase my-3">
            <p>Descripción del Hardware: <span class=" normal-case font-normal"> {{ $hardware->descripcionHardware }}</span> </p>
        </div>
        <div class=" font-bold uppercase my-3">
            <p>Fecha de asignación: <span class=" normal-case font-normal"> {{ $hardware->created_at->format('d/m/Y') }}</span> </p>
        </div>
    </div>

    @can('update', $hardware)
        <a href="{{ route('hardware.edit', $hardware->id) }}" class=" bg-indigo-600 p-5 rounded-lg text-white text-xs font-bold uppercase text-center content-center">
            Editar
        </a>    
    @endcan
</div>
