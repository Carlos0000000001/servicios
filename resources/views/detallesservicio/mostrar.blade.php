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
                                <th>numerodeordenservicio</th>
                                <th>detaalleservicio</th>
                                <th>fecha de atencion</th>

                            </tr>
                            <?php
                            foreach($detalleservicio as $detalleservicio){
                                echo "<tr>".
                                    "<td>".$detalleservicio->id."</td>".
                                    "<td>".$detalleservicio->numerodeordenservicio."</td>".
                                    "<td>".$detalleservicio->.fechaatencon."</td>".


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

