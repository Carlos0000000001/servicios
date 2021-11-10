
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-40">
                <div class="card">
                    <div  class="card-header">{{ __('registrar servicios') }}</div>

                    <form method="post" action="/detalleservidos">
                        @csrf

                        <input type="text" name="id" placeholder="Ingrese id"><br>
                        <input type="text" name="detalleservicio" placeholder="ingrese detalle"><br>
                        <input type="text" name="fechaatencon" placeholder="Ingrese fecha"><br>

                        <input type="submit"  class="btn btn-warning btn-group-lg" name="submit" Value="Guardar">
                    </form>

                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
    </div>
@endsection


