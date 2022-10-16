<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Database Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDatabase"
           aria-expanded="true" aria-controls="collapseDatabase">
            <i class="fas fa-fw fa-server"></i>
            <span>Database</span>
        </a>
        <div id="collapseDatabase" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage Database</h6>
                <a class="collapse-item" href="#" data-toggle="modal" data-target="#importDataModal">Import Data</a>
                <a class="collapse-item" href="#" data-toggle="modal" data-target="#dataBrowserModal">Browse Data</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Models Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseModels"
           aria-expanded="true" aria-controls="collapseModels">
            <i class="fas fa-network-wired"></i>
            <span>Models</span>
        </a>
        <div id="collapseModels" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item">New Model</a>
                <a class="collapse-item" href="#">Model Library</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Testing Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTesting"
           aria-expanded="true" aria-controls="collapseTesting">
            <i class="fas fa-table"></i>
            <span>Testing</span>
        </a>
        <div id="collapseTesting" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item">New Test</a>
                <a class="collapse-item" href="#">Active Tests</a>
                <a class="collapse-item" href="#">Closed Tests</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Knowledge Base -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-brain"></i>
            <span>Knowledge Base</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
