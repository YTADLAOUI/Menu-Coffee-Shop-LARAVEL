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
<div class="d-flex justify-content-center"><table class="table w-75">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">image</th>
        <th scope="col">Name</th>
        <th scope="col">Prix</th>
        <th scope="col">description</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        <?php $i=0; ?>
        @foreach ($products as $product)
           <tr>
        <th scope="row">{{++$i}}</th>
        <td><div style="width:50px ;height:50px;"><img src="{{asset("image/".$product->image) }}" alt="" style="border-radius: 37px;"></div></td>
        {{-- <td>{{asset('image/logo.png')}}</td> --}}
        <td>{{$product->name}}</td>
        <td>{{$product->prix}}</td>
        <td>{{$product->description}}</td>
        <td>
        <div class="d-flex">
            <a href={{url("product/".$product->id)}}><button type="button" class="btn btn-primary text-dark">show</button></a>
            <a href={{url("product/".$product->id."/edit")}}><button type="button" class="btn btn-warning ">update</button></a>
            <form action="{{url('product/'.$product->id)}}" method="POST">
            @method("DELETE")
            @csrf
                <button type="submit" class="btn btn-danger text-dark">Delete</button>
            </form>
        </div>
           
        </td>
      </tr> 
      
        @endforeach
      
      
    </tbody>
  </table></div>
 
</x-app-layout>
  

@endsection
