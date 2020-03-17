@extends('backend.app')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- USER DATA-->
                    <div class="user-data">
                        <div class="row">
                            <div class="col-md-12 pl-5 pr-5">
                                <div class="overview-wrap">
                                    <h3 class="title-3"><i class="zmdi zmdi-account-calendar"></i>Data Kegiatan</h3>
                                    <div>
                                        <ul class="nav nav-pills">
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Export </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ url('/kegiatan/cetak-pdf') }}" target="_blank">PDF</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="{{ url('/kegiatan/export-excel') }}" target="_blank">Excel</a>
                                                </div>
                                            </li>
                                        </ul>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12 m-b-10 pl-5 pr-5">
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
                            <div class="col-md-12 pl-5 pr-5">
                                <div class="overview-wrap">
                                    <form class="form-header" action="" method="POST">
                                        <input class="au-input au-input--xl" type="text" name="search" placeholder="Nama Kegiatan/Jenis/Tanggal" />
                                        <button class="au-btn--submit" type="submit" disabled>
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                    </form>
                                    <div>
                                    <a href="{{ url('/kegiatan/tambah') }}">
                                        <button class="btn btn-primary"><i class="zmdi zmdi-plus"></i> Add Kegiatan</button>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12 pl-5 pr-5">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Jenis Kegiatan</th>
                                                <th>Tanggal</th>
                                                <th>Lokasi</th>
                                                <th>PJ</th>
                                                <th>Dibuat oleh</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($kegiatan as $key => $a)
                                            <tr>
                                                <td>{{ ++$key+($kegiatan->perPage()*($kegiatan->currentPage()-1)) }}</td>
                                                <td><a href="{{ url('/kegiatan/detail/'.$a->id) }}">{{ $a->nama }}</a></td>
                                                <td>{{ $a->jenis_kegiatan->nama_jenis }}</td>
                                                <td>{{ $a->tanggal }}</td>
                                                <td>{{ $a->lokasi }}</td>
                                                <td><a href="{{ url('/anggota/profil-lengkap/'.$a->anggota_pj->id) }}">{{ $a->anggota_pj->nama }}</a></td>
                                                <td>{{ $a->anggota->nama }}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <form action="{{ url('/kegiatan/edit/'.$a->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            {{ csrf_field() }}
                                                            {{ method_field('POST')}}
                                                            <input type="hidden"  name="tipe_hal" value="index">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="zmdi zmdi-edit"></i><input type="submit" value="">
                                                                </button>
                                                        </form>
                                                        <a href="{{ url('/kegiatan/hapus/'.$a->id) }}">
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
                    <div class="row m-t-25">
                        <div class="col-md-12">
                            <div class="au-card overview-wrap">
                                {{ $kegiatan->links() }}
                                <div class="">
                                    Halaman : {{ $kegiatan->currentPage() }} |
                                    Jumlah Data : {{ $kegiatan->total() }} |
                                    Data Per Halaman : {{ $kegiatan->perPage() }} |
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END USER DATA-->
                </div>
            </div>        	
        </div>
    </div>
</div>
@endsection