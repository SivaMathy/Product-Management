@extends('products.layout')
@section('content')


<div class="card">
  <div class="card-header">View Products</div>
  <div class="card-body">


    <div class="card-body">
      <h5 class="card-title">Name : {{ $products->name }}</h5>
      <p class="card-text">Price : {{ $products->price }}</p>
      <p class="card-text">Category : {{ $products->category }}</p>
      <p class="card-text">Status : {{ $products->status }}</p>
    </div>

    </hr>

  </div>
</div>