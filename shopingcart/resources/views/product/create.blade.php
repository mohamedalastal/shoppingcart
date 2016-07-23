@extends('_layout.template')
@section('content')

	{!! Form::open(['route' => ['product.store'], 'files'=>true]) !!}
	   @include('product.form',['product'=>$product])
	{!! Form::close()!!}

@stop

@section('scripts')
<script>
   $(document).ready(function(){
       pricetest();

        $('#type').change(function(){

            pricetest();
        });


   });

   function pricetest(){
   	if( $('#type').val() == 'quntity' )
    {
       $('.text').text('unit price');
    }
    if ($('#type').val() == 'service'){
     	$('.text').text('Price per hour');
     }
 
   }
</script>
@stop