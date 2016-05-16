 @extends('layouts.master.index')


@section('content')
@include('layouts.partials.navbar')



	<section class="container">

        <div class="row">
            <div class="section-heading">
                <h2>CREATE A FREE ACCOUNT</h2>
                
            </div>

        </div>

       <div class="login">
	   <form method="post" action="teacher.php">
        <div class="row equal">
            <div class="col-md-6 ">
                
               
                    <div class="row" >
					<div class="col-md-12">	
					
                        <span>First name</span>
                        <input class="form-control input-lg" type="text" name="firstname" >
                    </div>
					</div>
					</div>
					
					<div class="col-md-6">
					
					<div class="row">
					<div class="col-md-12">
                        <span>Last name</span>
                        <input class="form-control input-lg" type="text" name="lastname">
                    </div>
					</div>
            </div>
		</div>
			<br>
			
			<div class="row equal">
			<div class="col-md-6">
                    <br>
                    <div class="row ">
					<div class="col-md-12">
						<span>City</span>
                        <input class="form-control input-lg" type="text" name="city">
                    </div>
					</div>
			</div>
			<div class="col-md-6">
			
					<br>
					<div class="row">
						<div class="col-md-12">
                        <span>Phone no.</span>
                        <input class="form-control input-lg" type="text" name="phone">
						</div>
					</div>
					
			</div>
			
			</div>
		<br>
		<div class="row equal">
            <div class="col-md-12 ">
                
               
                    <div class="row" >
					<div class="col-md-12">	
                        <span>E-mail</span>
                        <input class="form-control input-lg" type="text" name="email">
                    </div>
					</div>
					<br>
					<div class="row">
					
					<div class="col-md-6">
                        <span>Password</span>
                        <input class="form-control input-lg" type="password" name="pass">
                    </div>
					<div class="col-md-6">
                        <span>Re-Type Password</span>
                        <input class="form-control input-lg" type="password" name="repass">
                    </div>
					
					</div>
            </div>
		</div>	
		
			
			
		
		</div>
    
	
<div class="login">
<div class="row equal">	
	<div class="col-md-12">	
<h3>Subjects</h3>

<br>


	



	

			
			<div class="col-md-12">
					<br>
                    <div class="row">
                        
						<div class="col-md-12">
						<input class="btn button pull-right" type="submit" name="submit" value="Sign up"> 
						</div>
					</div>
					
			</div>
			
			</form>
			</div>
			</div>
			</div>			
</section>

    @include('layouts.partials.footer')