<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Percolore</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href= "/res/admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style 
  <link rel="stylesheet" href="/res/admin/dist/css/AdminLTE.min.css">
   <link rel="stylesheet" href="/res/admin/dist/css/skins/skin-blue.min.css">
  -->
  <link rel="stylesheet" href="/res/Content/css/AdminLTE.css">
   <link rel="stylesheet" href="/res/Content/css/skins/skin-blue.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
 

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css" rel="stylesheet"/>
<!--
  <script  src="/res/Content/js/plugins/bootstrap-select/bootstrap-select.js"> </script>

  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>-->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


 
  <link rel="stylesheet" href="/res/Content/jsgrid/css/jsgrid.css">
  <link rel="stylesheet" href="/res/Content/jsgrid/css/theme.css">
  <link rel="stylesheet" href="/res/Content/css/bootstrap-select.css">
  <link rel="stylesheet" href="/res/Content/css/bootstrap-datepicker3.min.css">

  <link rel="stylesheet" href="/res/Content/css/bootstrap.min.css">


  <script  src="/res/Content/js/plugins/fastclick/fastclick.js"> </script>
  <script  src="/res/Content/js/plugins/slimscroll/jquery.slimscroll.js"> </script>
  <script  src="/res/Content/js/plugins/bootstrap-select/bootstrap-select.js"> </script>
  <script  src="/res/Content/js/plugins/moment/moment.js"> </script>


  <script  src="/res/Content/js/plugins/datepicker/bootstrap-datepicker.js"> </script>
  <script  src="/res/Content/js/plugins/icheck/icheck.js"> </script>
  <script  src="/res/Content/js/plugins/validator/validator.js"> </script>
  <script  src="/res/Content/js/plugins/inputmask/jquery.inputmask.bundle.js"> </script>
  <script  src="/res/Content/js/init.js"> </script>

  
  <script  src="/res/Content/jsgrid/src/jsgrid.core.js"> </script>
  <script  src="/res/Content/jsgrid/src/jsgrid.load-indicator.js"> </script>
  <script  src="/res/Content/jsgrid/src/jsgrid.load-strategies.js"> </script>
  <script  src="/res/Content/jsgrid/src/jsgrid.sort-strategies.js"> </script>
  <script  src="/res/Content/jsgrid/src/jsgrid.field.js"> </script>
  <script  src="/res/Content/jsgrid/src/fields/jsgrid.field.text.js"> </script>
  <script  src="/res/Content/jsgrid/src/fields/jsgrid.field.number.js"> </script>
  <script  src="/res/Content/jsgrid/src/fields/jsgrid.field.select.js"> </script>
  <script  src="/res/Content/jsgrid/src/fields/jsgrid.field.checkbox.js"> </script>
 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    
  

</head>

<style>

    .modal-dialog {
        width: 800px;
    }

    .modal-body {
        height: 450px;
        width: 800px;
        overflow-y: auto;
    }

    .media (min-height: 500px) {
        .modal-body

    {
        height: 450px;
    }

    }

    .media (min-height: 800px) {
        .modal-body

    {
        height: 400px;
    }

    }


    .tableFixHead {
        overflow: auto;
        height: 360px;
    }

        .tableFixHead thead th {
            position: sticky;
            top: 0;
            z-index: 1;
        }

    .tableFixHeadPrinc {
        overflow: auto;
        height: 180px;
    }

        .tableFixHeadPrinc thead th {
            position: sticky;
            top: 0;
            z-index: 1;
        }

    /* Just common table stuff. Really. */
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 4px 4px;
    }

    th {
        background: #fff;
    }

    .jsgrid-grid-header,
    .jsgrid-grid-body {
        overflow: auto;
    }

    .p_mouse {
        cursor: pointer;
    }


</style>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="/res/admin/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PER</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Percolore</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="" id="defaultLanguage"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <ul class="menu">
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" onclick="dpLUS();return false;">
                                        <i class="fa flag-icon flag-icon-us"></i> English
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" onclick="dpLBR();return false;">
                                        <i class="fa flag-icon flag-icon-br"></i> Brasil
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" onclick="dpLSP();return false;">
                                        <i class="fa flag-icon flag-icon-es"></i> Spain
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>
                
                <li class="notifications-menu" data-toggle="tooltip" title="Encerrar sessão" id="MenuToolTipLogOff">
                    <a href="#"><i class="fa fa-sign-out"></i> <span id="SideBarLogOff">Encerrar sessão</span></a>
                </li>
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        
        <!-- Optionally, you can add icons to the links -->
        <li><a href="/Activation/Home"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li><a href="/Activation/License"><i class="fa fa-tag"></i> <span>Licensa</span></a></li>
        <li><a href="/Activation/Report"><i class="fa fa-table"></i> <span>Relatorio</span></a></li>
        <li><a href="/Activation/User"><i class="fa fa-database"></i> <span>Usuários</span></a></li>
        
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>