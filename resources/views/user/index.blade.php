
@php
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
$siswa = Siswa::where('nisn','=',Auth::user()->nisn_siswa)->firstOrFail();

@endphp
<div class="row">

    <div class="col-xl-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h5>Data Siswa</h5>
            </div>
            <div class="card-body">
                <div class="table-resposive mt-3">
                    <table id="datatableSimple" class="table table-bordered">
                        <tbody>
                            <th>NISN</th>
                            <th>{{$siswa->nisn}}</th>
                        </tbody>
                        <tbody>
                            <th>Nama</th>
                            <th>{{$siswa->nama}}</th>
                        </tbody>
                        <tbody>
                            <th>Alamat</th>
                            <th>{{$siswa->alamat}}</th>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

{{-- total matpel --}}

</div>
