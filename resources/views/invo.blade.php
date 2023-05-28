@extends('layouts.app')
 @section('title','invoic')
 @section('content')

 <div class="container">

  <div class="card">
    <div class="card-body">
        
      <div class="container">
        <div class="row">
            <i class="far fa-building fa-6x float-start text-center"style="#cfc3d0"></i>
          
        <p class=" text-center" style="font-size: 30px;">Thank for your purchase</p>
        </div>
        <div class="row">
          <ul class="list-unstyled text-center">
            <li class="text-black">{{$inv->name}}</li>
            <li class="text-muted mt-1"><span class="text-black">Invoice #</span>{{$inv->id}} </li>
            <li class="text-black mt-1">{{$inv->BirthDate}}</li>
          </ul>
        </div>
        <hr>
        <div class="row">
          <div class="col-xl-10">
            <p>{{$inv->productname}}</p>
          </div>
          <div class="col">
            <p >{{$inv->Total}}
            </p>
          </div>
          <hr style="border: 2px solid black;">
        </div>
        <div class="row text-black">
  
          <div class="col-xl-11">
            <p class="float-end fw-bold">Total: {{$inv->Total}}
            </p>
          </div>
          <hr style="border: 2px solid black;">
        </div>
        
        <div class="col-xl-8">
          <ul class="list-unstyled">
            <li class="text-muted">To: <span style="color:#8f8061 ;">{{$inv->name}}</span></li>
            <li class="text-muted">Email :<span style="color:#8f8061 ;">{{$inv->emali}}</span></li>
            <li class="text-muted">Addres : {{$inv->address}}, {{$inv->country}}</li>
            <li class="text-muted"><i class="fas fa-phone"></i> {{$inv->phone}}</li>
          </ul>
        </div>
  
      </div>
    </div>
  </div>
</div>
 

 @endsection