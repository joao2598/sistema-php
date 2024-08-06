<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= (isset($funcionario)) ? "Editar" : "Novo" ?> Produto</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="/produtos" class="btn btn-primary" style="margin-right: 20px;">Voltar</a>
              <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
              <li class="breadcrumb-item"><a href="/produtos">Produtos</a></li>
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
        <form action="/produtos/store" method="post">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do Produto</label>
                            <input type="text" class="form-control" name="nome" value="<?= (isset($produto)) ? $produto['nome'] : "" ?>">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Qualidade</label>
                            <input type="text" class="form-control" name="qualidade" value="<?= (isset($produto)) ? $produto['qualidade'] : "" ?>">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Quantidade Minima</label>
                            <input type="text" class="form-control" name="quantidade_minima" value="<?= (isset($produto)) ? $produto['quantidade_minima'] : "" ?>">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Descrição</label>
                            <input type="text" class="form-control" name="descricao" value="<?= (isset($produto)) ? $produto['descricao'] : "" ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Valor de Compra</label>
                            <input type="text" class="form-control" name="valor_de_compra" value="<?= (isset($produto)) ? $produto['valor_de_compra'] : "" ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Valor de Venda</label>
                            <input type="text" class="form-control" name="valor_de_venda" value="<?= (isset($produto)) ? $produto['valor_de_venda'] : "" ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Margem de Lucro</label>
                            <input type="text" class="form-control" name="margem_de_lucro" value="<?= (isset($produto)) ? $produto['margem_de_lucro'] : "" ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Validade</label>
                            <input type="date" class="form-control" name="validade" value="<?= (isset($produto)) ? $produto['validade'] : "" ?>">
                        </div>
                    </div>
                    <?php if(isset($produto)): ?>
                        <input type="hidden" name="id_produto" value="<?= $produto['id_produto'] ?>">
                    <?php endif; ?>
                </div>
            </div>
            <div class="card-footer">
                  <button type="submit" class="btn btn-primary"><?= (isset($produto)) ? "Atualizar" : "Cadastrar" ?></button>
                </div>
              </form>
            </div>
      </div>
    </div>
  </div>