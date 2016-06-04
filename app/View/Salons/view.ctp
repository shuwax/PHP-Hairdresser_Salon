<?php $timeopen =  $salon['Salon']['timeopen'];
    $timeclose = $salon['Salon']['timeclose']?>

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
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
 <style type="text/css">
        @media all {
            .lightbox { display: none; }
            .fl-page h1,
            .fl-page h3,
            .fl-page h4 {
                font-family: 'HelveticaNeue-UltraLight', 'Helvetica Neue UltraLight', 'Helvetica Neue', Arial, Helvetica, sans-serif;
                font-weight: 100;
                letter-spacing: 1px;
            }
            .fl-page h1 { font-size: 110px; margin-bottom: 0.5em; }
            .fl-page h1 i { font-style: normal; color: #ddd; }
            .fl-page h1 span { font-size: 30px; color: #333;}
            .fl-page h3 { text-align: right; }
            .fl-page h3 { font-size: 15px; }
            .fl-page h4 { font-size: 2em; }
            .fl-page .jumbotron { margin-top: 2em; }
            .fl-page .doc { margin: 2em 0;}
            .fl-page .btn-download { float: right; }
            .fl-page .btn-default { vertical-align: bottom; }

            .fl-page .btn-lg span { font-size: 0.7em; }
            .fl-page .footer { margin-top: 3em; color: #aaa; font-size: 0.9em;}
            .fl-page .footer a { color: #999; text-decoration: none; margin-right: 0.75em;}
            .fl-page .github { margin: 2em 0; }
            .fl-page .github a { vertical-align: top; }
            .fl-page .marketing a { color: #999; }

            /* override default feather style... */
.fixwidth {
    background: rgba(256,256,256, 0.8);
}
            .fixwidth .featherlight-content {
    width: 500px;
                padding: 25px;
                color: #fff;
                background: #111;
            }
            .fixwidth .featherlight-close {
    color: #fff;
    background: #333;
}

        }
        @media(max-width: 768px){
    .fl-page h1 span { display: block; }
            .fl-page .btn-download { float: none; margin-bottom: 1em; }
        }
    </style>
	<style>

		#wrapper{
			position: relative;
			top: 50px;
		}
        .featherlight-content
        {

        }
        .rezerwuj
        {
            float: left;
        }
        .btn-primary
        {
            bottom: 0px !important;
        }
	</style>
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
					<?php echo $this->Html->image('../files/salon/filename/'.$salon['Salon']['id'].'/'.$salon['Salon']['filename'],array(
						'url' => array('controller' => 'Salons', 'action' => 'view', $salon['Salon']['id'])));?>

					<h1 class="page-header">
						Usługi:
					</h1>
				</div>
			</div>
			<!-- /.row -->
			<?php $nrwiersza=0;?>
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-hover">
                        <thead>
							<th></th>
							<th></th>
						</thead>
						<tbody>
						<?php foreach ($services as $service):?>
                        <tr class="wiersz<?php echo $nrwiersza?>">
                            <td data-featherlight="#fl<?php echo $nrwiersza?>"><?php echo $service['Service']['service_name']?></td>
                            <td data-featherlight="#fl<?php echo $nrwiersza?>"><?php echo $service['Service']['price']." PLN"?></td>
                        </tr>

                                <div class="lightbox" id="fl<?php echo $nrwiersza?>" data-id="<?php echo $service['Service']['id']?>">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                Godziny otwarcia Salonu: <?php echo $salon['Salon']['timeopen']?> - <?php echo $salon['Salon']['timeclose']?>
                                            </div>
                                            <div class="col-lg-6">
                                                Usługa: <?php echo $service['Service']['service_name']?>
                                            </div>
                                            <div class="col-lg-6">
                                                    Planowany czas trwania usługi:<div id="<?php echo $service['Service']['id']?>U"> <?php echo $service['Service']['service_time']?> </div> min

                                            </div>
                                        </div>
                                    </div>
                                    <?php echo $this->Form->create('Reservations'); ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p class="text-center">
                                                Termin usługi:
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <?php echo "Data Usługi".$this->Form->date('screening_date',array('class' => 'da'));?>
                                            <?php echo $this->Form->input('employees',array('label' => 'Pracownik','empty'=>'Wybierz pracownika..','class'=>'pracownik'));?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="termin">
                                                <?php if(AuthComponent::user()) {?>
                                                <div class="kaliwsztermin">
                                                    <span class="btn btn-primary" style="color:white;position: relative;bottom: -17px;" id="klawisztermin">Sprawdz termin</span>
                                                </div>
                                                <?php }?>
                                                <p class="text-center">
                                                    Plan Pracownika na wybrany dzień:
                                                </p>
                                                <div id="tabelapracownika">
                                                </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <?php  echo "Godzina Usługi".$this->Form->time('time',array('class' => 'ta'));?>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="status">
                                                </div>


                                            <?php if(AuthComponent::user()) {?>
                                            <div class="rezerwuj">
                                                <span class="btn btn-primary" style="color:white;position: relative;bottom: -17px;">Rezerwuj</span>
                                            </div>
                                            <?php } else{ ?>
                                                <div class="zaloguj">
                                                    <p style="text-align: center">Zanim dokonasz rezerwacji, musiz się zalogować.</p>
                                                    <?php echo $this->Html->link('Zaloguj się',array('controller' => 'Users', 'action' => 'login'),array('class'=>'btn btn-primary'))?>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php $nrwiersza++?>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
		</div>
		<!-- /.row -->


	</div>
	<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


</body>

</html>
<script>



</script>
<script>
    var data = document.getElementsByClassName("da");
    var czass = document.getElementsByClassName("ta");
    var rdata;
    var rezerwacje = <?php echo json_encode($reservations)?>;
    var serwis = <?php echo json_encode($services)?>;
    var time = document.getElementById("ReservationsTime");
    var employees = document.getElementsByClassName("pracownik");
    var today = new Date();
    var hh = today.getHours();
    var ms = today.getMinutes();
    var dd = today.getDate();
    var mm = today.getMonth()+1;
    var yyyy = today.getFullYear();
    var click = 0;
    var clicktime = 0;
    var serviceid;
    var idemoloyee = 0;
    var datawpisana = 0;
    var czaswpisany = 0;
    var czaswpisnayzak = 0;
    var timeopen = <?php echo json_encode($timeopen)?>;
    var timeclose = <?php echo json_encode($timeclose)?>;
    var konflikt = false;
    var pusty = document.getElementsByClassName('ta');
    pusty = pusty[pusty.length-1].value;
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

    function sprawdzpracownika() {
        idemoloyee = employees[employees.length-1].value;
    }
    function sprawdzdate() {
        datawpisana = data[data.length-1].value;
    }
    function sprawdzgodzine() {
        czaswpisany = czass[czass.length-1].value;
    }
    $('.kaliwsztermin').click(function() {
        sprawdzpracownika();
        sprawdzdate();
        if(idemoloyee == 0 )
        {
            alert("Wybierz pracownika!");
        }
        if(datawpisana == 0  )
        {
            alert("Wybierz Datę usługi!");
        }
        if(idemoloyee != 0 && datawpisana != 0 )
        {
            var ni = document.getElementsByClassName('termin');
            var tabterm = document.getElementById('');
            $("#tableatermoinow").remove();
            var newdiv = document.createElement('div');
            newdiv.setAttribute('id', 'tableatermoinow');
            var kodtabeli = '<div class="table-responsive"> <table class="table table-bordered table-hover table-striped"><thead><tr><th>Usługa</th><th>Data Usługi</th><th>Czas rozpoczecia</th>' +
                '<th>Czas zakonczenia</th></tr></thead>';

            for(var i=0;i<rezerwacje.length;i++)
            {
               if(rezerwacje[i]['Reservation']['employees_id'] == idemoloyee && (rezerwacje[i]['Reservation']['reservation_date'] == datawpisana)) {
                    //alert(rezerwacje[i]['Reservation']['id']);
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
                    kodtabeli = kodtabeli + '<tbody><tr><td>'+nazwauslugi+'</td><td>'+data+'</td><td>'+czas_rozp+'</td><td>'+czas_zak+'</td><tr></tbody>';
                }
           }
            kodtabeli = kodtabeli + '</table></div>';
            newdiv.innerHTML = kodtabeli;

            ni[ni.length-1].appendChild(newdiv);
            //ni.appendChild(newdiv[0]);
        }

    });

    $('.da').on('click',function()
    {
        if(click==0){
            this.value = today;

            //wpis();
            //dostepny();
            click ++;}
        rdata = this.value;
    });

    $('.ta').on('click',function()
    {
        if(clicktime==0){
            this.value = timeopen;
            //wpis();
            //dostepny();
            clicktime ++;}
      //  this.value= pusty;
    });
    $('.da').on('change',function()
    {
        var pojemnik = document.getElementsByClassName('ta');
        for(var i=0;i<pojemnik.length;i++)
        {
            pojemnik[i].value = pusty;
        }
    });
    $('.ta').on('change',function () {
        konflikt = false;
        var czasu = document.getElementById(serviceid+'U');
        sprawdzpracownika();
        sprawdzdate();
        if(idemoloyee == 0 )
        {
            alert("Wybierz pracownika!");
        }
        if(datawpisana == 0  )
        {
            alert("Wybierz Datę usługi!");
        }
        if(this.value <= timeopen)
        {
            konflikt = true;
        }
        var time = this.value;
        var zm = parseInt(czasu.textContent);
        var timenew = new Date();

        timenew.setHours(time.substr(0, 2));
        timenew.setMinutes(time.substr(3, 2));
        timenew.setMinutes(timenew.getMinutes() + zm);
        time = time +":00";
        var mm = timenew.getMinutes();
        var hh = timenew.getHours();
        if(mm < 10)
        {
            mm = '0'+mm;
        }
        if(hh < 10)
        {
            hh= '0'+hh;
        }

        var konieu = hh + ':' + mm + ':' + '00';
        czaswpisnayzak = konieu;
        if(konieu >= timeclose)
        {
            konflikt = true;
        }
        if(konflikt == false) {
            if (idemoloyee != 0 && datawpisana != 0) {
                for (var i = 0; i < rezerwacje.length; i++) {
                    if (rezerwacje[i]['Reservation']['employees_id'] == idemoloyee && (rezerwacje[i]['Reservation']['reservation_date'] == datawpisana))
                    {
                        if (time >= rezerwacje[i]['Reservation']['timeB'] && time <= rezerwacje[i]['Reservation']['timeE'])
                        {
                            konflikt = true;
                        }
                        if(konieu >= rezerwacje[i]['Reservation']['timeB'] && konieu <= rezerwacje[i]['Reservation']['timeE'])
                        {
                            konflikt = true;
                        }
                        if(time <= rezerwacje[i]['Reservation']['timeB'] && konieu >= rezerwacje[i]['Reservation']['timeE'])
                        {
                            konflikt = true;
                        }
                    }      
                }
            }
        }
        if(konflikt == true)
        {
            var miejsce = document.getElementsByClassName('status');
            miejsce[miejsce.length-1].innerHTML = '<div class="alert alert-danger " style="' +
                'width:655px;margin-top: 14px">'+
                '<a href="#" class="close" data-dismiss="alert">×</a>'+
            '<strong>Uwaga!</strong> Konflikt godzin(Spróbuj innej godziny).'+'</div>';
            // document.getElementById('GodzinyKonflikt').style.backgroundColor = 'red';
            // document.getElementById('GodzinyKonflikt').style.left = '38';


        }
        else
        {
            var miejsce = document.getElementsByClassName('status');
            miejsce[miejsce.length-1].innerHTML = '<div id="myAlert" class="alert alert-success" style="' +
                'width:655px;margin-top: 14px;">'+
            ' <a href="#" class="close" data-dismiss="alert">×</a>'+'<strong>Sukces!</strong> Godziny dobrane odpowienia, aby potwierdzić rezerwacje, naciśnij przycisk "Rezerwuj" .'+
            '</div>';


        }
    });
    $('.pracownik').on('change',function()
    {
        idemoloyee = employees[employees.length-1].value;
        var pojemnik = document.getElementsByClassName('ta');
        for(var i=0;i<pojemnik.length;i++)
        {
            pojemnik[i].value = pusty;
        }
    });

    $('.lightbox').on('click',function()
    {
        serviceid = $(this).data("id");
    });

    $('.rezerwuj').click(function()
    {
        sprawdzpracownika();
        sprawdzdate();
        sprawdzgodzine();
        if(konflikt == true)
        {
            alert("Napraw dane zanim dokonasz rezerwacji");
        }else if(idemoloyee == 0 || datawpisana == 0 || czaswpisany == 0 )
        {

            alert("Nie wpisano wszsystkich danych potrzebnych do rezerwacji");
        }
        else {
            czaswpisany= czaswpisany+':00';
            $.ajax({
                type: "POST",
                data: {
                    reservation_date: rdata,
                    users_id: <?php echo AuthComponent::user('id')?>,
                    services_id: serviceid,
                    employees_id:idemoloyee,
                    timeB:czaswpisany,
                    timeE:czaswpisnayzak
                },
                url: "/PHP-Hairdresser_Salon/Reservations/add/",
                success: function () {
                    window.location.href = '../../reservations/indexuser';
                }
            });
        }

    });

    (function(i,s,o,g,r,a,m)
    {
        i['GoogleAnalyticsObject']=r;i[r]=i[r]||function()
        {
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();
        a=s.createElement(o),m=s.getElementsByTagName(o)[0];
        a.async=1;
        a.src=g;
        m.parentNode.insertBefore(a,m);
    })

    (window,document,'script','//stats.g.doubleclick.net/dc.js','ga');
    ga('create', 'UA-5342062-6', 'noelboss.github.io');
    ga('send', 'pageview');
</script>

