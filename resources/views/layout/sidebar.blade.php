<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard/dashboard') ? 'active' : '' }}" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="`#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Status Penonton
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li class="nav-item">
                <a class="nav-link" href="waiting">
                  <span data-feather="users"></span>
                  Waiting
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{Request::is('dashboard/cekin') ? 'active' : '' }}" href="/penonton/selesai">
                  <span data-feather="users"></span>
                  Cek In
                </a>
              </li>

            </ul>
          </div>

          <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard/penonton') ? 'active' : '' }}" href="/penonton">
              <span data-feather="file-text"></span>
              Penonton
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard/Report') ? 'active' : '' }}" href="">
              <span data-feather="file-text"></span>
              Report
            </a>
          </li>
        </ul>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="`#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
      </div>
    </nav>