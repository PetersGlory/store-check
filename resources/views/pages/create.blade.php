@extends('layouts.master')

@section('content')

@include('needed.navbar')

<div class="container">
    <div class="container m-3">
    <a class="btn btn-warning ml-2 mt-2" href="{{ URL::to('home') }}">Home</a>

        <div class="col-8 mx-auto d-block col-sm-12">
            <h3 class="text-center m-2">Add New Product.</h3>
            <form action="/products" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Product Name:</label>
                    <input type="text" class="form-control" id="name" name="name" >
                </div>
                <div class="form-group">
                    <label for="price">Price : </label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="slug">Your Name</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Your name">
                </div>
                <div class="form-group">
                    <label for="image">Product Image: </label>
                    <input type="file" name="image" id="image">
                </div>
                <div class="form-group">
                    <label for="descrip">Description:</label>
                    <textarea name="description" id="descrip" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <input type="submit" value="Submit" class="btn btn-warning d-block mx-auto">
            </form>
        </div>
    </div>
</div>

@endsection