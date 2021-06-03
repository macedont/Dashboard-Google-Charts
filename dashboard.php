<!DOCTYPE html>
<!-- saved from url=(0056)https://getbootstrap.com.br/docs/4.1/examples/dashboard/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com.br/favicon.ico">

    <title>Template de dashboard, usando Bootstrap.</title>

    <!-- Principal CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style type="text/css">
      @media only screen and (max-width:  600px){
        body{
          width: 300px;
        }
      }

      .sombra{
        -webkit-box-shadow: 10px 10px 5px -3px rgba(214,214,214,1);
        -moz-box-shadow: 10px 10px 5px -3px rgba(214,214,214,1);  
        box-shadow: 10px 10px 5px -3px rgba(214,214,214,1);
      }
    </style>

  <body style="background-color: #f8f9fa;">
    <nav class="navbar navbar-expand-lg" style="background-color: #2c3b63">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color: white;">Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCustom" aria-controls="navbarCustom" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCustom">
        <div class="navbar-nav ml-auto">
          <a class="nav-link active" aria-current="page" href="#" style="color: white;">Home</a>
          <a class="nav-link" href="#" style="color: white;">Sobre Nós</a>
          <a class="nav-link" href="#" style="color: white;">Contatos</a>
        </div>
      </div>
    </div>
</nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar" style="background-color: #fff; border-right: 1px solid #f3f3f3;">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" style="color: black;" href="?pagina=clientes">
                  <i class="fa fa-users"></i> Clientes
                </a>
                <a class="nav-link" style="color: black;" href="?pagina=pedidos">
                  <i class="fa fa-box"></i> Pedidos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: black;" href="?pagina=produtos">
                  <i class="fa fa-bars"></i> Produtos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: black;" href="?pagina=vendas">
                  <i class="fa fa-dollar-sign" aria-hidden="true"></i> Vendas
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              
            </div>
          </div>
          <?php
            if(isset($_GET['pagina'])){
                switch ($_GET['pagina']) {
                    case 'pedidos':
                        echo "<h3>Pedidos</h3>";
                        include 'graficos/graficoArea.php';
                        break;
                    
                    case 'produtos':
                        echo "<h3>Produtos</h3>";

                        break;
                    case 'vendas':
                        echo "<h3>Cadastro de vendas</h3>";
                        include 'cadastro_vendas.php';
                        break;
                    case 'clientes':
                        echo "<h3>Cadastro Clientes</h3>";
                        include 'cadastro_cliente.php';
                        break;
                    default: 
                        include 'default.php';
                        include 'painel.php';
                        break;
                }
            }

          ?>
        </main>
      </div>
    </div>

    <div class="d-block d-sm-none">
      <nav class="navbar fixed-bottom navbar-light bg-light">
        <a class="navbar-brand" href="#">Dasboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#botoes" aria-controls="botoes" aria-expanded="true" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span>
        </button>
          <div class="collapse" id="botoes">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="?pagina=clientes">
                  Clientes
                </a>
                <a class="nav-link" href="?pagina=pedidos">
                  Pedidos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?pagina=produtos">
                  Produtos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?pagina=vendas">
                  Vendas
                </a>
              </li>
            </ul>
          </div>
        </nav>
    </div>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script
      src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"
      data-search-pseudo-elements
    ></script>
<script type="text/javascript">
  $(window).resize(function() {
    graficoLinha();
    graficoPizza();
  })
</script>
</body></html>