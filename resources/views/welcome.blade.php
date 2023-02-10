@extends('layout')
@section('title','menu cafe')
@section('content')
    <div class="cover"></div>
    <nav class= "d-flex justify-content-between ps-5 pe-3 glass">
        <div class="logos d-flex align-items-center"><h3>coffe</h3></div>
        {{-- <div class=menu>
            <a href=""><button type="button" class="btn btn-outline-success me-2">Success</button></a>
            <a href=""><button type="button" class="btn btn-outline-danger">Danger</button></a>
        </div> --}}
        @if (Route::has('login'))
        <div class="px-6 py-4 me-2">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-white">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-white me-3 log ">Log in</a>
                @if (Route::has('register'))
    <a href="{{ route('register') }}" class="text-white reg">Register</a>
                @endif
            @endauth
        </div>
    @endif
    </nav>
    <main>
        <div class="d-flex justify-content-center mt-3 text-white"><h2>Menu</h2></div>
        <div calss="d-flex justify-content-center" style="  display: flex;
        justify-content: center;
        margin-top:10px;
        margin-bottom:20px;
        "><img class="midel" src={{asset('image/logo.png')}} alt=""></div>
    </main>
    <section class="row w-100 ">
        @foreach ($products as $product)
        <diV class="d-flex justify-content-center col-md-4 me-0">
            <div class="card mt-3 " style="width: 18rem; ">
                        <div style="background-image:url({{"image/".$product->image}}); background-position: center;
                        background-size: cover;
                            height:200px" >
                        </div>
            <div class="card-body">
              <h5 class="card-title">{{$product->name}}</h5>
              <p class="card-text">{{$product->prix}}</p>
              <p class="card-text">{{$product->description}}</p>
            </div>
          </div>
        </div>
        @endforeach  
    </section>


@endsection
