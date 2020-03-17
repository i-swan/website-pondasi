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
                        	<div class="col-lg-12 pl-5 pr-5">
		                        <form action="{{ url('/donasi/edit/simpan/'.$donasi->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
		                        	{{ csrf_field() }}
		                            <div class="row form-group m-b-10">
										<h3 class="title-3"><i class="zmdi zmdi-account-calendar"></i>Edit Donasi</h3>
		                            </div>
		                            <hr>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Nama Donatur</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="nama" value="{{ $donasi->nama }}" placeholder="ex Hamba Allah" class="form-control">
				                            @if($errors->has('nama'))
				                                <div  class="alert alert-danger" role="alert">
				                                    {{ $errors->first('nama')}}
				                                </div>
				                            @endif
		                                </div>
		                            </div>	                            
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">No Rekening Donatur</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="no_rek_asal" value="{{ $donasi->no_rek_asal }}" placeholder="ex 0000" class="form-control">
		                                    @if($errors->has('no_rek_asal'))
				                                <div  class="alert alert-danger" role="alert">
				                                    {{ $errors->first('no_rek_asal')}}
				                                </div>
				                            @endif
		                                </div>
		                            </div>		                            
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Jumlah</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="jumlah" value="{{ $donasi->jumlah }}" placeholder="ex 1000000 (tanpa titik)" class="form-control">
				                            @if($errors->has('jumlah'))
				                                <div  class="alert alert-danger" role="alert">
				                                    {{ $errors->first('jumlah')}}
				                                </div>
				                            @endif
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Rekening Pondasi</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                	<select class="form-control" name="rekening_id">
		                                		<option value="default" selected>--Pilih Rekening--</option>
	                                		@foreach($jenis_rekening as $key => $jr)
	                                			<option value="{{$jr->id}}" @if($jr->id==$donasi->rekening_id) selected="selected" @endif>{{$jr->no_rek}}( {{$jr->nama}} )</option>
	                                		@endforeach
		                                	</select>
		                                	@if($errors->has('rekening_id'))
				                                <div  class="alert alert-danger" role="alert">
				                                    {{ $errors->first('rekening_id')}}
				                                </div>
				                            @endif
		                                </div>
		                            </div>			                            
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Tanggal</label>
		                                </div>
		                                <div class="col-12 col-md-9 input-group-date">
		                                	<div class='input-group date' id='datetimepicker1'>
			                                    <input type="text"  name="tanggal" value="{{ $donasi->tanggal }}" placeholder="Tanggal donasi" class="form-control">
			                                    <span class="input-group-addon">
	                        						<span class="glyphicon glyphicon-calendar"></span>
	                    						</span>
		                                        @if($errors->has('tanggal'))
					                                <div  class="alert alert-danger" role="alert">
					                                    {{ $errors->first('tanggal')}}
					                                </div>
					                            @endif
					                        </div>		                                    
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">keterangan</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <textarea name="keterangan" placeholder="keterangan" class="form-control">{{ $donasi->keterangan }}</textarea>
	                                        @if($errors->has('keterangan'))
				                                <div  class="alert alert-danger" role="alert">
				                                    {{ $errors->first('keterangan')}}
				                                </div>
				                            @endif                                    
		                                </div>
		                            </div>                         
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Foto</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="file"  name="file_foto" value="{{ $donasi->file_foto }}">
		                                    <img src="{{URL::to('/')}}/foto_donasi/{{ $donasi->file_foto }}" class="img-thumbnail" width="100">
		                                    <input type="hidden"  name="hidden_image" value="{{ $donasi->file_foto }}">		                                    
	                                        @if($errors->has('file_foto'))
				                                <div  class="alert alert-danger" role="alert">
				                                    {{ $errors->first('file_foto')}}
				                                </div>
				                            @endif  		                                    
		                                </div>
		                            </div>   		                            	                            
		                            <hr>
			                        <div class="m-b-30">
			                        	<input type="hidden"  name="tipe_hal" value="{{ $tipe_hal }}">
										<input type="submit" class="btn btn-success" value="Submit">
										<input type="submit" class="btn btn-danger" value="Reset" disabled>
			                        </div>
			                        
			                    </form>
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