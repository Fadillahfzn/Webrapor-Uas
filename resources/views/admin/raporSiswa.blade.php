<!DOCTYPE html>
<html lang="en">

@include('sb-admin/head')
<body>

     <!-- Page Wrapper -->
     <div id="wrapper">

        <!-- Sidebar -->
       @include('sb-admin/sidebar')
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
                   <div class="row">
                        <div class="col-xl-12">
                            <div class="card shadow-mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h5>Data Rapor</h5>
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('tambahsiswa.index') }}" class="btn btn-primary">
                                            Tambah Data +
                                    </a>
                                    <div class="table-responsive mt-4">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Mata Pelajaran</th>
                                                    <th>KKM</th>
                                                    <th>Nilai</th>
                                                    <th>Huruf</th>
                                                    <th>Predikat</th>
                                                </tr>
                                            </thead> 
                                            @foreach($data_nilai as $dn)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $dn->matpel->nama }}</td>
                                                    <td>{{ $dn->matpel->angka }}</td>
                                                    <td>{{ $dn->nilai }}</td>
                                                    <td>{{ $dn->ket }}</td>
                                                    <td>{{ $dn->predikat }}</td>
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