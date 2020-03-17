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
		                        <form action="{{ url('/kegiatan/tambah/simpan') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
		                        	{{ csrf_field() }}
		                            <div class="row form-group m-b-10">
										<h3 class="title-3"><i class="zmdi zmdi-account-calendar"></i>Add Kegiatan</h3>
		                            </div>
		                            <hr>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Nama kegiatan</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="nama" placeholder="Nama" class="form-control">
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
											        <input type="radio" id="'inline-radio'.{{ $jk->id }}" name="jenis_kegiatan_id" value="{{ $jk->id }}"  class="form-check-input"> {{ $jk->nama_jenis }}  &nbsp
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
			                                    <input type="text"  name="tanggal" placeholder="Tanggal Kegiatan" class="form-control">
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
		                                    <input type="text"  name="lokasi" placeholder="Lokasi Kegiatan" class="form-control">
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
		                                    <input type="file"  name="file_foto">
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
		                                    <textarea name="ringkasan" placeholder="Ringkasan Kegiatan" class="form-control"></textarea>
	                                        @if($errors->has('ringkasan'))
				                                <div  class="alert alert-danger" role="alert">
				                                    {{ $errors->first('ringkasan')}}
				                                </div>
				                            @endif                                    
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Penanggung Jawab </label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                	<select class="form-control" name="pj">
		                                		<option value="" selected>--Pilih Member--</option>
	                                		@foreach($anggota as $key => $a)
	                                			<option value="{{$a->id}}">{{$a->nama}}</option>
	                                		@endforeach
		                                	</select>
		                                	@if($errors->has('pj'))
				                                <div  class="alert alert-danger" role="alert">
				                                    {{ $errors->first('pj')}}
				                                </div>
				                            @endif 
		                                </div>
		                            </div>			                            	                            
		                            <hr>
			                        <div class="m-b-30">
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