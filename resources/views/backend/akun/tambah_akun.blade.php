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
		                        <form action="{{ url('/admin/tambah/akun/simpan/') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
		                        	{{ csrf_field() }}
		                        	{{ method_field('POST')}}
		                            <div class="row form-group m-b-10">
										<h3 class="title-3"><i class="zmdi zmdi-account-calendar"></i>Add Akun</h3>
		                            </div>
		                            <hr>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Nama </label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                	<select class="form-control" name="name">
		                                		<option value="default" selected>--Pilih Member--</option>
	                                		@foreach($anggota as $key => $a)
	                                			<option value="{{$a->id}}">{{$a->nama}}</option>
	                                		@endforeach
		                                	</select>
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Password</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="password"  class="form-control">
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