<!DOCTYPE html>
<html lang="en">

@include('sb-admin/head')
<body>

     <!-- Page Wrapper -->
     <div id="wrapper">

        <!-- Sidebar -->
        <!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashboardUser') }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-solid fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SMA AN-Nurmaniyah</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('dashboardUser') }}">
            <i class="fas fa-solid fa-user"></i>
            <span>Profil</span>
        </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('lihatrapor') }}">
            <i class="fas fa-solid fa-book"></i>
            <span>Lihat Rapor</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('ubahpassword') }}">
            <i class="fas fa-solid fa-calendar"></i>
            <span>Ubah Password</span>
        </a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
       <!-- End of Sidebar -->

       <!-- Content Wrapper -->
       <div id="content-wrapper" class="d-flex flex-column">

           <!-- Main Content -->
           <div id="content">

               <!-- Topbar -->
               @include('sb-admin/topbar')
               <!-- End of Topbar -->

               <!-- Begin Page Content -->
               <div class="container-fluid">

                   <!-- Page Heading -->
                   <h1 class="h3 mb-4 text-gray-800">Ubah Password</h1>

                   <div class="row">
                    <div class="col-xl-4">
                        <div class="card shadow mb-4">
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Password</h6>
                            </div>

                            <div class="card-body">
                                <form action="{{url('ubahpassword')}}/{{$user->id}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="password" id="password" name="password" placeholder="Masukkan Password Lama" class="form-control" required autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" id="password_baru" name="password_baru" placeholder="Masukkan Password Baru" class="form-control" required autocomplete="off">
                                    </div>
                                    <input type="hidden" name="_method" value="PUT">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>


               </div>
               <!-- /.container-fluid -->

           </div>
           <!-- End of Main Content -->

           <!-- Footer -->
           @include('sb-admin/footer')
           <!-- End of Footer -->

       </div>
       <!-- End of Content Wrapper -->

   </div>
   <!-- End of Page Wrapper -->

   <!-- Scroll to Top Button-->
   @include('sb-admin/button-topbar')

   <!-- Logout Modal-->
   @include('sb-admin/logout-modal')

   {{-- Javascript --}}
   @include('sb-admin/javascript')


</body>
</html>
