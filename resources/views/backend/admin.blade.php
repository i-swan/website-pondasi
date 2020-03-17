@extends('backend.app')

@section('content')            
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 m-b-10">
                    @if ($message = Session::get('edit_akun'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                </div>
            </div>
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c1">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                                <div class="text">
                                    <h2>{{ $anggota }}</h2>
                                    <a href="{{ url('/anggota') }}"><span>Member</span></a>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c2">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-view-list-alt"></i>
                                </div>
                                <div class="text">
                                    <h2>{{ $kegiatan }}</h2>
                                    <a href="{{ url('/kegiatan') }}"><span>Kegiatan /<br> Acara</span></a>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c3">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-star-circle"></i>
                                </div>
                                <div class="text">
                                    <h2>{{ $prestasi }}</h2>
                                    <a href="{{ url('/prestasi') }}"><span>Prestasi</span></a>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart3"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c4">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-money"></i>
                                </div>
                                <div class="text">
                                    <h2>{{ $donasi }}</h2>
                                    <a href="{{ url('/donasi') }}"><span>Donasi</span></a>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart4"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>         
            <div class="row">
                <div class="col-lg-5">
                    <div class="au-card recent-report">
                        <div class="au-card-inner">
                            <h3 class="text-sm-center"><i class="zmdi zmdi-account-calendar"></i> About Pondasi</h3>
                            <hr>
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
                                <div class="col-md-12 m-b-30">
                                    <div class="overview__inner">
                                        <img class="rounded-circle mx-auto d-block" src="images/icon/avatar-01.jpg" alt="Card image cap">
                                        <p class="text-sm-center"></i>Pondok Inspirasi</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="overview-wrap">
                                        <a href="{{ url('/admin/tambah/profil-visi-misi') }}">
                                            <button class="btn btn-sm btn-primary"><i class="zmdi zmdi-plus"></i> Add Profil/Visi/Misi</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <hr>
                            <h3 class="title-2">Profil</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                                @foreach($data['profil'] as $key => $p)
                                                <tr>
                                                    <td>{{ $p->about }}</td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a href="{{ url('/admin/edit/profil-visi-misi/'.$p->id) }}">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </a>
                                                            <a href="{{ url('/admin/hapus/profil-visi-misi/'.$p->id) }}">
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
                            <h3 class="title-2">Visi</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                                @foreach($data['visi'] as $key => $v)
                                                <tr>
                                                    <td>{{++$key.'. '.$v->about }}</td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a href="{{ url('/admin/edit/profil-visi-misi/'.$v->id) }}">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </a>
                                                            <a href="{{ url('/admin/hapus/profil-visi-misi/'.$v->id) }}">
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
                            <h3 class="title-2">Misi</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                                @foreach($data['misi'] as $key => $m)
                                                <tr>
                                                    <td>{{++$key.'. '.$m->about }}</td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a href="{{ url('/admin/edit/profil-visi-misi/'.$m->id) }}">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </a>
                                                            <a href="{{ url('/admin/hapus/profil-visi-misi/'.$m->id) }}">
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
                <div class="col-lg-7">
                    <div class="au-card">
                        <div class="au-card-inner">
                            <h3 class="text-sm-center"><i class="zmdi zmdi-account-calendar"></i> Update Terbaru</h3>
                            <hr>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Member <span class="badge badge-pill badge-danger"> 3 </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Acara <span class="badge badge-pill badge-danger"> 3 </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Prestasi <span class="badge badge-pill badge-danger"> 3 </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="donasi-tab" data-toggle="tab" href="#donasi" role="tab" aria-controls="donasi" aria-selected="false">Donasi <span class="badge badge-pill badge-danger"> 3 </span></a>
                                </li>                            
                            </ul>
                            <div class="tab-content pl-3 p-1" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        <span class="badge badge-pill badge-danger">3</span>
                                         Member Terakhir.
                                    </div>
                                @foreach($anggota_latest as $al)
                                @if($al->id % 2 == 0)
                                    <div class="au-task__item au-task__item--danger">
                                @else
                                    <div class="au-task__item au-task__item--success">
                                @endif
                                        <div class="au-task__item-inner">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="overview__inner">
                                                        <img class="image img-100" src="{{URL::to('/')}}/foto_member/{{ $al->file_foto }}" alt="Card image cap">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h5 class="text-sm-center"><a href="{{ url('/anggota/profil-lengkap/'.$al->id) }}">{{ $al->nama }}</a></h5>
                                                    <br>
                                                @if($al->status == 'pengurus')
                                                    <h5 class="text-sm-center"><span class="badge badge-pill badge-success">{{ $al->status }}</span></h5>
                                                @elseif($al->status == 'member')
                                                    <h5 class="text-sm-center"><span class="badge badge-pill badge-primary">{{ $al->status }}</span></h5>
                                                @else
                                                    <h5 class="text-sm-center"><span> b aja </span></h5>
                                                @endif
                                                    <br>
                                                    <h5 class="text-sm-center time"><span>{{ $al->masuk_pondasi }}</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach                                                             
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        <span class="badge badge-pill badge-danger">3</span>
                                         Kegiatan/Acara Terakhir.
                                    </div>
                                @foreach($kegiatan_latest as $kl)
                                @if($kl->id % 2 == 0)
                                    <div class="au-task__item au-task__item--danger">
                                @else
                                    <div class="au-task__item au-task__item--success">
                                @endif
                                        <div class="au-task__item-inner">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="overview__inner">
                                                        <img class="image img-100" src="{{URL::to('/')}}/foto_kegiatan/{{ $kl->file_foto }}" alt="Card image cap">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h5 class="text-sm-center"><a href="{{ url('/kegiatan/detail/'.$kl->id) }}">{{ $kl->nama }}</a></h5>
                                                    <br>
                                                    <h5 class="text-sm-center">PJ : <a href="{{ url('/anggota/profil-lengkap/'.$kl->anggota_pj->id) }}">{{ $kl->anggota_pj->nama }}</a></h5>
                                                    <h5 class="text-sm-center"><span class="badge badge-pill badge-success">{{ $kl->anggota_pj->status }}</span></h5>
                                                    <h5 class="text-sm-center time"><span>{{ $kl->tanggal }}</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach                                    
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        <span class="badge badge-pill badge-danger">3</span>
                                         Prestasi Terakhir.
                                    </div>
                                @foreach($prestasi_latest as $pl)
                                @if($pl->id % 2 == 0)
                                    <div class="au-task__item au-task__item--danger">
                                @else
                                    <div class="au-task__item au-task__item--success">
                                @endif
                                        <div class="au-task__item-inner">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="overview__inner">
                                                        <img class="image img-100" src="{{URL::to('/')}}/foto_prestasi/{{ $pl->file_foto }}" alt="Card image cap">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h5 class="text-sm-center"><a href="{{ url('/prestasi/detail/'.$pl->id) }}">{{ $pl->nama }}</a></h5>
                                                    <br>
                                                    <h5 class="text-sm-center">Ketua :
                                                @if($pl->ketua_in != '' and $pl->ketua_ex != '')
                                                    <a href="{{ url('/anggota/profil-lengkap/'.$pl->anggota->id) }}">{{ $pl->anggota->nama }}</a>  & {{ $pl->ketua_ex }} (Non Member)
                                                @elseif($pl->ketua_in != '' and $pl->ketua_ex == '')
                                                    <a href="{{ url('/anggota/profil-lengkap/'.$pl->anggota->id) }}">{{ $pl->anggota->nama }}</a>
                                                @elseif(($pl->ketua_in == '' and $pl->ketua_ex != ''))
                                                    {{ $pl->ketua_ex }} (Non Member)
                                                @else
                                                     -
                                                @endif 
                                                    </h5>
                                                    <h5 class="text-sm-center"><span class="badge badge-pill badge-success">Juara Ke: {{ $pl->juara_ke }}</span></h5>
                                                    <h5 class="text-sm-center time"><span>{{ $pl->tanggal }}</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach                                     
                                </div>
                                <div class="tab-pane fade" id="donasi" role="tabpanel" aria-labelledby="donasi-tab">
                                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        <span class="badge badge-pill badge-danger">3</span>
                                         Donasi Terakhir.
                                    </div>
                                @foreach($donasi_latest as $dl)
                                @if($dl->id % 2 == 0)
                                    <div class="au-task__item au-task__item--danger">
                                @else
                                    <div class="au-task__item au-task__item--success">
                                @endif
                                        <div class="au-task__item-inner">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="overview__inner">
                                                        <img class="image img-100" src="{{URL::to('/')}}/foto_donasi/{{ $dl->file_foto }}" alt="Card image cap">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h5 class="text-sm-center"><a href="{{ url('/donasi/detail/'.$dl->id) }}">{{ $dl->nama }}</a></h5>
                                                    <br>
                                                    <h5 class="text-sm-center">{{ $dl->no_rek_asal }}</h5>
                                                    <h5 class="text-sm-center"><span class="badge badge-pill badge-success">Rp{{ $dl->jumlah }}</span></h5>
                                                    <h5 class="text-sm-center time"><span>{{ $dl->tanggal }}</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach                                        
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