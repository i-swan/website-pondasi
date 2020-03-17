@extends('backend.app')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p5">
        <div class="container-fluid">
            <div class="row m-b-25">
                <div class="col-md-12">
                    <div class="au-card overview-wrap">
                        <h3 class="text-sm-center"> Detail Kegiatan <a href="{{ url('/kegiatan/detail/'.$kegiatan->id) }}">{{ $kegiatan->nama }}</a></h3>
                        <div class="table-data-feature">
                            <form action="{{ url('/kegiatan/edit/'.$kegiatan->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                {{ csrf_field() }}
                                {{ method_field('POST')}}
                                <input type="hidden"  name="tipe_hal" value="detail">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i><input type="submit" value="">
                                </button>
                            </form>
                            <a href="{{ url('/kegiatan/hapus/'.$kegiatan->id) }}">
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
                        <img class="image img-100" alt="" src="{{URL::to('/')}}/foto_kegiatan/{{ $kegiatan->file_foto }}">
                        <hr>
                        <h3 class="text-sm-center"><a href="{{ url('/kegiatan/detail/'.$kegiatan->id) }}">{{ $kegiatan->nama }}</a></h3>
                    @if($kegiatan->jenis_kegiatan->id == 1)
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-success">{{ $kegiatan->jenis_kegiatan->nama_jenis }}</span></h5>
                    @elseif($kegiatan->jenis_kegiatan->id == 2)
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-primary">{{ $kegiatan->jenis_kegiatan->nama_jenis }}</span></h5>
                    @elseif($kegiatan->jenis_kegiatan->id == 3)
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-warning">{{ $kegiatan->jenis_kegiatan->nama_jenis }}</span></h5>
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
                                        <td>Nama Kegiatan</td>
                                        <td> : </td>
                                        <td><a href="{{ url('/kegiatan/detail/'.$kegiatan->id) }}">{{ $kegiatan->nama }}</a></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kegiatan</td>
                                        <td> : </td>
                                        <td>{{ $kegiatan->jenis_kegiatan->nama_jenis }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td> : </td>
                                        <td>{{ $kegiatan->tanggal }}</td>
                                    </tr>
                                    <tr>
                                        <td>Lokasi</td>
                                        <td> : </td>
                                        <td>{{ $kegiatan->lokasi }}</td>
                                    </tr>
                                    <tr>
                                        <td>Ringkasan Kegiatan</td>
                                        <td> : </td>
                                        <td>{{ $kegiatan->ringkasan }}</td>
                                    </tr>                                   
                                    <tr>
                                        <td>Penanggung Jawab</td>
                                        <td> : </td>
                                        <td><a href="{{ url('/anggota/profil-lengkap/'.$kegiatan->anggota_pj->id) }}">{{ $kegiatan->anggota_pj->nama }}</a></td>
                                    </tr>
                                    <tr>
                                        <td>Dibuat oleh</td>
                                        <td> : </td>
                                        <td>{{ $kegiatan->anggota->nama }}</td>
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