<?php require 'inc/session.php'; ?>
<?php require 'inc/head.php'; ?>
<section class="cookies container">
    <div class="row">
      <?php
      if (!isset($_SESSION['username'])) {
          header('Location: login.php?log=1');
      }

      if (isset($_COOKIE['cookieadded'])) {
        if (isset($_COOKIE['cookieadded'][46])) {
            if ($_COOKIE['cookieadded'][46] > 0) { ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center added">
                        <img src="https://cbsb96radio.files.wordpress.com/2013/03/picture-210.jpg?w=500"
                             alt="cookies choclate chips" class="img-responsive">
                        <figcaption class="caption">
                            <h3>Pink cookies</h3>
                            <p><strong>Total cookies added : </strong><?= $_COOKIE['cookieadded'][46] ?></p>
                            <a  href="delete.php?remove=46" class="btn btn-danger">
                                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                            </a>
                            <span class="remove">Remove</span>
                        </figcaption>
                    </figure>
                </div>
                <?php
            }
            }
            if (isset($_COOKIE['cookieadded'][36])) {
                if ($_COOKIE['cookieadded'][36] > 0) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <figure class="thumbnail text-center added">
                            <img src="https://noovo.ca/medias/SelenaGomez_mange.jpg" alt="cookies choclate chips"
                                 class="img-responsive">
                            <figcaption class="caption">
                                <h3>Burger cookies</h3>
                                <p><strong>Total cookies added : </strong><?= $_COOKIE['cookieadded'][36] ?></p>
                                <a  href="delete.php?remove=36" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                                </a>
                                <span class="remove">Remove</span>
                            </figcaption>
                        </figure>
                    </div>
            <?php
                }
            }
            if (isset($_COOKIE['cookieadded'][58])) {
                if ($_COOKIE['cookieadded'][58] > 0) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <figure class="thumbnail text-center added">
                            <img src="http://www.bakingishot.com/sites/default/files/images/Cookie%20Monster%20Cookies%20KatrinasKitchen.jpg"
                                 alt="cookies choclate chips" class="img-responsive">
                            <figcaption class="caption">
                                <h3>Blue Chocolate cookies</h3>
                                <p><strong>Total cookies added : </strong><?= $_COOKIE['cookieadded'][58] ?></p>
                                <a  href="delete.php?remove=58" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                                </a>
                                <span class="remove">Remove</span>
                            </figcaption>
                        </figure>
                    </div>
            <?php
                }
            }
            if (isset($_COOKIE['cookieadded'][32])) {
                if ($_COOKIE['cookieadded'][32] > 0) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <figure class="thumbnail text-center added">
                            <img src="https://www.usmagazine.com/wp-content/uploads/Taylor-Swift-cookies-fan-467.jpg"
                                 alt="cookies choclate chips" class="img-responsive">
                            <figcaption class="caption">
                                <h3>M&M's&copy; cookies</h3>
                                <p><strong>Total cookies added : </strong><?= $_COOKIE['cookieadded'][32] ?></p>
                                <a  href="delete.php?remove=32" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                                </a>
                                <span class="remove">Remove</span>
                            </figcaption>
                        </figure>
                    </div>
            <?php
                }
            }

      } else {
          echo 'Your cart is empty !';
      }

      ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
