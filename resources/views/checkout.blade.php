@extends('layouts.app')
 @section('title','mobile')
 @section('content')
 <div class="container">
    
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3 sticky-top">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">{{$phone->name}}</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">{{$phone->price}}</span>
                </li>

                <li class="list-group-item d-flex justify-content-between">
                    <span>Total(RS)</span>
                    <strong>{{$phone->tottal}}</strong>
                </li>
            </ul>
        </div>
        
        <div class="col-md-8 order-md-1">
            <h4 class="alert alert-secondary " role="alert">{{$phone->name}}</h4> 
            <div class="container">
              <form action="{{route('invoic')}}" method="post">
                @csrf
                <input type="hidden" id="productname"name="productname"value={{$phone->name}}>
                <input type="hidden" id="tottal"name="tottal"value={{$phone->tottal}}>
                <div class="row">
                  <div class="col">
                   <label class="text-dark p-2  " for="fullname">الاسم الثلاثي</label>
                   <input type="text" id="fullname" name="fullname" required>
                  </div>
                  
                  <div class="col">
                   <label for="country" class="text-dark p-2">اختر المدينة</label>
                   <select id="country" name="country" class="form-control">
                     <option>الرياض</option>
                     <option>جدة</option>
                     <option>مكة المكرمة</option>
                     <option>الدمام</option>
                   </select>
                  </div>
                  <div class="col">
                   <label class="text-dark p-1" for="d">تاريخ الشراء</label>
                   <p></p>
                   <input type="date" id="d" name="d" class="form-contol" required>
                  </div>
                </div>
                <div class="row">
                 <div class="col">
                   <label class="text-dark p-4 " for="phone">رقم الهاتف </label>
                   <input type="phone" id="phone" name="phone" required>
                  </div>
                  <div class="col">
                   <label class="text-dark p-4  " for="phone">البريد الالكتروني  </label>
                   <input type="email" id="email" name="email" required>
                  </div>
                  <div class="col">
                   <label class="text-dark p-4" for="address">العنوان  </label>
                   <input type="address" id="address" name="address">
                  </div>
                </div>
                <div class="row  m-5 text-center">
                  <div class="col">
                    <button type="submit" class="btn btn-success">إتمام عملية الشراء</button>
                  </div>
                </div>
              </form>
            </div>
            
        </div>
    </div>
    
</div>
 @endsection