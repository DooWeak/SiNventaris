<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- Teks berjalan -->
<div class="navbar-text text-center mx-auto d-none d-md-block">
    <div class="moving-text">
      Sistem Informasi Pengelolaan Barang Pengadilan Tinggi Pontianak
    </div>
  </div>

  <style>
  .moving-text {
    font-weight: bold;
    white-space: nowrap;
    overflow: hidden;
    display: inline-block;
    animation: bounce 4s ease-in-out infinite;
  }

  /*.moving-text
  @keyframes bounce {
    0% {
      transform: translateX(100%);
    }
    50% {
      transform: translateX(-100%);
    }
    100% {
      transform: translateX(100%);
    }
  }
  */
  </style>


  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item d-flex justify-content-center align-items-center">
      <a class="nav-link h5 dropdown" href="#" data-target="#lang" data-toggle="dropdown" role="button">
        <div class="d-flex gap-2 align-items-center">
          <span class="lang-icon lang-icon-{{ app()->getLocale() }}"></span>
          <span class="ml-2">ID</span>
        </div>
        <div class="dropdown-menu" id="lang">
            <ul id="lang-dropdown" class="d-flex flex-column gap-2" style="max-height: 12rem;overflow-y: scroll;"></ul>
        </div>
      </a>
    </li>
    <li class="nav-item d-flex justify-content-center align-items-center">
      <a class="nav-link h5" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
      <div class="image dropdown">
        <a href="#" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ empty(Auth::user()->image) ? asset('user.png') : asset('storage/profile/' . Auth::user()->image) }}"
                 class="img-circle elevation-2"
                 style="width: 100% !important; max-width: 35px !important; aspect-ratio: 1 !important; object-fit: cover !important;"
                 id="img_profile"
                 alt="User Image">
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownProfile">
            <a href="{{route('settings.profile')}}" class="dropdown-item">
                <i class="fas fa-user mr-2"></i> Profile
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{route('login.delete')}}" class="dropdown-item">
                <i class="fas fa-sign-out-alt mr-2"></i> Logout
            </a>
        </div>
    </div>
    </li>
  </ul>
</nav>
<!-- /.navbar -->
