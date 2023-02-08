@extends('layout')
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl  leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
 <main class="d-flex justify-content-end me-3 mt-3 mb-4"><button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Products</button>
    {{-- modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal"  aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Name:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="recipient-prix" class="col-form-label">prix:</label>
              <input type="text" class="form-control" id="recipient-prix">
            </div>
            <div class="mb-3">
                <label for="cars" class="col-form-label">Choose a categories:</label>

                <select name="categorie" id="categorie" class="form-control">
                  <option value="poissent">poissent</option>
                  <option value="plate">plate</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="photo-name" class="col-form-label">photo:</label>
              <input type="file" class="form-control" id="file-photo">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Description:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">close</button>
          <button type="button" class="btn btn-outline-primary">save</button>
        </div>
      </div>
    </div>
  </div>
</main>
<div class="d-flex justify-content-center"><table class="table w-75">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table></div>
 
</x-app-layout>
  

@endsection
