@extends('layouts.app')

@section('content')
<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="{{route('admin.login')}}"><i class="halflings-icon home"></i></a>
						
					</div>
					<h2>Login to your account</h2>
					
					<form class="form-horizontal" action="{{route('logincheck')}}" method="post">
						{{@csrf_field()}}
						@if(Session::has('error'))
               <center><span style="color:red; font-family:'',cursive;text-align: center;" id="message" >{{Session::get('error')}}**</span></center>
                @endif
						<fieldset>
							<div class="input-prepend" title="E-mail">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="email" required value="{{ old('email') }}" id="username" type="text" placeholder="Type E-mail"/>
							</div>
							<div class="clearfix"></div>
							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" required autocomplete="current-password" id="password" type="password" placeholder="Type Password"/>
							</div>
							<div class="clearfix"></div>
							<label class="remember" for="remember">
								<input type="checkbox" name="remember_me" id="remember" />Remember me</label>

							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
					</form>
					<hr>
					@if (Route::has('password.request'))
                        <h3> <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password ???') }}</a></h3>
                        @endif
					<p>
						No problem, <a href="{{ route('password.request') }}">click here</a> to get a new password.
					</p>	
				</div><!--/span-->
			</div><!--/row-->
			
	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script type="text/javascript">
    $(function(){
      setTimeout(function(){
        $('#message').remove()},7000);
    });
  </script>
		<script src="{{asset('login/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('login/js/jquery-migrate-1.0.0.min.js')}}"></script>
	
		<script src="{{asset('login/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
	
		<script src="{{asset('login/js/jquery.ui.touch-punch.js')}}"></script>
	
		<script src="{{asset('login/js/modernizr.js')}}"></script>
	
		<script src="{{asset('login/js/bootstrap.min.js')}}"></script>
	
		<script src="{{asset('login/js/jquery.cookie.js')}}"></script>
	
		<script src="{{asset('login/js/fullcalendar.min.js')}}"></script>
	
		<script src="{{asset('login/js/jquery.dataTables.min.js')}}"></script>

		<script src="{{asset('login/js/excanvas.js')}}"></script>
		<script src="{{asset('login/js/jquery.flot.js')}}"></script>
		<script src="{{asset('login/js/jquery.flot.pie.js')}}"></script>
		<script src="{{asset('login/js/jquery.flot.stack.js')}}"></script>
		<script src="{{asset('login/js/jquery.flot.resize.min.js')}}"></script>
	
		<script src="{{asset('login/js/jquery.chosen.min.js')}}"></script>
	
		<script src="{{asset('login/js/jquery.uniform.min.js')}}"></script>
		
		<script src="{{asset('login/js/jquery.cleditor.min.js')}}"></script>
	
		<script src="{{asset('login/js/jquery.noty.js')}}"></script>
	
		<script src="{{asset('login/js/jquery.elfinder.min.js')}}"></script>
	
		<script src="{{asset('login/js/jquery.raty.min.js')}}"></script>
	
		<script src="{{asset('login/js/jquery.iphone.toggle.js')}}"></script>
	
		<script src="{{asset('login/js/jquery.uploadify-3.1.min.js')}}"></script>
	
		<script src="{{asset('login/js/jquery.gritter.min.js')}}"></script>
	
		<script src="{{asset('login/js/jquery.imagesloaded.js')}}"></script>
	
		<script src="{{asset('login/js/jquery.masonry.min.js')}}"></script>
	
		<script src="{{asset('login/js/jquery.knob.modified.js')}}"></script>
	
		<script src="{{asset('login/js/jquery.sparkline.min.js')}}"></script>
	
		<script src="{{asset('login/js/counter.js')}}"></script>
	
		<script src="{{asset('login/js/retina.js')}}"></script>

		<script src="{{asset('login/js/custom.js')}}"></script>

@endsection

