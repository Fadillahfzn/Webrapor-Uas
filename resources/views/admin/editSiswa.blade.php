<!DOCTYPE html>
<html lang="en">

@include('../sb-admin/head')
<body>

     <!-- Page Wrapper -->
     <div id="wrapper">

        <!-- Sidebar -->
       @include('../sb-admin/sidebar')
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
                                <h5>Edit Data Siswa</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('updatesiswa') }}" class="card" method="POST" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input-placeholder">NISN(*)</label>
                                                <input type="text" name="nisn" id="name" class="form-control" value="{{ $siswa->nisn }}" autocomplete="off" readonly required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input-placeholder">Username(*)</label>
                                                <input type="text" name="username" id="name" class="form-control" value="{{ $user->username }}" autocomplete="off" readonly required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input-placeholder">Password(*)</label>
                                                <input type="password" name="password" id="name" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input-placeholder">Nama(*)</label>
                                                <input type="text" name="nama" id="nama" class="form-control" value="{{ $siswa->nama }}" autocomplete="off" required>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input-placeholder">Alamat(*)</label>
                                                <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $siswa->alamat }}" autocomplete="off" required>
                                            </div>
                                        </div>
                                
                                            
                                    </div>
                                
                            </div>
                            <footer class="card-footer text-justify">
                                <button class="btn btn-w-lg btn-primary" type="submit">
                                    Simpan
                                </button>
                                <a href="{{ route('siswa') }}" class="btn btn-w-lg btn-dark" type="reset">Kembali ke daftar mahasiswa</a>
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
           @include('../sb-admin/footer')
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