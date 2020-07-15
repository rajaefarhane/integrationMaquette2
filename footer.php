<script>
  function openForm() {
    document.getElementById("popupForm").style.display="block";
  }

  function closeForm() {
    document.getElementById("popupForm").style.display="none";
  }
  //Affecte la nouvelle image lorsque la souris survole l'élément
function passaeDeLaSouris(element) {
element.setAttribute('src', 'imbo/cercle.png');
}
//Affecte l'image de départ lorsque la souris ne survole plus l'élément
function departDeLaSouris(element) {
element.setAttribute('src', 'imbo/cerc.png');
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

<div class="container-fluid bdim fni" id="blog">
  <div class="row mrg">
    <div class="col-lg-2 col-sm-2">
    </div>
    <div class="col-lg-2 col-sm-2 mrg">
           <h3 class="ftr">Newsletter </h3><br>
           <p class="bla">
            Duis autem vel eum iriure dolor in<br>
            hendrerit in vulputate velit esse<br>
            molestie consequat, vel illum dolore.<br></p>
            <input class="form-control" id="gg"  type="text" placeholder="subscribs...">
            <button type="button" id="p2">GO</button>
    </div>
    <div class="col-lg-2 col-sm-2 mrg">
               <h3 class="ftr">Latest News </h3><br>
               <div class="row ">
                 <img src="imbo/ft1.png" id="dde"/><p>
                 <p class="vv">
                 Postformat Gallery: Multiple <br>
                 images<br>
                 <h6 class="bleu"> October 21, 2013 - 3:31 pm</h6> <br></p>
            </div>
    <div class="row ">
              <img src="imbo/ft2.png" id="dde"/><p>

  <p class="vv">
Snowboarding is fun!<br>
<h6 class="bleu">December 12, 2012 - 9:11 pm</h6></p></div>

  </div>
   <div class="col-lg-2 col-sm-2 mrg">
      <h3 class="ftr">Tags </h3><br>
 <div class="row">
     <button type="button "class="m1">Agent Login</button>
     <button type="button "class="m1">custmer login</button>
  </div>

 <div class="row">
      <button type="button "class="m1">Note a member</button>
      <button type="button "class="m1">contact</button>
 </div>
 <div class="row">
       <button type="button "class="m1">New horizons</button>
       <button type="button "class="m1">Lanscape</button>
       <button type="button "class="m1">tags</button>
</div>
<div class="row">
      <button type="button "class="m1">Nice</button>
      <button type="button "class="m1">Soms</button>
      <button type="button "class="m1">Portrait</button>
</div>
    </div>
    <div class="col-lg-2 col-sm-2 mrg">
           <h3 class="ftr">Address </h3><br>
           <button class="btncontact" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
           <div id="id01" class="modal">

             <form class="modal-content animate" action="" method="post">
               <div class="imgcontainer">
                 <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                 <img src="imbo/logo.png" alt="Avatar" class="avatar">
               </div>

               <div class="container">
                 <label for="uname" class="emailform"><b>email</b></label><br>
                 <input type="email" placeholder="name@gmail.com" name="pseudo_exp" required class="emailfor"><br>
                 <label for="uname" class="emailform"><b>objet</b></label><br>
                 <input type="text" placeholder="objet" name="email_exp" required class="emailfor"><br>
                 <label for="psw" class="emailform1"><b >message</b></label><br>
                 <input type="text"  name="message" required class="emailfor1"><br>
                                <div class="container" style="background-color:#f1f1f1">
                                   <button type="submit" class="btncontact">submit</button>
                                   <button type="submit" class="btncontact1"onclick="document.getElementById('id01').style.display='none'" >cancel</button>
                                </div>
               </div>
             </form>
             <?php
             if (isset($_POST)&& !empty($_POST['pseudo_exp'])&& !empty($_POST['email_exp'])&& ! empty($_POST['message'])) {
               extract($_POST);
               $destinataire='rajae19beddi@gmail.com';
               $expediteur=$pseudo_exp;
               $mail=mail($destinataire,$expediteur,$objet,$message,'de patrimgest.com : Mail de test');
               if ($mail){
                 echo'email envoyer avec succées !!';}
              else {
                echo'echec de envoi de mail';
              }
             }
             else {
               echo "formulaire non soumis ou des champs sont vides ";
             } ?>
           </div>









        <div class="row bv">
          <div class="col-lg-12 col-lg-12">
             <p class="bla">
             DieSachbearbeiter Schönhauser Allee <br>
             167c,10435 Berlin Germany<br></div>
            <div class="row"><h6 id="ble"> E-mail: moin@blindtextgenerator.de</h6><p><br></div>
        <div class="row ">
     <div class="col-lg-3 col-sm-12">
          <img src="imbo/fac.png" class="img-fluid bdr "  href="www.facboock.com" alt="Responsive image"></div>
     <div class="col-lg-3 ">
           <img src="imbo/twiter.png"class="img-fluid bdr" alt="Responsive image"></div>
     <div class="col-lg-3 c">
           <img src="imbo/t.png" class="img-fluid bdr " alt="Responsive image"></div>
           <div class="col-lg-3 ">
                 <img src="imbo/a.png" class="img-fluid bdr " alt="Responsive image"></div>

        </div>
         </div>
    <div class="col-lg-2 col-sm-2 mrg">

    </div>
   </div>
</div>



<div class="container-full mrg brd">
  <div class="row ">
     <div class="col-lg-2 col-sm-2">
     </div>
     <div class="col-lg-8 col-sm-8">
        <div class="row">
         <div class="col-lg-12 col-sm-12">
          <a href="#" id="hom">Home::</a>
          <a href="#"class="hom1">DESTINATIONS::</a>
          <a href="#"class="hom1">CRIUSES::</a>
          <a href="#"class="hom1">Specils::</a>
          <a href="#"class="hom1">HOLIDAYS::</a>
          <a href="#"class="hom1">Blog::</a>
          <a href="#"class="hom1">Contact Us</a></p>
        </div>
       </div>
      <div class="row">
       <div class="col-lg-12 col-sm-12">
        <p id="fn">Copyright @voyage. All Right Reserved.<p>
       </div>
     </div>
 <div class="row">
<div class="col-lg-12 col-sm-12">
 <a href="#tt"id="lgf">  <img src="imbo/fl.png" class="img-fluid"   alt="Responsive image"><a>
</div>
</div>
</div>
<div class="col-lg-2 col-sm-2">
</div>
</div>
</div>

</div>
</html>
