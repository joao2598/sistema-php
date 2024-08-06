<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ver Funcionario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="/funcionarios" class="btn btn-primary" style="margin-right: 20px;">Voltar</a>
              <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
              <li class="breadcrumb-item"><a href="/funcionarios">Funcionários</a></li>
              <li class="breadcrumb-item active">Ver</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container-fluid">
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
                            <input type="text" class="form-control" value="<?= $funcionario['nome'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Data de Nascimento</label>
                            <input type="date" class="form-control" value="<?= $funcionario['data_de_nascimento'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">RG</label>
                            <input type="text" class="form-control" value="<?= $funcionario['rg'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">CPF</label>
                            <input type="text" class="form-control" value="<?= $funcionario['cpf'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefone</label>
                            <input type="text" class="form-control" value="<?= $funcionario['telefone'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Endereço</label>
                            <input type="text" class="form-control" value="<?= $funcionario['endereco'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Data de Contratação</label>
                            <input type="date" class="form-control" value="<?= $funcionario['data_de_contratacao'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cargo</label>
                            <input type="text" class="form-control"  value="<?= $funcionario['cargo'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Salário</label>
                            <input type="text" class="form-control"  value="<?= $funcionario['salario'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Dia de Pagamento</label>
                            <input type="text" class="form-control"  value="<?= $funcionario['dia_de_pagamento'] ?>" disabled>
                        </div>
                    </div>

                    <?php if(isset($funcionario)): ?>
                        <input type="hidden" name="id_funcionario" value="<?= $funcionario['id_funcionario'] ?>" disabled>
                    <?php endif; ?>
                </div>
            </div>
        
              </form>
            </div>
      </div>
    </div>
  </div>