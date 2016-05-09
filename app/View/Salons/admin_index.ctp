<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SB Admin - Bootstrap Admin Template</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/sb-admin.css" rel="stylesheet">
	<style>
		img
		{
			width: 372px!important;
		}
	</style>

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>

<div id="wrapper">
	<!-- /.navbar-collapse -->
	</nav>

	<div id="page-wrapper">

		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
						Spis Salonów
					</h1>
					<ol class="breadcrumb">
						<li>
							<i class="fa fa-dashboard"></i>  <a href="<?php  echo $this->Html->url(array('controller'=>'../Pages','action'=>'display'), true);?>">Dashboard</a>
						</li>
						<li class="active">
							<i class="fa fa-table"></i> Wszystkie Salony
						</li>
					</ol>
				</div>
			</div>
			<!-- /.row -->
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<thead>
						<tr>
							<th><?php echo 'id'; ?></th>
							<th><?php echo 'Nazwa Salonu'; ?></th>
							<th><?php echo 'Logo'; ?></th>
							<th><?php echo 'Miasto'; ?></th>
							<th><?php echo 'Adres'; ?></th>
							<th><?php echo 'E-mail'; ?></th>
							<th><?php echo 'Numer kontaktowy'; ?></th>
							<th class="actions"><?php echo __('Opcje'); ?></th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($salons as $salon): ?>
							<tr class='table__align-columns-middle'>
								<td><?php echo h($salon['Salon']['id']); ?></td>
								<td><?php echo h($salon['Salon']['name']); ?></td>
								<td><?php echo $this->Html->image('../files/salon/filename/'.$salon['Salon']['id'].'/'.$salon['Salon']['filename'], array('class' => 'table-img')); ?></td>
								<td><?php echo h($salon['Salon']['city']); ?></td>
								<td><?php echo h($salon['Salon']['adress']); ?></td>
								<td><?php echo h($salon['Salon']['email']); ?></td>
								<td><?php echo h($salon['Salon']['tel']); ?></td>
								<td class="actions">
									<?php echo $this->Html->link(__('Salon'), array('controller'=>'../salons','action' => 'view', $salon['Salon']['id']), array('class' => 'btn btn-success')); ?>
									<?php echo $this->Html->link(__('Edycja'), array('action' => 'edit', $salon['Salon']['id']), array('class' => 'btn btn-warning')); ?>
									<?php echo $this->Form->postLink(__('Usunięcie'), array('action' => 'delete', $salon['Salon']['id']), array('class' => 'btn btn-danger'), array('confirm' => __('Jesteś pewien że chcesz usunąć salon o id: # %s?', $salon['Salon']['id']))); ?>
								</td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- /.row -->


	</div>
	<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
