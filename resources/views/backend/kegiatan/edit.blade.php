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
		                        <form action="{{ url('/kegiatan/edit/simpan/'.$kegiatan->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
		                        	{{ csrf_field() }}
		                            <div class="row form-group m-b-10">
										<h3 class="title-3"><i class="zmdi zmdi-account-calendar"></i>Edit Kegiatan</h3>
		                            </div>
		                            <hr>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Nama kegiatan</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="nama" value="{{ $kegiatan->nama }}" placeholder="Nama" class="form-control">
				                            @if($errors->has('nama'))
				                                <div  class="alert alert-danger" role="alert">
				                                    {{ $errors->first('nama')}}
				                                </div>
				                            @endif
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label class=" form-control-label">Jenis Kegiatan</label>
		                                </div>
		                                <div class="col col-md-9">
		                                    <div class="form-check-inline form-check">
											@foreach($jenis_kegiatan as $key => $jk)
											    <label for="inline-radio1" class="form-check-label ">
											        <input type="radio" id="'inline-radio'.{{ $jk->id }}" name="jenis_kegiatan_id" value="{{ $jk->id }}"  class="form-check-input" {{$kegiatan->jenis_kegiatan_id == $jk->id ? 'checked' : ''}}> {{ $jk->nama_jenis }}  &nbsp
											    </label>
											@endforeach
		                                        @if($errors->has('jenis_kegiatan_id'))
					                                <div  class="alert alert-danger" role="alert">
					                                    {{ $errors->first('jenis_kegiatan_id')}}
					                                </div>
					                            @endif
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Tanggal</label>
		                                </div>
		                                <div class="col-12 col-md-9 input-group-date">
		                                	<div class='input-group date' id='datetimepicker1'>
			                                    <input type="text"  name="tanggal" value="{{ $kegiatan->tanggal }}" placeholder="Tanggal Kegiatan" class="form-control">
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
		                                    <label for="text-input" class=" form-control-label">Lokasi</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="lokasi" value="{{ $kegiatan->lokasi }}" placeholder="Lokasi Kegiatan" class="form-control">
	                                        @if($errors->has('lokasi'))
				                                <div  class="alert alert-danger" role="alert">
				                                    {{ $errors->first('lokasi')}}
				                                </div>
				                            @endif		                                    
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Foto</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="file"  name="file_foto" value="{{ $kegiatan->file_foto }}">
		                                    <img src="{{URL::to('/')}}/foto_kegiatan/{{ $kegiatan->file_foto }}" class="img-thumbnail" width="100">
		                                    <input type="hidden"  name="hidden_image" value="{{ $kegiatan->file_foto }}">
		                                        @if($errors->has('file_foto'))
					                                <div  class="alert alert-danger" role="alert">
					                                    {{ $errors->first('file_foto')}}
					                                </div>
					                            @endif		                                    
		                                </div>
		                            </div>                            
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Ringkasan</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <textarea name="ringkasan"placeholder="Ringkasan Kegiatan" class="form-control">{{ old('ringkasan',$kegiatan->ringkasan) }}</textarea>
	                                        @if($errors->has('ringkasan'))
				                                <div  class="alert alert-danger" role="alert">
				                                    {{ $errors->first('ringkasan')}}
				                                </div>
				                            @endif                                    
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Penanggung Jawab</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                	<select class="form-control" name="pj">
		                                		<option value="default" selected>--Pilih Member--</option>
	                                		@foreach($anggota as $key => $a)
	                                			<option value="{{$a->id}}" @if($a->id==$kegiatan->anggota_pj->id) selected="selected" @endif >{{$a->nama}}</option>
	                                		@endforeach
		                                	</select>
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