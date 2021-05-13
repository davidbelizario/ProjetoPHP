<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">Controle Financeiro</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('home') ?>">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Cadastro</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?= base_url('usuario/cadastro') ?>">Usuário</a>
          <a class="dropdown-item" href="#">Conta Bancária</a>
          <a class="dropdown-item" href="#">Parceiros</a>
        </div>
      </li>

         <!-- Dropdown -->
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Lançamentos</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Contas a pagar</a>
          <a class="dropdown-item" href="#">Contas a receber</a>
          <a class="dropdown-item" href="#">Fluxo de caixa</a>
        </div>
      </li>

         <!-- Dropdown -->
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Relatórios</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Lançamentos por período</a>
          <a class="dropdown-item" href="#">Resumo mensal</a>
          <a class="dropdown-item" href="#">Resumo anual</a>
        </div>
      </li>

    </ul>
    <!-- Links -->

    
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->