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
            <?php $__currentLoopData = $file; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			
			<td><?php echo e(++$key); ?></td>
			
			<td><?php echo e($data->name); ?></td>
			<td><?php echo e($data->email); ?></td>
			<td><?php echo e($data->category); ?></td>
			<td><?php echo e($data->title); ?></td>
			<td><?php echo e($data->fromdate); ?></td>
			<td><?php echo e($data->todate); ?></td>
			<td><?php echo e($data->organization); ?></td>
			<td><?php echo e($data->venue); ?></td>
			<td><a href="/workshop/<?php echo e($data->id); ?>">View</a></td>
			<td><a href="/file/download/<?php echo e($data->file); ?>">Download</a></td>
			
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	</body>
	</html><?php /**PATH C:\Users\Hp\task\resources\views/view.blade.php ENDPATH**/ ?>