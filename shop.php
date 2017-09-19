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
                        <a class="navbar-brand" href="500.html"><i class="fa fa-user"></i>&nbsp;Log Masuk</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" href="#page-top">Utama</a></li>
                            <li><a class="page-scroll" href="#product">Produk</a></li>
                            <li><a class="page-scroll" href="#team">FAQ</a></li>
                            <!--<li><a class="page-scroll" href="#testimonials">Testimoni</a></li>-->
                            <li><a class="page-scroll" href="#contact">Hubungi Kami</a></li>
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
                        <h1>Produk Kami</h1>
                        <p></p>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $i = 0;
                    $queryGetProduct = "select * from appd_product_detail where appd_is_active = 1 order by appd_remarks, appd_product_name";
                    $resGetProduct = mysqli_query($conn, $queryGetProduct);
                    while ($product = mysqli_fetch_assoc($resGetProduct)) {
                        $i++;
                        if ($i == 4) {
                            echo "<div class='row'>";
//                            $i = 0;
                        }
                        ?>

                        <div class="col-lg-3">
                            <div class="contact-box center-version wow zoomIn">

                                <a onclick="showModal('<?php echo $product['appd_product_code'] ?>')">

                                    <img alt="image" width="150" height="150" class="img-circle" src="<?php echo $product['appd_image_link'] ?>" />


                                    <h3 class="m-b-xs"><strong><?php echo $product['appd_product_name'] ?></strong></h3>

                                    <div class="font-bold">RM <?php echo number_format($product['appd_product_price'], 2); ?></div>
                                    <address class="m-t-md">
                                        <strong>Kod Produk</strong><br>
                                        <?php echo $product['appd_product_code']; ?><br><br>
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
                        <?php
                        if ($i == 4) {
                            echo "</div>";
                            $i = 0;
                        }
                        ?>
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
                    <h1>FAQ</h1>
                    <p></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                Apakah bezanya Hai-O Garam Buluh dengan garam biasa?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            Hai-O Garam Buluh menggunakan garam dijemur di bawah matahari yang berorganik dan 100% semulajadi sebagai sumber. Garam ini diperolehi daripada air laut yang kaya dengan tenaga bijih-bijih bawah tanah Pulau Xiongjin dan Pulau Yanping yang terletak di Pantai Barat Korea. Garam semulajadi ini dimasukkan ke dalam buluh yang berusia tiga tahun, kemudian ditutup dengan tanah liat, dimasukkan ke dalam relau bagas, dan dibakar dengan pokok pine sehingga buluh dibakar menjadi serbuk dan ketulan garam buluh terbentuk. Garam buluh telah menyingkirkan bahan berbahaya terhadap badan (misalnya logam berat dan bahan kimia) dalam proses pembuatannya, pada masa yang sama meningkatkan nilai nutrisinya. Kebanyakan garam melalui pemprosesan kimia, kandungan natrium adalah lebih tinggi, justeru itu, pengambilan masa panjang akan memudaratkan kesihatan.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                Bolehkah kanak-kanak dan ibu mengandung mengambil Hai-O Garam Buluh?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Boleh, dengan saiz pengambilan yang kurang iaitu ¼ hingga ½ bungkus.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                Bolehkah garam makan seharian diganti dengan Hai-O Garam Buluh?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Boleh, Hai-O Garam Buluh kaya dengan bahan mineral dan elemen surih, dapat menggantikan garam biasa sepenuhnya.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>Anugerah Diterima</h1>
                    <p></p>
                </div>
            </div>
            <div class="row features-block">
                <div class="col-lg-3 features-text wow fadeInLeft">
                    <small>Akan Datang</small>
                    <!--<h2></h2>-->
                    <!--<p></p>-->
                </div>
                <div class="col-lg-6 text-right m-t-n-lg wow zoomIn">
                    <img src="img/landing/trophies.png" class="img-responsive" alt="dashboard">
                </div>
                <div class="col-lg-3 features-text text-right wow fadeInRight">
                    <small>Akan Datang</small>
                    <!--<h2>Perfectly designed </h2>-->
                    <!--<p></p>-->
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
                    <h1>Bagaimana untuk membeli?</h1>
                    <!--<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. </p>-->
                </div>
            </div>
            <div class="row features-block">

                <div class="col-lg-12">
                    <div id="vertical-timeline" class="vertical-container light-timeline center-orientation">
                        <div class="vertical-timeline-block">
                            <div class="vertical-timeline-icon navy-bg">
                                <i class="fa fa-whatsapp"></i>
                            </div>

                            <div class="vertical-timeline-content">
                                <h2>Whatsapp</h2>
                                <p>Want-to-buy <br/>
                                    [Kod Produk] : [Kuantiti] <br/><br/>
                                    Nama : <br/>
                                    No. Telefon : <br/>
                                    Alamat : <br/>
                                </p>
                            </div>
                        </div>

                        <div class="vertical-timeline-block">
                            <div class="vertical-timeline-icon navy-bg">
                                <i class="fa fa-calculator"></i>
                            </div>

                            <div class="vertical-timeline-content">
                                <h2>Buat Pembayaran <small>Pembayaran Online / CDM</small></h2>
                                <p>Maybank : 101114188948 - Siti Rohani Bt Said</p>
                                <p>Hantar gambar resit/bukti pembayaran melalui Whatsapp</p>
                            </div>
                        </div>

                        <div class="vertical-timeline-block">
                            <div class="vertical-timeline-icon navy-bg">
                                <i class="fa fa-wechat"></i>
                            </div>

                            <div class="vertical-timeline-content">
                                <h2>Tunggu No. Tracking</h2>
                                <p>Pihak kami akan hantar No. Tracking selepas penghantaran dibuat.</p>
                                <a href="http://poslaju.com.my/track-trace-v2/" target="_blank" class="btn btn-xs btn-primary">Track</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--testimoni-->
    <?php /*
      <section id="testimonials" class="comments" style="margin-top: 0">
      <div class="container">
      <div class="row">
      <div class="col-lg-12 text-center">
      <div class="navy-line"></div>
      <h1>Apa pelanggan kami kata</h1>
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
     */ ?>
    <!--contact-->
    <section id="contact" class="gray-section contact">
        <div class="container">
            <div class="row m-b-lg">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>Hubungi Kami</h1>
                    <p></p>
                </div>
            </div>
            <div class="row m-b-lg">
                <div class="col-lg-3 col-lg-offset-3">
                    <!--                    <address>
                                            <strong><span class="navy">#</span></strong><br/>
                                            1 Jln Legenda 6, Taman Legenda<br/>
                                            85300, Segamat, Johor MY<br/>
                                            <abbr title="Phone">HP:</abbr> (017) 748-4636
                                        </address>-->
                </div>
                <div class="col-lg-4">
                    <p class="text-color">

                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="https://api.whatsapp.com/send?phone=60177484636&text=PM. Pertanyaan STG." target="_blank" class="btn btn-primary"><i class="fa fa-whatsapp"></i>&nbsp; Whatsapp Kami</a>
                    <p class="m-t-sm">
                        atau ikuti kami di laman sosial
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
