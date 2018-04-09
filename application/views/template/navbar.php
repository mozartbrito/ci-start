<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">CI-Start</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('principal'); ?>">Página Principal <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('funcionarios'); ?>">Funcionários</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('usuarios'); ?>">Usuários</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Configurações
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Relatórios</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('login/logout') ?>">Sair</a>
        </div>
      </li>
    </ul>
    <div class="text-right text-warning" style="margin-right: 60px;">
      Bem vindo <strong><?php echo $this->session->userdata('nome') ?></strong>
    </div>
  </div>
</nav>
<!-- navbar -->