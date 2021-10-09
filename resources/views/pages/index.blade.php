@extends('layouts.master')

@section('content')

@include('needed.navbar')
<a class="btn btn-warning float-right mr-2 mt-2" href="{{ URL::to('product') }}">Create a Product</a>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="container-fluid mt-5">
            <table class="table table-hover">
                <thead class="table-dark text-center">
                    
                        <th>S/N</th>
                        <th>Product Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>description</th>
                        <th>Added on</th>
                        <th>Actions</th>
                    
                </thead>
                <tbody class="text-center">
                    @foreach ($products as $product)
                        <tr>
                            <td class="text-center">{{$product->id}}</td>
                            <td class="text-center">{{$product->name}}</td>
                            <td class="text-center"><img width="100px" class="img-circle" src="{{ URL::asset('storage/images/'.$product->image) }}" alt="{{$product->image}}" /></td>
                            <td class="text-center">{{$product->price}}</td>
                            <td class="text-center">{{$product->description}}</td>
                            <td class="text-center">{{$product->created_at}}</td>
                            <td class="text-center">
                            <form action="{{ URL::to('product/' . $product->id) }}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-small btn-info"><i class="fa fa-trash"></i></button>
                                <a class="btn btn-small btn-success" href="{{ URL::to('products/' . $product->id . '/edit') }}"><i class="fa fa-edit "></i></a>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>      
    </div>
@endsection