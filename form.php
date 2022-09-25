<?php include("db.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="./css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>PlusTalent Guatemala</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar navbar-light bg-dark fixed-top" style="background-color: black; display: flex; opacity: 0.8;">
  <div class="container-fluid">
    <img src="./img/logplus.png" alt="" width="100px">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Inicio
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://www.plustalent.com.gt/servicios.html">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="empleo.php">Bolsa de empleo</a>
          <span class="visually-hidden">(current)</span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://www.plustalent.com.gt/contacto.html">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/s1.jpg" class="d-block w-100" alt="..." style="opacity: 0.65;">
    </div>
    <div class="carousel-item">
      <img src="./img/s2.jpg" class="d-block w-100" alt="..."style="opacity: 0.65;">
    </div>
    <div class="carousel-item">
      <img src="./img/s3.jpg" class="d-block w-100" alt="..."style="opacity: 0.65;">
    </div>
  </div>
  <div class="carousel-caption d-none d-md-block">
    <h1>Talento, compromiso y pasión <br> Asesorías de RRHH</h1>
   </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> <br>
<br><br>
  <div class="col-md-12 col-sm-12 col-xs-12">
      <h1 style="text-align:center;">Adjuntar hoja de vida</h1><br>

      


    <?php if(isset($_SESSION['message'])) { ?>
        <center><div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div></center>
    <?php session_unset(); } ?>

      <div class="form contact-form">
                <form action="save_task.php" method="POST" id="frm">
                  <div class="form-row">
    <div class="form-group col-md-6" id="divNombre" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
      <label for="inputEmail4">Nombre</label>
      <input type="text" class="form-control" name="nombre" placeholder="Nombre completo">
    </div>
    <div class="form-group col-md-6" id="divTel" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
      <label for="inputPassword4">Teléfono</label>
      <input type="text" class="form-control" name="tel" placeholder="Teléfono">
    </div><br>
  </div>
   <div class="form-row">
    <div class="form-group col-md-6" id="divCorreo" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
         
  <label for="inputEmail4">Correo</label>
      <input type="email" class="form-control" name="correo">
 
    </div>
    <div class="form-group col-md-6" id="divPlaza" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
      <label for="inputEmail4">Plaza a la que aplica</label>
      <input type="text" class="form-control" name="plaza">
    </div><br>
     <div class="form-group col-md-6" id="divSalario" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
      <label for="inputEmail4">¿Cuál es su pretensión salarial?</label>
      <input type="text" class="form-control" name="pretencion" placeholder="Ej. Q.3,000.00">
    </div>
     <div class="form-group col-md-6" id="divExp" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
      <label for="inputPassword4">Indique cuál es la experiencia que posee relacionada con el puesto</label>
      <input type="text" class="form-control" name="experiencia" placeholder="He trabajado en...">
    </div><br>
  </div>
  
   <div class="form-row">
    <div class="form-group col-md-6" id="divResi" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
 <label for="inputPassword4">Indique en donde reside actualmente</label>
      <input type="text" class="form-control" name="residencia" placeholder="Ej. Calzada Roosevelt...">
    </div>
    <div class="form-group col-md-6" id="divDispo" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
     <label for="inputPassword4">Disponibilidad inmediata</label>
      <input type="text" class="form-control" name="disponibilidad" placeholder="Si/No/Otro.">
    </div>
  </div><br>
  <center>
  <input type="submit" class="btn btn-primary" Value="Enviar" name="save_task" data-aos="fade-right">
  <a href="ver.php" class="btn btn-primary" data-aos="fade-left"> Ver Datos</a></center>
                </form>
              </div>
            </div>
          </div>
   <br><br>

   <div class="reviews-area" >
  <div class="row no-gutters">
    <div class="col-lg-6 py-0">
      <img src="./img/2.jpg" alt="" class="img-fluid">
    </div>
    <div class="col-lg-6 work-right-text d-flex align-items-center">
      <div class="px-5 py-5 py-lg-0">
        <h2>Comunícate con nosotros vía WhatsApp</h2>
        <h5>Será todo un placer atenderte...</h5>
        <a href="https://wa.link/s8qjs2" target="blank" class="btn btn-outline-info">WhatsApp</a>
      </div>
    </div>
  </div>
</div><br>

<footer class="bg-light">
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span class="text-primary">Plus Talent</span><br> Guatemala</h2>
                </div>
                <p style="text-align:justify;">Nuestro equipo de trabajo está conformado por  profesionales comprometidos en brindar un servicio de calidad, nos apasiona nuestro trabajo y nuestro compromiso es cumplir con las expectativas de nuestros clientes brindando soluciones para contribuir con organizaciones a lograr cambios, alcanzar sus visiones y optimizar su rendimiento y productividad.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Información</h4>
                <p>
                  Comunícate con nosotros, sera un placer atenderte...
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +502 66109681</p>
                  <p><span>Email:</span> informacion@plustalent.com.gt</p>
                  <p><span>Direccion: </span> 9 calle 0-19 zona 1 Guatemala</p>
                </div>
                <div class="social-links" >
                  <a href="https://twitter.com/PlusTalent_"  class="twitter"><img src="./img/twt.png" style=" width:40px;"></a>
                  <a href="https://www.facebook.com/plustalentrrhh" class="facebook"><img src="./img/fb.png" style=" width:40px;"></a>
                  <a href="https://www.instagram.com/plus_talent/?hl=es-la"  class="instagram"><img src="./img/ig.png" style=" width:40px;"></a>
                  <a href="https://www.linkedin.com/in/plus-talent-guatemala-a910a41a3"  class="linkedin"><img src="./img/in.png" style=" width:40px;"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Facebook</h4>
                <div class="sidebar">
                <center>
                    <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/plustalentrrhh" data-tabs="timeline" data-width="300" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=350&amp;height=250&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fplustalentrrhh&amp;locale=es_LA&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=300"><span style="vertical-align: bottom; width: 300px; height: 250px;"><iframe name="f68006ced73a88" width="300px" height="250px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v7.0/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df87d66e81ccb3c%26domain%3Dwww.plustalent.com.gt%26is_canvas%3Dfalse%26origin%3Dhttp%253A%252F%252Fwww.plustalent.com.gt%252Ff15e5f0d1a0069%26relation%3Dparent.parent&amp;container_width=350&amp;height=250&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fplustalentrrhh&amp;locale=es_LA&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=300" style="border: none; visibility: visible; width: 300px; height: 250px;" class=""></iframe></span></div>
                </center>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>&copy; Robinson Dávila. All Rights Reserved </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>