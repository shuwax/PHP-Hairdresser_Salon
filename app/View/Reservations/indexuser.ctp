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
	
	<!-- Custom Fonts -->

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

		<div class="container">

			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
						Spis Twoich Rezerwacji
					</h1>
				</div>
			</div>
			<!-- /.row -->
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<thead>
						<tr>
							<th>Usługa</th>
							<th>Data przeprowadzenia usługi</th>
							<th>Opcje</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($reservations  as $reservation): ?>
							<tr>

								<?php foreach ($services as $service): ?>
									<?php if($service['Service']['id'] == $reservation['Reservation']['services_id'])
									{
										?> <td> <?php echo $service['Service']['service_name'];?></td><?php
									}
									?>
								<?php endforeach; ?>
								<td> <?php echo $reservation['Reservation']['reservation_date'];?></td>




								<td class="actions">
									<?php echo $this->Html->link(__('Edytuj rezerwacje'), array('controller'=>'/Reservations','action' => 'edit', $reservation['Reservation']['id']),array('class' => 'btn btn-warning')); ?>
									<?php echo $this->Form->postLink(__('Usuń rezerwacje'), array('controller'=>'/Reservations','action' => 'delete', $reservation['Reservation']['id']),array('class' => 'btn btn-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $reservation['Reservation']['id']))); ?>
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







