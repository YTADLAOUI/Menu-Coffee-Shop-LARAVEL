@extends('layout')
@section('title','menu cafe')
@section('content')
    <div class="cover"></div>
    <nav class= "d-flex justify-content-between ps-5 pe-3">
        <div class="logo"><h3>coffe</h3></div>
        <div class=menu>
            <button type="button" class="btn btn-outline-success me-2">Success</button>
            <button type="button" class="btn btn-outline-danger">Danger</button>
        </div>
    </nav>
    <main>
        <div class="d-flex justify-content-center mt-3 "><h2>Menu</h2></div>
        <div calss="d-flex justify-content-center" style="  display: flex;
        justify-content: center;
        margin-top:10px
        "><img class="midel" src={{asset('image/logo.png')}} alt=""></div>
    </main>

@endsection
