<style>
  .user-img {
    position: absolute;
    height: 27px;
    width: 27px;
    object-fit: cover;
    left: -7%;
    top: -12%;
  }
  .btn-rounded {
    border-radius: 50px;
  }
  .navbar-light {
    background-color: #add8e6 !important; /* Light blue background */
  }
  .navbar-light .navbar-nav .nav-link {
    color: #000 !important; /* Black text color for better contrast */
  }
  .navbar-light .navbar-nav .nav-link:hover {
    color: #0056b3 !important; /* Darker blue for hover effect */
  }
  .navbar-light .navbar-nav .dropdown-menu {
    background-color: #add8e6; /* Light blue background for dropdown menu */
    border: none;
  }
  .navbar-light .navbar-nav .dropdown-item {
    color: #000 !important; /* Black text color for dropdown items */
  }
  .navbar-light .navbar-nav .dropdown-item:hover {
    background-color: #87cefa !important; /* Lighter blue on hover */
  }
</style>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-light shadow text-sm">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?php echo base_url ?>" class="nav-link"><?php echo (!isMobileDevice()) ? $_settings->info('name') : $_settings->info('name'); ?> </a>
    </li>
  </ul>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item">
      <div class="btn-group nav-link">
        <button type="button" class="btn btn-rounded badge badge-light dropdown-toggle dropdown-icon" data-toggle="dropdown">
          <span><img src="<?php echo validate_image($_settings->userdata('avatar')) ?>" class="img-circle elevation-2 user-img" alt="User Image"></span>
          <span class="ml-3"><?php echo ucwords($_settings->userdata('firstname') . ' ' . $_settings->userdata('lastname')) ?></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu" role="menu">
          <a class="dropdown-item" href="<?php echo base_url . 'admin/?page=user' ?>"><span class="fa fa-user"></span> My Account</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url . '/classes/Login.php?f=logout' ?>"><span class="fas fa-sign-out-alt"></span> Logout</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
    </li>
  </ul>
</nav>
<!-- /.navbar -->
