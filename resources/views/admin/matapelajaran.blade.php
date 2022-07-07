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
                   <!-- Begin Page Content -->
               <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                     <div class="col-xl-12">
                         <div class="card shadow-mb-4">
                             <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                 <h5>Mata Pelajaran</h5>
                             </div>
                             <div class="card-body">
                                 <a href="{{ route('tambahmatpel.index') }}" class="btn btn-primary">
                                         Tambah Matpel +
                                 </a>
                                 <div class="table-responsive mt-4">
                                     <table class="table table-bordered">
                                         <thead>
                                             <tr>
                                                 <th>No</th>
                                                 <th>Kode Mapel</th>
                                                 <th>Nama Mata Pelajaran</th>
                                                 <th>KKM</th>
                                                 <th>Huruf</th>
                                                 <th>Aksi</th>
                                             </tr>
                                         </thead>

                                         @foreach ($matpel as $mp)
                                         <tbody>
                                            <tr>
                                                <td>{{($matpel->currentPage() - 1) * $matpel->perPage() + $loop->iteration}}</td>
                                                <td>{{ $mp->kd_mapel }}</td>
                                                <td>{{ $mp->nama }}</td>
                                                <td>{{ $mp->angka }}</td>
                                                <td>{{ $mp->huruf }}</td>
                                                <td>
                                                    <a style="margin-bottom: 3px" href="{{ url('editmatpel') }}/{{ $mp->kd_mapel }}" class="btn btn-warning btn-sm align-center">Ubah</a>
                                                        {{-- <form action="">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="PUT">
                                                            <button class=""></button>
                                                        </form> --}}
                                                        
                                                        <form action="{{ url('tambahmatpel') }}/{{ $mp->kd_mapel }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                                        </form>
                                                </td>
                                            </tr>
                                         </tbody>
                                        
                                         @endforeach
                                     </table>
                                 </div>
                             </div>
                             {{ $matpel->links() }}
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