<div class="dashboard-header">
  <nav class="navbar navbar-expand-lg bg-white fixed-top">
      <a class="navbar-brand" href="{{ route('main.index') }}">Dashboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto navbar-right-top">
              <li class="nav-item">
                  <div id="custom-search" class="top-search-bar">
                      <input class="form-control" type="text" placeholder="Search..">
                  </div>
              </li>
              <li class="nav-item dropdown nav-user">
                  <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ auth()->user()->my_image}}" alt="" class="user-avatar-md rounded-circle">
                    <span class=" nav-user-name text-dark ml-1">{{ auth()->user()->name}} </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                      <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                      <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                      <form method="post" action="{{ route('auth.logout') }}">
                        @csrf
                        <button style="cursor: pointer;" class="dropdown-item" onclick="this.closet('form').submit(); return false;">
                            <i class="fas fa-power-off mr-2"></i>Logout
                        </button>
                      </form>
                  </div>
              </li>
          </ul>
      </div>
  </nav>
</div>