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
		                        <form id="form-change-password" novalidate action="{{ url('/admin/edit/akun/simpan/'.$user->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @if ($message = Session::get('full'))
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button> 
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @endif 		                        	
                                    <div class="col-md-9">
                                    @if ($message = Session::get('wrong_password'))
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button> 
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @endif              
                                    <label for="current-password" class="col-sm-4 control-label">Current Password</label>
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                                        <input type="password" class="form-control" id="current-password" name="current-password" placeholder="Password">
                                        @if($errors->has('current-password'))
                                            <div  class="alert alert-danger" role="alert">
                                                {{ $errors->first('current-password')}}
                                            </div>
                                        @endif
                                      </div>
                                    </div>
                                    <label for="password" class="col-sm-4 control-label">New Password</label>
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        @if($errors->has('password'))
                                            <div  class="alert alert-danger" role="alert">
                                                {{ $errors->first('password')}}
                                            </div>
                                        @endif
                                      </div>
                                    </div>
                                    <label for="password_confirmation" class="col-sm-4 control-label">Re-enter Password</label>
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-enter Password">
                                        @if($errors->has('password_confirmation'))
                                            <div  class="alert alert-danger" role="alert">
                                                {{ $errors->first('password_confirmation')}}
                                            </div>
                                        @endif        
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-offset-5 col-sm-6">
                                      <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
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