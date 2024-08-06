<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ver Produto</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="/produtos" class="btn btn-primary" style="margin-right: 20px;">Voltar</a>
              <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
              <li class="breadcrumb-item"><a href="/produtos">Produtos</a></li>
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
        <form action="/produtos/store" method="post">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" class="form-control" value="<?= $produto['nome'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Qualidade</label>
                            <input type="text" class="form-control" value="<?= $produto['qualidade'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Quantidade Minima</label>
                            <input type="text" class="form-control" value="<?= $produto['quantidade_minima'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Descrição</label>
                            <input type="text" class="form-control" value="<?= $produto['descricao'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Valor de Compra</label>
                            <input type="text" class="form-control" value="<?= $produto['valor_de_compra'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Valor de Venda</label>
                            <input type="text" class="form-control" value="<?= $produto['valor_de_venda'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Margem de Lucro</label>
                            <input type="text" class="form-control" value="<?= $produto['margem_de_lucro'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Validade</label>
                            <input type="date" class="form-control" value="<?= $produto['validade'] ?>" disabled>
                        </div>
                    </div>
        
                    <?php if(isset($produto)): ?>
                        <input type="hidden" name="id_produto" value="<?= $produto['id_produto'] ?>" disabled>
                    <?php endif; ?>
                </div>
            </div>
        
              </form>
            </div>
      </div>
    </div>
  </div>