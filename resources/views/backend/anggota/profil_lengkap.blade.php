@extends('backend.app')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p5">
        <div class="container-fluid">
            <div class="row m-b-25">
                <div class="col-md-12">
                    <div class="au-card overview-wrap">
                        <h3 class="text-sm-center"> Profil Lengkap <a href="{{ url('/anggota/profil-lengkap/'.$anggota->id) }}">{{ $anggota->nama }}</a></h3>
                        <div class="table-data-feature">
                            <form action="{{ url('/anggota/edit/'.$anggota->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                {{ csrf_field() }}
                                {{ method_field('POST')}}
                                <input type="hidden"  name="tipe_hal" value="profil_lengkap">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i><input type="submit" value="">
                                </button>
                            </form>
                            <a href="{{ url('/anggota/hapus/'.$anggota->id) }}">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if ($message = Session::get('edit'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="au-card recent-report">
                        <img class="image img-100" alt="" src="{{URL::to('/')}}/foto_member/{{ $anggota->file_foto }}">
                        <hr>
                        <h3 class="text-sm-center"><a href="{{ url('/anggota/profil-lengkap/'.$anggota->id) }}">{{ $anggota->nama }}</a></h3>
                    @if($anggota->status == 'pengurus')
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-success">{{ $anggota->status }}</span></h5>
                    @elseif($anggota->status == 'member')
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-primary">{{ $anggota->status }}</span></h5>
                    @else
                        <h5 class="text-sm-center"><span> b aja </span></h5>
                    @endif
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="au-card chart-percent-card">
                        <table class="table table-responsive table-borderless table-striped table-earning">
                            <tbody>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td> : </td>
                                    <td>{{ $anggota->jk }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td> : </td>
                                    <td>{{ $anggota->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <td>Daerah Asal</td>
                                    <td> : </td>
                                    <td>{{ $anggota->daerah_asal }}</td>
                                </tr>
                                <tr>
                                    <td>No Hp</td>
                                    <td> : </td>
                                    <td>{{ $anggota->no_hp }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td> : </td>
                                    <td>{{ $anggota->email }}</td>
                                </tr>                                
                                <tr>
                                    <td>Golongan Darah</td>
                                    <td> : </td>
                                    <td>{{ $anggota->gol_darah }}</td>
                                </tr>
                                <tr>
                                    <td>Riwayat Sakit</td>
                                    <td> : </td>
                                    <td>{{ $anggota->riwayat_sakit }}</td>
                                </tr>
                                <tr>
                                    <td>Jurusan IPB</td>
                                    <td> : </td>
                                    <td>{{ $anggota->jurusan_ipb }}</td>
                                </tr>
                                <tr>
                                    <td>Angkatan IPB</td>
                                    <td> : </td>
                                    <td>{{ $anggota->angkatan_ipb }}</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Prestasi</td>
                                    <td> : </td>
                                    <td> {{ $jumlah_prestasi }} </td>
                                </tr>
                                <tr>
                                    <td>Daftar Prestasi (Sebagai Ketua)</td>
                                    <td> : </td>
                                    <td>
                                    @foreach($prestasi as $key => $p)
                                         <a href="{{ url('/prestasi/detail/'.$p->id) }}">{{ $p->nama }}</a>,
                                    @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Daftar Prestasi (Sebagai Anggota)</td>
                                    <td> : </td>
                                    <td>
                                    @foreach($anggota_prestasi as $key => $ap)
                                        <a href="{{ url('/prestasi/detail/'.$ap->prestasi_id) }}">{{ $ap->prestasi->nama }}</a>,
                                    @endforeach
                                    </td>
                                </tr>                                                                   
                                <tr>
                                    <td>Jumlah Kegiatan (Sebagai PJ)</td>
                                    <td> : </td>
                                    <td> {{ $jumlah_kegiatan }} </td>
                                </tr>
                                <tr>
                                    <td>Daftar Kegiatan</td>
                                    <td> : </td>
                                    <td>
                                    @foreach($kegiatan as $key => $a)
                                         <a href="{{ url('/kegiatan/detail/'.$a->id) }}">{{ $a->nama }}</a>,
                                    @endforeach
                                    </td>
                                </tr>                                                                   
                                <tr>
                                    <td>Masuk Pondasi</td>
                                    <td> : </td>
                                    <td>{{ $anggota->masuk_pondasi }}</td>
                                </tr>
                                <tr>
                                    <td>Lulus Pondasi</td>
                                    <td> : </td>
                                    <td>{{ $anggota->lulus_pondasi }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection