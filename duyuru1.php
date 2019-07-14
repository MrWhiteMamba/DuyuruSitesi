
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Duyurular</title>
 </head>
 <body>

 	<?php include 'header1.php'; ?>
<?php include 'baglan.php'; ?>
<section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
            <?php 
        mysql_connect('localhost','root','123456');
          mysql_select_db('webodev');
           ?>
          <?php 
          $duyurusorgu=mysql_query("select * from duyurular1");

           while($duyurucek=mysql_fetch_assoc($duyurusorgu)) {
          
           ?>
           <article>
    <h1><?php echo $duyurucek['duyuru_kisa']; ?></h1>
    <p><?php echo $duyurucek['duyuru_uzun']; ?></p>
  </article>	
          
          <?php
           }
          ?>
  
  </section>

      
  <?php include "duyuru.php";  ?>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/custom.js"></script>
<script src="assets/js/havadurumu.min.js"></script>
 </body>
 </html>

 <?php include "footer1.php";  ?>