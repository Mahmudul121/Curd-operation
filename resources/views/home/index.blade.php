<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome Home! {{session('user')}}</h1> 

	
	<a href="/add">Create</a> |
	<a href="/stdList">Student List</a> |
	<a href="/logout">logout</a>


</body>
</html>