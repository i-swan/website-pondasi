@extends('backend.app')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p5">
        <div class="container-fluid">
            <div class="row m-b-25">
                <div class="col-md-12">
                    <div class="au-card overview-wrap">
                        <h3 class="text-sm-center"> Detail Donasi dari <a href="{{ url('/donasi/detail/'.$donasi->id) }}">{{ $donasi->nama }}</a></h3>
                        <div class="table-data-feature">
                            <form action="{{ url('/donasi/edit/'.$donasi->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                {{ csrf_field() }}
                                {{ method_field('POST')}}
                                <input type="hidden"  name="tipe_hal" value="detail">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i><input type="submit" value="">
                                </button>
                            </form>
                            <a href="{{ url('/donasi/hapus/'.$donasi->id) }}">
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
                        <img class="image img-100" alt="" src="{{URL::to('/')}}/foto_donasi/{{ $donasi->file_foto }}">
                        <hr>
                        <h3 class="text-sm-center"><a href="{{ url('/donasi/detail/'.$donasi->id) }}">{{ $donasi->nama }}</a></h3>
                    @if($donasi->jenis_rekening->id == '1')
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-success">{{ $donasi->jenis_rekening->no_rek }} (a.n {{ $donasi->jenis_rekening->nama }})</span></h5>
                    @elseif($donasi->jenis_rekening->id == '2')
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-primary">{{ $donasi->jenis_rekening->no_rek }} (a.n {{ $donasi->jenis_rekening->nama }})</span></h5>
                    @elseif($donasi->jenis_rekening->id == '3')
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-warning">{{ $donasi->jenis_rekening->no_rek }} (a.n {{ $donasi->jenis_rekening->nama }})</span></h5>
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
                                        <td>Nama donasi</td>
                                        <td> : </td>
                                        <td><a href="{{ url('/donasi/detail/'.$donasi->id) }}">{{ $donasi->nama }}</a></td>
                                    </tr>
                                    <tr>
                                        <td>No Rekening Donatur</td>
                                        <td> : </td>
                                        <td>{{ $donasi->no_rek_asal }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah</td>
                                        <td> : </td>
                                        <td>{{ $donasi->jumlah }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td> : </td>
                                        <td>{{ $donasi->tanggal }}</td>
                                    </tr>                                                                                                            
                                    <tr>
                                        <td>Rekening Pondasi</td>
                                        <td> : </td>
                                        <td>{{ $donasi->jenis_rekening->no_rek }}</td>
                                    </tr>
                                    <tr>
                                        <td>File Foto Bukti Donasi</td>
                                        <td> : </td>
                                        <td>{{ $donasi->file_foto }}</td>
                                    </tr>                                   
                                    <tr>
                                        <td>Keterangan</td>
                                        <td> : </td>
                                        <td>{{ $donasi->keterangan }}</td>
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