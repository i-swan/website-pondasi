@extends('frontend.app')

@section('content')

<!-- crumbs area start -->
<div class="crumbs-area crumbs-area-prestasi">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="crumbs-content">
                    <h2>{{ $judul }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- crumbs area end -->

<!-- Prestasi start -->
<section class="trainer-area ptb--100 bg-gray">
    <div class="container">
        <div class="h5-title section-title">
            <a href="{{ url('/member/profil/'.$prestasi->id) }}"><h2>Prestasi {{ $prestasi->nama }}</h2></a>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-trainer trainer_s_three">
                    <div class="thumb">
                        <img src="{{URL::to('/')}}/foto_prestasi/{{ $prestasi->file_foto }}" alt="image">
                    </div>
                    <div class="content">
                        <h2 class="text-sm-center">{{ $prestasi->nama }}</h2>
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
            </div>
            <div class="col-lg-9">
                    <div class="single-trainer trainer_s_three">
                        <div class="container">
                            <div class="table-responsive">
                                <table class="table table-borderless table-striped table-earning">
                                    <tbody>
                                        <tr>
                                            <td>Nama prestasi</td>
                                            <td> : </td>
                                            <td><a href="{{ url('/prestasi-pondasi/detail/'.$prestasi->id) }}">{{ $prestasi->nama }}</a></td>
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
                                            <td><a href="{{ url('/member/profil/'.$prestasi->anggota->id) }}">{{ $prestasi->anggota->nama }}</a>  & {{ $prestasi->ketua_ex }} (Non Member)</td>
                                        @elseif($prestasi->ketua_in != '' and $prestasi->ketua_ex == '')
                                            <td><a href="{{ url('/member/profil/'.$prestasi->anggota->id) }}">{{ $prestasi->anggota->nama }}</a></td>
                                        @elseif(($prestasi->ketua_in == '' and $prestasi->ketua_ex != ''))
                                            <td>{{ $prestasi->ketua_ex }} (Non Member)</td>
                                        @else
                                            <td> - </td>
                                        @endif
                                        </tr>
                                        <tr>
                                            <td>Anggota Internal</td>
                                            <td> : </td>
                                            <td>
                                            @foreach($anggota_prestasi as $key => $ap)
                                                @if($ap->anggota_in != 0)
                                                <a href="{{ url('/member/profil/'.$ap->anggota->id) }}">{{ $ap->anggota->nama }}</a>, 
                                                @endif
                                            @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Anggota Eksternal</td>
                                            <td> : </td>
                                            <td>
                                            @foreach($anggota_prestasi as $key => $ap)
                                                @if($ap->anggota_ex != NULL)
                                                {{ $ap->anggota_ex }}, 
                                                @endif
                                            @endforeach
                                            </td>
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>        
    </div>
</section>
<!-- Prestasi end -->

@endsection