<?php
require_once('Files/funcao.php');
protected_area();

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
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Minhas encomendas</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">Minhas encomendas</h1>
          </div>
        </div>
      </div>
      <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
          <?php require_once('Files/sidebar-conta.php'); ?>
          <!-- Content  -->
          <section class="col-lg-8">
            <!-- Toolbar-->
            <div class="d-flex justify-content-between align-items-center pt-lg-2 pb-4 pb-lg-5 mb-lg-3">
              <div class="d-flex align-items-center">
                <label class="d-none d-lg-block fs-sm text-light text-nowrap opacity-75 me-2" for="order-sort">Filtrar encomendas:</label>
                <label class="d-lg-none fs-sm text-nowrap opacity-75 me-2" for="order-sort">Filtrar encomendas:</label>
                <select class="form-select" id="order-sort">
                  <option>Todas</option>
                  <option>Enviadas</option>
                  <option>Em processo</option>
                  <option>Atrasadas</option>
                  <option>Canceladas</option>
                </select>
              </div><a class="btn btn-primary btn-sm d-none d-lg-inline-block" href="account-signin.html"><i class="ci-sign-out me-2"></i>Sign out</a>
            </div>
            
          main 

          </section>
        </div>
      </div>
      <?php
    require_once('Files/rodape.php');
?>