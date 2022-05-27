<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar menupos-fixed menu-light brand-blue ">
    <div class="navbar-wrapper ">
        <div class="navbar-brand header-logo">
            <a href="{{url('/dashboard')}}" class="b-brand">
                <img src="../assets/images/logo.svg" alt="" class="logo images">
                <img src="../assets/images/logo-icon.svg" alt="" class="logo-thumb images">
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">

                </li>
                <li class="nav-item">
                    <a href="{{url('/gerant/dashboard')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Tableau de bord</span></a>
                </li>

                <li class="nav-item ">
                    <a href="{{url('stocksPoulets')}}" class="nav-link"><span class="pcoded-micon"><i class="fas fa-layer-group"></i></span><span class="pcoded-mtext">stocks poules</span></a>
                </li>
                <li class="nav-item ">
                    <a href="{{url('produits')}}" class="nav-link"><span class="pcoded-micon"><i class="fas fa-utensils"></i></span><span class="pcoded-mtext">Produits</span></a>
                </li>
                <li class="nav-item ">
                    <a href="{{route('Poulaillerindex')}}" class="nav-link"><span class="pcoded-micon"><i class="far fa-building"></i></span><span class="pcoded-mtext">Poulaillers</span></a>
                </li>
                <li class="nav-item ">
                    <a href="{{url('materiels')}}" class="nav-link"><span class="pcoded-micon"><i class="fas fa-cubes"></i></span><span class="pcoded-mtext">Materiels</span></a>
                </li>
                <li class="nav-item ">
                    <a href="{{url('gerants')}}" class="nav-link"><span class="pcoded-micon"><i class="fas fa-user-alt"></i></span><span class="pcoded-mtext">Gerant</span></a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->
