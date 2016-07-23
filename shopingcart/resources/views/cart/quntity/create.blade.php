@extends('_layout.template')
@section('content')

	{!! Form::open(['route' => ['cart.store_quntity'], 'files'=>true]) !!}


<div class="form-group col-md-12">
        {!!Form::label('product_id', 'id', array('class' => 'col-md-2 control-label')) !!}
        <div class="col-md-9"> 
              {!!Form::text('product_id',$product->id, array('class' => 'form-control','placeholder'=>'name','readonly'=>'readonly')) !!}
        </div>
  </div>


<div class="form-group col-md-12">
        {!!Form::label('name', 'name', array('class' => 'col-md-2 control-label')) !!}
        <div class="col-md-9"> 
              {!!Form::text('name',$product->name, array('class' => 'form-control','placeholder'=>'name','readonly'=>'readonly')) !!}
        </div>
  </div>
   <div class="form-group col-md-12">

        {!!Form::label('price', 'price', array('class' => 'col-md-2 control-label')) !!}

        <div class="col-md-9"> 
             <p class="text"></p>
              {!!Form::text('price',$product->price, array('class' => 'form-control','placeholder'=>'price','readonly'=>'readonly')) !!}
        </div>
  </div>
  <div class="form-group col-md-12">

        {!!Form::label('quntity', 'quntity', array('class' => 'col-md-2 control-label')) !!}

        <div class="col-md-9"> 
              {!!Form::number('quntity','1', array('class' => 'form-control','placeholder'=>'quntity')) !!}
        </div>
  </div>
  <div class="form-group col-md-12">

        {!!Form::label('total_amount', 'total_amount', array('class' => 'col-md-2 control-label')) !!}

        <div class="col-md-9"> 
              {!!Form::text('total_amount',$product->price, array('class' => 'form-control','placeholder'=>'total_amount')) !!}
        </div>
  </div>

 <div class="form-group col-md-12">  

     {!!Form::submit('حفظ', array('class' => 'btn btn-primary ')) !!}

  </div>


	{!! Form::close()!!}

@stop

@section('scripts')
<script>
   $(document).ready(function(){
 
      $("#quntity").bind('keyup mouseup', function () {
        totalamount()           
      });
   });
   function totalamount(){
      var amount = $('#price').val() * $('#quntity').val();
      $('#total_amount').val(amount);
   }


</script>
@stop