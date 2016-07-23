@extends('_layout.template')
@section('content')


  <div class="row">
  	

   <div class=" col-md-12">
   	  <a  class="btn btn-primary" href="{{ route('product.create') }}" title="">
   	    <i class="glyphicon glyphicon-plus"></i>
   	    Add New Product
   	  </a>

   </div>


   {{-- <table class="table table-hover  table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Product Name</th>
        <th>image</th>
        <th>type</th>
        <th>OPTION</th>

      </tr>
    </thead>
    <tbody>
       @foreach ($products as $index=>$pro)
        <tr>
          <td>{{$index+1}}</td>
          <td>{{$pro->name}}</td>
          <td>{{$pro->image}}</td>
          <td>{{$pro->type}}</td>
          <td>option</td>
        </tr>

       @endforeach

    </tbody>
   </table> --}}



  </div>



    <div class="row">

   @foreach ($products as $pro)
      <div class="col-md-4">
       
       <div class="thumbnail">
              <img src=" {{ asset('upload/files').'/'.$pro->image }}" alt="">

              <div class="caption" align="center">
                    <h1>{{ $pro->name  }}</h1>
                     <p>{{ $pro->note  }}</p>
                    <p>type product :{{   $pro->type  }}</p>
                     @if ($pro->type == 'quntity') 
                      <p>unit price :{{   $pro->price  }} $</p> 
                      @elseif($pro->type == 'service')
                       <p>Price per hour:{{   $pro->price  }} $</p>
                     @endif
                    
                    <a href="{{ route('cart.create',[$pro->id]) }}" class="btn btn-primary thum-btn" role="button">
                       buy now
                    </a> 
              </div>

            </div>



      </div>
   @endforeach

   </div>

   @stop