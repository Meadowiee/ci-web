<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CI-WEB</title>

  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous" />
</head>

<body class="sidebar-expand-lg bg-body-tertiary">
  <div class="app-wrapper">
    <!--begin::Header-->
    <nav class="app-header navbar navbar-expand bg-body">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-lte-toggle="sidebar" href="<?php echo site_url('dashboard') ?>" role="button">
              <i class="bi bi-list"></i>
            </a>
          </li>
        </ul>
        <!--end::Start Navbar Links-->
        <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto">
          <!--begin::Navbar Search-->
          <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="<?php echo site_url('dashboard') ?>" role="button">
              <i class="bi bi-search"></i>
            </a>
          </li>
          <!--end::Navbar Search-->
          <!--begin::Messages Dropdown Menu-->
          <li class="nav-item dropdown">
            <a class="nav-link" data-bs-toggle="dropdown" href="#">
              <i class="bi bi-chat-text"></i>
              <span class="navbar-badge badge text-bg-danger">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
              <a href="#" class="dropdown-item">
                <!--begin::Message-->
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <img
                      src="<?php echo base_url('assets/images/notion.png') ?>"
                      alt="User Avatar"
                      class="img-size-50 rounded-circle me-3" />
                  </div>
                  <div class="flex-grow-1">
                    <h3 class="dropdown-item-title">
                      Brad Diesel
                      <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
                    </h3>
                    <p class="fs-7">Call me whenever you can...</p>
                    <p class="fs-7 text-secondary">
                      <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!--end::Message-->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!--begin::Message-->
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <img
                      src="<?php echo base_url('assets/images/notion.png') ?>"
                      alt="User Avatar"
                      class="img-size-50 rounded-circle me-3" />
                  </div>
                  <div class="flex-grow-1">
                    <h3 class="dropdown-item-title">
                      John Pierce
                      <span class="float-end fs-7 text-secondary">
                        <i class="bi bi-star-fill"></i>
                      </span>
                    </h3>
                    <p class="fs-7">I got your message bro</p>
                    <p class="fs-7 text-secondary">
                      <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!--end::Message-->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!--begin::Message-->
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <img
                      src="<?php echo base_url('assets/images/notion.png') ?>"
                      alt="User Avatar"
                      class="img-size-50 rounded-circle me-3" />
                  </div>
                  <div class="flex-grow-1">
                    <h3 class="dropdown-item-title">
                      Nora Silvester
                      <span class="float-end fs-7 text-warning">
                        <i class="bi bi-star-fill"></i>
                      </span>
                    </h3>
                    <p class="fs-7">The subject goes here</p>
                    <p class="fs-7 text-secondary">
                      <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!--end::Message-->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
          </li>
          <!--end::Messages Dropdown Menu-->
          <!--begin::Notifications Dropdown Menu-->
          <li class="nav-item dropdown">
            <a class="nav-link" data-bs-toggle="dropdown" href="#">
              <i class="bi bi-bell-fill"></i>
              <span class="navbar-badge badge text-bg-warning">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
              <span class="dropdown-item dropdown-header">15 Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="bi bi-envelope me-2"></i> 4 new messages
                <span class="float-end text-secondary fs-7">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="bi bi-people-fill me-2"></i> 8 friend requests
                <span class="float-end text-secondary fs-7">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                <span class="float-end text-secondary fs-7">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer"> See All Notifications </a>
            </div>
          </li>
          <!--end::Notifications Dropdown Menu-->
          <!--begin::User Menu Dropdown-->
          <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
              <img
                src="<?php echo base_url('assets/images/wall.jpg') ?>"
                class="user-image rounded-circle shadow"
                alt="User Image" />
              <span class="d-none d-md-inline">Shafina Ardelia</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
              <!--begin::User Image-->
              <li class="user-header text-bg-light">
                <img
                  src="<?php echo base_url('assets/images/wall.jpg') ?>"
                  class="rounded-circle shadow"
                  alt="User Image" />
                <p>
                  Shafina Ardelia
                  <small>Member since May. 2025</small>
                </p>
              </li>
              <!--end::User Image-->
              <!--begin::Menu Footer-->
              <li class="user-footer">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
                <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
              </li>
              <!--end::Menu Footer-->
            </ul>
          </li>
          <!--end::User Menu Dropdown-->
        </ul>
        <!--end::End Navbar Links-->
      </div>
      <!--end::Container-->
    </nav>
    <!--end::Header-->
    <!--begin::Sidebar-->
    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
      <!--begin::Sidebar Brand-->
      <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="<?php echo base_url('dashboard') ?>" class="brand-link">
          <!--begin::Brand Image-->
          <img
            src="assets/images/notion.png"
            width="30px"
            class="brand-image opacity-75 shadow" />
          <!--end::Brand Image-->
          <!--begin::Brand Text-->
          <span class="brand-text fw-light">CI-WEB</span>
          <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
      </div>
      <!--end::Sidebar Brand-->
      <!--begin::Sidebar Wrapper-->
      <div class="sidebar-wrapper">
        <nav class="mt-2">
          <!--begin::Sidebar Menu-->
          <ul
            class="nav sidebar-menu flex-column"
            data-lte-toggle="treeview"
            role="menu"
            data-accordion="false">
            <li class="nav-item">
              <a href="<?php echo site_url('dashboard') ?>" class="nav-link">
                <i class="nav-icon bi bi-house"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <div class="nav-link text-white">
                <i class="nav-icon bi bi-mortarboard"></i>
                <p>Dosen</p>
              </div>
              <ul class="nav-item">
                <li>
                  <a href="<?php echo site_url('dosen') ?>" class="nav-link">
                    <p>Dosen</p>
                  </a>
                </li>
                <li>
                  <a href="<?php echo site_url('dosen/add') ?>" class="nav-link">
                    <p>Add Dosen</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <div class="nav-link text-white">
                <i class="nav-icon bi bi-mortarboard"></i>
                <p>Mahasiswa</p>
              </div>
              <ul class="nav-item">
                <li>
                  <a href="<?php echo site_url('mahasiswa') ?>" class="nav-link">
                    <p>View Mahasiswa</p>
                  </a>
                </li>
                <li>
                  <a href="<?php echo site_url('mahasiswa/show') ?>" class="nav-link">
                    <p>Show Mahasiswa</p>
                  </a>
                </li>
                <li>
                  <a href="<?php echo site_url('mahasiswa/add') ?>" class="nav-link">
                    <p>Add Mahasiswa</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          <!--end::Sidebar Menu-->
        </nav>
      </div>
      <!--end::Sidebar Wrapper-->
    </aside>
    <!--end::Sidebar-->
    <!--begin::App Main-->
    <main class="app-main">
      <!--begin::App Content Header-->
      <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Row-->
          <!-- Header -->
          <div class="row">
            <div class="col-sm-6">
              <h2 class="mb-0">
                <?php if (empty($title)) {
                  echo 'Dashboard';
                } else {
                  echo $title;
                } ?>
              </h2>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  <?php if (empty($title)) { echo 'Dashboard'; } else { echo $title; } ?>
                </li>
              </ol>
            </div>
          </div>
          <!--end::Row-->
        </div>
        <!--end::Container-->
      </div>
      <!--end::App Content Header-->
      <!--begin::App Content-->
      <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
          <main>
            <?php if (!empty($content)) echo view($content) ?>
          </main>
        </div>
      </div>
      <!--end::App Content-->
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->
    <footer class="app-footer">
      <strong>Web Programming &copy; 2025&nbsp;
      </strong>
      All rights reserved.
      <!--end::Copyright-->
    </footer>
    <!--end::Footer-->
  </div>
  <!--end::App Wrapper-->

  <!--begin::Script-->
  <!--begin::Third Party Plugin(OverlayScrollbars)-->
  <script
    src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
    integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
    crossorigin="anonymous"></script>
  <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous">
  </script>

  <script src="<?php echo base_url('assets/js/adminlte.js') ?>"></script>
  <script>
    const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
    const Default = {
      scrollbarTheme: 'os-theme-light',
      scrollbarAutoHide: 'leave',
      scrollbarClickScroll: true,
    };
    document.addEventListener('DOMContentLoaded', function() {
      const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
      if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
        OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
          scrollbars: {
            theme: Default.scrollbarTheme,
            autoHide: Default.scrollbarAutoHide,
            clickScroll: Default.scrollbarClickScroll,
          },
        });
      }
    });
  </script>
  <!--end::OverlayScrollbars Configure-->
  <!--end::Script-->
</body>

</html>