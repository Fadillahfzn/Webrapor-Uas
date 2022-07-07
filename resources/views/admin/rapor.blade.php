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
                        <div class="col-xl-4">
                            <div class="card shadow-mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h5>Input Nilai Siswa</h5>
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('tambahrapor.index') }}" class="btn btn-primary">
                                        Tambah Data +   
                                    </a>
                                </div>
                            </div>
                        </div>
                   </div>

                   <div class="row mt-5">
                    <div class="col-xl-4">
                        <div class="card shadow-mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h5>Lihat Nilai Siswa</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('raporsiswa') }}">
                                    <div class="form-group">
                                        <select class="form-control select2" style="width: 100%" name="nisn" id="nisn" required>
                                            <option selected disabled value="">Pilih Siswa</option>
                                            @foreach ($data_siswa as $item)
                                            @if ($item->nama == 'admin' )
                                                @continue
                                            @endif
                                            <option value="{{ $item->nisn}}">{{$item->nisn}} - {{ $item->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button class="btn btn-primary">Lihat</button>
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