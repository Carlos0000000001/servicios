@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-40">
                <div class="card">
                    <div  class="card-header">{{ __('empleados') }}</div>

                    <form method="post" action="/empleados">
                        @csrf

                        <input type="text" name="nombres" placeholder="Ingrese Nombres"><br>
                        <input type="text" name="cargoempleado" placeholder="ingrese cargo"><br>
                        <input type="text" name="telefono" placeholder="Ingrese telefono"><br>

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

