@extends('layout')
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl  leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>

    
    <div class="d-flex justify-content-center mt-4">
      <form action="{{url('product/'.$prd->id)}}" method="POST" class="">
        {!!@csrf_field()!!}
        @method("PATCH")
      <input type="hidden" class="form-control " name="id" id="inputName" value="{{$prd->id}}" placeholder="Name">
    <div class="mb-3">
      <label for="inputName" class="form-label">Name:</label>
      <input type="text" class="form-control " name="name" value="{{$prd->name}}" id="inputName" placeholder="Name">
    </div>
    <div class="mb-3">
      <label for="inputName" class="form-label">Prix:</label>
      <input type="number" class="form-control" name="prix" value="{{$prd->prix}}"id="inputName" placeholder="Prix">
    </div>
    
    <div class="mb-3 ">
      <label for="formFile" class="form-label">image:</label>
      <input class="form-control imagein" name="image" type="file" value="{{$prd->image}}" id="formFile">
    </div>
    <div class="mb-3">
      <label for="Textarea1" class="form-label">Description</label>
      <textarea class="form-control" name="description" id="Textarea1"  rows="3">{{$prd->description}}</textarea>
    </div><br>
    <div class="d-flex justify-content-center"> <input type="submit" value="updute" class="btn btn-success imagein"></div>
    
  </form>
</div>

 
</x-app-layout>
  

@endsection
