@extends('frontend.app')

@section('content')

<!-- crumbs area start -->
<div class="crumbs-area">
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

<!-- Kegiatan area start -->
<div class="blog-post-area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <div class="single-post">
                    <div class="blog-thumb">
                        <img src="{{URL::to('/')}}/foto_kegiatan/{{ $kegiatan->file_foto }}" alt="image">
                    </div>
                    <div class="post-content">
                        <h2>
                             <a href="{{ url('kegiatan-pondasi/detail/'.$kegiatan->id) }}"><h2>{{ $kegiatan->nama }}</h2></a>
                        </h2>
                    @if($kegiatan->jenis_kegiatan->id == 1)
                        <h5><span class="badge badge-pill badge-success">{{ $kegiatan->jenis_kegiatan->nama_jenis }}</span></h5>
                    @elseif($kegiatan->jenis_kegiatan->id == 2)
                        <h5><span class="badge badge-pill badge-primary">{{ $kegiatan->jenis_kegiatan->nama_jenis }}</span></h5>
                    @elseif($kegiatan->jenis_kegiatan->id == 3)
                        <h5><span class="badge badge-pill badge-warning">{{ $kegiatan->jenis_kegiatan->nama_jenis }}</span></h5>
                    @else
                        <h5><span> b aja </span></h5>
                    @endif
                        <div class="blog-meta">{{ $kegiatan->tanggal }}</div>
                        <p>{{ $kegiatan->ringkasan }}</p>
                    </div>
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
<!-- Kegiatan area end -->


@endsection