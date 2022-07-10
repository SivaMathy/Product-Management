@extends('products.layout')
@section('content')


<br>
<div class="card">

  <div class="card-header">
    <center>Create Products</center>
  </div>
  <div class="card-body">

    <form action="{{ url('product') }}" method="post">
      <div className="form-group">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" pattern="[A-Za-z0-9]+" required></br>

        <label>Price</label></br>
        <input type="float" name="price" id="price" class="form-control" pattern="^[0-9]+\.?[0-9]{0,2}$" required></br>

        <label>Category</label></br>
        <input type="text" name="category" id="category" class="form-control" pattern="[A-Za-z0-9]+" required></br>

        <label>Status</label></br>
        <input type="integer" name="status" id="status" class="form-control" pattern="[0-9]+" required> </br>



        <input type="submit" value="Save" class="btn btn-info"></br>
      </div>
    </form>

  </div>
</div>

@stop