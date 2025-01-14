<?php
require_once('files/cabecalho.php');
?>

<!--Login / Registar-se-->
<div class="container py-4 py-lg-5 my-4">
        <div class="row">
          <div class="col-md-6">
            <div class="card border-0 shadow">
              <div class="card-body">
                <h2 class="h4 mb-1">Entrar</h2>
                <div class="py-3">
                  <h3 class="d-inline-block align-middle fs-base fw-medium mb-2 me-2">Iniciar sessão com:</h3>
                  <div class="d-inline-block align-middle"><a class="btn-social bs-google me-2 mb-2" href="#" data-bs-toggle="tooltip" title="Sign in with Google"><i class="ci-google"></i></a><a class="btn-social bs-facebook me-2 mb-2" href="#" data-bs-toggle="tooltip" title="Sign in with Facebook"><i class="ci-facebook"></i></a><a class="btn-social bs-twitter me-2 mb-2" href="#" data-bs-toggle="tooltip" title="Sign in with Twitter"><i class="ci-twitter"></i></a></div>
                </div>
                <hr>
                <h3 class="fs-base pt-4 pb-2">Por email</h3>
                <form class="needs-validation" novalidate>
                  <div class="input-group mb-3"><i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                    <input class="form-control rounded-start" type="email" placeholder="Email" required>
                  </div>
                  <div class="input-group mb-3"><i class="ci-locked position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                    <div class="password-toggle w-100">
                      <input class="form-control" type="password" placeholder="Password" required>
                      <label class="password-toggle-btn" aria-label="Show/hide password">
                        <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                      </label>
                    </div>
                  </div>
                  <div class="d-flex flex-wrap justify-content-between">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" checked id="remember_me">
                      <label class="form-check-label" for="remember_me">Lembrar</label>
                    </div><a class="nav-link-inline fs-sm" href="account-password-recovery.html">Esqueceu-se da password?</a>
                  </div>
                  <hr class="mt-4">
                  <div class="text-end pt-4">
                    <button class="btn btn-primary" type="submit"><i class="ci-sign-in me-2 ms-n21"></i>Entrar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6 pt-4 mt-3 mt-md-0">
            <h2 class="h4 mb-3">Sem conta? Registe-se</h2>
            <form method="post" action="login-logic.php" class="needs-validation" novalidate>
              <div class="row gx-4 gy-3">
                <div class="col-sm-6">
                  <label class="form-label" for="reg-fn">Primeiro Nome</label>
                  <input class="form-control" name="first_name" type="text" required id="reg-fn">
                  <div class="invalid-feedback">Introduza o seu Primeiro Nome!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="reg-ln">Último Nome</label>
                  <input class="form-control" name="last_name" type="text" required id="reg-ln">
                  <div class="invalid-feedback">Introduza o seu Último Nome!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="reg-email">Email</label>
                  <input class="form-control" name="email" type="email" required id="reg-email">
                  <div class="invalid-feedback">Introduza o seu Email!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="reg-phone">Nº Telefone</label>
                  <input class="form-control" name="phone_number" type="text" required id="reg-phone">
                  <div class="invalid-feedback">Introduza o seu Nº Telefone!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="reg-password">Password</label>
                  <input class="form-control" name="password" type="password" required id="reg-password">
                  <div class="invalid-feedback">Introduza a sua password!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="reg-password-confirm">Confirmação de Password</label>
                  <input class="form-control" name="password_1" type="password" required id="reg-password-confirm">
                  <div class="invalid-feedback">Password não corresponde!</div>
                </div>
                <div class="col-12 text-end">
                  <button class="btn btn-primary" type="submit"><i class="ci-user me-2 ms-n1"></i>Registar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
<?php
require_once('files/rodape.php');
?>