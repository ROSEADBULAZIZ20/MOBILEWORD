@extends('layouts.app')
 @section('title','mobile')
 @section('content')
     
    <div class="container">
      <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-8">
          <div class="container">
            @foreach ($mobile as $item)
            <div class="card mt-2" >
               
             <div class="card-header" style="background:#cfc3d0" >
               <h1 class="text-center "style="#cfc3d0"  > {{$item->name}}</h1>
             </div>
           
              <div class="card-body border-1">
                <div class="row">
                   <div class="col-sm-3">
                    <img src={{$item->fon}} class="rounded" height="150" width="150">
                   </div>
     
                   <div class="col-sm-6">
                    <h1 class="text-dark">
                      <h1 class="text-center"> 
                        <span class="badge bg-secondary">{{$item->name}}
                        </span></h1> </h1>
                        <h2 class="text-center"><small style="#cfc3d0">{{$item->display}}</small></h2>
                   </div>
     
                   <div class="col-sm-3">
                     <h4 class="text-danger">{{$item->price}}</h4>
                       <br>
                       <a class="btn btn-info" href="checkout/{{$item->id}}">buy now</a>
                   </div>
                </div>
              </div>
     
             </div> 
             
      @endforeach
        </div> 
           
     
        </div>
        <div class="col-sm-2">

        </div>
      </div>
    </div>
           
       
        
    
@endsection
