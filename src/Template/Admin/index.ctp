<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-plus"></i>
            <span id='plusJob'>Job</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Assign job form-->
          <form id="jobAssignForm">
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">

            <div class="form-group">
              <div class="form-label-group">

                <select class="form-control" id="name_dev">
                
                </select>
                <div id='errDev'></div>
                <lab  el for="inputDev">Select Developer</label>
              </div>
            </div>
              
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputClient" name="inputClient" class="form-control" placeholder="Developer">
                <div id='errClient'></div>
                <label for="inputClient">Client</label>
              </div>
            </div>
             
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputJob" name="inputJob" class="form-control" placeholder="Email address">
                <div id='errJob'></div>
                <label for="inputJob">JOB</label>
              </div>
            </div>

              
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">

              <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputTimings" name="inputTimings" class="form-control" placeholder="Email address">
                <div id='errInputTimings'></div>
                <label for="inputTimings">Timings/Hours</label>
              </div>
            </div>
            <input type="button" class="btn btn-primary" id="assign" name="assign" value="Assign">
             
            </div>
          </div>
        </form>
<!--Single Data info-->

 <form id="single_Job_Form">
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">

            <div class="form-group">
              <div class="form-label-group">

                <select class="form-control" id="s_Name_dev">
                  <option id="s_Dev_Name">Developer</option>>
                  
                </select>
               
               
              </div>
            </div>
              
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="s_InputClient" name="s_InputClient" class="form-control" value="">
                <div id='errClient'></div>
                <label for="inputClient">Client</label>
              </div>
            </div>
             
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="s_InputJob" name="inputJob" class="form-control" >
              
                <label for="inputJob">JOB</label>
              </div>
            </div>

              
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">

              <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="s_InputTimings" name="inputTimings" class="form-control">
               <label for="inputTimings">Timings/Hours</label>
              </div>
            </div>

          
             
            </div>
          </div>
          <div class="row">
            <div class="col-xl-6 col-sm-6 mb-3">

              <div class="form-group">
              <div class="form-label-group">
                <textarea class="form-control" id="s_Job_Des" rows="10" Placeholder="Description"></textarea> 
                <div id='errInputTimings'></div>
               
              </div>
            </div>

            <input type="button" class="btn btn-primary" id="s_JobSave" name="assign" value="Save">
            <input type="button" class="btn btn-primary" id="s_JobCls" name="assign" value="Close">
             
            </div>

          </div>
        </form>
 

       

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Job Assigment</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="assign_Table" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     
                      <th>Developer</th>
                      <th>Job</th>
                      <th>Client</th>
                      <th>Timings(Hours)</th>
                      <th>Status</th>
                      <th>Details</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     
                      <th>Developer</th>
                      <th>Job</th>
                      <th>Client</th>
                      <th>Timings(Hours)</th>
                      <th>Status</th>
                      <th>Details</th>
                    </tr>
                  </tfoot>
                  <tbody id="jobTable">
                   <?php   
                   foreach($viewdata as $row){
                       echo "<tr>";
                       echo "<td>".$row->user_id ."</td>";
                       echo "<td>".$row->job ."</td>";
                       echo "<td>".$row->client_name ."</td>";
                       echo "<td>".$row->timings ."</td>";
                       echo "<td>".$row->status_job ."</td>";
                       echo "<td></td>";
                       echo "</tr>";
                       
                    
                       }
                   ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

  

    

 