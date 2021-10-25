<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear  servicios
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="/queja">
                        @csrf
                        <input type="text" name="nombre" placeholder="Ingrese Nombre del servicio " ><br>
                        <input type="text"  name="descripcion" placeholder="registra los servicios que desa contratar" ><br>

                        <imnput type="text" name="fecha_servicio"placeholder ="registra fechas de servicio"></imnput>
                        <input type="submit" name="submit" Value="Guardar servicios selecionados ">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
