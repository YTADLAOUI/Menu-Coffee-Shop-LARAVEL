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
  <img src="{{asset("image/".$prd->image)}}" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">{{$prd->name}}</h5>
    <p class="card-text">{{$prd->prix}}</p>
    <p class="card-text">{{$prd->description}}</p>
  </div>
</div>
</div>

</x-app-layout>
@endsection

  

