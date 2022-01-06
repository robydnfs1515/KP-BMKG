<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= templates() ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="<?= url('') ?>" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                            class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">DASHBOARD</li>
            <li class="treeview-dasboard">
                <a href="<?= url('beranda') ?>">
                    <i class="fa fa-dashboard"></i>
                    <span>dashboard</span></a>
            </li>

            <li class="header">DATA</li>
            <li>
                <a href="<?= url('datapegawai') ?>">
                    <i class="fa fa-th"></i> <span>Data Pegawai</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green"></small>
                    </span>
                </a>
            </li>
            <li class="header">OTHER </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th"></i> <span>Daftar / Masuk</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    <ul class="treeview-menu">
                        <li><a href="<?= url('signup') ?>"><i class="fa fa-circle-o"></i> Sign Up</a>
                        </li>
                        <li><a href="<?= url('login') ?>"><i class="fa fa-circle-o"></i> Sign In</a>
                        </li>
                    </ul>
                </a>
            </li>
        </ul>
    </section>
</aside>