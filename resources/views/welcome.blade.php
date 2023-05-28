<!DOCTYPE html>
<html lang="en">
        @extends('layouts.app')
        @section('title','mobile')
        @section('content')

<body>
        <div class="container">
                <div class="row justify-content-center text-center">
                  <div class="col-md-10 col-lg-6">
                    <h1 class="display-5">Welcome to the mobile world</h1>
        
                    <p class="lead">We the mobile world . We provide you with the best types of different devices. Let's start the journey</p>
                    <p class="lead">
                      <a class="btn btn-secondary btn-lg" href="/mobile" role="button"  >viwe product</a>
                    </p>
                  </div>
                </div>
                {{Session::get('empid')}}
        </div>
</body>
</html>

@endsection