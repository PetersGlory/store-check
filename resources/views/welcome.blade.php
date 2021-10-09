@extends('layouts.master')

@section('content')

@include('needed.navbar')

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="container mt-2">
                    <h1 class="m-2 text-center">Welcome</h1>
                    <div class="content mt-5">
                <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-globe text-warning"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                            <p class="card-category">Total Members</p>
                            <p class="card-title">150
                            <p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                        <i class="fa fa-calendar-o"></i>
                        Last day
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-money-coins text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                            <p class="card-category">Total Product</p>
                            <p class="card-title">34
                            <p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                        <i class="fa fa-calendar-o"></i>
                        Last day
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-vector text-danger"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                            <p class="card-category">Total Gallery Image</p>
                            <p class="card-title">23
                            <p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                        <i class="fa fa-clock-o"></i>
                        In the last hour
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-favourite-28 text-primary"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                            <p class="card-category">Store Check Team</p>
                            <p class="card-title">50+
                            <p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                        <i class="fa fa-refresh"></i>
                        In the last hour
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="card ">
                        <div class="card-header ">
                            <h5 class="card-title">Store Check</h5>
                            <p class="card-category">24 Hours performance</p>
                        </div>
                        <div class="card-body ">
                        
                            <div class="content">
                                <div class="card-group">
                                    @foreach($products as $product)
                                        <div class="card">
                                            <img src="{{ URL::asset('storage/images/'.$product->image) }}" class="card-img-top" alt="{{$product->image}}">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$product->name}}</h5>
                                                <p class="card-text"><small class="text-muted float-right">{{$product->created_at}}</small></p><br>
                                                <p class="card-text">{{$product->description}}</p>
                                            </div>
                                            <div class="card-footer">
                                                <a class="btn btn-small btn-success float-right" href="{{ URL::to('products/' . $product->id . '/show') }}"><i class="fa fa-eye "></i></a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection