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
		                        <form action="{{ url('/admin/tambah/profil-visi-misi/simpan/') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
		                        	{{ csrf_field() }}
		                        	{{ method_field('POST')}}
		                            <div class="row form-group m-b-10">
										<h3 class="title-3"><i class="zmdi zmdi-account-calendar"></i>Add About</h3>
		                            </div>
		                            <hr>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">About</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="about" placeholder="isi profil/visi/misi" class="form-control">
				                            @if($errors->has('about'))
				                                <div  class="alert alert-danger" role="alert">
				                                    {{ $errors->first('about')}}
				                                </div>
				                            @endif
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label class=" form-control-label">Tipe</label>
		                                </div>
		                                <div class="col col-md-9">
		                                    <div class="form-check-inline form-check">
		                                        <label for="inline-radio1" class="form-check-label ">
		                                            <input type="radio" id="inline-radio1" name="tipe" value="profil" class="form-check-input"> Profil &nbsp
		                                        </label>
		                                        <label for="inline-radio2" class="form-check-label ">
		                                            <input type="radio" id="inline-radio2" name="tipe" value="visi" class="form-check-input"> Visi &nbsp
		                                        </label>
		                                        <label for="inline-radio2" class="form-check-label ">
		                                            <input type="radio" id="inline-radio2" name="tipe" value="misi" class="form-check-input"> Misi &nbsp
		                                        </label>
		                                        @if($errors->has('tipe'))
					                                <div  class="alert alert-danger" role="alert">
					                                    {{ $errors->first('tipe')}}
					                                </div>
					                            @endif
		                                    </div>
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