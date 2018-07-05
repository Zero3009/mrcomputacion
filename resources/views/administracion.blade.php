@extends('layouts.administracion')

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading" style="background: #4682B4; color: #FFFFFF;">
                <h3 class="panel-title">Tabla</h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered tabla-filtro" width="100%" id="tabla">
					<thead>
                        <tr>
    						<th>asdddddddddddddddddddddddd</th>
                            <th>asdasd</th>
    					</tr>
                    </thead>
				</table>
            </div>
            <div class="panel-footer">
                Pie del panel
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function () {

var tabla = $('#tabla').DataTable({
	"processing": true,
	"serverSide": true,
	"ajax": '/datatables/get',
	"columns":[
        {data: 'nombre', name:'nombre'},
		{data: 'tel', name:'tel'}
	],
    "language":{
                url: "{!! asset('/plugins/datatables/lenguajes/spanish.json') !!}"
    },
    "bFilter": true,
});

});
</script>
@endsection