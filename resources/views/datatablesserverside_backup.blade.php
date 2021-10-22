@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">DataTable with default features</h3>
			</div>
		  	<!-- /.card-header -->
		  	<div class="card-body">
				<table id="datatables" class="table table-bordered table-striped datatables">
					<thead>
						<tr>
							<th>Rendering engine</th>
							<th>Browser</th>
							<th>Platform(s)</th>
							<th>Engine version</th>
							<th>CSS grade</th>
						</tr>
					</thead>
				</table>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready( function () {
		console.log("Hello world!");
        $('#datatables').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax":{
                    "url": "{{  url('api/dtserver-ajax') }}",
                    "dataType": "json",
                    "type": "POST"
                },
            "columns": [
                { "data": "rendering_engine" },
                { "data": "browser" },
                { "data": "platform" },
                { "data": "engine_version" },
                { "data": "css_grade" },
                { "data": "action" },
            ]  

        });
    });
</script>
@endsection
