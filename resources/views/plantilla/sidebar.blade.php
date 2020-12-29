<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('img/logo.png') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Administrador</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
      <li class="treeview">
        <a href="#"><i class="fa fa-gears"></i> <span>Gestionar</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
          <ul class="treeview-menu">
              <li><a href="{{ route('personas.index') }}">Personas</a></li>
              <li><a href="{{ route('ciudades.index') }}">Ciudades</a></li>
          </ul>
      </li>
  
      <li class="treeview">
        <a href="#"><i class="glyphicon glyphicon-copy"></i> <span>Repositorio</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
          <ul class="treeview-menu">
              <li><a href="https://github.com/DavidSoft21/parental_control">Ir a Github</a></li>
          </ul>
      </li>
  </ul>
  <!-- /.sidebar-menu -->
  </section>