@extends('layouts.default')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <section class="content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <h1>Dashboard</h1>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-12">
                <?php
                // if (isset($_SESSION['user']) && $_SESSION['user']['user_role'] == 'Admin') {
                ?>
                <a href="#" onclick="_manage()">Manage Users</a>
                |
                <?php
                //}
                ?>
                <a href="#" onclick="_products()">Manage Products</a>
                |
                <a href="#" onclick="_comments()">Manage Post</a>
                |
                <a href="#" onclick="chat_history()">Manage Chat History</a>
                |
                <a href="#" onclick="manage_orders()">Manage Orders</a>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php
        // if ($_SESSION['user']['user_role'] == "Admin") {
        ?>
        <h3>Users Statistics</h3>
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php
                  // echo $pending_orders['count(customer_order_id)'] ?? "0";
                  ?></h3>

                <p>Pending orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php
                  // echo $completed_orders['count(customer_order_id)'] ?? "0";
                  ?></h3>

                <p>Completed Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php
                  // echo $canceled_orders['count(customer_order_id)'] ?? "0";
                  ?></h3>

                <p>Canceled Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <!-- ./col -->



          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php
                  // echo $total_orders['count(customer_order_id)'] ?? '0';
                  ?></h3>

                <p>Total Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php
                  // echo $total_users['count(user_id)'];
                  ?></h3>

                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php
                  // echo $new_users['count(user_id)'];
                  ?></h3>

                <p>New users</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php
                  // echo $inactive_users['count(user_id)'];
                  ?></h3>

                <p>Inactive Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php
                  // echo $active_users['count(user_id)'];
                  ?></h3>

                <p>Active Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


        </div>
        <!-- /.row -->
        <?php
        // }
        ?>
        <?php
        // if ($_SESSION['user']['user_role'] != "Other") {
        ?>
        <h3>Personal Statistics</h3>
        <div class="row">
          <?php
          /* $q = "SELECT count(customer_order_id) AS count FROM customer_order WHERE status='On The Way' AND
          user_assign_role_id=" . $_SESSION['user']['user_assign_role_id'];
          $db->_result($q);
          $rec = mysqli_fetch_assoc($db->result);
          */
          ?>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php
                  // echo $rec['count'] ?? 0;
                  ?></h3>

                <p>Pending orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php
                  // echo $my_product_orders['count(customer_order_id)'] ?? 0;
                  ?></h3>

                <p>My Product Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <?php
          // }
          ?>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
