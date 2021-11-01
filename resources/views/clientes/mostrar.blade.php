@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">


<table border="1" cellspacing="0">
    <tr>
        <th>Id</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>email</th>
        <th>telefono</th>
        <th>dni</th>
    </tr>
    <?php
    foreach($clientes as $cliente){
        echo "<tr>".
            "<td>".$cliente->id."</td>".
            "<td>".$cliente->nombres."</td>".
            "<td>".$cliente->apellidos."</td>".
            "<td>".$cliente->email."</td>".
            "<td>".$cliente->telefono."</td>".
            "<td>".$cliente->dni."</td>".

            "</tr>";
    }
    ?>
</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
