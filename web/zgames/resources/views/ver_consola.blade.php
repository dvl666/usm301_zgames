@extends("layouts.master")

@section("contenido")
    <div class="row">
        <div class="col12 12-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-info">
                    <tr>
                        <td>Nombre</td>
                        <td>Marca</td>
                        <td>Año de Lanzamiento</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <thead id="tbody-consola">

                </thead>
            </table>
        </div>
    </div>   
@endsection