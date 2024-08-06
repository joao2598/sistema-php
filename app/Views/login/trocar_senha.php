<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Trocar Senha</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Trocar Senha</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container-fluid">
        <?php 

            $session = session();
            $alert = $session->get('alert');

        ?>
            <?php if(isset($alert)): ?>

            <?php if($alert == 'success_trocar_senha'): ?>
            <div class="row">
                <div class="col-lg-12">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Senha Atualizada com Sucesso!
                    </div>
                </div>
            </div>
            <?php elseif($alert == 'error_trocar_senha'): ?>
            <div class="row">
                <div class="col-lg-12">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Erro ao atualizadar senha!
                    </div>
                </div>
            </div>


        <?php endif; ?>

        <?php endif; ?>
      <div class="card">
        <div class="card-header">
            <h3 class="card-title">Dados</h3>
        </div>
        <form action="/login/store" method="post">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Senha Atual</label>
                            <input type="password" class="form-control" name="senha_atual">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nova Senha</label>
                            <input type="password" class="form-control" name="nova_senha">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Confirmar Nova Senha</label>
                            <input type="password" class="form-control" name="confirmar_nova_senha">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Atualizar Senha</button>
                </div>
              </form>
            </div>
      </div>
    </div>
  </div>