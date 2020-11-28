<html>
<head>
	<title>View Report</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email Id</th>
			<th>Category</th>
			<th>Title</th>
			<th>From Date</th>
			<th>To Date</th>
			<th>Organization</th>
			<th>Venue</th>
			<th>View</th>
			<th>Download</th>
		</tr>
            @foreach($file as $key=>$data)
		<tr>
			
			<td>{{++$key}}</td>
			
			<td>{{$data->name}}</td>
			<td>{{$data->email}}</td>
			<td>{{$data->category}}</td>
			<td>{{$data->title}}</td>
			<td>{{$data->fromdate}}</td>
			<td>{{$data->todate}}</td>
			<td>{{$data->organization}}</td>
			<td>{{$data->venue}}</td>
			<td><a href="/workshop/{{$data->id}}">View</a></td>
			<td><a href="/file/download/{{$data->file}}">Download</a></td>
			
		</tr>
		@endforeach
	</table>
	</body>
	</html>