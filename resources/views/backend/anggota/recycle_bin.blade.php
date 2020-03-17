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
                                <h3 class="title-3"><i class="zmdi zmdi-account-calendar"></i>Recycle Bin | Anggota</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12 m-b-10 pl-5 pr-5">
                                @if ($message = Session::get('restore'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button> 
                                    <strong>{{ $message }}</strong>
                                </div>
                                @endif
                                @if ($message = Session::get('hapus_permanen'))
                                <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button> 
                                    <strong>{{ $message }}</strong>
                                </div>
                                @endif
                            </div>
                            <div class="col-md-12 pl-5 pr-5">
                                <div class="overview-wrap">
                                    <form class="form-header" action="" method="POST">
                                        <input class="au-input au-input--xl" type="text" name="search" placeholder="Nama/Jurusan/No Hp" />
                                        <button class="au-btn--submit" type="submit" disabled="">
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                    </form>
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
                                                <th>Tanggal Lahir</th>
                                                <th>No Hp</th>
                                                <th>Jurusan IPB</th>
                                                <th>Angkatan IPB</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($anggota as $key => $a)
                                            <tr>
                                                 <td>{{ ++$key+($anggota->perPage()*($anggota->currentPage()-1)) }}</td>
                                                <td><a href="{{ url('/anggota/profil-lengkap/'.$a->id) }}">{{ $a->nama }}</a></td>
                                                <td>{{ $a->tanggal_lahir }}</td>
                                                <td>{{ $a->no_hp }}</td>
                                                <td>{{ $a->jurusan_ipb }}</td>
                                                <td>{{ $a->angkatan_ipb }}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="{{ url('/anggota/restore/'.$a->id) }}">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Restore">
                                                                <i class="zmdi zmdi-refresh-sync"></i>
                                                            </button>
                                                        </a>
                                                        <a href="{{ url('/anggota/hapus-permanen/'.$a->id) }}">
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
                                {{ $anggota->links() }}
                                <div class="">
                                    Halaman : {{ $anggota->currentPage() }} |
                                    Jumlah Data : {{ $anggota->total() }} |
                                    Data Per Halaman : {{ $anggota->perPage() }} |
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