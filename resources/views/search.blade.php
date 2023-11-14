@extends('master')
@section("content")
<div class="custom-product">
  <h4 style="margin: 2rem 5rem;">Result for Products</h4>
  <div class="result-wrapper">
    @foreach($products as $item)
    <div class="searched-item">
      <a href="detail/{{$item['id']}}">
        <img class="trending-image" src="{{$item['gallery']}}">
        <div class="">
          <h2>{{$item['name']}}</h2>
          <h5>{{$item['description']}}</h5>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>
@endsection