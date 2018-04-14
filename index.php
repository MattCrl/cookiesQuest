<?php require 'inc/session.php'; ?>
<?php require 'inc/head.php'; ?>




<section class="cookies container">
<?php if (isset($_GET['nop'])) {
    echo '<span class="red">' . '(」゜ロ゜)」 You\'re already identified ! (」゜ロ゜)」' . '</span>';
} ?>
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="https://cbsb96radio.files.wordpress.com/2013/03/picture-210.jpg?w=500" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pink cookies</h3>
          <p>Cooked by Ariana Grande !</p>
          <a  href="add.php?add_to_cart=46" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="https://noovo.ca/medias/SelenaGomez_mange.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Burger cookies</h3>
          <p>Cooked by Selena Gomez !</p>
          <a  href="add.php?add_to_cart=36" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="http://www.bakingishot.com/sites/default/files/images/Cookie%20Monster%20Cookies%20KatrinasKitchen.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Blue Chocolate cookies</h3>
          <p>Cooked by Steven Grillon !</p>
          <a  href="add.php?add_to_cart=58" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="https://www.usmagazine.com/wp-content/uploads/Taylor-Swift-cookies-fan-467.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Taylor Swift !</p>
          <a  href="add.php?add_to_cart=32" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
