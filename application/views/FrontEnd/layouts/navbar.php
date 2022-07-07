<!-- ====== Header Start ====== -->
<header class="ud-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="<?= base_url()?>">
                <img src="<?= base_url()?>assets/images/logo/logo.svg" alt="Logo" />
              </a>
              <button class="navbar-toggler">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
              </button>

              <div class="navbar-collapse">
                <ul id="nav" class="navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class="ud-main" href="<?= base_url() ?>">Home</a>
                  </li>

                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="#about">About</a>
                  </li>

                  <li class="nav-item">
                    <a class="ud-main" href="<?= base_url()?>index.php/home/destination">Destination</a>
                  </li>

                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="#team">Team</a>
                  </li>

                  <li class="nav-item nav-item-has-children">
                    <a href="javascript:void(0)"> Category </a>
                    <ul class="ud-submenu">
                      <?php foreach($list_category as $ctg): ?>
                      <li class="ud-submenu-item">
                        <a href="<?= base_url()?>index.php/home/category?nama_jenis=<?= $ctg->nama_jenis ?>" class="ud-submenu-link">
                          <?= $ctg->nama_jenis ?>
                        </a>
                      </li>
                      <?php endforeach;  ?>
                    </ul>
                  </li>
                </ul>
              </div>

              <div class="navbar-btn d-none d-sm-inline-block">
              <?php
              if($this->session->has_userdata('USERNAME')):?>
                <a href="<?= base_url()?>index.php/login/logout" class="ud-main-btn ud-login-btn">
                  Logout
                </a>
              </div>
              <?php else:?>
                <a href="<?= base_url()?>index.php/login" class="ud-main-btn ud-login-btn">
                  Sign In
                </a>
                <a href="<?= base_url()?>index.php/login/register" class="ud-main-btn ud-white-btn">
                  Sign Up
                </a>
              <?php endif; ?>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ====== Header End ====== -->