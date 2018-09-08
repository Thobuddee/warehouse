@foreach($table as $row)
<h1>Warehouse id : {{ $row['id'] }}</h1>
<table border=1>
	<tr>
		<th>key</th>
		<th>value</th>
	</tr>
	<tr>
		<td>name</td>
		<td>{{ $row['id'] }}</td>
	</tr>
	<tr>
		<td>latitude</td>
		<td>{{ $row['Matrial_Number'] }}</td>
	</tr>
	<tr>
		<td>longitude</td>
		<td>{{ $row['Product_Name'] }}</td>
	</tr>
</table>
<hr/>
<div>
	<form action="{{ url('/') }}/delivery/{{ $row['id']}}"
			method="POST" style="display: inline;">
			{{ csrf_field() }} 
			{{ method_field('DELETE') }}
			<button type="submit">DELETE</button>


	</form>

</div>
@break
@endforeach