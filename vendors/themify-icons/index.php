<?php
    include 'layouts/head.php';
    include 'layouts/header.php';
  ?>

<!--================ Hero sm Banner start =================-->
<section class="mb-30px">
  <div class="container">
    <div class="hero-banner hero-banner--sm">
      <div class="hero-banner__content">
        <h1>Bem vindo ao Blog</h1>
      </div>
    </div>
  </div>
</section>
<!--================ Hero sm Banner end =================-->

<!--================ Start Blog Post Area =================-->
<section class="blog-post-area section-margin">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="row">
          <div class="col-md-6">
            <div class="single-recent-blog-post card-view">
              <div class="thumb">
                <img
                  class="card-img rounded-0"
                  src="img/blog/thumb/thumb-card1.png"
                  alt=""
                />
                <ul class="thumb-info">
                  <li>
                    <a href="#"><i class="ti-user"></i>Admin</a>
                  </li>
                  <li>
                    <a href="#"><i class="fas fa-calendar"></i>20/08/2019</a>
                  </li>
                </ul>
              </div>
              <div class="details mt-20">
                <a href="blog-single.html">
                  <h3>
                    Fast cars and rickety bridges as he grand tour returns
                  </h3>
                </a>
                <p>
                  Vel aliquam quis, nulla pede mi commodo no tristique nam hac
                  luctus torquent velit felis lone commodo pellentesque
                </p>
                <a class="button" href="#"
                  >Ler Mais <i class="ti-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
          
        </div>
      </div>

      <!-- Start Blog Post Siddebar -->
      <div class="col-lg-4 sidebar-widgets">
        <div class="widget-wrap">
          <div class="single-sidebar-widget popular-post-widget">
            <h4 class="single-sidebar-widget__title">Últimos Posts</h4>
            <div class="popular-post-list">
              <div class="single-post-list">
                <div class="thumb">
                  <img
                    class="card-img rounded-0"
                    src="img/blog/thumb/thumb1.png"
                    alt=""
                  />
                  <ul class="thumb-info">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">20/08/2019</a></li>
                  </ul>
                </div>
                <div class="details mt-20">
                  <a href="blog-single.html">
                    <h6>
                      Accused of assaulting flight attendant miktake alaways
                    </h6>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Blog Post Siddebar -->
  </div>
</section>

<?php include 'layouts/footer.php' ?>
