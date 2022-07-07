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
                   <h1 class="h3 mb-4 text-gray-800">Lihat Raport</h1>

                   <div class="row">
                    <div class="col-xl-12">
                        <div class="card shadow mb-4">
                            <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Rapor {{$siswa->nama}}</h6>
                                </div>

                            <div class="card-body">
                                <div class="table-responsive mt-4">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Mata Pelajaran</th>
                                                <th>KKM</th>
                                                <th>HURUF</th>
                                                <th>Nilai</th>
                                                <th>Huruf</th>
                                                <th>Predikat</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        @foreach ($data_nilai as $dn)
                                        <tbody>
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$dn->matpel->nama}}</td>
                                                <td>{{$dn->matpel->angka}}</td>
                                                <td>{{$dn->matpel->huruf}}</td>
                                                <td>{{$dn->nilai}}</td>
                                                <td>{{$dn->ket}}</td>
                                                <td>{{$dn->predikat}}</td>
                                                <td>@if ($dn->nilai >= $dn->matpel->kkm)
                                                    Terpenuhi
                                                    @else
                                                    Tidak Terpenuhi
                                                    @endif</td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
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
