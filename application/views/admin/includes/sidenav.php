<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Navigation</div>
                <a class="nav-link <?php if(strtolower($heading) === 'home'):?>active<?php endif; ?>" href="/admin">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="/" target="_blank">
                    <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                    Homepage
                </a>
                
                <div class="sb-sidenav-menu-heading">Management</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Users
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                    Images
                </a>
            </div>
        </div>
    </nav>
</div>