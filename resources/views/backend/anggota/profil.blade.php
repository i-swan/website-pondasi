@extends('backend.app')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p5">
        <div class="container-fluid">
            <div class="row m-t-25">
                @foreach($anggota as $a)
                <div class="col-sm-6 col-lg-3">
                        @if($a->jk == 'perempuan')
                            <div class="overview-item overview-item--c2">
                        @else
                            <div class="overview-item overview-item--c3">
                        @endif
                        <div class="overview__inner">
                            <img class="rounded-circle mx-auto d-block" src="{{URL::to('/')}}/foto_member/{{ $a->file_foto }}" alt="Card image cap">
                            <h5 class="text-sm-center"><a href="{{ url('/anggota/profil-lengkap/'.$a->id) }}"><span class="badge badge-pill badge-warning">{{ $a->nama }}</span></a></h5>
                    @if($a->status == 'pengurus')
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-success">{{ $a->status }}</span></h5>
                    @elseif($a->status == 'member')
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-primary">{{ $a->status }}</span></h5>
                    @else
                        <h5 class="text-sm-center"><span> b aja </span></h5>
                    @endif
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-top-countries">
                                            <tbody>
                                                <tr>
                                                    @php
                                                    $date_in = new Datetime($a->masuk_pondasi) ;
                                                    $date_now = new Datetime($now);
                                                    $interval = $date_now->diff($date_in);
                                                    $durasi = $interval->format('%a');
                                                    @endphp
                                                    <td>Lama di Pondasi</td>
                                                    <td class="text-right">{{ $durasi }} Hari</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Prestasi <br> <small>(Ketua)</small></td>
                                                    <td class="text-right">
                                                    @if(in_array($a->id, array_keys($jumlah_prestasi_ketua)))
                                                    <p>{{ $jumlah_prestasi_ketua[$a->id] }}</p>
                                                    @else
                                                    <p>-</p>
                                                    @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Total Prestasi <br> <small>(Anggota)</small></td>
                                                    <td class="text-right">
                                                    @if(in_array($a->id, array_keys($jumlah_prestasi_anggota)))
                                                    <p>{{ $jumlah_prestasi_anggota[$a->id] }}</p>
                                                    @else
                                                    <p>-</p>
                                                    @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Total PJ Kegiatan</td>
                                                    <td class="text-right">
                                                    @if(in_array($a->id, array_keys($jumlah_kegiatan)))
                                                    <p>{{ $jumlah_kegiatan[$a->id] }}</p>
                                                    @else
                                                    <p>-</p>
                                                    @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
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
        </div>
    </div>
</div>
@endsection