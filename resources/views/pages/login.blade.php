 @extends('layouts.master.index')


@section('content')
@include('layouts.partials.navbar')


	<section class="container">

        <div class="row">
            <div class="section-heading">
                <h2>LOG IN AND GET TO WORK</h2>
                
            </div>

        </div>

        <div class="row equal">

		<div class="col-md-6 col-md-offset-3">
                <div class="login">
                
                    
                    <br>
					<div class="row">

                        <span>E-mail</span>
                        <input class="form-control input-lg" type="text">
                    </div>
					<br>
					
					<div class="row">

                        <span>Password</span>
			<a href="#" class="pull-right lost"  >(Forgot Password?)</a>                
				<input class="form-control input-lg" type="password" >
                    </div>
					<br>
					
                    <div class="row">
                        <input type="checkbox">
			<span>Remember me</span>
						<a href="#" class="btn button pull-right">Login</a>
                    </div>
					
                </div>
            </div>
            
			
    </section>





    @include('layouts.partials.footer')