<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="{{route('mahasiswa.index')}}">My Mahasiswa</a>
  
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link @yield('home')" aria-current="page" href="{{route('mahasiswa.index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('about')" aria-current="page" href="{{route('about.index')}}">Profil</a>
          </li>
        </ul>
        </form>
      </div>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->