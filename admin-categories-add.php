<?php
require_once('files/funcao.php');
protected_area();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $_SESSION['form']['value'] == $_POST;
  echo "<pre>";
  print_r($_FILES);
  die();
  die();
}

require_once('Files/cabecalho.php');
?>
<div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="index.php"><i class="ci-home"></i>Página inicial</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="#">Conta</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Criar categorias de produtos</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">Criar categorias de produtos</h1>
          </div>
        </div>
      </div>
      <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
          <?php require_once('Files/sidebar-conta.php'); ?>
          <!-- Content  -->
          <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
              <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                <!-- Title-->
                <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
                  <h2 class="h3 py-2 me-2 text-center text-sm-start">Adicionar novos produtos</h2>
                  <div class="py-2">
                    <select class="form-select me-2" id="unp-category">
                      <option>Selecione uma categoria</option>
                      <option>Fotos</option>
                      <option>Graficos</option>
                      <option>UI Design</option>
                      <option>Web Themes</option>
                      <option>Fonts</option>
                      <option>Add-Ons</option>
                    </select>
                  </div>
                </div>
                <form action="admin-categories-add.php" method="POST" enctype="multipart/form-data">
                  <div class="mb-3 pb-2">

                    <?= text_input([
                        'name' => 'name',
                    ]) ?>
                  </div>
                </form>
              </div>
            </section>
        </div>
      </div>
      <?php
    require_once('Files/rodape.php');
?>