<header class="banner fixed-top mb-4">
<nav class="navbar navbar-light navbar-expand-md  justify-content-center py-2">
    <div class="container-fluid">
      <a class="brand animate__animated animate__fadeIn" href="{{ home_url('/') }} "><img src="@asset('images/matko-antolcic-logo-64.png')" width="64" alt="logo" class="pr-2"/>{{ get_bloginfo('name', 'display') }}</a>
      <!-- <button class="navbar-toggler ml-1 third-button" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
        <span class="navbar-toggler-icon"></span>
        <div class="animated-icon"><span></span><span></span><span></span></div>
      </button> -->

    <button class="navbar-toggler third-button" type="button" data-toggle="collapse" data-target="#collapsingNavbar2"
            aria-controls="navbarSupportedContent22" aria-expanded="false" aria-label="Toggle navigation">
      <div class="animated-icon"><span></span><span></span><span></span></div>
    </button>
      <div class="navbar-collapse nav-primary collapse justify-content-between align-items-center animate__animated animate__fadeIn" id="collapsingNavbar2">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu($primarymenu) !!}
        @endif
        <ul class="nav navbar-nav flex-row justify-content-center flex-nowrap language-select animate__animated animate__fadeIn">
          <li class="nav-item"><a class="nav-link active pr-2" href="">HR</a> </li>
                <li class="nav-item"><a class="nav-link px-0"> | </a> </li>
            <li class="nav-item"><a class="nav-link pl-2" href="">EN</a> </li>
        </ul>
      </div>
    </div>
</nav>
  <!--/.Navbar-->
</header>
