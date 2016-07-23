@extends('_layout.template')
@section('content')

   
{!! Form::open(['route'=>['product.update',$product->id], 'method'=>'PUT', 'files'=>true]) !!}
@include('product.form', ['product'=>$product])
{!! Form::close()!!}


@stop
