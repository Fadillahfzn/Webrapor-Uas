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
                                <h5>Input Nilai Siswa</h5>
                            </div>
                            <div class="card-body">
                            <form action="{{ route('tambahrapor.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Pilih Siswa</label>
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
                                <div class="form-group">
                                    <label for="">Mata Pelajaran</label>
                                    <select class="form-control select2" style="width: 100%" name="kode_matpel" id="kode_matpel" required>
                                        <option selected disabled value="">Pilih Mata Pelajaran</option>
                                        @foreach ($matpel as $item)
                                        <option value="{{ $item->kd_mapel}}">{{$item->kd_mapel}} - {{ $item->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="input-placeholder">Input Nilai</label>
                                    <input type="number" name="nilai" id="nilai" class="form-control" placeholder="Input Nilai" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="input-placeholder">Keterangan</label>
                                    <input type="text" name="ket" id="ket" class="form-control" placeholder="Masukkan Keterangan" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="input-placeholder">Predikat</label>
                                    <input type="text" name="predikat" id="ket" class="form-control" placeholder="A-E" autocomplete="off" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                            {{-- <footer class="card-footer text-justify">
                                <button class="btn btn-w-lg btn-primary" type="submit">
                                    Simpan
                                </button>
                                <a href="{{ route('siswa') }}" class="btn btn-w-lg btn-dark" type="reset">Kembali ke daftar mahasiswa</a>
                            </footer> --}}
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