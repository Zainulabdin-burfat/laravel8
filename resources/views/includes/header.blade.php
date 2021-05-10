<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>

    <li class="nav-item d-none d-sm-inline-block">
      <a href="index.php" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="/dashboard" class="nav-link">Dashboard</a>
    </li>


    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" onclick="_knowledge_base()" class="nav-link">Knowledge Base</a>
    </li>

    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" onclick="_discussion_forum()" class="nav-link">Discussion Forum</a>
    </li>

    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" onclick="_consultant()" class="nav-link">Consultancy Service</a>
    </li>

    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" onclick="_e_commerce()" class="nav-link">E-Commerce</a>
    </li>
  </ul>



  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">

    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-comments"></i>
        <span class="badge badge-danger navbar-badge"><?php
          // echo $result['Total'];
          ?></span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <?php
        /* while ($client = mysqli_fetch_assoc($db->result)) {
        if ($_SESSION['user']['user_role'] == 'Consultant') { */
        ?>
        <a onclick="_chat(<?php
// echo $client['consultancy_service_id'];
?>,<?php
// echo $client['user_assign_role_id'];
?>)" href="#" class="dropdown-item">
          <?php
          // } else {
          ?>
          <a onclick="_chat(<?php
// echo $client['consultancy_service_id'];
?>,<?php
// echo $client['consultant'];
?>)" href="#" class="dropdown-item">
            <?php
            // }
            ?>
            <!-- Message Start -->
            <div class="media">
              <img src="<?php
// echo $client['user_image'];
?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  <?php
                  // echo $client['first_name'];
                  ?>
                </h3>
                <p class="text-sm"><?php
                  // echo $client['query'];
                  ?></p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i><?php
                  // echo date('h:i a - d/m/y',strtotime($client['discussion_start']),);
                  ?></p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <?php
          // }
          ?>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
      </div>
    </li>
    <li>
      <!-- Authentication Links -->
      @guest
        @if (Route::has('login'))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      @endif

      @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
      @endif
    @else
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </li>
    @endguest
    </li>
  </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link">
    <img src="logo.jpg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Farmer Connection</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <?php
    // if (isset($_SESSION['user'])) {
    ?>
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php
// echo $_SESSION['user']['user_image'];
?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a onclick="view_profile(<?php
// echo $_SESSION['user']['user_assign_role_id'];
?>)" href="#" class="d-block">
          <?php
          // echo $_SESSION['user']['first_name'] ?? ''; echo ' (' . $_SESSION['user']['user_role'] . ')';
          ?></a>
      </div>
    </div>
    <?php
    // }
    ?>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <?php
        // if (isset($_SESSION['user']) && $_SESSION['user']['user_role'] != 'Other') {
        ?>

        <li class="nav-item">
          <a onclick="_dashboard()" id="dashboard" href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">

            <?php
            // if (isset($_SESSION['user']) && $_SESSION['user']['user_role'] == 'Admin') {
            ?>
            <li class="nav-item">
              <a onclick="_manage()" href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p> Manage Users</p>
              </a>
            </li>
            <?php
            // }
            ?>
            <li class="nav-item">
              <a onclick="_products()" href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p> Manage Products</p>
              </a>
            </li>
            <li class="nav-item">
              <a onclick="_comments()" href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p> Manage Post</p>
              </a>
            </li>

            <li class="nav-item">
              <a onclick="manage_orders()" href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p> Manage Orders</p>
              </a>
            </li>
            <li class="nav-item">
              <a onclick="chat_history()" href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p> Manage Chat History</p>
              </a>
            </li>

          </ul>
        </li>

        <?php
        // }
        ?>

        <li class="nav-item">
          <a onclick="_knowledge_base()" id="knowledge_base" href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Knowledge Base
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <?php
            /*
            $db->_result("SELECT * FROM category INNER JOIN category_assign ON
            category.category_id=category_assign.category_id WHERE category_assign.post_type='Knowledge_Base' AND
            parent_category IS NULL");
            if ($db->result->num_rows) {
            while ($c = mysqli_fetch_assoc($db->result)) { */
            ?>
            <li class="nav-item">
              <a onclick="category_post(<?php
// echo $c['category_id'];
?>,1)" href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p><?php
                  // echo $c['category'];
                  ?></p>
              </a>
            </li>
            <?php
            // } }
            ?>
          </ul>
        </li>

        <li class="nav-item">
          <a onclick="_discussion_forum()" id="forum" href="#" class="nav-link">
            <i class="fab fa-rocketchat"></i>
            <p>
              Discussion Forum
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <?php
            /*
            $db->_result("SELECT * FROM category INNER JOIN category_assign ON
            category.category_id=category_assign.category_id WHERE category_assign.post_type='discussion_forum' AND
            parent_category IS NULL");
            if ($db->result->num_rows) {
            while ($c = mysqli_fetch_assoc($db->result)) { */
            ?>
            <li class="nav-item">
              <a onclick="category_post(<?php
// echo $c['category_id'];
?>,2)" href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p><?php
                  // echo $c['category'];
                  ?></p>
              </a>
            </li>
            <?php
            // } }
            ?>
          </ul>
        </li>


        <li class="nav-item">
          <a onclick="_consultant()" id="consultant" href="#" class="nav-link">
            <i class="fa fa-user-md"></i>
            <p>Consultancy Service</p>
          </a>
        </li>

        <li class="nav-item">
          <a onclick="_e_commerce()" id="forum" href="#" class="nav-link">
            <i class="fa fa-shopping-bag"></i>
            <p>E-Commerce</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
