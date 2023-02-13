@extends('layout')
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl  leading-tight">
            {{ __('register') }}
        </h2>
    </x-slot>
    <div class="d-flex justify-content-center mt-4">
      <form action="{{route("registe")}}" method="POST" class="">
        @csrf
    <div class="mb-3">
      <label for="inputName" class="form-label">Name:</label>
      <input type="text" class="form-control " name="name" id="inputName" placeholder="Name">
      <div>
        @error('name')
          {{$message}}
      @enderror</div>
    </div>
    <div class="mb-3">
      <label for="Email" class="form-label">Email:</label>
      <input type="email" class="form-control" name="email" id="Email" placeholder="Email">
      <div>
        @error('email')
          {{$message}}
      @enderror</div>
    </div>
    
    <div class="mb-3 ">
      <label for="Password" class="form-label">Password:</label>
      <input class="form-control" name="password"  type="password" id=" Password"  placeholder="password">
      <div>
        @error('password')
          {{$message}}
      @enderror</div>
    </div>
    <div class="d-flex justify-content-center"><input type="submit" value="save" class="btn btn-success imagein"></div>
    
  </form>
</div>
   
  </x-app-layout>
  

  @endsection
  