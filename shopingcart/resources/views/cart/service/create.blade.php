@extends('_layout.template')
@section('content')

  {!! Form::open(['route' => ['cart.store_service'], 'files'=>true]) !!}


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
        {!!Form::label('datereserve', 'date reserve', array('class' => 'col-md-2 control-label')) !!}
        <div class="col-md-9"> 
              {!!Form::date('date_reserve',\Carbon\Carbon::now(), array('class' => 'form-control','placeholder'=>'name')) !!}
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

        {!!Form::label('numberofhours', 'number of hours', array('class' => 'col-md-2 control-label')) !!}

        <div class="col-md-9"> 
              {!!Form::number('numberofhours','1', array('class' => 'form-control','placeholder'=>'quntity')) !!}
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
 
      $("#numberofhours").bind('keyup mouseup', function () {
        totalamount()           
      });
   });
   function totalamount(){
      var amount = $('#price').val() * $('#numberofhours').val();
      $('#total_amount').val(amount);
   }


</script>
@stop