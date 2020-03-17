@extends('frontend.app')

@section('content')

<!-- crumbs area start -->
<div class="crumbs-area crumbs-area-member">
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

<!-- Member start -->
<section class="trainer-area ptb--100 bg-gray">
    <div class="container">
        <div class="h5-title section-title">
            <a href="{{ url('/member/profil/'.$anggota->id) }}"><h2>Biodata {{ $anggota->nama }}</h2></a>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-trainer trainer_s_three">
                    <div class="thumb">
                        <img src="{{URL::to('/')}}/foto_member/{{ $anggota->file_foto }}" alt="image">
                    </div>
                    <div class="content">
                        <h2 class="text-sm-center">{{ $anggota->nama }}</h2>
                    @if($anggota->status == 'pengurus')
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-success">{{ $anggota->status }}</span></h5>
                    @elseif($anggota->status == 'member')
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-primary">{{ $anggota->status }}</span></h5>
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
                                        <td>Jenis Kelamin</td>
                                        <td> : </td>
                                        <td>{{ $anggota->jk }}</td>
                                    </tr>
                                    <tr>
                                        <td>Daerah Asal</td>
                                        <td> : </td>
                                        <td>{{ $anggota->daerah_asal }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td> : </td>
                                        <td>{{ $anggota->email }}</td>
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
                                             <a href="{{ url('/prestasi-pondasi/detail/'.$p->id) }}">{{ $p->nama }}</a>,
                                        @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Daftar Prestasi (Sebagai Anggota)</td>
                                        <td> : </td>
                                        <td>
                                        @foreach($anggota_prestasi as $key => $ap)
                                            <a href="{{ url('/prestasi-pondasi/detail/'.$ap->prestasi_id) }}">{{ $ap->prestasi->nama }}</a>,
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
                                             <a href="{{ url('/kegiatan-pondasi/detail/'.$a->id) }}">{{ $a->nama }}</a>,
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
</section>
<!-- Member end -->

@endsection