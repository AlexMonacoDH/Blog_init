<?php

try{
    require 'req/conexao.php';
    $select = $conexao->prepare("SELECT id,titulo FROM posts ORDER BY id DESC");
    $select->execute();

    $posts = $select->fetchall(PDO::FETCH_ASSOC);

    $conexao = null;

    
    }
catch(PDOException $erro){
    echo $erro->getMessage();
}

    include 'layouts/head.php';
    include 'layouts/header_admin.php';
?>

<div class="container d-flex align-items-center justify-content-center" style="height: 90vh">
    <ul class="list-group col-8">
        <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: #e8e8e8">
            <span>Suas Notícias</span>
            <a href="inserir.php" class="btn btn-success">Adicionar Notícia</a>
        </li>
        <?php if(count($posts)==0): ?>
        <li class="list-group-item d-flex justify-content-center align-items-center">
            <marquee class="col-8">Sem Posts</marquee>
        </li>
        <?php else: ?>
        <?php foreach($posts as $post): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><?= $post["titulo"] ?></span>
                <div>
                    <a href="#">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="d-inline-block ml-3">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
            </li>
        <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</div>

<?php
    include 'layouts/footer.php';
?>

