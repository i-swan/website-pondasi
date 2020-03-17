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
            <h2>Daftar Member Pondasi</h2>
        </div>
        <div class="row">
            @foreach($anggota as $key => $a)
            <div class="col-lg-3 col-md-6">
                <div class="single-trainer trainer_s_three">
                    <div class="thumb">
                        <img src="{{URL::to('/')}}/foto_member/{{ $a->file_foto }}" alt="image">
                    </div>
                    <div class="content">
                        <a href="{{ url('/member/profil/'.$a->id) }}"><h2>{{ $a->nama }}</h2></a>
                        <p>{{ $a->jurusan_ipb }} IPB Angkatan {{ $a->angkatan_ipb }}</p>
                    </div>
                </div>
            </div>
            @endforeach          
        </div>
        <div class="row">    
            <div class="pagination-area">
                {{ $anggota->links() }}
            </div>
        </div>
    </div>
</section>
<!-- Member end -->

@endsection