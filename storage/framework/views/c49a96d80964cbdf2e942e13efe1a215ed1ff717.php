<html>
<head>
	<title>Details</title>
</head>
<body>
	<h2><?php echo e($data->name); ?></h2>
	<h3><?php echo e($data->title); ?></h3>
	<p>
		<iframe src="<?php echo e(url('storage/'.$data->file)); ?>" style="width: 600px;
			height: 500px;"></iframe>
		</p>
	</body>
	</html><?php /**PATH C:\Users\Hp\task\resources\views/display.blade.php ENDPATH**/ ?>