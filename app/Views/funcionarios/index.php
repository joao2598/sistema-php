<div class="modal fade" id="modal-confirmacao-exclusao">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="/funcionarios/delete" method="post">
              <div class="modal-header">
                <h4 class="modal-title">Confirme sua ação</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <p>Deseja realmente excluir esse Funcionário?</p>
                <input type="hidden" id="id_funcionario" name="id_funcionario" value="">
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Sim</button>
              </div>
            </form>
          </div>
        </div>
</div>

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <?php 

          $session = session();
          $alert = $session->get('alert');

        ?>
        <?php if(isset($alert)): ?>

          <?php if($alert == 'success_create'): ?>
            <div class="row">
              <div class="col-lg-12">
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Funcionário Cadastrado com Sucesso!
                  </div>
                </div>
            </div>

          <?php elseif($alert == 'success_delete'): ?>

            <div class="row">
              <div class="col-lg-12">
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Funcionário Excluido com Sucesso!
                  </div>
                </div>
            </div>

          <?php endif; ?>

        <?php endif; ?>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Funcionários</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Funcionários</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <a href="/funcionarios/novo" class="btn btn-primary">Novo Funcionário</a>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">Cód.:</th>
                      <th>Nome:</th>
                      <th>Data de Nascimento:</th>
                      <th>RG:</th>
                      <th>CPF:</th>
                      <th>Telefone:</th>
                      <th>Endereço:</th>
                      <th>Data de Contratação:</th>
                      <th>Salário:</th>
                      <th>Dia de Pagamento:</th>
                      <th>Ações</th>                    
                  </thead>
                  <tbody>
                    <?php if(!empty($funcionarios)): ?>
                      <?php foreach($funcionarios as $funcionario): ?>
                        <tr>
                            <td><?= $funcionario['id_funcionario']; ?></td>
                            <td><?= $funcionario['nome']; ?></td>
                            <td><?= $funcionario['data_de_nascimento']; ?></td>
                            <td><?= $funcionario['rg']; ?></td>
                            <td><?= $funcionario['cpf']; ?></td>
                            <td><?= $funcionario['telefone']; ?></td>
                            <td><?= $funcionario['endereco']; ?></td>
                            <td><?= $funcionario['data_de_contratacao']; ?></td>
                            <td><?= $funcionario['salario']; ?></td>
                            <td><?= $funcionario['dia_de_pagamento']; ?></td>
                            <td>
                              <a href="/funcionarios/ver/<?= $funcionario['id_funcionario'] ?>" class="btn btn-info">Ver</a>
                              <a href="/funcionarios/editar/<?= $funcionario['id_funcionario'] ?>" class="btn btn-warning">Editar</a>
                              <button type="button" class="btn btn-danger" onclick="document.getElementById('id_funcionario').value = <?= $funcionario['id_funcionario'] ?>" data-toggle="modal" data-target="#modal-confirmacao-exclusao">Excluir</button>
                            </td>       
                        </tr>
                      <?php endforeach; ?>
                    <?php else: ?>
                      <tr>
                        <td class="text-center" colspan="12">Nenhum Funcionário Cadastrado!</td>
                      </tr>
                    <?php endif; ?>
                  </tbody>
                </table>
              </div>
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
