<nav class="navbar navbar-expand-lg navbar-light bg-light py-2" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="/pabw-oop">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Action
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/pabw-oop/login">Login</a>
          <a class="dropdown-item" href="/pabw-oop/logout">Logout</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/pabw-oop/user/<?= $_SESSION['id'] ?>"><?= $_SESSION['username']; ?></a>
        </div>
      </li>
      
      <li class="nav-item"><a class="nav-link" href="/pabw-oop/user" >user</a></li>
      <li class="nav-item"><a class="nav-link" href="/pabw-oop/departement" >departement</a></li>
      <li class="nav-item"><a class="nav-link" href="/pabw-oop/prodi" >prodi</a></li>
      <li class="nav-item"><a class="nav-link" href="/pabw-oop/matkul" >matkul</a></li>
    </ul>
    
  </div>
</nav>