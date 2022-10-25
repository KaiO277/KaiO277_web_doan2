<html lang="en" style="height: auto;"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Thêm Phòng</title>
    <link rel="icon" href="{{ asset('public/images/Logo-1.jpg') }}">
  
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/css/admin/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/admin/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/admin/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/admin/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/admin/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/admin/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/admin/bootstrap-duallistbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/admin/bs-stepper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/admin/dropzone.min.css') }}">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/css/admin/adminlte.min.css') }}">
  </head>
  <body class="sidebar-mini" style="height: auto;">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item d-none d-sm-inline-block">
            <a href="../../index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>
    
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li> 
          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="{{ asset('public/images/Logo-1.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      KaiO
                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      John Pierce
                      <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">I got your message bro</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Nora Silvester
                      <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">The subject goes here</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.navbar -->
    
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="../../index3.html" class="brand-link">
          <img src="{{ asset('public/images/Logo-1.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">KaiO</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
          
    
          <!-- SidebarSearch Form -->
          <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div><div class="sidebar-search-results"><div class="list-group"><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
          </div>
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              
              <li class="nav-item menu-open">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  
                  <p>
                    Bảng
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('Admin.home') }}" class="nav-link">
                        <i class="material-icons"style="font-size:15px" >radio_button_checked</i>
                      <p>Phòng</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('Admin.thongtindathang') }}" class="nav-link">
                        <i class="material-icons"style="font-size:15px" >radio_button_checked</i>
                      <p>Thông tin đặt phòng</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('Admin.khachhang') }}" class="nav-link">
                        <i class="material-icons"style="font-size:15px" >radio_button_checked</i>
                      <p>Khách hàng</p>
                    </a>
                  </li>
                  {{-- <li class="nav-item">
                    <a href="../forms/validation.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Validation</p>
                    </a>
                  </li> --}}
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Edit
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="../tables/simple.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Simple Tables</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../tables/data.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>DataTables</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../tables/jsgrid.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>jsGrid</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link  active">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                    Add 
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Thêm Phòng</p>
                    </a>
                  </li>
                </ul>
              </li>                                                 
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="min-height: 1345.6px;">
        <!-- Content Header (Page header) -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Điền thông tin phòng cần thêm</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('AdminStoreRoom') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div  class="mb-3 mt-3">
                              <label  for="IntroCar">Tên Khách Sạn:</label>
                              <input type="text"  class="form-control" placeholder='Nhập nội dung giới thiệu' name="txtTenKS">
                            </div>
                            <div class="mb-3">
                              <label  for="PriceOld">Loại Phòng:</label>
                              <input type="text" class="form-control" id="old" placeholder="Nhập giá cũ" name="txtLoaiPhong">
                            </div>
                            <div class="mb-3">
                                <label for="PriceSale">Giá Phòng:</label>
                                <input type="text" class="form-control" id="new" placeholder="Nhập giá mới" name="txtGiaPhong">
                            </div>
                            <div class="mb-3">
                                <label for="PriceSale">Địa chỉ:</label>
                                <input type="text" class="form-control" id="new" placeholder="Nhập giá mới" name="txtDiachi">
                            </div>
                            <div class="mb-3">
                                <label for="PriceSale">Số Điện Thoại:</label>
                                <input type="text" class="form-control" id="new" placeholder="Nhập giá mới" name="txtSoDT">
                            </div>
                            <div class="mb-3">
                                <label  for="Image">Image:</label>
                                <input type="file" name="txtImage" id="txtImage">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
      
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </section>        
        <!-- Main content -->
        
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 3.2.0
        </div>
        <strong>Copyright © 2014-2021 <a href="#">KaiO</a>.</strong> All rights reserved.
      </footer>
    
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark" style="display: none;">
        <!-- Control sidebar content goes here -->
      <!-- /.control-sidebar -->
    <div id="sidebar-overlay"></div></div>
    <!-- ./wrapper -->
    
   
    
    
    </body>
    <!-- jQuery -->
        <script src="{{ asset('public/js/admin/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('public/js/admin/bootstrap.bundle.min.js') }}"></script>
        <!-- bs-custom-file-input -->
        <script src="{{ asset('public/js/admin/bs-custom-file-input.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('public/js/admin/adminlte.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        {{-- <script src="{{ asset('public/js/admin/demo.js') }}"></script> --}}
        <!-- Page specific script -->
        <script>
        $(function () {
        bsCustomFileInput.init();
        });
        </script>
</body>
</html> 