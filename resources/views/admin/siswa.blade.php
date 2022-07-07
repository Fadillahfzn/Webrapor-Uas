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
                                    <h5>Data Siswa</h5>
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
                                                    <th>Nama</th>
                                                    <th>Username</th>
                                                    <th>Nisn</th>
                                                    <th>Alamat</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            @php
                                             $i=1;   
                                            @endphp
                                            @foreach($user as $sw)
                                            <tbody>
                                                @if ($sw->username == 'admin')
                                                    @continue
                                                @endif
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $sw->siswa->nama }}</td>
                                                    <td>{{ $sw->username }}</td>
                                                    <td>{{ $sw->siswa->nisn }}</td>
                                                    <td>{{ $sw->siswa->alamat }}</td>
                                                    <td style="width: 13%">

                                                        <a style="margin-bottom: 3px" href="{{ url('siswa' , $sw->siswa->nisn) }}" class="btn btn-warning btn-sm align-center">Ubah</a>
                                                        {{-- <form action="">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="PUT">
                                                            <button class=""></button>
                                                        </form> --}}
                                                        <form action="{{ url('tambahsiswa') }}/{{ $sw->siswa->nisn }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                                        </form>

                                                    </td>
                                                </tr>
                                            </tbody>
                                            @php
                                                $i++;
                                            @endphp
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