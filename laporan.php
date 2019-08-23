<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DISDUKCAPIL</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700|Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">

</head>

<body>
    <!--Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark cyan fixed-top">
        <div class="container">
                <a class="navbar-brand" href="index.php">
            <img src="images/cab.png" alt="nav-logo">

            </a>
            <a >
            <img src="images/logo2.png" alt="nav-logo">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="laporan.php">Keluhan</a>
                    </li>
                   
            
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">contact </a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" href="login.php">Login </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--/.Navbar -->
    <!--Carousel Wrapper-->
    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
        <!--Slides-->

        <!--/.Slides-->
        <!--/.Controls-->
        
    </div>
    <!--/.Carousel Wrapper-->
 <section class="blog">
        <div class="container">
            <div class="row">
    <!-- Page Content -->


<div class="container py-5 main">
    <br>
    <br>
    <br>
     <h3  class="col-sm-12"> Silahkan Tulis Problem yang anda Alami</h3>
     <br>
     <br>
      <div class="row">

          <div class="col-md-12">
              <form action="setting/send.php" method="POST">
                  <div class="form-group row">
                    <h6 class="col-sm-12"> NIK</h6>
                     <br>
                      <div class="col-sm-5">
                        
                       
                          <input id="nik" name="nik" type="text" class="form-control" placeholder="NIK" >
                      </div>
                      <br>
                      <br>
                       <h6 class="col-sm-12"> Nama Lengkap</h6>
                     <br>
                          <div class="col-sm-6">
                          
                          <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap" >
                      </div>
                       <br>
                      <br>
                       <h6 class="col-sm-12"> No KK</h6>
                     <br>
                      <div class="col-sm-6">
                          <input id="nokk" name="nokk" type="number" class="form-control" placeholder="No KK" >
                      </div>
                       <br>
                      <br>
                       <h6 class="col-sm-12"> Jenis Lembaga</h6>
                     <br>
                      <div class="col-sm-6">
                          <input id="jenislembaga" name="jenislembaga" type="text" class="form-control" placeholder="Jenis Lembaga">
                      </div>
                      <br>
                      <br>
                       <h6 class="col-sm-12"> Kab/Kota</h6>
                     <br>
                      <div class="col-sm-6">
                          <input id="kabkota" name="kabkota" type="text" class="form-control" placeholder="Kab/Kota" >
                      </div>
                       <br>
                      <br>
                       <h6 class="col-sm-12"> HP</h6>
                     <br>
                      <div class="col-sm-6">
                          <input id="hp" name="hp" type="number" class="form-control" placeholder="Kab/Kota" >
                      </div>




                  </div>
                  <div class="form-group row">
                     <h6 class="col-sm-12"> Keluhan</h6>
                     <br>
                      <div class="col-sm-12">
                          <textarea id="problem" name="problem" type="text" class="form-control" placeholder="Keluhan" rows="5" ></textarea>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-primary px-4">Kirim</button>
              </form>
          </div>
      </div>
     </div>
 </div>
</div>




    <!-- Footer -->
    <footer>
        <section class="footer-top">
            <!--Container-->
  
            <!-- /.container -->
        </section>
        <section class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li class="hidden">/</li>
                            <li><a href="about.html">About-us</a></li>
                            <li class="hidden">/</li>
                            <li><a href="mystories.html">My stories</a></li>
                            <li class="hidden">/</li>
                            <li><a href="destinations.html">Destinations</a></li>
                            <li class="hidden">/</li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li class="hidden">/</li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <p>(C) All Rights Reserved <a href="https://www.template.net/editable/websites/html5" target="_blank">DISDUKCAPIL</a> <span>/</span> Designed and Developed by <a href="https://www.template.net/editable/websites/html5" target="_blank">Template.net</a></p>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </section>
    </footer>

    <!-- Return to Top -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
</body>

</html>
