@extends('layouts.admin')

@section('title')
AdminPanel
@endsection()

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="">Starter Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
            
            
                <!-- /.col -->
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">Services</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Special title treatment</h6>

                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">Clients</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's
                                content.
                            </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->




            <div class="col">
                <div class="card ">
                    <div class="card-header">
                        <h5 class="m-0">Consultations</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Special title treatment</h6>

                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div> <!-- /.card -->
            </div>

        </div>
        <!-- /.row -->

        <!-- row -->
        <div class="row">
        
         <div class="col-md-6">
            <!-- USERS LIST -->
            <div class="card">
               <div class="card-header">
               <h3 class="card-title">Latest Members</h3>

               <div class="card-tools">
                  <span class="badge badge-danger">8 New Members</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                     <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                     <i class="fas fa-times"></i>
                  </button>
               </div>
               </div>
               <!-- /.card-header -->
               <div class="card-body p-0">
               <ul class="users-list clearfix">
                  <li>
                     <img src="/img/user_pic.jpg" alt="User Image">
                     <a class="users-list-name" href="#">Alexander Pierce</a>
                     <span class="users-list-date">Today</span>
                  </li>
                  <li>
                     <img src="img/user_pic.jpg" alt="User Image">
                     <a class="users-list-name" href="#">Norman</a>
                     <span class="users-list-date">Yesterday</span>
                  </li>
                  <li>
                     <img src="img/user_pic.jpg" alt="User Image">
                     <a class="users-list-name" href="#">Jane</a>
                     <span class="users-list-date">12 Jan</span>
                  </li>
                  <li>
                     <img src="img/user_pic.jpg" alt="User Image">
                     <a class="users-list-name" href="#">John</a>
                     <span class="users-list-date">12 Jan</span>
                  </li>
                  <li>
                     <img src="img/user_pic.jpg" alt="User Image">
                     <a class="users-list-name" href="#">Alexander</a>
                     <span class="users-list-date">13 Jan</span>
                  </li>
                  <li>
                     <img src="img/user_pic.jpg" alt="User Image">
                     <a class="users-list-name" href="#">Sarah</a>
                     <span class="users-list-date">14 Jan</span>
                  </li>
                  <li>
                     <img src="img/user_pic.jpg" alt="User Image">
                     <a class="users-list-name" href="#">Nora</a>
                     <span class="users-list-date">15 Jan</span>
                  </li>
                  <li>
                     <img src="img/user_pic.jpg" alt="User Image">
                     <a class="users-list-name" href="#">Nadia</a>
                     <span class="users-list-date">15 Jan</span>
                  </li>
               </ul>
               <!-- /.users-list -->
               </div>
               <!-- /.card-body -->
               <div class="card-footer text-center">
               <a href="javascript:">View All Users</a>
               </div>
               <!-- /.card-footer -->
            </div>
            <!--/.card -->
         </div>
         <!-- /.col -->
        
        
        
            <div class="col-md-6">
                <!-- PRODUCT LIST -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Recently Added Products</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <ul class="products-list product-list-in-card pl-2 pr-2">
                            <li class="item">
                                <div class="product-img">
                                    <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">Samsung TV
                                        <span class="badge badge-warning float-right">$1800</span></a>
                                    <span class="product-description">
                                        Samsung 32" 1080p 60Hz LED Smart HDTV.
                                    </span>
                                </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">Bicycle
                                        <span class="badge badge-info float-right">$700</span></a>
                                    <span class="product-description">
                                        26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                                    </span>
                                </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">
                                        Xbox One <span class="badge badge-danger float-right">
                                            $350
                                        </span>
                                    </a>
                                    <span class="product-description">
                                        Xbox One Console Bundle with Halo Master Chief Collection.
                                    </span>
                                </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">PlayStation 4
                                        <span class="badge badge-success float-right">$399</span></a>
                                    <span class="product-description">
                                        PlayStation 4 500GB Console (PS4)
                                    </span>
                                </div>
                            </li>
                            <!-- /.item -->
                        </ul>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                        <a href="javascript:void(0)" class="uppercase">View All Products</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

</div>
</div>
<!-- /.row -->
</div> <!-- /.container-fluid -->
</div><!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection('content')
