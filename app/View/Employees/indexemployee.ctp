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
	<style>
		.row
		{
			margin-top: 25px;
		}
	</style>
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
					<h1 class="page-header" style="text-align: center">
						Plan na dzień:
						<?php echo $this->Form->date('screening_date',array('class' => 'da'));?>
					</h1>
				</div>
			</div>
			<!-- /.row -->
			<div class="col-lg-12">
				<div class="termin">
					</div>
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

<script>
	var serwis = <?php echo json_encode($services)?>;
	var employ = <?php echo json_encode(AuthComponent::user('employees_id'))?>;
	var pdane = <?php echo json_encode(AuthComponent::user('first_name'))?>;
	pdane = pdane +' '+ <?php echo json_encode(AuthComponent::user('last_name'))?>;
	var data = document.getElementsByClassName("da");
	var rezerwacje = <?php echo json_encode($reservations)?>;
	var today = new Date();
	var hh = today.getHours();
	var ms = today.getMinutes();
	var dd = today.getDate();
	var mm = today.getMonth()+1;
	var yyyy = today.getFullYear();
	var datawpisana = 0;
	var click = 0;
	if(ms<10) {
		ms='0'+ms
	}

	if(hh<10) {
		hh='0'+hh
	}
	var todaytime = hh+":"+ms;
	if(dd<10) {
		dd='0'+dd
	}

	if(mm<10) {
		mm='0'+mm
	}
	today = yyyy+'-'+mm+'-'+dd;

	function sprawdzdate() {
		datawpisana = data[data.length-1].value;
	}
	$('.da').on('click',function()
	{
		if(click==0){
			this.value = today;
			click ++;}
		rdata = this.value;

		sprawdzdate();


		var ni = document.getElementsByClassName('termin');
		var tabterm = document.getElementById('');
		$("#tableatermoinow").remove();
		var newdiv = document.createElement('div');
		newdiv.setAttribute('id', 'tableatermoinow');
		var kodtabeli = '<div class="table-responsive"> <table class="table table-bordered table-hover table-striped"><thead><tr>' +
			'<th>Usługa</th>' +
			'<th>Data przeprowadzenia usługi</th>' +
			'<th>Czas rozpoczecia uslugi</th>' +
			'<th>Czas zakoniczenia uslugi</th>' +
			'<th>Pracownik wykonujacy usluge</th>' +
			'</tr>' +
			'</thead>';

		for(var i=0;i<rezerwacje.length;i++)
		{
			if(rezerwacje[i]['Reservation']['employees_id'] == employ && (rezerwacje[i]['Reservation']['reservation_date'] == datawpisana)) {

				var data = rezerwacje[i]['Reservation']['reservation_date'];
				var czas_rozp =rezerwacje[i]['Reservation']['timeB'];
				var czas_zak =rezerwacje[i]['Reservation']['timeE'];
				for(var j=0;j<serwis.length;j++)
				{
					if(serwis[j]['Service']['id'] == rezerwacje[i]['Reservation']['services_id'])
					{
						var nazwauslugi = serwis[j]['Service']['service_name'];
					}
				}
				kodtabeli = kodtabeli + '<tbody><tr><td>'+nazwauslugi+'</td><td>'+data+'</td><td>'+czas_rozp+'</td><td>'+czas_zak+'</td><td>'+pdane+'</td><tr></tbody>';
			}
		}
		kodtabeli = kodtabeli + '</table></div>';
		newdiv.innerHTML = kodtabeli;
		ni[ni.length-1].appendChild(newdiv);
	});
	$('.da').on('change',function()
	{

		sprawdzdate();


		var ni = document.getElementsByClassName('termin');
		var tabterm = document.getElementById('');
		$("#tableatermoinow").remove();
		var newdiv = document.createElement('div');
		newdiv.setAttribute('id', 'tableatermoinow');
		var kodtabeli = '<div class="table-responsive"> <table class="table table-bordered table-hover table-striped"><thead><tr>' +
			'<th>Usługa</th>' +
			'<th>Data przeprowadzenia usługi</th>' +
			'<th>Czas rozpoczecia uslugi</th>' +
			'<th>Czas zakoniczenia uslugi</th>' +
			'<th>Pracownik wykonujacy usluge</th>' +
			'</tr>' +
			'</thead>';

		for(var i=0;i<rezerwacje.length;i++)
		{
			if(rezerwacje[i]['Reservation']['employees_id'] == employ && (rezerwacje[i]['Reservation']['reservation_date'] == datawpisana)) {

				var data = rezerwacje[i]['Reservation']['reservation_date'];
				var czas_rozp =rezerwacje[i]['Reservation']['timeB'];
				var czas_zak =rezerwacje[i]['Reservation']['timeE'];
				for(var j=0;j<serwis.length;j++)
				{
					if(serwis[j]['Service']['id'] == rezerwacje[i]['Reservation']['services_id'])
					{
						var nazwauslugi = serwis[j]['Service']['service_name'];
					}
				}
				kodtabeli = kodtabeli + '<tbody><tr><td>'+nazwauslugi+'</td><td>'+data+'</td><td>'+czas_rozp+'</td><td>'+czas_zak+'</td><td>'+pdane+'</td><tr></tbody>';
			}
		}
		kodtabeli = kodtabeli + '</table></div>';
		newdiv.innerHTML = kodtabeli;
		ni[ni.length-1].appendChild(newdiv);
	});
</script>





