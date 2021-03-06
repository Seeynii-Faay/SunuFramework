<!-- ============================================================== -->
<!-- Wrapper -->
<!-- ============================================================== -->
<div id="wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">

            <!-- /Logo -->
            <!-- Search input and Toggle icon -->

            <ul class="nav navbar-top-links navbar-right pull-right">
                <li>
                    <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                        <input type="text" placeholder="Search..." class="form-control">
                        <a href=""><i class="fa fa-search"></i></a>
                    </form>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                        <b class="hidden-xs"><?= $this->_USER->prenom;?> <?= $this->_USER->nom;?></b><span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated flipInY">
                        <li>
                            <div class="dw-user-box">
                                <div class="u-text">
                                    <h4><?= $this->_USER->prenom;?> <?= $this->_USER->nom;?></h4>
                                    <p class="text-muted"><?= $this->_USER->email;?></p>
                                </div>
                            </div>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?= WEBROOT ?>utilisateur/profil"><i class="ti-user"></i>&nbsp;&nbsp;<?= $this->lang['mon_profil']; ?></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?= WEBROOT ?>home/logout"><i class="fa fa-power-off"></i>&nbsp;&nbsp;<?= $this->lang['se_deconnecter']; ?></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?= WEBROOT ?>config"><i class="fa fa-cogs"></i>&nbsp;&nbsp;<?= $this->lang['configuration']; ?></a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav slimscrollsidebar">
            <div class="sidebar-head">
                <h3> <span class="hide-menu"><a href="<?= RACINE ?>"><?= PROJET ?></a></span></h3>
            </div>
            <div class="user-profile">
                <div class="dropdown user-pro-body">
                    <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $this->_USER->prenom;?> <?= $this->_USER->nom;?><span class="caret"></span></a>
                    <ul class="dropdown-menu animated flipInY">
                        <li><a href="<?= WEBROOT ?>utilisateur/profil"><i class="ti-user"></i>&nbsp;&nbsp;<?= $this->lang['mon_profil']; ?></a></li>
                        <li><a href="<?= WEBROOT ?>home/logout"><i class="fa fa-power-off"></i>&nbsp;&nbsp;<?= $this->lang['se_deconnecter']; ?></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?= WEBROOT ?>config"><i class="fa fa-cogs"></i>&nbsp;&nbsp;<?= $this->lang['configuration']; ?></a></li>
                    </ul>
                </div>
            </div>
            <ul class="nav" id="side-menu">
                <?php if(\app\core\Utils::authorized(null, null, 'parametrage')){ ?>
                    <li>
                        <a href="#" class="waves-effect">
                            <i class="mdi mdi-wrench fa-fw"></i>
                            <span class="hide-menu"><?= $this->lang['parametrage']; ?><span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <?php if(\app\core\Utils::authorized(null, null, null, 'module')){ ?>
                                <li>
                                    <a href="<?= WEBROOT; ?>module/list">
                                        <i class="fa-fw fa fa-cog"></i>
                                        <span class="hide-menu"><?= $this->lang['modules']; ?></span>
                                    </a>
                                </li>
                            <?php } if(\app\core\Utils::authorized(null, null, null, 'sousModule')){ ?>
                                <li>
                                    <a href="<?= WEBROOT; ?>sousmodule/list">
                                        <i class="fa-fw fa fa-cog"></i>
                                        <span class="hide-menu"><?= $this->lang['sousmodules']; ?></span>
                                    </a>
                                </li>
                            <?php } if(\app\core\Utils::authorized(null, null, null, 'droit')){ ?>
                                <li>
                                    <a href="<?= WEBROOT; ?>droit/list">
                                        <i class="fa-fw fa fa-cog"></i>
                                        <span class="hide-menu"><?= $this->lang['droit']; ?></span>
                                    </a>
                                </li>
                            <?php } if(\app\core\Utils::authorized(null, null, null, 'profil')){ ?>
                                <li>
                                    <a href="<?= WEBROOT; ?>profil/list">
                                        <i class="fa-fw fa fa-cog"></i>
                                        <span class="hide-menu"><?= $this->lang['profil']; ?></span>
                                    </a>
                                </li>
                            <?php } if(\app\core\Utils::authorized(null, null, null, 'utilisateur')){ ?>
                                <li>
                                    <a href="<?= WEBROOT; ?>utilisateur/list">
                                        <i class="fa-fw fa fa-cog"></i>
                                        <span class="hide-menu"><?= $this->lang['utilisateur']; ?></span>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <div id="page-wrapper">