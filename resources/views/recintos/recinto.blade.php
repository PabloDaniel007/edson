<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Capilla</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('https://www.w3schools.com/w3css/4/w3.css') }}">

  <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/icon?family=Material+Icons') }}">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">

  
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('css/_all-skins.min.css') }}">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="shortcut icon" href="img/favicon.ico">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a  class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>P.F.</b>G.</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Capilla</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- <small class="bg-black">Online</small> -->
                  <span class="hidden-xs">{{session()->get('data_user')}}</span>
                  <i class="fas fa-cogs"></i>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  
                  <li class="user-header">
                    <p>
                      Bienvenido
                      <small>Administrador</small>
                      <i class="fas fa-user-circle" style="font-size: 100px "></i>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">

                    <div class="pull-right">
                      <a href="{{ action('InicioController@session_destroy') }}" class="btn btn-default btn-flat">Cerrar Sesion</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>

            <li class="treeview">
              <a href="#">
                <i class="fas fa-book"></i>
                <span>Eventos</span>
                <i class=""></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ action('Categoria_eventoController@index')}}"><i class="fa fa-circle-o"></i> Registrar evento</a></li>
                <li><a href=" "><i class="fa fa-circle-o"></i> Categorías</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fas fa-address-book"></i>
                <span>Servicio</span>
                <i class=""></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Registrar evento</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Categorías</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fas fa-tasks"></i>
                <span>Inventario</span>
                <i class=""></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Registrar</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Categorías</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fas fa-address-book"></i>
                <span>Personas</span>
                <i class=""></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ action('PersonaController@index')}}" ><i class="fa fa-circle-o"></i> Listado de personas</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Directorio</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fas fa-globe"></i>
                <span>Recintos</span>
                <i class=""></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ action('RecintoController@index')}}" ><i class="fa fa-circle-o"></i> Dar de alta</a></li>
                
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fas fa-university"></i>
                <span>Capillas</span>
                <i class=""></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ action('CapillaController@index')}}" ><i class="fa fa-circle-o"></i> Dar de alta</a></li>
                
              </ul>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>


      <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

          <a href='#addRecinto' class='btn btn-success' data-toggle='modal'>Registrar Recinto +</a>

          <div class="row">
            <div class="col-md-12">
              <div class="box">

                <table align="center" class="table table-hover table-striped table-bordered" id="tb_recintos" class="display table-responsive" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nombre</th>
                      <th>Activo</th>
                      <th>Status</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>

                  </tbody>
                </table>

              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row -->

      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <!--Fin-Contenido-->

    <div class="modal fade" id="addRecinto" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="signin-form profile">
              <h3 class="agileinfo_sign">Registrar Recinto</h3>
              <div class="login-form">
                <form action="{{ action('RecintoController@addRecinto') }}" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="table table-hover">
                    <tr>
                      <td>
                        <div class="form-group">
                          <label for="choose">Nombre</label>
                          <input type="text" class="form-control" id="nombre" name="nombre" required="" placeholder="Iglecia">
                        </div>
                        <div class="form-group">
                          <label><input type="checkbox" id="activo" name="activo">Activo</label>
                        </div>
                        <div class="form-group">
                          <select name="statu_id" id="statu_id" class="form-control">
                            @foreach($status as $statu)
                            <option value="{{ $statu->id }}">{{ $statu->statu }}</option>
                            @endforeach
                          </select>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="submit" class="btn btn-success form-control" required="" value="Guardar">
                      </td>
                    </tr>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="myEditar" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="signin-form profile">
              <h3 class="agileinfo_sign">Aumentar Stock</h3>
              <div class="login-form">
                <form action="{{ action('RecintoController@editRecinto') }}" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="id_edit" id="id_edit" value="">
                  <div class="table table-hover">
                    <tr>
                      <td>
                        <div class="form-group">
                          <label for="choose">Nombre</label>
                          <input type="text" class="form-control" id="nombre_edit" name="nombre_edit" required="" placeholder="Iglecia">
                        </div>
                        <div class="form-group">
                          <label><input type="checkbox" id="activo_edit" name="activo_edit">Activo</label>
                        </div>
                        <div class="form-group">
                          <select name="statu_id_edit" id="statu_id_edit" class="form-control">
                            @foreach($status as $statu)
                            <option value="{{ $statu->id }}">{{ $statu->statu }}</option>
                            @endforeach
                          </select>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="submit" class="btn btn-success form-control" required="" value="Guardar">
                      </td>
                    </tr>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery 2.1.4 -->
    <script src="js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/app.min.js"></script>
    
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>

    <script type="text/javascript">

      $(document).ready(function(){
        //Se carga la funcion listar para llenar la tabla con los datos de la base de datos
        listar();
      });

      var listar = function(){
        var table = $('#tb_recintos').DataTable({

        //Numero de registros a mostrar en el DataTable
        "lengthMenu": [[5, 10], [5, 20]],

        //Permite volver a recargar el DataTable
        "destroy":true,

        //Cargar datos de la tabla proveedor
        "ajax":{
          "method":"get",
          "url":"{{ action('RecintoController@getRecinto') }}"
        },

        //Cargar datos por cada llaves
        "columns":[
        {"data":"id"},
        {"data":"nombre"},
        {"data":"activo"},
        {"data":"statu"},
        {"defaultContent":"<a href='#myEditar' class='editar btn btn-success' data-toggle='modal'>Editar</a>"},
        {"render":function(data,type,full,meta){
          return '<form action="{{ action("RecintoController@deleteRecinto") }}" method="post"><input type="hidden" name="_token" value="{{ csrf_token() }}"><input type="hidden" name="id_delete" id="id_delete" value="'+full.id+'"><button type="submit" class="btn btn-danger">Eliminar</button></form>';
        }},
        ],

        //Lenguaje en español
        "language": {
          "lengthMenu": "Mostrar _MENU_ registros por pagina",
          "zeroRecords": "No se encontraron resultados en su busqueda",
          "searchPlaceholder": "Buscar registros",
          "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
          "infoEmpty": "No existen registros",
          "infoFiltered": "(filtrado de un total de _MAX_ registros)",
          "search": "Buscador:",
          "paginate": {
            "first":    "Primero",
            "last":    "Último",
            "next":    "Siguiente",
            "previous": "Anterior"
          }
        },

        //Se agrega el scrol vertical
        "scrollX": true
      });
        editarRecinto("#tb_recintos tbody", table);
      }
      function editarRecinto(tbody, table){
        $(tbody).on("click", "a.editar", function(){
          var data = table.row( $(this).parents("tr") ).data();
          $("#id_edit").val(data.id);
          $("#nombre_edit").val(data.nombre);
          if (data.activo=="1") {
            $("#activo_edit").prop('checked', true);
          }else{
            $("#activo_edit").prop('checked', false);
          }
          $('#statu_id_edit option[value="'+data.statu+'"]').attr("selected", "selected");
        });
      }
    </script>
  </body>
  </html>
