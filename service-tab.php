<?php
    $active = "project";
    if(isset($_GET['active'])) {
        $active = $_GET['active'];
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Builder - Constrcution Website Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/owl-carousel.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,300italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href="css/custom.css" rel="stylesheet">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="css/extralayers.css" media="screen" /> 
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div id="wrapper">
        <?php include("header.php"); ?>

        <header class="header clearfix">
            <div class="container-fluid">
                <nav id="jtheader" class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><img src="images/logo_var4-01.png" alt=""></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            
                            <li><a href="about.php">О компании</a></li>
                            <li class="active"><a href="service-tab.php">Наши услуги</a></li>
                            <li ><a href="projects.php">Наши проекты</a></li>
                            <li><a href="shop.php">Технологии</a></li>
                            <li><a href="contant.php">Контакты</a></li>
                            
                          </ul>
                    </div><!--/.nav-collapse -->
                </nav>
            </div><!--/.container-fluid -->
        </header><!-- end header -->

        <section class="page-white bgpatttern clearfix">
            <div class="section-title">
                <h3>Наши услуги</h3>
            </div><!-- end section title -->
        </section><!-- end section white -->

        <section class="section-w clearfix">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bhoechie-tab-menu">
                            <div class="list-group">
                                <a href="#" class="list-group-item <?php echo $active == 'project' ? 'active' : '' ?> text-center">Проектирование</a>
                                <a href="#" class="list-group-item <?php echo $active == 'construct' ? 'active' : '' ?> text-center">Строительство</a>
                                <a href="#" class="list-group-item <?php echo $active == 'landscape' ? 'active' : '' ?> text-center">Ландшафтные работы и благоустройство</a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 bhoechie-tab">
                            <!-- flight section -->
                            <div class="bhoechie-tab-content active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Компания ООО «Свой Дом» сотрудничает с архитекртурными студиями и частными архитекторами Санкт-Петербурга. Это партнерство обеспечивает контроль и анализ всех проектов нами, а так же услуги авторского надзора со стороны проектировщиков. </h4>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <p>ООО «Свой Дом» обеспечивает для своих клиентов инженерное проектирование всех разделов:</p>

                                        <ul>
                                            <li> Отопление</li>
                                            <li> Водоснабжение, канализация</li>
                                            <li> Электроснабжение</li>
                                            <li> Газовые котельные</li>
                                            <li> Локальные очистные сооружения</li>
                                            </ul>
                                    </div>

                                   
                                </div><!-- end row -->
                                <div class="button_show_all show_all_about">
                                        <a href="projects.php">
                                        <span class="butto">
                                        Наши проекты
                                        </span>
                                        </a>
                                </div>
                            </div>

                            <div class="bhoechie-tab-content">
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Компания ООО «Свой Дом» выполняет <b>строительство загородных домов</b> с применением самых качественных и экологичных материалов, изготовленных финскими и отечественными производителями. </h4>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <p>Что представляет собой строительство загородного дома от Компании «Свой Дом»?</p>
                                            <ul>
                                            <li> Строительство из газобетона и кирпича</li>
                                            <li> Строительство деревянных домов из клееного бруса</li>
                                            <li> Монтаж инженерных сетей загородного дома</li>
                                            <li> Внешние и внутренние отделочные работы</li>
                                            <li> Оформление исполнительной документации</li>
                                            <li> Гарантийное и послегарантийное обслуживание </li>
                                            </ul>
                                        
                                    </div>
                                    
                                  
                                </div><!-- end row -->
                                <div class="button_show_all show_all_about">
                                        <a href="projects.php">
                                        <span class="butto">
                                        Наши проекты
                                        </span>
                                        </a>
                                </div>
                            </div>

                            <div class="bhoechie-tab-content">
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>620 Memorial Drive in Cambridge was renovated from core structure for Hybridon, Inc., now Pfizer occupies the building. Interesting fact: During early construction, the basement was flooded to the extent that the only access to the water shut off valves in the basement was by boat.</h4>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc.</p>

                                        <p>Oroin condimentum fermentum nunc. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>

                                        <p>Proin condimentum fermentum nunc. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit tincidunt auctor a ornare odio.</p>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc.</p>

                                        <p>Oroin condimentum fermentum nunc. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>

                                        <p>Proin condimentum fermentum nunc. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit tincidunt auctor a ornare odio.</p>
                                    </div>
                                </div><!-- end row -->
                                <div class="button_show_all show_all_about">
                                        <a href="projects.php">
                                        <span class="butto">
                                        Наши проекты
                                        </span>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <hr>

        <?php include("footer.php"); ?>

        <section class="copyrights text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 footer-texture">
                        <h4> ООО «Свой дом» © Все права защищены 2009 - 2016</h4>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end conpyrights -->

        <div class="dmtop">Scroll to Top</div>

    </div><!-- /#wrapper -->
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/masonry.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/owl-scripts.js"></script>
    <script src="js/custom.js"></script>

    

</body>
</html>