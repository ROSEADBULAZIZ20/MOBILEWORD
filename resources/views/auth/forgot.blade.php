@extends('layouts.app')
@section('title','longin')
 @section('content')
 <div class="container">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
    	<div class="row">
    		<div class="col-md-3">
    		    <img src="https://via.placeholder.com/190x190.png?text=logo" class="img-fluid rounded-circle shadow-sm" alt="" />
    		</div>
    		<div class="col-md-9">
    		    <h2 class="font-weight-light">Forgot your password?</h2>
    		    Not to worry. Just enter your email address below and we'll send you an instruction email for recovery.
    		    <form target="_blank" action="https://www.totoprayogo.com" class="mt-3">
    		        <input class="form-control form-control-lg" type="email" placeholder="Your email address"/>
    		        
    		        <div class="text-right my-3">
    		            <button type="submit" class="btn btn-lg btn-success">Reset Password</button>
    		        </div>
    		    </form>
    		</div>
    	</div>
    </div>
</div>
</div>
 @endsection