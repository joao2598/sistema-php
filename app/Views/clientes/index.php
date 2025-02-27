<div class="modal fade" id="modal-confirmacao-exclusao">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="/clientes/excluir" method="post">
              <div class="modal-header">
                <h4 class="modal-title">Confirme sua ação</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <p>Deseja realmente excluir esse Cliente?</p>
                <input type="hidden" id="id_cliente" name="id_cliente" value="">
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Sim</button>
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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
                    Cliente Cadastrado com Sucesso!
                  </div>
                </div>
            </div>

          <?php elseif($alert == 'success_delete'): ?>

            <div class="row">
              <div class="col-lg-12">
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Cliente Excluido com Sucesso!
                  </div>
                </div>
            </div>

          <?php endif; ?>

        <?php endif; ?>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Clientes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Clientes</li>
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
                <a href="/clientes/novo" class="btn btn-primary">Novo Cliente</a>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">Cód.:</th>
                      <th>Nome:</th>
                      <th>Data de Nascimento:</th>
                      <th>Telefone:</th>
                      <th>Endereço:</th>
                      <th>Limite de Crédito:</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(!empty($clientes)): ?>
                      <?php foreach($clientes as $cliente): ?>
                        <tr>
                            <td><?= $cliente['id_cliente']; ?></td>
                            <td><?= $cliente['nome']; ?></td>
                            <td><?= $cliente['data_de_nascimento']; ?></td>
                            <td><?= $cliente['telefone']; ?></td>
                            <td><?= $cliente['endereco']; ?></td>
                            <td><?= $cliente['limite_de_credito']; ?></td>
                            <td>
                              <a href="/clientes/ver/<?= $cliente['id_cliente'] ?>" class="btn btn-info">Ver</a>
                              <a href="/clientes/editar/<?= $cliente['id_cliente'] ?>" class="btn btn-warning">Editar</a>
                              <button type="button" class="btn btn-danger" onclick="document.getElementById('id_cliente').value = <?= $cliente['id_cliente'] ?>" data-toggle="modal" data-target="#modal-confirmacao-exclusao">Excluir</button>
                            </td>
                        </tr>
                      <?php endforeach; ?>
                    <?php else: ?>
                      <tr>
                        <td class="text-center" colspan="7">Nenhum Cliente Cadastrado!</td>
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
