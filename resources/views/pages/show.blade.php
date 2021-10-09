@extends('layouts.master')

@section('content')

@include('needed.navbar')

<div class="container-fluid">
    <div class="container m-5">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <h3 class="text-center">{{$product->name}}</h3>
                <div class="card">
                    <img src="{{ URL::asset('storage/images/'.$product->image) }}" class="card-img-top" alt="{{$product->image}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text float-right">
                            <small class="text-muted"><b>Added On </b>: {{$product->created_at}}</small><br>
                            <small class="text-muted"><b>Added By </b>: {{$product->slug}}</small>
                        </p><br><br>
                        <p class="card-text">{{$product->description}}</p>
                    </div>
                    <div class="card-footer">
                    <form action="{{ URL::to('product/' . $product->id) }}" method="post">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-small btn-danger"><i class="fa fa-trash"></i></button>
                        <a class="btn btn-small btn-success float-right" href="{{ URL::to('products/' . $product->id . '/edit') }}"><i class="fa fa-edit"></i></a>
                    </form>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</div>

@endsection