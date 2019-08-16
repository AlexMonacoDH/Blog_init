<?php
  try{
    require 'req/conexao.php';
    $select = $conexao->prepare("SELECT * FROM posts WHERE id = :idGet");
    $select->execute([
      ':idGet' => $_GET["id"]
    ]);

    $post = $select->fetch(PDO::FETCH_ASSOC);

    $conexao = null;

    
    }
  catch(PDOException $erro){
    echo $erro->getMessage();
  }
  include 'layouts/head.php';
  include 'layouts/header.php';
?>

<!--================ Start Blog Post Area =================-->
<section class="blog-post-area mt-5" style="height: 90vh;">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="main_blog_details">
          <!-- <img class="img-fluid" src="img/blog/thumb/thumb-card1.png" alt=""> -->
          <h4>
              <?= $post["titulo"] ?>
            </h4>
          <div class="user_details">
            <div class="float-left">
              <a href="#"><?= $post["categoria"] ?></a>
            </div>
            <div class="float-right mt-sm-0 mt-3">
              <div class="media">
                <div class="media-body">
                  
                  <p><?= date('d/m/Y', strtotime($post["data"])) ?></p>
                </div>
              </div>
            </div>
          </div>
          <blockquote class="blockquote">
            <p class="mb-0">
              <?= $post["texto"] ?>
            </p>
          </blockquote>
          <div class="news_d_footer flex-column flex-sm-row">
            <div class="news_socail ml-sm-auto mt-sm-0 mt-2">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-dribbble"></i></a>
              <a href="#"><i class="fab fa-behance"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================ End Blog Post Area =================-->

<?php include 'layouts/footer.php'; ?>
