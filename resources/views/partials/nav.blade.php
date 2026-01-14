<nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
  <a class="navbar-brand" href="#">Job Finder</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('profiles.index') }}">Profiles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('settings') }}">Infos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('profile.create') }}">Add Profile</a>
      </li>
    
  </div>
</nav>