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
		                        <form action="{{ url('/prestasi/edit/simpan/'.$prestasi->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
		                        	{{ csrf_field() }}
		                            <div class="row form-group m-b-10">
										<h3 class="title-3"><i class="zmdi zmdi-account-calendar"></i>Edit prestasi</h3>
		                            </div>
		                            <hr>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Nama prestasi</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="nama" value="{{ $prestasi->nama }}" placeholder="Nama Lomba/Konferensi" class="form-control">
				                            @if($errors->has('nama'))
				                                <div  class="alert alert-danger" role="alert">
				                                    {{ $errors->first('nama')}}
				                                </div>
				                            @endif
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label class=" form-control-label">Jenis prestasi</label>
		                                </div>
		                                <div class="col col-md-9">
		                                    <div class="form-check-inline form-check">
											@foreach($jenis_prestasi as $key => $jp)
											    <label for="inline-radio1" class="form-check-label ">
											        <input type="radio" id="'inline-radio'.{{ $jp->id }}" name="jenis_prestasi_id" value="{{ $jp->id }}"  class="form-check-input"  {{$prestasi->jenis_prestasi_id == $jp->id ? 'checked' : ''}}> {{ $jp->nama_jenis }}  &nbsp
											    </label>
											@endforeach
		                                        @if($errors->has('jenis_prestasi_id'))
					                                <div  class="alert alert-danger" role="alert">
					                                    {{ $errors->first('jenis_prestasi_id')}}
					                                </div>
					                            @endif
		                                    </div>
		                                </div>
		                            </div>		                            
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Ketua </label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                	<select class="form-control" name="ketua_in">
		                                		<option value="default" selected>--Pilih Member--</option>
	                                		@foreach($anggota as $key => $a)
	                                			<option value="{{$a->id}}" @if($prestasi->anggota and $a->id==$prestasi->anggota->id) selected="selected" @endif >{{$a->nama}}</option>
	                                		@endforeach
		                                	</select>
		                                    <small class="form-text text-muted">Ketua dari internal pondasi (Jika ada)</small>
		                                </div>
		                            </div>		                            
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Ketua*</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="ketua_ex" value="{{ $prestasi->ketua_ex }}" placeholder="Nama Ketua" class="form-control">
		                                    <small class="form-text text-muted">*Ketua dari external pondasi (Jika ada)</small>
		                                </div>
		                            </div>
		                            <hr>
								@for($i=0; $i<5; ++$i)
								@php
								$nama_in = 'anggota_in_'.strval($i);
								@endphp
								    <div class="row form-group">
									    <div class="col col-md-3">
									        <label for="text-input" class=" form-control-label">Anggota </label>
									    </div>
									    <div class="col-12 col-md-9">
									    	<select class="form-control" name="{{ $nama_in }}">
									    		<option value="default" selected>--Pilih Member--</option>
											@foreach($anggota_prestasi as $key_ap => $ap)
												@foreach($anggota as $key => $a)
													<option value="{{$a->id}}" @if($key_ap==$i and $a->id==$ap->anggota_in) selected="selected" @endif >{{$a->nama}}</option>
												@endforeach
											@endforeach
									    	</select>
									        <small class="form-text text-muted">anggota dari internal pondasi (Jika ada)</small>
									        <input type="hidden"  name="id_anggota_prestasi_first" value="{{ $anggota_prestasi->first()->id }}">
									        <input type="hidden"  name="prestasi_id" value="{{ $anggota_prestasi->last()->prestasi_id }}">
									    </div>
									</div>
								@endfor
									<hr>
								@for($i=0; $i<5; ++$i)
								@php
								$nama_ex = 'anggota_ex_'.strval($i);
								@endphp
								    <div class="row form-group">
									    <div class="col col-md-3">
									        <label for="text-input" class=" form-control-label">Anggota </label>
									    </div>
									    <div class="col-12 col-md-9">
											<input type="text"  name="{{ $nama_ex }}" placeholder="Nama anggota" class="form-control" @foreach($anggota_prestasi as $key => $ap) @if($key==$i) value="{{$ap->anggota_ex}}" @endif @endforeach>
										    <small class="form-text text-muted">*anggota dari external pondasi (Jika ada)</small>
									    </div>
									</div>
								@endfor
									<hr>											                            		                            
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Tuan Rumah</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="host"  value="{{ $prestasi->host }}" placeholder="Tuan Rumah Lomba/Konferensi" class="form-control">
				                            @if($errors->has('host'))
				                                <div  class="alert alert-danger" role="alert">
				                                    {{ $errors->first('host')}}
				                                </div>
				                            @endif
		                                </div>
		                            </div>		                            
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Lokasi</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="lokasi" value="{{ $prestasi->lokasi }}" placeholder="Lokasi" class="form-control">
	                                        @if($errors->has('lokasi'))
				                                <div  class="alert alert-danger" role="alert">
				                                    {{ $errors->first('lokasi')}}
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
			                                    <input type="text"  name="tanggal" value="{{ $prestasi->tanggal }}" placeholder="Tanggal prestasi" class="form-control">
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
		                                    <label for="text-input" class=" form-control-label">Judul Karya</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text" name="judul_karya" value="{{ $prestasi->judul_karya }}" placeholder="Judul Karya" class="form-control">
	                                        @if($errors->has('judul_karya'))
				                                <div  class="alert alert-danger" role="alert">
				                                    {{ $errors->first('judul_karya')}}
				                                </div>
				                            @endif                                    
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Juara Ke</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="juara_ke" value="{{ $prestasi->juara_ke }}" placeholder="Juara Ke" class="form-control"> 		                                    
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">hadiah</label>
		                                </div>
		                                <div class="col-12 col-md-9 input-group-date">
		                                	<div class='input-group date' id='datetimepicker1'>
			                                    <input type="text"  name="hadiah" value="{{ $prestasi->hadiah }}" placeholder="hadiah prestasi" class="form-control">
			                                    <span class="input-group-addon">
	                        						<span class="glyphicon glyphicon-calendar"></span>
	                    						</span>
					                        </div>		                                    
		                                </div>
		                            </div>		                            		                            
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Foto</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="file"  name="file_foto" value="{{ $prestasi->file_foto }}">
		                                    <img src="{{URL::to('/')}}/foto_prestasi/{{ $prestasi->file_foto }}" class="img-thumbnail" width="100">
		                                    <input type="hidden"  name="hidden_image" value="{{ $prestasi->file_foto }}">
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