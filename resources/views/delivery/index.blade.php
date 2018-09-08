<h1>Warehouse</h1>
<table border=1>
	<tr>
		<th>ID</th>
		<th>Matrial_Number</th>
		<th>Product_Name</th>
		<th>date</th>
		<th>Amount</th>
		<th>EmpID</th>
	</tr>
	@foreach($table as $row) 
	<tr>
		<td>{{ $row['ID'] }}</td>
		<td>{{ $row['Matrial_Number'] }}</td>
		<td>{{ $row['Product_Name'] }}</td>
		<td>{{ $row['date'] }}</td>
		<td>{{ $row['Amount'] }}</td>
		<td>{{ $row['EmpID'] }}</td>
	</tr>
	@endforeach
</table>