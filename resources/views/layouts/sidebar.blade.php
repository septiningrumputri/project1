<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('image') }}/1.jpeg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{auth()->user()->name}}</p>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Daftar Menu</li>

        <li>
          <a href="/Utama"><i class="fa fa-book"></i> <span>Dashboard</span></a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fas fa-archive"></i><span>Berita</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="/berita"><i class="fa fa-circle-o"></i>Data Berita</a></li>
            <li><a href="/beritaAdd"><i class="fa fa-circle-o"></i>Tambah Data Berita</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fas fa-list-ul"></i> <span>Kategori</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="/Kategori"><i class="fa fa-circle-o"></i>Data Kategori</a></li>
            <li><a href="/KategoriAdd"><i class="fa fa-circle-o"></i>Tambah Data Kategori</a></li>
          </ul>
        </li>

        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>