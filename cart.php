<?php require 'inc/session.php'; ?>
<?php require 'inc/head.php'; ?>
<section class="cookies container">
    <div class="row">
      <?php

      if (isset($_COOKIE['cookieadded'])) {
        if ($_COOKIE['cookieadded'][46] > 0) { ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="https://cbsb96radio.files.wordpress.com/2013/03/picture-210.jpg?w=500" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Pink cookies</h3>
                    <p><strong>Total cookies added : </strong><?= $_COOKIE['cookieadded'][46] ?></p>
                </figcaption>
            </figure>
        </div>
        <?php
        }
        if ($_COOKIE['cookieadded'][36] > 0) { ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="https://noovo.ca/medias/SelenaGomez_mange.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Burger cookies</h3>
                    <p><strong>Total cookies added : </strong><?= $_COOKIE['cookieadded'][36] ?></p>
                </figcaption>
            </figure>
        </div>
        <?php
        }
        if ($_COOKIE['cookieadded'][58] > 0) { ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="http://www.bakingishot.com/sites/default/files/images/Cookie%20Monster%20Cookies%20KatrinasKitchen.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Blue Chocolate cookies</h3>
                    <p><strong>Total cookies added : </strong><?= $_COOKIE['cookieadded'][58] ?></p>

                </figcaption>
            </figure>
        </div>
        <?php
        }
        if ($_COOKIE['cookieadded'][32] > 0) { ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="https://www.usmagazine.com/wp-content/uploads/Taylor-Swift-cookies-fan-467.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>M&M's&copy; cookies</h3>
                    <p><strong>Total cookies added : </strong><?= $_COOKIE['cookieadded'][32] ?></p>
                </figcaption>
            </figure>
        </div>
        <?php
        }

      } else {
          echo 'Your cart is empty !';
      }

      ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
