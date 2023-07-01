<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : ''}}" href="/dashboard/posts">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Berita
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/galery*') ? 'active' : ''}}" href="/dashboard/galery">
            <span data-feather="image" class="align-text-bottom"></span>
            Galleri
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/guru*') ? 'active' : ''}}" href="/dashboard/guru">
            <span data-feather="users" class="align-text-bottom"></span>
            Daftar Guru
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/ekstra*') ? 'active' : ''}}" href="/dashboard/ekstra">
            <span data-feather="trello" class="align-text-bottom"></span>
            Ekstrakurikuler
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/struktur*') ? 'active' : ''}}" href="/dashboard/struktur">
            <span data-feather="layout" class="align-text-bottom"></span>
            Struktur Sekolah
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/jadwal*') ? 'active' : ''}}" href="/dashboard/jadwal">
            <span data-feather="book" class="align-text-bottom"></span>
            Jadwal Pembelajaran
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/sop*') ? 'active' : ''}}" href="/dashboard/sop">
            <span data-feather="alert-octagon" class="align-text-bottom"></span>
            Standar Operasional (SOP)
          </a>
        </li>
      
      </ul>
    </div>
  </nav>