

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
            width:500px;
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

                                <div class="lightbox" id="fl<?php echo $nrwiersza?>">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                Usługa: <?php echo $service['Service']['service_name']?>
                                            </div>
                                            <div class="col-lg-6">
                                                <p>
                                                    Planowany czas trwania usługi: <?php echo $service['Service']['service_time']?>
                                                </p>
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
                                            <?php echo "Data Usługi".$this->Form->date('screening_date',array('class' => 'form-control input-lg'));?>
                                            <?php  echo "Godzina Usługi".$this->Form->time('time',array('class' => 'form-control input-lg'));?>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                                <?php echo $this->Form->input('employees',array('label' => 'Pracownik','empty'=>'Wybierz pracownika..','class' => 'form-control input-lg'));?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="status">
                                                <p class="text-center">Wolny/Zajęty termin</p>
                                            </div>
                                            <?php echo $this->Html->link('Zarezerwuj miejsce',array('controller' => 'Salons', 'action' => 'view', $salon['Salon']['id']),array('class'=>'btn btn-primary'))?>
                                            <?php echo $this->Form->end(__('Dodaj Pracownik')); ?>
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
    (function(i,s,o,g,r,a,m)
    {
        i['GoogleAnalyticsObject']=r;i[r]=i[r]||function()
        {
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();
        a=s.createElement(o),m=s.getElementsByTagName(o)[0];
        a.async=1;
        a.src=g;
        m.parentNode.insertBefore(a,m)
    })
    (window,document,'script','//stats.g.doubleclick.net/dc.js','ga');

    ga('create', 'UA-5342062-6', 'noelboss.github.io');
    ga('send', 'pageview');
</script>
