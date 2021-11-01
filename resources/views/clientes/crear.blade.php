@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-40">
                <div class="card">
                    <div  class="card-header">{{ __('lista imagenes') }}</div>


<form method="post" action="/cliente">
    @csrf

    <input type="text" name="nombres" placeholder="Ingrese Nombres"><br>
    <input type="text" name="apellidos" placeholder="Ingrese Apellidos"><br>
    <input type="text" name="email" placeholder="Ingrese email"><br>
    <input type="text" name="telefono" placeholder="Ingrese telefono"><br>
    <input type="text" name="dni" placeholder="Ingrese dni"><br>

    <input type="submit" name="submit" Value="Guardar">


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
