<!DOCTYPE html>

<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrador</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
 
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<?php 
  session_start();
?>

<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="./img/logo-min.png" align="center"  width="40" height="45"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="./img/logo-white.png" width="190" height="52" align="center"></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
     
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar04.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="font-size: 20px"><?php echo $_SESSION['usuario'];?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

    

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Administrador</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="./index.php"><i class="fa fa-pie-chart"></i> <span>Início</span></a></li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-user-plus"></i> <span>Cadastar</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="./vcad_user.php">Cadastro de Usuario</a></li>
			<li><a href="./cad_cliente1.php">Cadastro Veículo</a></li>
			<li><a href="./cad_cliente2.php">Solicitar Serviço</a></li>
      <li><a href="./cad_prod.php">Produto</a></li>
          </ul>
        </li>
		
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Consultar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="listar_user.php">Usuarios</a></li>
		  <li><a href="listar_clientes1.php">Veículos Cadastrados</a></li>
      <li><a href="listar_clientes2.php">Veículos Agendados</a></li>
      <li><a href="listar_serv.php">Serviços</a></li>
      <li><a href="listar_prod.php">Produtos</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-wrench"></i> <span>Controle de Gastos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="cad_os.php">Cadastrar OS</a></li>
		  <li><a href="listar_os.php">Listar OS</a></li>
          </ul>
        </li>

        <li class="active"><a href="destruirsess.php"><i class="fa fa-sign-out"></i> <span>Sair</span></a></li>
		
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->