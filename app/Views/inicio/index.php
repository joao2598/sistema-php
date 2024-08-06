<?php

$session = session();

$primeiro_nome = $session->get('primeiro_nome');


?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Seja Bem Vindo! <?= $primeiro_nome ?></h1>
          </div><!-- /.col -->
          <!--<div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div>-->
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container-fluid">

        <div class="row">

        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Clientes</span>
                <span class="info-box-number"><?= $total_de_clientes ?></span>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Funcionários</span>
                <span class="info-box-number"><?= $total_de_funcionarios ?></span>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="fas fa-box-open"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Produtos</span>
                <span class="info-box-number"><?= $total_de_produtos ?></span>
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </div>
