<?php
require_once('files/funcao.php');
protected_area();

$rows = db_select('categories', ' parent_id != 0 ');
$categories = [];

foreach ($rows as $val) {
  $categories[$val['id']] = $val['name'];
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $_SESSION['form']['value'] = $_POST;
  
 
  $imgs = upload_images($_FILES);
  $data['name'] = $_POST['Nome'];
  $data['preço_de_compra'] = $_POST['preço_de_compra'];
  $data['preço'] = $_POST['preço'];
  $data['category_id'] = $_POST['category_id'];
  $data['description'] = $_POST['description'];
  $data['photos'] = json_encode($imgs);
  $data['user_id'] = $_SESSION['user']['id'];


 if(db_insert('products', $data)) {
    alert('success','Produto criado com sucesso!');
    header('Location: admin-products.php');
    unset($_SESSION['form']);
  }else{
    alert('danger','Falha na criação do produto, tente novamente.');
    header('Location: admin-products-add.php');
  }
  die();
}

require_once('Files/cabecalho.php');
?>
<div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="index-2.php"><i class="ci-home"></i>Página inicial</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="#">Conta</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Adicionar Produtos</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">Adicionar Produtos</h1>
          </div>
        </div>
      </div>
      <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
          <?php require_once('Files/sidebar-conta.php'); ?>
          <!-- Content  -->
          <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
              <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                <!-- Título-->
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
                <form action="admin-products-add.php" method="POST" enctype="multipart/form-data">
                  <div class="mb-3 pb-2">

                    
                    <div class="row ">
                        <div class="col-md-12">
                            <?= text_input([
                                'name' => 'Nome',
                            ]) ?>
                        </div>
                    </div>  

                    <div class="row ">
                        <div class="col-md-12">
                            <?= select_input([
                                'name' => 'category_id',
                                'label' => 'Categoria',
                            ],$categories) ?>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <?= text_input([
                                'name' => 'preço_de_compra',
                                'label' => 'Preço de compra',
                            ]) ?>
                        </div>
                        <div class="col-md-6 mt-2">
                            <?= text_input([
                                'name' => 'preço',
                                'label' => 'Preço de venda',
                            ]) ?>
                        </div>
                      </div>

                      
                    <div class="row">
                      <div class="col-md-6 mt-3">
                          <div class="form-group">
                              <label for="photo"> Foto do produto 1 </label>
                              <input class="form-control" name="photo_1" type="file" accept=".jpg,.jpeg,.jpg">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group mt-3">
                              <label for="photo"> Foto do produto 2 </label>
                              <input class="form-control" name="photo_2" type="file" accept=".jpg,.jpeg,.jpg">
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mt-3">
                          <div class="form-group">
                              <label for="photo"> Foto do produto 3 </label>
                              <input class="form-control" name="photo_3" type="file" accept=".jpg,.jpeg,.jpg">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group mt-3">
                              <label for="photo"> Foto do produto 4 </label>
                              <input class="form-control" name="photo_4" type="file" accept=".jpg,.jpeg,.jpg">
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mt-3">
                          <div class="form-group">
                              <label for="photo"> Foto do produto 5 </label>
                              <input class="form-control" name="photo_5" type="file" accept=".jpg,.jpeg,.jpg">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group mt-3">
                              <label for="photo"> Foto do produto 6 </label>
                              <input class="form-control" name="photo_6" type="file" accept=".jpg,.jpeg,.jpg">
                          </div>
                      </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="form-group">
                              <label for="description">Descrição</label>
                              <textarea name="description" id="description" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                      
                      <!--description-->
                  
                  </div>

                  <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i> Upload </button>
                </form>
              </div>
            </section>
        </div>
      </div>

     
      <?php
    require_once('Files/rodape.php');
?>