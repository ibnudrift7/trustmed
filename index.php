
<?php include 'header.php';?>
<div id="slider">
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/slider1.webp" class="width-style" alt="">
        <img src="images/big-slide1.webp" class="normal-style" alt="">
      </div>
      <div class="carousel-item">
        <img src="images/slider2.webp" class="width-style" alt="">
        <img src="images/big-slide2.webp" class="normal-style" alt="">
      </div>
      <div class="carousel-item">
        <img src="images/slider3.webp" class="width-style" alt="">
        <img src="images/big-slide3.webp" class="normal-style" alt="">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="button-shop-slider">
    <a href="https://linktr.ee/Trustmed.id" target="_blank" class="btn-one">Shop Now</a>
  </div>
</div>
<div id="conten">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="why">
          <div class="logo">
            <a href="index.php">
              <div class="logo-img">
                <img src="images/logo-why.webp">
              </div>
              <div class="logo-text">      
                Trustmed
              </div>
            </a>
          </div>
          <div class="content-why">  
            <h2>WHY US?</h2>
            <p>TRUSTMED is researching and creating innovative protective care  products that we need to stay healthy and breathe more comfortably. We regularly test our materials to ensure it meets the quality standard. Our product research and production team continuously aim to improve and deliver the best product in the market.</p>
            <ul>
              <li>Functionality</li>
              <li>Comfort</li>
              <li>Hygiene</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="fitur">
          <div class="box-fitur">
            <div class="img-fituru">
              <img src="images/high_density_filtration.webp" alt="">
            </div>
            <h3>High Density Filtration</h3>
            <p>Made with certified fine filter material with up to 0.3 μ bacterial filtration efficacy  protects from droplets, pollution and bacteria</p>
          </div>
          <div class="box-fitur">
            <div class="img-fituru">
              <img src="images/odorless_and_breatheable.webp" alt="">
            </div>
            <h3>Odorless and Breathable</h3>
            <p>Provides comfortable and breathable protective barrier for long wear usage. Featuring waterproof, soft to skin and lightweight layers.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="fitur">
          <div class="box-fitur">
            <div class="img-fituru">
              <img src="images/sleek_fit_design.jpg" alt="">
            </div>
            <h3>Sleek Fit Design</h3>
            <p>Ergonomically designed for wearers' safety and comfort, through continuous product research and development we hope to achieve the perfect fitting</p>
          </div>
          <div class="box-fitur">
            <div class="img-fituru">
              <img src="images/experienced_manufacturing_team.webp" alt="">
            </div>
            <h3>Experienced Manufacturing Team</h3>
            <p>Trustmed  is manufactured in production facilities with ISO standard, clean room and fully automated machine with experienced production team</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="VideoHome">
    <video width="100%" autoplay loop muted playsinline>
      <source src="video/file.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
  <div id="produk">
    <div class="container">
      <h2>OUR PRODUCTS</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="item-produk">
            <div class="img-produk">
              <img src="images/produk-surgucal-mask.webp" class="img-responsive" alt="">
            </div>
            <div class="text-produk">
              <h4>TRIPLE LAYER NON-WOVEN EARLOOP</h4>
              <h2>SURGICAL MASK</h2>
              <a href="surgical-mask.php" class="btn-view-more">View more</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="item-produk ing-pro">
            <div class="img-produk">
              <img src="images/produk-inguard-mask.webp" class="img-responsive" alt="">
            </div>
            <div class="text-produk">
              <h4>4 LAYERS PROTECTION WITH DOUBLE FILTRATION</h4>
              <h2><span class="icon-guard"></span> INguard MASK</h2>
              <a href="inguard-mask.php" class="btn-view-more">View more</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="item-produk ing-pro">
            <div class="img-produk">
              <img src="images/p-prd-3.jpg" class="img-responsive" alt="">
            </div>
            <div class="text-produk">
              <h4>FOUR LAYER NON-WOVEN EARLOOP</h4>
              <h2 class="font-oswald">GUARD <span class="red-guard">PLUS+</span></h2>
              <a href="guard-plus.php" class="btn-view-more">View more</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="item-produk ing-pro">
            <div class="img-produk">
              <img src="images/p-prd-4.jpg" class="img-responsive" alt="">
            </div>
            <div class="text-produk">
              <h4>4 LAYERS PROTECTION WITH DOUBLE FILTRATION</h4>
              <h2>KF-94 <span class="font-knewave red">K</span><span class="font-knewave orange">I</span><span class="font-knewave green">D</span><span class="font-knewave blue">S</span></h2>
              <a href="kf-94.php" class="btn-view-more">View more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="threeSection">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="item-section">
            <div class="img-section">
              <img src="images/about.jpg" alt="">
            </div>
            <h3>ABOUT US</h3>
            <p>TRUSTMED is researching and creating innovative protective care  products that we need to stay healthy and breathe more comfortably.</p>
            <div class="btn-readmore">
              <a href="index.php" class="read-more">Read more</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
        <div class="item-section">
            <div class="img-section">
              <img src="images/client.jpg" alt="">
            </div>
            <h3>CLIENTS</h3>
            <p>Approved product quality certification and its functionality, our masks are already delivered to many companies and organization nationwide.</p>
            <div class="btn-readmore">
              <a href="#" class="read-more">Read more</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="item-section">
            <div class="img-section">
              <img src="images/touch.jpg" alt="">
            </div>
            <h3>GET IN TOUCH</h3>
            <p>We would love to hear what you think about our product. </p>
            <div class="btn-readmore">
              <a href="https://wa.me/6281554818802" target="_blank" class="read-more">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php';?>
