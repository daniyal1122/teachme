

@extends('layouts.master.index')


@section('content')
@include('layouts.partials.navbar')



	
	<section class="container">

        <div class="row">
            <div class="section-heading">
                <h2>CREATE A FREE ACCOUNT</h2>
                
            </div>

        </div>

        <div class="row equal">
            <div class="col-md-6">
                <div class="login">
                <h1>Institution's Sign Up</h1>  <br>  
                    <div class="row">

                        <span>Contact Name</span>
                        <input class="form-control input-lg" type="text">
                    </div>
					<br>
					<div class="row">

                        <span>Institution Name</span>
                        <input class="form-control input-lg" type="text">
                    </div>
                    
                    <br>
                    <div class="row">
                        <div class="row ">



                            <div class="col-md-6">
                                <span>City</span>
                                <input class="form-control input-lg" type="password">
                            </div>


                            <div class="col-md-6">
                                <span>Phone No.</span>
                                <input class="form-control input-lg" type="password">
                            </div>
					
							<br>
							

                        </div>
                    </div>
                    <br>
                    
					<div class="row">

                        <span>E-mail</span>
                        <input class="form-control input-lg" type="text">
                    </div>
					<br>
					
					<div class="row">

                        <span>Password</span>
                        <input class="form-control input-lg" type="password" >
                    </div>
					<br>
					
                    <div class="row">
                        <a href="#" class="btn button pull-right">Send</a>
                    </div>
					
                </div>
            </div>
            <div class="col-md-6 equal" >
					
                <div class="login">
                    <h1>Individual's Sign Up</h1><br>
                    <div class="row">

                        <span>First Name</span>
                        <input class="form-control input-lg" type="text">
                    </div>
					<br>
					<div class="row">

                        <span>Last Name</span>
                        <input class="form-control input-lg" type="text">
                    </div>
					
                    
                    <br>
                    <div class="row">
                        <div class="row ">



                            <div class="col-md-6">
                                <span>City</span>
                                <input class="form-control input-lg" type="password">
                            </div>


                            <div class="col-md-6">
                                <span>Phone No.</span>
                                <input class="form-control input-lg" type="password">
                            </div>
					
							<br>
							

                        </div>
                    </div>
                    <br>
                    
					<div class="row">

                        <span>E-mail</span>
                        <input class="form-control input-lg" type="text">
                    </div>
					<br>
					
					<div class="row">

                        <span>Password</span>
                        <input class="form-control input-lg" type="password" >
                    </div>
					<br>
					
                    <div class="row">
                        <a href="#" class="btn button pull-right">Send</a>
                    </div>
					
                </div>
            
			
            </div>

        </div>
    </section>












@include('layouts.partials.footer')