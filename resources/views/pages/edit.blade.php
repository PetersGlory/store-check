@extends('layouts.master')

@section('content')

@include('needed.navbar')
<div class="container">
    <div class="container m-3">
    <a class="btn btn-warning ml-2 mt-2" href="{{ URL::to('home') }}">Home</a>
        <div class="col-8 mx-auto d-block col-sm-12">
            <h3 class="text-center m-2">Edit Product.</h3>
            
                <form action="/products/{{$product->id}}" method="post">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control" id="name" value="{{$product->name}}" name="name" >
                    </div>
                    <div class="form-group">
                        <label for="price">Price : </label>
                        <input type="number" class="form-control" id="price" value="{{$product->price}}" name="price">
                    </div>
                    <div class="form-group">
                        <label for="slug">Your Name</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{$product->slug}}" placeholder="Your name">
                    </div>
                    <div class="form-group">
                        <label for="descrip">Description:</label>
                        <textarea name="description" id="descrip" cols="30" rows="10" class="form-control">{{$product->description}}</textarea>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-warning d-block mx-auto">
                </form>
            
        </div>
    </div>
</div>

@endsection