<nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid ps-2 pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="<?php echo BASE_URL . 'index.php'?>">
               appname
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="<?php echo BASE_URL . 'index.php'?>">
                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                    Dashboard
                  </a>
                </li>
                <?php if(isset($_SESSION['id'])): ?>
                  <li class="nav-item">
                    <a class="nav-link me-2">
                      <i class="fa fa-user opacity-6 text-dark me-1"></i>
                      <?php echo $_SESSION['username']; ?>
                    </a>
                  </li>
                <?php endif; ?>
                <li class="nav-item">
                  <a class="nav-link me-2" href="<?php echo BASE_URL . 'register.php'?>">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                    Sign Up
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="<?php echo BASE_URL . '../database/out.php'?>">
                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                    log out
                  </a>
                </li>
              </ul>
              <ul class="navbar-nav d-lg-flex d-none">
                <li class="nav-item d-flex align-items-center">
                  <a class="btn btn-outline-primary btn-sm mb-0 me-2" target="_blank" >sign in</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>