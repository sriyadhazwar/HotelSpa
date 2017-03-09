<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Actividades</title>
	<link rel="stylesheet" type="text/css" href="css/pdf.css">
</head>
<body>
	<div id="imagen"></div>
	<h1>Actividades : </h1>
	<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Actividad</th>
				<th>Cliente</th>
				<th>Habitacion</th>
				<th>Fecha</th>
			</tr>
		</thead>
		<tbody>
			@foreach($Actividades as $acti)
				<tr>
					<td>{{ $acti->id  }}</td>
					<td>{{ $acti->act }}</td>
					<td>{{ $acti->cliente }}</td>
					<td>{{ $acti->habit }}</td>
					<td>{{ $acti->fecha }}</td>

				</tr>
			@endforeach
			
		</tbody>
	</table>
</body>
</html>