{{-- total mahasiwa --}}
@php
use App\Models\MataPelajaran;
use App\Models\Siswa;
     $siswa = Siswa::count();
    $matpel = MataPelajaran::count();
@endphp

<div class="row">
<div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Siswa</div>
                        <h1>{{ $siswa }}</h1>
                    {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_siswa}}</div> --}}
                </div>
                <div class="col-auto">
                    <i class="fas-solid fas fa-user fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- total matpel --}}
<div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Total Mata Pelajaran</div>
                        
                        <h1>{{ $matpel }}</h1>
                    {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_matpel}}</div> --}}
                </div>
                <div class="col-auto">
                    <i class="fa-solid fas fa-book fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>