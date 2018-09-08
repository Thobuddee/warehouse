<h1>Warehouse</h1>
<table border=1>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>latitude</th>
		<th>longitude</th>
	</tr>
	@foreach($table as $row) 
	<tr>
		<td>{{ $row['id'] }}</td>
		<td>{{ $row['name'] }}</td>
		<td>{{ $row['latitude'] }}</td>
		<td>{{ $row['longitude'] }}</td>
	</tr>
	@endforeach
</table>