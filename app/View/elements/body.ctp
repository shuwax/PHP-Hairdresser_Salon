<?php
$salons = $this->requestAction(array('controller'=>'salons','action'=>'index'));

?>

<!DOCTYPE html>
<html lang="en">

<style>
    #myCarousel
    {
        top: -19px;
    }
    .thumbnail a>img, .thumbnail>img {
        width: 340px !important;
        height: 138px !important;
        margin-right: auto;
        margin-left: auto;
    }
</style>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">
    <link href="css/half-slider.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>







<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <?php $ilosc=0?>
    <?php $iloscs=1?>
    <ol class="carousel-indicators">
        <?php foreach($salons as $salon):?>
            <li data-target="<?php echo "#myCarouse".$iloscs?>" data-slide-to="0" class="active"></li>
            <?php $iloscs++?>
        <?php endforeach;?>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php  $test1=0;?>
        <?php foreach($salons as $salon):?>
            <?php if($ilosc == 0):?>
                <div class="item active">
                    <div class="row text-center">
                        <?php foreach($salons as $salon):?>
                            <?php if($test1 < 4 && $salon['Salon']['promowane'] == 1):?>
                                <div class="col-md-3 col-sm-6 hero-feature">
                                    <div class="thumbnail" id="zdjecieslider">
                                        <?php echo $this->Html->image('../files/salon/filename/'.$salon['Salon']['id'].'/'.$salon['Salon']['filename'],array(
                                            'url' => array('controller' => 'Salons', 'action' => 'view', $salon['Salon']['id'])));?>
                                        <div class="caption">
                                            <h3><?php echo $salon['Salon']['name'];?></h3>
                                            <?php echo $salon['Salon']['city'];?>
                                            <p>
                                                <?php echo $this->Html->link('Zarezerwuj miejsce',array('controller' => 'Salons', 'action' => 'view', $salon['Salon']['id']),array('class'=>'btn btn-primary'))?>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php $test1= $test1+1; ?>
                            <?php endif?>
                        <?php endforeach;?>
                    </div>
                </div>
            <?php endif;?>
            <?php if($ilosc !=0):?>
                <?php  $test1=0;?>
                <div class="item">
                    <div class="row text-center">
                        <?php foreach($salons as $salon):?>
                            <?php if($test1 < 4 && $salon['Salon']['promowane'] == 1):?>
                                <div class="col-md-3 col-sm-6 hero-feature">
                                    <div class="thumbnail" id="zdjecieslider">
                                        <?php echo $this->Html->image('../files/salon/filename/'.$salon['Salon']['id'].'/'.$salon['Salon']['filename'],array(
                                            'url' => array('controller' => 'Salons', 'action' => 'view', $salon['Salon']['id'])));?>

                                        <div class="caption">

                                            <h3><?php echo $salon['Salon']['name'];?></h3>

                                            <?php echo $salon['Salon']['city'];?>
                                            <p>
                                                <?php echo $this->Html->link('Zarezerwuj miejsce',array('controller' => 'Salons', 'action' => 'view', $salon['Salon']['id']),array('class'=>'btn btn-primary'))?>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php $test1= $test1+1; ?>
                            <?php endif?>
                        <?php endforeach;?>
                    </div>
                </div>
            <?php endif;?>
            <?php $ilosc++?>
        <?php endforeach;?>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<!-- Page Content -->
<div class="container">

    <hr>

    <!-- Title -->
    <div class="row">
        <div class="col-lg-12">
            <h3>Nowości</h3>
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Features -->
    <div class="row text-center">
        <?php foreach($salons as $salon):?>
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <?php echo $this->Html->image('../files/salon/filename/'.$salon['Salon']['id'].'/'.$salon['Salon']['filename'],array(
                        'url' => array('controller' => 'Salons', 'action' => 'view', $salon['Salon']['id'])));?>

                    <div class="caption">

                        <h3><?php echo $salon['Salon']['name'];?></h3>

                        <?php echo $salon['Salon']['city'];?>
                        <p>
                            <?php echo $this->Html->link('Zarezerwuj miejsce',array('controller' => 'Salons', 'action' => 'view', $salon['Salon']['id']),array('class'=>'btn btn-primary'))?>

                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->


</body>

</html>


<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>