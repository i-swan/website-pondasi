@extends('backend.app')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p5">
        <div class="container-fluid">
            <div class="row m-b-25">
                <div class="col-md-12">
                    <div class="au-card overview-wrap">
                        <h3 class="text-sm-center"> Detail Prestasi <a href="{{ url('/prestasi/detail/'.$prestasi->id) }}">{{ $prestasi->nama }}</a></h3>
                        <div class="table-data-feature">
                            <form action="{{ url('/prestasi/edit/'.$prestasi->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                {{ csrf_field() }}
                                {{ method_field('POST')}}
                                <input type="hidden"  name="tipe_hal" value="detail">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i><input type="submit" value="">
                                </button>
                            </form>
                            <a href="{{ url('/prestasi/hapus/'.$prestasi->id) }}">
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
                        <img class="image img-100" alt="" src="{{URL::to('/')}}/foto_prestasi/{{ $prestasi->file_foto }}">
                        <hr>
                        <h3 class="text-sm-center"><a href="{{ url('/prestasi/detail/'.$prestasi->id) }}">{{ $prestasi->nama }}</a></h3>
                    @if($prestasi->jenis_prestasi->id == '1')
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-success">{{ $prestasi->jenis_prestasi->nama_jenis }}</span></h5>
                    @elseif($prestasi->jenis_prestasi->id == '2')
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-primary">{{ $prestasi->jenis_prestasi->nama_jenis }}</span></h5>
                    @elseif($prestasi->jenis_prestasi->id == '3')
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-warning">{{ $prestasi->jenis_prestasi->nama_jenis }}</span></h5>
                    @else
                        <h5 class="text-sm-center"><span> b aja </span></h5>
                    @endif
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="au-card chart-percent-card ">
                        <div class="table-responsive">
                            <table class="table table-borderless table-striped table-earning">
                                <tbody>
                                    <tr>
                                        <td>Nama prestasi</td>
                                        <td> : </td>
                                        <td><a href="{{ url('/prestasi/detail/'.$prestasi->id) }}">{{ $prestasi->nama }}</a></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis prestasi</td>
                                        <td> : </td>
                                        <td>{{ $prestasi->jenis_prestasi->nama_jenis }}</td>
                                    </tr>
                                    <tr>
                                        <td>Ketua</td>
                                        <td> : </td>
                                    @if($prestasi->ketua_in != '' and $prestasi->ketua_ex != '')
                                        <td><a href="{{ url('/anggota/profil-lengkap/'.$prestasi->anggota->id) }}">{{ $prestasi->anggota->nama }}</a>  & {{ $prestasi->ketua_ex }} (Non Member)</td>
                                    @elseif($prestasi->ketua_in != '' and $prestasi->ketua_ex == '')
                                        <td><a href="{{ url('/anggota/profil-lengkap/'.$prestasi->anggota->id) }}">{{ $prestasi->anggota->nama }}</a></td>
                                    @elseif(($prestasi->ketua_in == '' and $prestasi->ketua_ex != ''))
                                        <td>{{ $prestasi->ketua_ex }} (Non Member)</td>
                                    @else
                                        <td> - </td>
                                    @endif
                                    </tr>
                                    <tr>
                                        <td>Anggota Internal</td>
                                        <td> : </td>
                                        @foreach($anggota_prestasi as $key => $ap)
                                            @if($ap->anggota_in != 0)
                                            <td><a href="{{ url('/anggota/profil-lengkap/'.$ap->anggota->id) }}">{{ $ap->anggota->nama }}</a>, </td>
                                            @endif
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>Anggota Eksternal</td>
                                        <td> : </td>
                                        @foreach($anggota_prestasi as $key => $ap)
                                            @if($ap->anggota_ex != NULL)
                                            <td>{{ $ap->anggota_ex }}, </td>
                                            @endif
                                        @endforeach
                                    </tr>                                                                        
                                    <tr>
                                        <td>Tuan Rumah Lomba</td>
                                        <td> : </td>
                                        <td>{{ $prestasi->host }}</td>
                                    </tr>
                                    <tr>
                                        <td>Lokasi</td>
                                        <td> : </td>
                                        <td>{{ $prestasi->lokasi }}</td>
                                    </tr>                                                                                                            
                                    <tr>
                                        <td>Tanggal</td>
                                        <td> : </td>
                                        <td>{{ $prestasi->tanggal }}</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Karya</td>
                                        <td> : </td>
                                        <td>{{ $prestasi->judul_karya }}</td>
                                    </tr>                                   
                                    <tr>
                                        <td>Juara Ke</td>
                                        <td> : </td>
                                        <td>{{ $prestasi->juara_ke }}</td>
                                    </tr>
                                    <tr>
                                        <td>Hadiah</td>
                                        <td> : </td>
                                        <td>{{ $prestasi->hadiah }}</td>
                                    </tr>                                                                                       
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection