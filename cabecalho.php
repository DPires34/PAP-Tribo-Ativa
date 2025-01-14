<!DOCTYPE html>
<html lang="pt">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <title>Tribo Ativa</title>
    <!-- experiência de navegação-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="vendor/tiny-slider/dist/tiny-slider.css"/>
    <link rel="stylesheet" media="screen" href="vendor/drift-zoom/dist/drift-basic.min.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
  </head>
  <!--Body-->
  <body class="handheld-toolbar-enabled">
    <!--Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!--Login / Registar-se -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bg-secondary">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true"><i class="ci-unlocked me-2 mt-n1"></i>Entrar</a></li>
              <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab" role="tab" aria-selected="false"><i class="ci-user me-2 mt-n1"></i>Registar-se</a></li>
            </ul>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body tab-content py-4">
            <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
              <div class="mb-3">
                <label class="form-label" for="si-email">Email</label>
                <input class="form-control" type="email" id="si-email" placeholder="Francisco.David@exemplo.com" required>
                <div class="invalid-feedback">Prencha com um email válido.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="si-password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="mb-3 d-flex flex-wrap justify-content-between">
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" id="si-remember">
                  <label class="form-check-label" for="si-remember">Lembrar</label>
                </div><a class="fs-sm" href="#">Esqueceu-se da password?</a>
              </div>
              <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Entrar</button>
            </form>
            <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
              <div class="mb-3">
                <label class="form-label" for="su-name">Nome Completo</label>
                <input class="form-control" type="text" id="su-name" placeholder="Francisco David" required>
                <div class="invalid-feedback">Prencha com o seu nome.</div>
              </div>
              <div class="mb-3">
                <label for="su-email">Email</label>
                <input class="form-control" type="email" id="su-email" placeholder="Francisco.David@exemplo.com" required>
                <div class="invalid-feedback">Prencha com um email válido.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="su-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="su-password-confirm">Confirma a password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password-confirm" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Registar-se</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <main class="page-wrapper">
      <!--Visualização rápida-->
      <div class="modal-quick-view modal fade" id="quick-view" tabindex="-1">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title product-title"><a href="Loja-single-v1.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Página de Produto">Tribo Ativa<i class="ci-arrow-right fs-lg ms-2"></i></a></h4>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <!--Produtos de galleria-->
                <div class="col-lg-7 pe-lg-0">
                  <div class="product-gallery">
                    <div class="product-gallery-preview order-sm-2">
                      <div class="product-gallery-preview-item active" id="first"><img class="image-zoom" src="img/Loja/single/gallery/.png" data-zoom="img/Loja/single/gallery/.png" alt="Produto">
                        <div class="image-zoom-pane"></div>
                      </div>
                      <div class="product-gallery-preview-item" id="second"><img class="image-zoom" src="img/Loja/single/gallery/.png" data-zoom="img/Loja/single/gallery/.png" alt="Produto">
                        <div class="image-zoom-pane"></div>
                      </div>
                      <div class="product-gallery-preview-item" id="third"><img class="image-zoom" src="img/Loja/single/gallery/.png" data-zoom="img/Loja/single/gallery/.png" alt="Produto">
                        <div class="image-zoom-pane"></div>
                      </div>
                      <div class="product-gallery-preview-item" id="fourth"><img class="image-zoom" src="img/Loja/single/gallery/.png" data-zoom="img/Loja/single/gallery/.png" alt="Produto">
                        <div class="image-zoom-pane"></div>
                      </div>
                    </div>
                    <div class="product-gallery-thumblist order-sm-1"><a class="product-gallery-thumblist-item active" href="#first"><img src="img/Loja/single/gallery/.png" alt="Produto"></a><a class="product-gallery-thumblist-item" href="#second"><img src="img/Loja/single/gallery/.png" alt="Produto"></a><a class="product-gallery-thumblist-item" href="#third"><img src="img/Loja/single/gallery/.png" alt="Produto"></a><a class="product-gallery-thumblist-item" href="#fourth"><img src="img/Loja/single/gallery/.png" alt="Produto"></a></div>
                  </div>
                </div>
                <!--Detalhe dos Produtos-->
                <div class="col-lg-5 pt-4 pt-lg-0 image-zoom-pane">
                  <div class="product-details ms-auto pb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2"><a href="Loja-single-v1.html#reviews">
                      <button class="btn-wishlist" type="button" data-bs-toggle="tooltip" title="Adicionar aos Favoritos"><i class="ci-heart"></i></button>
                    </div>
                    <div class="mb-3"><span class="h3 fw-normal text-accent me-1">---.<small>99€</small></span>
                      <del class="text-muted fs-lg me-3">---.<small>99€</small></del><span class="badge bg-danger badge-shadow align-middle mt-n2">Promoção</span>
                    </div>
                    <div class="fs-sm mb-4"><span class="text-heading fw-medium me-1">Cor:</span><span class="text-muted" id="colorOptionText">---</span></div>
                    <div class="position-relative me-n4 mb-3">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color" id="color1" data-bs-label="colorOptionText" value="Vermelho/AzulEscuro/Branca" checked>
                        <label class="form-option-label rounded-circle" for="color1"><span class="form-option-color rounded-circle" style="background-image: url(img/Loja/single/color-opt-1.png)"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color" id="color2" data-bs-label="colorOptionText" value="Bege/Branco/Preto">
                        <label class="form-option-label rounded-circle" for="color2"><span class="form-option-color rounded-circle" style="background-image: url(img/Loja/single/color-opt-2.png)"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color" id="color3" data-bs-label="colorOptionText" value="CinzentoEscuro/Branco/Amarelo">
                        <label class="form-option-label rounded-circle" for="color3"><span class="form-option-color rounded-circle" style="background-image: url(img/Loja/single/color-opt-3.png)"></span></label>
                      </div>
                      <div class="product-badge product-available mt-n1"><i class="ci-security-check"></i>Avaliação do Produto</div>
                    </div>
                    <form class="mb-grid-gutter">
                      <div class="mb-3">
                        <label class="fw-medium pb-1" for="product-size">Tamanho:</label>
                        <select class="form-select" required id="product-size">
                          <option value="">Selecione o Tamanho</option>
                          <option value="xs">XS</option>
                          <option value="s">S</option>
                          <option value="m">M</option>
                          <option value="l">L</option>
                          <option value="xl">XL</option>
                        </select>
                      </div>
                      <div class="mb-3 d-flex align-items-center">
                        <select class="form-select me-3" style="width: 5rem;">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit"><i class="ci-cart fs-lg me-2"></i>Adicionar ao Carrinho</button>
                      </div>
                    </form>
                    <h5 class="h6 mb-3 pb-2 border-bottom"><i class="ci-announcement text-muted fs-lg align-middle mt-n1 me-2"></i>Informação do Produto</h5>
                    <h6 class="fs-sm mb-2">Estilo</h6>
                    <ul class="fs-sm ps-4">
                      <li>---</li>
                    </ul>
                    <h6 class="fs-sm mb-2">Composição</h6>
                    <ul class="fs-sm ps-4">
                      <li>---</li>
                      <li>---</li>
                      <li>---</li>
                    </ul>
                    <h6 class="fs-sm mb-2">Artigo Nº</h6>
                    <ul class="fs-sm ps-4 mb-0">
                      <li>---</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Barra de navegação 3(Light)-->
      <header class="shadow-sm">
        <!-- Topbar-->
        <div class="topbar topbar-dark bg-dark">
          <div class="container">
            <div class="topbar-text dropdown d-md-none"><a class="topbar-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Localização dos Pedidos</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="tel: 123 765 789"><i class="ci-support text-muted me-2"></i>123 765 789</a></li>
                <li><a class="dropdown-item" href="order-tracking.html"><i class="ci-location text-muted me-2"></i>Localização dos Pedidos</a></li>
              </ul>
            </div>
            <div class="topbar-text text-nowrap d-none d-md-inline-block"><i class="ci-support" style="color:#ffc107;"></i><span class="text-muted me-1">Suporte</span><a class="topbar-link" href="tel: 123 765 789">123 765 789</a></div>
            <div class="tns-carousel tns-controls-static d-none d-md-block">
              <div class="tns-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;nav&quot;: false}">
                <div class="topbar-text">Entregas sem custos de encomendas com valores a cima de 200€</div>
                <div class="topbar-text">Reembolsos em 30 dias</div>
                <div class="topbar-text">Suporte ao utilizador 24/7</div>
              </div>
            </div>
            <div class="ms-3 text-nowrap"><a class="topbar-link me-4 d-none d-md-inline-block" href="order-tracking.html"><i class="ci-location" style="color:#ffc107;"></i>Localização dos Pedidos</a>
              <div class="topbar-text dropdown disable-autohide"><a class="topbar-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><img class="me-2" src="img/Bandeiras/pt.png" width="20" alt="Português">PT / €</a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li class="dropdown-item">
                    <select class="form-select form-select-sm">
                      <option value="eur">€ EUR</option>
                      <option value="eur">$ DOLAR</option>
                      <option value="eur">R$ REAIS</option>
                    </select>
                  </li>
                  <li><a class="dropdown-item pb-1" href="#"><img class="me-2" src="img/Bandeiras/pt.png" width="20" alt="Português">PT/PT</a></li>
                  <li><a class="dropdown-item pb-1" href="#"><img class="me-2" src="img/Bandeiras/fr.png" width="20" alt="Françês">FR</a></li>
                  <li><a class="dropdown-item pb-1" href="#"><img class="me-2" src="img/Bandeiras/en.png" width="20" alt="Inglês">ING</a></li>
                  <li><a class="dropdown-item pb-1" href="#"><img class="me-2" src="img/Bandeiras/br.png" width="20" alt="Brasil">PT/BR</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!--Remover a classe "navbar-sticky" se quisermos que a barra de navegação role com a página--->
          <div class="navbar navbar-expand-lg navbar-light">
            <div class="container"><a class="navbar-brand d-none d-sm-block flex-shrink-0" href="index-2.html"><img src="img/Logotipo/Logo1.png" width="200" height="200" alt="Tribo Ativa"></a><a class="navbar-brand d-sm-none flex-shrink-0 me-2" href="index-2.html"><img src="img/Logotipo/Logo1.png" width="74" alt="Tribo Ativa"></a>
              <div class="input-group d-none d-lg-flex mx-4">
                <input class="form-control rounded-end pe-5" type="text" placeholder="O que procura?"><i class="ci-search position-absolute top-50 end-0 translate-middle-y text-muted fs-base me-3"></i>
              </div>
              <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool navbar-stuck-toggler" href="#"><span class="navbar-tool-tooltip">Expandir o menu</span>
                  <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-menu"></i></div></a><a class="navbar-tool d-none d-lg-flex" href="account-wishlist.html"><span class="navbar-tool-tooltip">Favoritos</span>
                  <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-heart"></i></div></a><a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#signin-modal" data-bs-toggle="modal">
                  <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>
                  <div class="navbar-tool-text ms-n3"><small>Entrar</small>A minha conta</div></a>
                <div class="navbar-tool dropdown ms-3"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="Loja-cart.html"><span class="navbar-tool-label">---</span><i class="navbar-tool-icon ci-cart"></i></a><a class="navbar-tool-text" href="Loja-cart.html"><small>Carrinho</small></a>
                  <!--Produtos em Destaque-->
                  <div class="dropdown-menu dropdown-menu-end">
                    <div class="widget widget-cart px-3 pt-2 pb-3" style="width: 20rem;">
                      <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                        <div class="widget-cart-item pb-2 border-bottom">
                          <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                          <div class="d-flex align-items-center"><a class="flex-shrink-0" href="Loja-single-v1.html"><img src="img/Loja/cart/widget/Chuteiras1.jpg" width="64" alt="Product"></a>
                            <div class="ps-2">
                              <h6 class="widget-product-title"><a href="Loja-single-v1.html">Women Colorblock Sneakers</a></h6>
                              <div class="widget-product-meta"><span class="text-accent me-2"></span><span class="text-muted">x 1</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                        <div class="fs-sm me-2 py-2"><span class="text-muted">Subtotal:</span><span class="text-accent fs-base ms-1"></span></div><a class="btn btn-outline-secondary btn-sm" href="Loja-cart.html">Expandir carrinho<i class="ci-arrow-right ms-1 me-n1"></i></a>
                      </div><a class="btn btn-primary btn-sm d-block w-100" href="checkout-details.html"><i class="ci-card me-2 fs-base align-middle"></i>Checkout</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
            <div class="container">
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <!--Barra de pesquisa-->
                <div class="input-group d-lg-none my-3"><i class="ci-search position-absolute top-50 start-0 translate-middle-y text-muted fs-base ms-3"></i>
                  <input class="form-control rounded-start" type="text" placeholder="Search for products">
                </div>
                <!--Categorias-->
                <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle ps-lg-0" href="#" data-bs-toggle="dropdown"><i class="ci-view-grid me-2"></i>Categorias</a>
                    <div class="dropdown-menu px-2 pb-4">
                      <div class="d-flex flex-wrap flex-sm-nowrap">
                        <div class="mega-dropdown-column pt-3 pt-sm-4 px-2 px-lg-3">
                          <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/Imagens Categorias/Equipamento.png" alt="Equipamentos de Futebol" width="190" height="190"></a>
                            <h6 class="fs-base mb-2">Equipamentos de Futebol</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Atuais</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Retros</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                        <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/Imagens Categorias/GR1.png" alt="Guarda Redes" width="190" height="190"></a>
                        <h6 class="fs-base mb-2">Guarda-redes</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Equipamentos (Atuais e Retros)</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Luvas</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Cotoveleiras e Joelheiras</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                        <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/Imagens Categorias/FatoTreino.png" alt="Fatos de Treino" width="190" height="190"></a>
                            <h6 class="fs-base mb-2">Fatos de treino</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Atuais</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Retros</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                          <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/Imagens Categorias/Casaco.png" alt="Casacos Impermiáveis" width="190" height="190"></a>
                            <h6 class="fs-base mb-2">Casacos Impermiáveis</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Atuais</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Retros</a></li></ul>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex flex-wrap flex-sm-nowrap">
                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                          <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/Imagens Categorias/Chuteiras.png" alt="Chuteiras" width="190" height="190"></a>
                            <h6 class="fs-base mb-2">Chuteiras</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Relvado natural</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Relvado sintético</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Futsal</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                          <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/Imagens Categorias/RoupaTer.png" alt="Roupa Térmica" width="190" height="190"></a>
                            <h6 class="fs-base mb-2">Roupas térmicas</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Sleevs</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Legins</a></li>                            </ul>
                          </div>
                        </div>
                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                          <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/Imagens Categorias/Ace.png" alt="Acessórios" width="190" height="190"></a>
                            <h6 class="fs-base mb-2">Acessórios</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Luvas</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Golas</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Meias</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Coletes</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Caneleiras</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Fitas</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                          <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/Imagens Categorias/Ace2.png" alt="Acessórios para Treino" width="190" height="190"></a>
                            <h6 class="fs-base mb-2">Acessórios para treino</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Bolas</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Cones</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Fitas</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <!--Compras-->
                <ul class="navbar-nav">
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Compras</a>
                    <div class="dropdown-menu p-0">
                      <div class="d-flex flex-wrap flex-sm-nowrap px-2">
                        <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                          <div class="widget widget-links mb-4">
                            <h6 class="fs-base mb-3">Mercado</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item"><a class="widget-list-link" href="marketplace-category.html">Catálogo de Produtos</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="marketplace-single.html">Página de Produtos</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="marketplace-cart.html">Carrinho</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="marketplace-checkout.html">Checkout</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                          <div class="widget widget-links">
                            <h6 class="fs-base mb-3">Mercado 2<span class="badge bg-danger ms-1">Novo</span></h6>
                            <ul class="widget-list">
                              <li class="widget-list-item"><a class="widget-list-link" href="nft-catalogo-v1.html">Catalogo v.1</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="nft-catalogo-v2.html">Catalogo v.2</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="nft-single-auction-live.html">Peça única - Leilão ao Vivo</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="nft-single-auction-ended.html">Peça única - Leilão Encerrado</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="nft-single-buy.html">Peça única - Compra agora</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="nft-vendor.html">Página do fornecedor</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="nft-create-item.html">Cria uma nova peça</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="mega-dropdown-column pt-1 pt-lg-4 px-2 px-lg-3">
                          <div class="widget widget-links mb-4">
                            <h6 class="fs-base mb-3">Página de Compras</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item"><a class="widget-list-link" href="Loja-categories.html">Categorias das compras</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="Loja-single-v1.html">Página de produto v.1</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="Loja-single-v2.html">Página de produto v.2</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="Loja-cart.html">Carrinho</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="checkout-details.html">Checkout - Detalhes</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="checkout-shipping.html">Checkout - Envio</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="checkout-payment.html">Checkout - Pagamento</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="checkout-complete.html">Checkout - Completo</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="order-tracking.html">Rastreamento da encomenda</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Conta</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">As suas encomendas</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="account-orders.html">Histórco de encomendas</a></li>
                          <li><a class="dropdown-item" href="account-profile.html">Definições de perfil</a></li>
                          <li><a class="dropdown-item" href="account-address.html">Morada da conta</a></li>
                          <li><a class="dropdown-item" href="account-payment.html">Métodos de pagamento</a></li>
                          <li><a class="dropdown-item" href="account-wishlist.html">Favoritos</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="account-signin.html">Entrar / Registar-se</a></li>
                      <li><a class="dropdown-item" href="account-password-recovery.html">Recuperação de password</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Páginas</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Layout da página</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="navbar-1-level-light.html">1 Level Light</a></li>
                          <li><a class="dropdown-item" href="navbar-1-level-dark.html">1 Level Dark</a></li>
                          <li><a class="dropdown-item" href="navbar-2-level-light.html">2 Level Light</a></li>
                          <li><a class="dropdown-item" href="navbar-2-level-dark.html">2 Level Dark</a></li>
                          <li><a class="dropdown-item" href="navbar-3-level-light.html">3 Level Light</a></li>
                          <li><a class="dropdown-item" href="navbar-3-level-dark.html">3 Level Dark</a></li>
                        </ul>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="about.html">Sobre nós</a></li>
                      <li><a class="dropdown-item" href="contacts.html">Contactos</a></li>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </header>