<?php 
include 'config/general_config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title># | Home </title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Animation CSS -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body id="page-top" class="landing-page no-skin-config">
        <div class="navbar-wrapper">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><i class="fa fa-user"></i>&nbsp;Login</a>
                        &nbsp;
                        <a class="navbar-brand" href="index.php"><i class="fa fa-cart-plus"></i>&nbsp;</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" href="#page-top">Home</a></li>
                            <li><a class="page-scroll" href="#product">Product</a></li>
                            <li><a class="page-scroll" href="#team">Team</a></li>
                            <li><a class="page-scroll" href="#testimonials">Testimonials</a></li>
                            <li><a class="page-scroll" href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#inSlider" data-slide-to="0" class="active"></li>
                <li data-target="#inSlider" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="container">
                        <div class="carousel-caption" >
                            <h1 style="text-shadow: 0 0 4px #000;">Set pakar bersih<br/>
                                3 beradik.<br/>
                                Bebas asid<br/>
                                Bebas Kimia</h1>
                            <p style="text-shadow: 0 0 4px #000;">EZICLEAN...menjadikan kerja mendobi pakaian, <br/>mencuci lantai dan pinggan lebih mudah.</p>
                            <p>
                                <a class="btn btn-lg btn-primary" onclick="showModal('pakej_001')" role="button">Lebih Lanjut</a>
                            </p>
                        </div>
                        <div class="carousel-image wow zoomIn">
                            <img src="img/landing/pakej_001.png" alt="laptop"/>
                        </div>
                    </div>
                    <!-- Set background for slide in css -->
                    <div class="header-back one"></div>

                </div>
                <div class="item">
                    <div class="container">
                        <div class="carousel-caption blank">
                            <h1>We create meaningful <br/> interfaces that inspire.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                    <!-- Set background for slide in css -->
                    <div class="header-back two"></div>
                </div>
            </div>
            <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <section id="product" class="">
            <div class="container">
                <div class="row m-b-lg">
                    <div class="col-lg-12 text-center">
                        <div class="navy-line"></div>
                        <h1>Our Product</h1>
                        <p></p>
                    </div>
                </div>
                <div class="row">
                    <?php 
                    $queryGetProduct = "select * from appd_product_detail where appd_is_active = 1 order by appd_remarks, appd_product_name";
                    $resGetProduct = mysqli_query($conn, $queryGetProduct);
                    while($product = mysqli_fetch_assoc($resGetProduct)) {
                    ?>
                        <div class="col-lg-3">
                            <div class="contact-box center-version wow zoomIn">

                                <a onclick="showModal('<?php echo $product['appd_product_code'] ?>')">

                                    <img alt="image" width="150" height="150" class="img-circle" src="<?php echo $product['appd_image_link'] ?>" />


                                    <h3 class="m-b-xs"><strong><?php echo $product['appd_product_name'] ?></strong></h3>

                                    <div class="font-bold">RM <?php echo number_format($product['appd_product_price'],2); ?></div>
                                    <address class="m-t-md">
                                        <strong>Kategori</strong><br>
                                        <?php getKategoriLabel($product['appd_remarks']) ?>
                                    </address>

                                </a>
                                <div class="contact-box-footer">
                                    <div class="m-t-xs btn-group">
                                        <a class="btn btn-xs btn-white"><i class="fa fa-shopping-cart"></i> Tambah</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="gray-section team">
        <div class="container">
            <div class="row m-b-lg">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>Our Team</h1>
                    <p></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 wow fadeInLeft">
                    <div class="team-member">
                        <img src="img/landing/avatar3.jpg" class="img-responsive img-circle img-small" alt="">
                        <h4><span class="navy">Amelia</span> Smith</h4>
                        <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus. </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member wow zoomIn">
                        <img src="img/landing/avatar1.jpg" class="img-responsive img-circle" alt="">
                        <h4><span class="navy">John</span> Novak</h4>
                        <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInRight">
                    <div class="team-member">
                        <img src="img/landing/avatar2.jpg" class="img-responsive img-circle img-small" alt="">
                        <h4><span class="navy">Peter</span> Johnson</h4>
                        <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>Awards receive</h1>
                    <p></p>
                </div>
            </div>
            <div class="row features-block">
                <div class="col-lg-3 features-text wow fadeInLeft">
                    <small>INSPINIA</small>
                    <h2>Perfectly designed </h2>
                    <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with latest jQuery plugins.</p>
                    <a href="" class="btn btn-primary">Learn more</a>
                </div>
                <div class="col-lg-6 text-right m-t-n-lg wow zoomIn">
                    <img src="img/landing/iphone.jpg" class="img-responsive" alt="dashboard">
                </div>
                <div class="col-lg-3 features-text text-right wow fadeInRight">
                    <small>INSPINIA</small>
                    <h2>Perfectly designed </h2>
                    <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with latest jQuery plugins.</p>
                    <a href="" class="btn btn-primary">Learn more</a>
                </div>
            </div>
        </div>

    </section>

    <!--timeline-->
    <section class="timeline gray-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>Our workflow</h1>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. </p>
                </div>
            </div>
            <div class="row features-block">

                <div class="col-lg-12">
                    <div id="vertical-timeline" class="vertical-container light-timeline center-orientation">
                        <div class="vertical-timeline-block">
                            <div class="vertical-timeline-icon navy-bg">
                                <i class="fa fa-truck"></i>
                            </div>

                            <div class="vertical-timeline-content">
                                <h2>Meeting</h2>
                                <p>Conference on the sales results for the previous year. Monica please examine sales trends in marketing and products. Below please find the current status of the sale.
                                </p>
                                <a href="#" class="btn btn-xs btn-primary"> More info</a>
                                <span class="vertical-date"> Today <br/> <small>Dec 24</small> </span>
                            </div>
                        </div>

                        <div class="vertical-timeline-block">
                            <div class="vertical-timeline-icon navy-bg">
                                <i class="fa fa-file-text"></i>
                            </div>

                            <div class="vertical-timeline-content">
                                <h2>Decision</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                <a href="#" class="btn btn-xs btn-primary"> More info</a>
                                <span class="vertical-date"> Tomorrow <br/> <small>Dec 26</small> </span>
                            </div>
                        </div>

                        <div class="vertical-timeline-block">
                            <div class="vertical-timeline-icon navy-bg">
                                <i class="fa fa-cogs"></i>
                            </div>

                            <div class="vertical-timeline-content">
                                <h2>Implementation</h2>
                                <p>Go to shop and find some products. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's. </p>
                                <a href="#" class="btn btn-xs btn-primary"> More info</a>
                                <span class="vertical-date"> Monday <br/> <small>Jan 02</small> </span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>

    <!--testimoni-->
    <section id="testimonials" class="comments" style="margin-top: 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>What our Customer say</h1>
                    <p></p>
                </div>
            </div>
            <div class="row features-block">
                <div class="col-lg-4">
                    <div class="bubble">
                        "Uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
                    </div>
                    <div class="comments-avatar">
                        <a href="" class="pull-left">
                            <img alt="image" src="img/landing/avatar3.jpg">
                        </a>
                        <div class="media-body">
                            <div class="commens-name">
                                Andrew Williams
                            </div>
                            <small class="text-muted">Company X from California</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="bubble">
                        "Uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
                    </div>
                    <div class="comments-avatar">
                        <a href="" class="pull-left">
                            <img alt="image" src="img/landing/avatar1.jpg">
                        </a>
                        <div class="media-body">
                            <div class="commens-name">
                                Andrew Williams
                            </div>
                            <small class="text-muted">Company X from California</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="bubble">
                        "Uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
                    </div>
                    <div class="comments-avatar">
                        <a href="" class="pull-left">
                            <img alt="image" src="img/landing/avatar2.jpg">
                        </a>
                        <div class="media-body">
                            <div class="commens-name">
                                Andrew Williams
                            </div>
                            <small class="text-muted">Company X from California</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row features-block">
                <div class="col-lg-4">
                    <div class="bubble">
                        "Uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
                    </div>
                    <div class="comments-avatar">
                        <a href="" class="pull-left">
                            <img alt="image" src="img/landing/avatar3.jpg">
                        </a>
                        <div class="media-body">
                            <div class="commens-name">
                                Andrew Williams
                            </div>
                            <small class="text-muted">Company X from California</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="bubble">
                        "Uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
                    </div>
                    <div class="comments-avatar">
                        <a href="" class="pull-left">
                            <img alt="image" src="img/landing/avatar1.jpg">
                        </a>
                        <div class="media-body">
                            <div class="commens-name">
                                Andrew Williams
                            </div>
                            <small class="text-muted">Company X from California</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="bubble">
                        "Uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
                    </div>
                    <div class="comments-avatar">
                        <a href="" class="pull-left">
                            <img alt="image" src="img/landing/avatar2.jpg">
                        </a>
                        <div class="media-body">
                            <div class="commens-name">
                                Andrew Williams
                            </div>
                            <small class="text-muted">Company X from California</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--contact-->
    <section id="contact" class="gray-section contact">
        <div class="container">
            <div class="row m-b-lg">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>Contact Us</h1>
                    <p></p>
                </div>
            </div>
            <div class="row m-b-lg">
                <div class="col-lg-3 col-lg-offset-3">
                    <address>
                        <strong><span class="navy">#</span></strong><br/>
                        1 Jln Legenda 6, Taman Legenda<br/>
                        85300, Segamat, Johor MY<br/>
                        <abbr title="Phone">HP:</abbr> (017) 748-4636
                    </address>
                </div>
                <div class="col-lg-4">
                    <p class="text-color">

                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="https://api.whatsapp.com/send?phone=60177484636&text=Hi #. I have a question." target="_blank" class="btn btn-primary"><i class="fa fa-whatsapp"></i>&nbsp; Whatsapp Us</a>
                    <p class="m-t-sm">
                        Or follow us on social platform
                    </p>
                    <ul class="list-inline social-icon">
                        <li><a href="https://www.facebook.com/sitirohani.said" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/mhmd_asyraf/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                    <p><strong>Solution4u &copy; 2017 Hashtag</strong><br/> Your trusted healthy product seller.</p>
                </div>
            </div>
        </div>
    </section>

    <!--modal-->
    <div id="modal-form" class="modal fade" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="myvar">
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <script src="js/plugins/wow/wow.min.js"></script>


    <script>

        $(document).ready(function () {

            $('body').scrollspy({
                target: '.navbar-fixed-top',
                offset: 80
            });

            // Page scrolling feature
            $('a.page-scroll').bind('click', function (event) {
                var link = $(this);
                $('html, body').stop().animate({
                    scrollTop: $(link.attr('href')).offset().top - 50
                }, 500);
                event.preventDefault();
                $("#navbar").collapse('hide');
            });
        });

        var cbpAnimatedHeader = (function () {
            var docElem = document.documentElement,
                    header = document.querySelector('.navbar-default'),
                    didScroll = false,
                    changeHeaderOn = 200;
            function init() {
                window.addEventListener('scroll', function (event) {
                    if (!didScroll) {
                        didScroll = true;
                        setTimeout(scrollPage, 250);
                    }
                }, false);
            }
            function scrollPage() {
                var sy = scrollY();
                if (sy >= changeHeaderOn) {
                    $(header).addClass('navbar-scroll')
                } else {
                    $(header).removeClass('navbar-scroll')
                }
                didScroll = false;
            }
            function scrollY() {
                return window.pageYOffset || docElem.scrollTop;
            }
            init();

        })();

        // Activate WOW.js plugin for animation on scrol
        new WOW().init();
        
        function showModal(product) {
        $.ajax({
            type: "POST",
            url: "ajax/ajax_product_detail.php",
            data: {product: product},
            success: function (data) {
                //alert(data);
                $('#myvar').html(data);
                $('#modal-form').modal('show');
            }
        });
    }

    </script>

</body>
</html>
