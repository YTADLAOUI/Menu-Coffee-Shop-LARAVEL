@extends('layout')
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl  leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
 <main class="d-flex justify-content-end me-3 mt-3 mb-4"><a href={{url("/product/create")}}><button type="button" class="btn btn-outline-primary">Add Products</button></a>
</main>
<div class="d-flex justify-content-center">
  <div class="d-flex justify-content-center w-100 glasse"style="overflow-x:auto"><table class="table w-75">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">image</th>
        <th scope="col">Name</th>
        <th scope="col">Prix</th>
        <th scope="col">date</th>
        <th scope="col">description</th>
        <th class="text-center" scope="col">opérateur</th>
      </tr>
    </thead>
    <tbody>
        <?php $i=0; ?>
        @foreach ($products as $product)
           <tr>
        <th scope="row">{{++$i}}</th>
        <td><div style="background:url({{asset("image/".$product->image) }});background-position:center; background-size: cover;height: 46px;
          width: 46px;border-radius:25px"></div></td>
        {{-- <td>{{asset('image/logo.png')}}</td> --}}
        <td>{{$product->name}}</td>
        <td ><div class="h-100 d-flex align-items-center ">{{$product->prix}}</div></td>
        <td>{{$product->created_at}}</td>
        <td>{{$product->description}}</td>
        <td>
        <div class="d-flex justify-content-center">
            <a href={{url("product/".$product->id)}}><button type="button" class="btn btn-outline-primary me-3">show</button></a>
            <a href={{url("product/".$product->id."/edit")}}><button type="button" class="btn btn-outline-warning me-3 ">edit</button></a>
            <form action="{{url('product/'.$product->id)}}" method="POST">
            @method("DELETE")
            @csrf
                <button type="submit" class="btn btn-outline-danger">Delete</button>
            </form>
        </div>
           
        </td>
      </tr> </div>

      
        @endforeach
      
      
    </tbody>
  </table></div>
 
</x-app-layout>
  

@endsection
