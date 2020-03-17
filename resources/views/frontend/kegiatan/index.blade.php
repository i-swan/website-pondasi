@extends('frontend.app')

@section('content')

<!-- crumbs area start -->
<div class="crumbs-area crumbs-area-kegiatan">
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

<!-- Kegiatan strat -->
<section class="app-feature-area" id="feature">
    <div class="feature-blog ptb--100">
        <div class="container">
            <div class="h5-title section-title">
                <h2>Kegiatan di Pondasi</h2>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    @foreach($kegiatan as $key => $k)
                    <div class="single-blog">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="blog-thumb">
                                    <img src="{{URL::to('/')}}/foto_kegiatan/{{ $k->file_foto }}" alt="" style="max-height: 600px">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="blog-content">
                                    <h2>
                                        <b><a href="{{ url('/kegiatan-pondasi/detail/'.$k->id) }}">{{ $k->nama }}</a></b>
                                    </h2>
                                    <span>{{ $k->tanggal }}</span>
                                </div>
                                <a href="{{ url('/kegiatan-pondasi/detail/'.$k->id) }}"><button class="btn btn-lg btn-success"> Baca Selengkapnya </button></a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    @endforeach       
                    <div class="pagination-area">
                        {{ $kegiatan->links() }}
                    </div>
                </div>
                <!-- sidebar area start -->
                <div class="col-lg-3 col-md-4">
                    <div class="sidebar single-trainer p-5">
                        <div class="widget widget-search">
                            <form>
                                <input class="form-control" placeholder="Search..." type="text">
                                <button>
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="widget widget-category">
                            <h5 class="widget-title">Kategori</h5>
                            <ul>
                                <li>
                                    @for($i = 1; $i < $jumlah_kategori->id+1 ; ++$i)
                                    @php
                                    $keys = array_keys($kategori);
                                    $values = array_flip($kategori);
                                    @endphp
                                    @if(in_array($i, $keys))
                                    <a href="#">
                                        @foreach($jenis_kegiatan as $key => $jk)
                                            @if($jk->id == $values[$kategori[$i]] )
                                            {{ $jk->nama_jenis }}
                                            <span class="pull-right">{{ $kategori[$i] }}</span>
                                            @endif
                                        @endforeach
                                    </a>
                                    @endif
                                    @endfor
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- sidebar area end -->
            </div>
        </div>
    </div>
</section>
<!-- Kegiatan end -->

@endsection