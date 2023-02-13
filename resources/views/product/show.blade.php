@extends('layout')
@section('content')
<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl  leading-tight">
          {{ __('Show') }}
      </h2>
  </x-slot>
<div class="d-flex justify-content-center mt-3"> 
  <div class="card" style="width: 18rem;">
  <div style="background-image:url({{asset("image/".$prd->image)}}); background-position: center;background-size: cover; height:200px" >
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$prd->name}}</h5>
    <p class="card-text h6">{{$prd->prix}}</p>
    <p class="card-text">{{$prd->description}}</p>
  </div>
  </div>
</div>

</x-app-layout>
@endsection

  

