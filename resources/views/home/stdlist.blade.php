<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<body>

	<h2>Student List:</h2>
	
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Username</td>
			<td>Name</td>
			<td>Cgpa</td>
			<td>Action</td>
		</tr>
		@foreach($std as $value)
		<tr>
			<td>{{$value['id']}}</td>
			<td>{{$value['username']}}</td>
			<td>{{$value['name']}}</td>
			<td>{{$value['cgpa']}}</td>
			<td>
				<a href="/edit/{{$value['id']}}">Edit</a> |
				<a href="/delete/{{$value['id']}}">Delete</a> |
				<a href="/details/{{$value['id']}}">Details</a>
			</td>
		</tr>
		@endforeach

</table>

</body>
</html>