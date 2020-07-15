
<!DOCTYPE html>
<html lang="fr" >
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mon integration</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<div class="container-fluid mob ">
  <div class="open-btn">
    <button class="open-button" onclick="openForm()"><strong>Connexion</strong></button>
  </div>
  <div class="login-popup">
    <div class="form-popup" id="popupForm">
      <form action="/action_page.php" class="form-container">
        <h2>Bienvenu</h2>


        <button type="submit" class="btn">
               <img src="imbo/voyage_template.png" class="img-fluid im" alt="Responsive image">
               <a href="inscription.php" class="t">Agent Login</a></button>
             <button type="submit" class="btn"><img src="imbo/voyage_template.png" class="img-fluid im" alt="Responsive image">
             <a href="inscription.php" class="t">Customer Login</a></button>
             <button type="submit" class="btn">
             <a href="inscription.php" class="t">Note a member? REGISTER</a></button>
             <button type="submit" class="btn">
             <a href="inscription.php" class="t">Call Us Now: 815-123-4567</a></button>
             <button type="submit" class="btn"><img src="imbo/fac.png"  alt="Responsive image">
             <a href="inscription.php" class="t"></a>
           </button>
           <button type="submit" class="btn"><img src="imbo/twiter.png"  alt="Responsive image">
           <a href="inscription.php" class="t"></a>
         </button>
         <button type="submit" class="btn"><img src="imbo/t.png"  alt="Responsive image">
         <a href="inscription.php" class="t"></a>
       </button>
       <button type="submit" class="btn"><img src="imbo/a.png"  alt="Responsive image">
       <a href="inscription.php" class="t"></a>
     </button>

        <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
      </form>
    </div>
  </div>
</div>
<div class="container-fluid bande" id="acc">
 <div class="row">
   <div class="col-lg-8 col-sm-8 ">

       <img src="imbo/voyage_template.png" class="img-fluid im" alt="Responsive image">
       <a href="inscription.php" class="t">Agent Login</a>
         <img src="imbo/border.png" class="img-fluid i" alt="Responsive image">
       <img src="imbo/voyage_template.png" class="img-fluid i" alt="Responsive image">
       <a href="connection.php" class="t">Customer Login</a>
         <img src="imbo/border.png" class="img-fluid i" alt="Responsive image">
       <a href="inscription.php" class="ii" id="to">Note a member? <h6 id="regs">REGISTER </h6></a>
         <img src="imbo/border.png" class="img-fluid i" alt="Responsive image">
       <a href="info.php" id="tt">Call Us Now: 815-123-4567</a>
    </div>
    <div class="col-lg-4 col-sm-4 pos">
        <img src="imbo/border.png" class="img-fluid i" alt="Responsive image">
        <a href="http://facboock.com"><img src="imbo/fac.png" class="img-fluid "id="fbk" alt="Responsive image"><a>
            <img src="imbo/border.png" class="img-fluid i" alt="Responsive image">
        <a href="http://twiter.com"><img src="imbo/twiter.png" class="img-fluid "id="twtr" alt="Responsive image"><a>
            <img src="imbo/border.png" class="img-fluid i" alt="Responsive image">
        <a href="http://email.com"><img src="imbo/t.png" class="img-fluid "id="email" alt="Responsive image"><a>
              <img src="imbo/border.png" class="img-fluid i" alt="Responsive image">
        <a href="http://gmail.com"><img src="imbo/a.png" class="img-fluid " id="emaill" alt="Responsive image"><a>
              <img src="imbo/border.png" class="img-fluid i" alt="Responsive image">
    </div>
 </div>
</div>



     <nav class="navbar navbar-expand-lg navbar-light " id="navbarmobile">
       <img src="imbo/logo.png"class="navbar-brand logomobilep"/>
       <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
         <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
           <li class="nav-item active">
             <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">DESTINATIONS</a>
           </li>
           <li class="nav-item">
             <a class="nav-link disabled" href="#">CRIUSES</a>
           </li>
           <li class="nav-item">
             <a class="nav-link disabled" href="#">SPECIALS</a>
           </li>
           <li class="nav-item">
             <a class="nav-link disabled" href="#">HOLIDAYS</a>
           </li>
           <li class="nav-item">
             <a class="nav-link disabled" href="#">BLOG</a>
           </li>
         </ul>

       </div>
       <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon "></span>
       </button>
     </nav>




     <div class="container-full imagefindetaille">
       <div class="row">
         <div class="col-lg-12">
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

         <div class="carousel-inner">
           <div class="carousel-item active">
                <img class="d-block fmobilee" src="image/image3.jpg" alt="Second slide">
           </div>
           <div class="carousel-item">
             <img class="d-block fmobilee" src="image/image1.jpg" alt="Second slide">
           </div>
           <div class="carousel-item">
             <img class="d-block fmobilee" src="image/image2.jpg" alt="Third slide">
           </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div>
     </div>
       </div>
     </div>























<div class="container-fluid menu  ">
  <div class="row">
    <div class="col-lg-4 col-sm-4 disp">
           <img src="imbo/logo.png" class="img-fluid logo" alt="Responsive image">
    </div>

<div class="col-lg-8 col-sm-8 " >
        <nav class="navbar navbar-expand-lg navbar-light ">
          <a class="navbare" href="#acc">Home</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
          <li class="nav-item active ">
             <a class="nav-link coll" href="#destination">DESTINATIONS <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link coll" href="#criuses">CRIUSES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link coll" href="#spasials">SPECIALS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link coll" href="#holidays">HOLIDAYS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link coll" href="#blog">BLOG</a>
          </li>
   </ul>
   <div >
      <a href="recherche.php"><img src="imbo/rech.png" class="img-fluid " id="rech" alt="Responsive image"><a>
  </div>
  </div>
    </nav>
</div>
</div>
</div>

  </head>
  <body >
