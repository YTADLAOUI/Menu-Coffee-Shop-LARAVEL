@extends('layout')
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl  leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>
    <div class="d-flex justify-content-center mt-4">
      <form action="{{url("/product")}}" method="POST" class="">
        @csrf
    <div class="mb-3">
      <label for="inputName" class="form-label">Name:</label>
      <input type="text" class="form-control " name="name" id="inputName" placeholder="Name">
    </div>
    <div class="mb-3">
      <label for="inputName" class="form-label">Prix:</label>
      <input type="number" class="form-control" name="prix" id="inputName" placeholder="Prix">
    </div>
    
    <div class="mb-3 ">
      <label for="formFile" class="form-label">image:</label>
      <input class="form-control imagein" name="image"  type="file" id="formFile">
    </div>
    <div class="mb-3">
      <label for="Textarea1" class="form-label">Description</label>
      <textarea class="form-control" name="description" id="Textarea1" rows="3"></textarea>
    </div><br>
    <div class="d-flex justify-content-center"><input type="submit" value="save" class="btn btn-success imagein"></div>
    
  </form>
</div>

 
</x-app-layout>
  

@endsection
