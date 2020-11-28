<html>
<head>
	<title>Details</title>
</head>
<body>
	<h2>{{$data->name}}</h2>
	<h3>{{$data->title}}</h3>
	<p>
		<iframe src="{{url('storage/'.$data->file)}}" style="width: 600px;
			height: 500px;"></iframe>
		</p>
	</body>
	</html>