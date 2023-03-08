<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tourism</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container-fluid">
      <div class="row flex-nowrap">
        <div
          class="col-auto col-md-3 col-xl-2 px-sm-2 px-0"
          style="background-color: #6868ac"
        >
          <div
            class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100"
          >
            <a
              href="/panelhome"
              class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none"
            >
              <span class="fs-5 d-none d-sm-inline"
                >{{ Auth::user()->role == 'admin' ? 'Admin' : 'User' }}</span
              >
            </a>
            <br />
            <ul
              class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
              id="menu"
            >
              <li class="nav-item">
                <a
                  href="/panelhome"
                  class="nav-link align-middle px-0"
                  style="color: white"
                >
                  <span class="ms-1 d-none d-sm-inline">Home</span>
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="/data_destinasi"
                  class="nav-link align-middle px-0"
                  style="color: white"
                >
                  <span class="ms-1 d-none d-sm-inline">Data Destinasi</span>
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="/data_kuliner"
                  class="nav-link align-middle px-0"
                  style="color: white"
                >
                  <span class="ms-1 d-none d-sm-inline">Data Kuliner</span>
                </a>
              </li>
            </ul>
            <hr />
            <div class="dropdown pb-4">
              <a
                href="#"
                class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                id="dropdownUser1"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <span class="d-none d-sm-inline mx-1">{{ Auth::user()->role == 'admin' ? Auth::user()->name : Auth::user()->name }}</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="/logout">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col py-3">
        @yield("content")

        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
