 <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Son Duyurular</span>
          <ul id="ticker01" class="news_sticker">
            
            <?php 
        mysql_connect('localhost','root','123456');
          mysql_select_db('webodev');
           ?>
          <?php 
          $duyurusorgu=mysql_query("select * from duyurular1");

           while($duyurucek=mysql_fetch_assoc($duyurusorgu)) {
          
           ?>


          <li class=""><a href="<?php echo $duyurucek['duyuru_url']; ?>"><img src="images/ktulogo.png" alt=""><?php echo $duyurucek['duyuru_kisa']; ?></a></li>
          
         
          <?php
           }
          ?>

          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="https://www.facebook.com/groups/ktubilgisayar/?hc_ref=ARThS0Z2_kwesQ8LSdg3I1GtnfIq7yw0vuMtGy8Hmb08Ymm1waxOCwjKwBKmSF9hBBg"></a></li>
              <li class="twitter"><a href="https://twitter.com/KTUbilgisayar"></a></li>
              <li class="mail"><a href="https://www.google.com/intl/tr/gmail/about/#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>