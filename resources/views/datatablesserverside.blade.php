<html>
	<head>

		<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
	</head>
	<body>
		
	
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






<!-- 					
					<table id="table_id" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
		<tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
		<tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
		<tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
		<tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
		<tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
		<tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table> -->
	
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	
	<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
	
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


		$(document).ready( function () {
			$('#table_id').DataTable();
		} );
	</script>
	</body>
</html>


