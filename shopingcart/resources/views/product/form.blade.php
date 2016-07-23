@if (count($errors) > 0)
  <div class="row">	
  	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    </div>
</div>
@endif



         

  <div class="form-group col-md-12">
        {!!Form::label('name', 'name', array('class' => 'col-md-2 control-label')) !!}
        <div class="col-md-9"> 
              {!!Form::text('name',$product->name, array('class' => 'form-control','placeholder'=>'name')) !!}
        </div>
  </div>


  <div class="form-group col-md-12">
        {!!Form::label('image', 'image', array('class' => 'col-md-2 control-label')) !!}
        <div class="col-md-9"> 
              {!!Form::file('image',$product->image, array('class' => 'form-control','placeholder'=>'image')) !!}
        </div>
  </div>


  <div class="form-group col-md-12">
        {!!Form::label('type', 'type', array('class' => 'col-md-2 control-label')) !!}
        <div class="col-md-9"> 

       {!! Form::select('type', ['quntity' => 'quntity', 'service' => 'service'], 'quntity', array('class' => 'form-control'))  !!}
        </div>
  </div>
 <div class="form-group col-md-12">

        {!!Form::label('price', 'price', array('class' => 'col-md-2 control-label')) !!}

        <div class="col-md-9"> 
             <p class="text"></p>
              {!!Form::text('price',$product->price, array('class' => 'form-control','placeholder'=>'price')) !!}
        </div>
  </div>
  <div class="form-group col-md-12">

        {!!Form::label('note', 'note', array('class' => 'col-md-2 control-label')) !!}

        <div class="col-md-9"> 
              {!!Form::textarea('note',$product->note, array('class' => 'form-control','placeholder'=>'note')) !!}
        </div>
  </div>

  <div class="form-group col-md-12">  

     {!!Form::submit('حفظ', array('class' => 'btn btn-primary ')) !!}

  </div>

