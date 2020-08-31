<nav class="navbar-nav navbar-expand">
    <span class="navbar-brand blurflixnavbar ml-2"> Blurflix</span>
    <!-- Navbar que sur les grands écrans -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-md-block"><a class="nav-link" href="Home.php">Home</a></li>
        <li class="nav-item d-none d-md-block"><a class="nav-link" href="movies.php">Movies</a></li>
        <li class="nav-item d-none d-md-block"><a class="nav-link" href="tvshows.php">TV-Shows</a></li>
        <!-- Dropdown ne se montre que sur les petits écrans -->
        <li class="nav-item dropdown d-md-none">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Navigate
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-dark" href="Home.php">Home</a>
          <a class="dropdown-item text-dark" href="movies.php">Movies</a>
          <a class="dropdown-item text-dark" href="tvshows.php">TV-Shows</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav form-inline ml-auto">
        <li class="nav-item mx-2"><a class="nav-link" href="searchResults.php" title="Search"><i class="fas fa-search" style="font-size: 1.3em;color:#C76B16"></a></i></li>
            
        <li class="nav-item mx-2"><a class="nav-link" href="manageaccount.php" title="Manage account"><i class="far fa-user" style="font-size: 1.3em;color:#C76B16"></a></i></li>
        
        <li class="nav-item mx-2"><a class="nav-link" title="Sign out" id="signoutbutton"><i class="fas fa-sign-out-alt" style="font-size: 1.3em;color:#C76B16"></i></a></li>
    </ul>
</nav>
