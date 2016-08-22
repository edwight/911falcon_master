  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
        @if(Auth::check())
          <img src="{{ Auth::user()->foto }}" class="img-circle" alt="User Image">
          @else
          <img src="{{ asset('imgs/users/avatar.png') }}" class="img-circle" alt="User Image">
        @endif

        </div>
        <div class="pull-left info">
        @if(Auth::check())
          <p>{{ Auth::user()->name }}</p>
        @else
         <p>Anonimo</p>
        @endif
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ asset('/') }}"><i class="fa fa-circle-o"></i>Principal</a></li>
          </ul>
        </li>
        @if(Auth::check() && Auth::user()->roles == 'admin')
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Modulo de Usuario</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ asset('admin/users') }}"><i class="fa fa-circle-o"></i>lista de usuarios</a></li>
            <li><a href="{{ asset('admin/users/create') }}"><i class="fa fa-circle-o"></i>Crear Usuario</a></li>
            <li><a href="{{ asset('admin/grupos') }}"><i class="fa fa-circle-o"></i>Lista de Grupos</a></li>
            <li><a href="{{ asset('admin/grupos/create') }}"><i class="fa fa-circle-o"></i>Crear Grupos</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Modulo Organismos</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ asset('admin/organismos') }}"><i class="fa fa-circle-o"></i>lista de Organismos</a></li>
            <li><a href="{{ asset('admin/organismos/create') }}"><i class="fa fa-circle-o"></i>Crear Organismos</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Modulo Motivos</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ asset('admin/motivos') }}"><i class="fa fa-circle-o"></i>lista de Organismos</a></li>
            <li><a href="{{ asset('admin/motivos/create') }}"><i class="fa fa-circle-o"></i>Crear Organismos</a></li>
          </ul>
        </li>

        @endif

        @if( Auth::check())
        <li><a href="{{ asset('admin/recepcion/create') }}"><i class="fa fa-book"></i> <span>Recepcion de llamadas</span></a></li>

        <li><a href="{{ asset('admin/despacho') }}"><i class="fa fa-book"></i> <span>Despacho de llamadas</span></a></li>
 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Modulo de Supervisores</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ asset('admin/supervisores/despacho') }}"><i class="fa fa-circle-o"></i> despacho</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Reportes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ asset('/admin/reporte/organismos/total') }}"><i class="fa fa-circle-o"></i>Organismos</a></li>
            <li><a href="{{ asset('/admin/reporte/motivos/total') }}"><i class="fa fa-circle-o"></i>Motivos</a></li>
            <li><a href="{{ asset('/admin/reporte/estados/total') }}"><i class="fa fa-circle-o"></i>Estados</a></li>
            <li><a href="{{ asset('/admin/reporte/municipios/total') }}"><i class="fa fa-circle-o"></i>Municipios</a></li>
            <li><a href="{{ asset('/admin/reporte/llamadas/total') }}"><i class="fa fa-circle-o"></i>Llamadas</a></li>
            <li><a href="{{ asset('/admin/reporte/casos/total') }}"><i class="fa fa-circle-o"></i>Casos</a></li>
           
          </ul>
        </li>
        @endif
        <li><a href="#"><i class="fa fa-book"></i> <span>Documentación</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>