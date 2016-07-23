

  <div class="row">
  	



  <table class="table table-hover  table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Product Name</th>
        <th>quntity or hours</th>
        <th>amount</th>
        <th>OPTION</th>

      </tr>
    </thead>
    <tbody>
    <?php $total = 0; ?>
       @foreach ($carts as $index=>$cart)
        <tr>
          <td>{{$index+1}}</td>
          @if ($cart->type =='quntity')
              <td>{{$cart->protuct->name}}</td>
              <td>{{$cart->productquantity->quntity  }}</td>
              <td>{{$cart->productquantity->total_amount }}</td>
           <?php $total = $total +  $cart->productquantity->total_amount ?>
          @elseif($cart->type =='service')
              <td>{{$cart->protuct->name}}</td>
              <td>{{$cart->productservice->numberofhours  }}</td>
              <td>{{$cart->productservice->total_amount }}</td>
            <?php $total = $total +  $cart->productservice->total_amount ?> 
          @endif
            <td> 

             {!! Form::open(['route' => ['cart.delete', $cart->id], 'method'=>'delete', 'onSubmit'=>'return confirm("Are you Sure ??!!")'])!!}
            <button type="submit" class="btn btn-danger btn-xs">
          <span class="glyphicon glyphicon-remove"></span>
                  </button>
           {!! Form::close()!!}


            </td>
        </tr>

       @endforeach
    </tbody>

   </table> 
      <h2>Total : <?php echo $total ; ?></h2>



  </div>

