<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= (isset($funcionario)) ? "Editar" : "Novo" ?> Funcionario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="/funcionarios" class="btn btn-primary" style="margin-right: 20px;">Voltar</a>
              <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
              <li class="breadcrumb-item"><a href="/funcionarios">Funcionários</a></li>
              <li class="breadcrumb-item active">Novo</li>
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

            <?php if($alert == 'success_update'): ?>
            <div class="row">
                <div class="col-lg-12">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Funcionário Atualizado com Sucesso!
                    </div>
                </div>
            </div>


        <?php endif; ?>

        <?php endif; ?>
      <div class="card">
        <div class="card-header">
            <h3 class="card-title">Dados Pessoais</h3>
        </div>
        <form action="/funcionarios/store" method="post">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" class="form-control" name="nome" value="<?= (isset($funcionario)) ? $funcionario['nome'] : "" ?>">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Data de Nascimento</label>
                            <input type="date" class="form-control" name="data_de_nascimento" value="<?= (isset($funcionario)) ? $funcionario['data_de_nascimento'] : "" ?>">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">RG</label>
                            <input type="text" class="form-control" name="rg" value="<?= (isset($funcionario)) ? $funcionario['rg'] : "" ?>">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">CPF</label>
                            <input type="text" class="form-control" name="cpf" value="<?= (isset($funcionario)) ? $funcionario['cpf'] : "" ?>">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefone</label>
                            <input type="text" class="form-control" name="telefone" value="<?= (isset($funcionario)) ? $funcionario['telefone'] : "" ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Endereço</label>
                            <input type="text" class="form-control" name="endereco" value="<?= (isset($funcionario)) ? $funcionario['endereco'] : "" ?>">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Data de Contratação</label>
                            <input type="date" class="form-control" name="data_de_contratacao" value="<?= (isset($funcionario)) ? $funcionario['data_de_contratacao'] : "" ?>">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cargo</label>
                            <input type="text" class="form-control" name="cargo" value="<?= (isset($funcionario)) ? $funcionario['data_de_contratacao'] : "" ?>">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Salário</label>
                            <input type="text" class="form-control" name="salario" value="<?= (isset($funcionario)) ? $funcionario['salario'] : "" ?>">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Dia de Pagamento</label>
                            <input type="text" class="form-control" name="dia_de_pagamento" value="<?= (isset($funcionario)) ? $funcionario['dia_de_pagamento'] : "" ?>">
                        </div>
                    </div>

                    <?php if(isset($funcionario)): ?>
                        <input type="hidden" name="id_funcionario" value="<?= $funcionario['id_funcionario'] ?>">
                    <?php endif; ?>
                </div>
            </div>
            <div class="card-footer">
                  <button type="submit" class="btn btn-primary"><?= (isset($funcionario)) ? "Atualizar" : "Cadastrar" ?></button>
                </div>
              </form>
            </div>
      </div>
    </div>
  </div>