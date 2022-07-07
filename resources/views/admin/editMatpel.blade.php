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
                                <h5>Edit Mata Pelajaran</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('updatemapel') }}" class="card" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input-placeholder">Kode Matpel</label>
                                                <input type="text" name="kd_mapel" id="kd_mapel" value="{{ $matpel->kd_mapel }}" class="form-control" autocomplete="off" required readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input-placeholder">Nama</label>
                                                <input type="text" name="nama" id="nama" class="form-control" autocomplete="off" value="{{ $matpel->nama }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input-placeholder">Angka</label>
                                                <input type="number" name="angka" id="angka" class="form-control" autocomplete="off" value="{{ $matpel->angka }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input-placeholder">Huruf</label>
                                                <input type="text" name="huruf" id="huruf" class="form-control" autocomplete="off" value="{{ $matpel->huruf }}" required>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                            <footer class="card-footer text-justify">
                                <button class="btn btn-w-lg btn-primary" type="submit">
                                    Simpan
                                </button>
                                <a href="{{ url('matpel') }}" class="btn btn-w-lg btn-dark" type="reset">Kembali ke daftar matpel</a>
                            </footer>
                        </form>
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