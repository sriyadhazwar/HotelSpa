<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Servicios</title>
	<link rel="stylesheet" type="text/css" href="css/pdf.css">
</head>
<body>
	<div id="imagen"></div>
	<h1>Servicios : </h1>
	<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Servicios</th>
				<th>Cliente</th>
				<th>Habitacion</th>
				<th>Observaciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($Servicios as $serv)
				<tr>
					<td>{{ $serv->id  }}</td>
					<td>{{ $serv->serv }}</td>
					<td>{{ $serv->cliente }}</td>
					<td>{{ $serv->habit }}</td>
					<td>{{ $serv->observaciones }}</td>
				</tr>
			@endforeach
			
		</tbody>
	</table>
</body>
</html>