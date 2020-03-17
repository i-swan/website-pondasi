@extends('backend.app')

@section('content')            
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">           
            <div class="row">
                <div class="col-lg-12">
                    <div class="au-card recent-report">
                        <div class="au-card-inner">
                            <div class="row">
                                <div class="col-lg-12 m-b-10">
                                    @if ($message = Session::get('hapus'))
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button> 
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @endif
                                    @if ($message = Session::get('tambah') or $message = Session::get('edit'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button> 
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <div class="overview-wrap">
                                        <h3 class="title-3"><i class="zmdi zmdi-account-calendar"></i>Jenis prestasi di Pondasi</h3>
                                        <div>
                                            <a href="{{ url('/prestasi/tambah/jenis-prestasi') }}">
                                                <button class="btn btn-primary"><i class="zmdi zmdi-plus"></i> Add Jenis prestasi</button>
                                            </a>                                  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <hr>
                            <h3 class="title-2">Jenis prestasi</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                                @foreach($jenis_prestasi as $key => $jp)
                                                <tr>
                                                    <td>{{ $jp->nama_jenis }}</td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a href="{{ url('/prestasi/edit/jenis-prestasi/'.$jp->id) }}">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </a>
                                                            <a href="{{ url('/prestasi/hapus/jenis-prestasi/'.$jp->id) }}">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </td>                                                    
                                                </tr>  
                                                @endforeach                                                                                 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection