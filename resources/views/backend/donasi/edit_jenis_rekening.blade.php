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
		                        <form action="{{ url('/donasi/edit/jenis-rekening/simpan/'.$jenis_rekening->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
		                        	{{ csrf_field() }}
		                        	{{ method_field('POST')}}
		                            <div class="row form-group m-b-10">
										<h3 class="title-3"><i class="zmdi zmdi-account-calendar"></i>Edit Rekening</h3>
		                            </div>
		                            <hr>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Nama Bank</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="bank" value="{{ $jenis_rekening->bank }}" placeholder="ex BCA Syariah, BNI SYariah" class="form-control">
				                            @if($errors->has('bank'))
				                                <div  class="alert alert-danger" role="alert">
				                                    {{ $errors->first('bank')}}
				                                </div>
				                            @endif
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">No Rekening</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="no_rek" value="{{ $jenis_rekening->no_rek }}" placeholder="Nomor rekening" class="form-control">
				                            @if($errors->has('no_rek'))
				                                <div  class="alert alert-danger" role="alert">
				                                    {{ $errors->first('no_rek')}}
				                                </div>
				                            @endif
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Atas Nama</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="nama" value="{{ $jenis_rekening->nama }}" placeholder="Nama pemilik rekening" class="form-control">
				                            @if($errors->has('nama'))
				                                <div  class="alert alert-danger" role="alert">
				                                    {{ $errors->first('nama')}}
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