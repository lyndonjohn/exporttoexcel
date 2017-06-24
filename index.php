<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Bootstrap Export To Excel</title>
		<!-- The styles -->
		<link href="css/bootstrap-united.min.css" rel="stylesheet">
		<!-- Bootstrap 3.3.6 -->
  		<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
		<link href="css/charisma-app.css" rel="stylesheet">
		<!-- DataTables -->
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css">
	</head>
	<body>
		<div id="content" class="col-lg-10 col-sm-10">
			<div class="row">
				<div class="box-content">
					<table id="example" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
						<thead>
							<tr>
								<th>Rendering engine</th>
								<th>Browser</th>
								<th>Platform(s)</th>
								<th>Engine version</th>
								<th>CSS grade</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Trident</td>
								<td>Safari</td>
								<td>Win 95+</td>
								<td> 4</td>
								<td>X</td>
							</tr>
							<tr>
								<td>Trident</td>
								<td>Google Chrome</td>
								<td>Win 95+</td>
								<td>5</td>
								<td>C</td>
							</tr>
							<tr>
								<td>Trident</td>
								<td>Mozilla</td>
								<td>Win 95+</td>
								<td>5.5</td>
								<td>A</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- JS Scripts -->
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
		<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>
		<script>
		$(function () {
			$('#example').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": true,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				dom: 'Bfrtip',
				buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print'
				]
			});
		});
		</script>
	</body>
</html>