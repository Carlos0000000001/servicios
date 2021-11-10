@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">


                        <table  class="table table-bordered">
                            <tr>
                                <th>Id</th>
                                <th>Nombres</th>
                                <th>cargo</th>
                                <th>telefono</th>
                            </tr>
                            <?php
                            foreach($empleados as $empleado){
                                echo "<tr>".
                                    "<td>".$empleado->id."</td>".
                                    "<td>".$empleado->nombreempleado."</td>".
                                    "<td>".$empleado->cargo."</td>".
                                    "<td>".$empleado->telefono."</td>".

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

