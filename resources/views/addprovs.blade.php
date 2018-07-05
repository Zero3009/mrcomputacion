@extends('layouts.administracion')

@section('main-content')
<form method="POST" action="/admin/provs/nuevo/post" accept-charset="UTF-8" class="form-horizontal">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: #4682B4; color: #FFFFFF;"><h4 class="panel-title">Nuevo Proveedor</h4></div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label col-sm-2">Nombre:</label>
                            <div class="col-sm-4">
                                <input class="form-control" style="width: 100%" name="nombre" type="text" required>
                            </div>
                            <label class="control-label col-sm-2">Telefono:</label>
                            <div class="col-sm-4">
                                <input class="form-control" style="width: 100%" name="tel" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input class="btn btn btn-primary" tabindex="1" type="submit" value="Crear proveedor">
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection