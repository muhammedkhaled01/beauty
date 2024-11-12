@extends('layouts.layout')

@section('content')
    <header>
        <video autoplay muted loop>
            <source src="{{asset('assets/images/header.mov')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('layouts.navbar')

                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="package">
                        <div class="package-head">
                            <h2>Bronze</h2>

                        </div>
                        <ul class="package-body">
                            <li>Our package is designed to meet the needs of all our customers. We have different</li>
                            <li>Our package is designed to meet the needs of all our customers. We have different</li>
                            <li class="num-visits">20 Visits</li>
                            <li class="price">Price 200$</li>
                        </ul>
                        <div class="package-footer mx-auto">
                            <a href="#" class="btn d-block">Choose Package</a>
                        </div>


                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="package">
                        <div class="package-head">
                            <h2>Silver</h2>

                        </div>
                        <ul class="package-body">
                            <li>Our package is designed to meet the needs of all our customers. We have different</li>
                            <li>Our package is designed to meet the needs of all our customers. We have different</li>
                            <li class="num-visits">20 Visits</li>
                            <li class="price">Price 200$</li>
                        </ul>
                        <div class="package-footer mx-auto">
                            <a href="#" class="btn d-block">Choose Package</a>
                        </div>


                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="package">
                        <div class="package-head">
                            <h2>Gold</h2>

                        </div>
                        <ul class="package-body">
                            <li>Our package is designed to meet the needs of all our customers. We have different</li>
                            <li>Our package is designed to meet the needs of all our customers. We have different</li>
                            <li class="num-visits">20 Visits</li>
                            <li class="price">Price 200$</li>
                        </ul>
                        <div class="package-footer mx-auto">
                            <a href="#" class="btn d-block">Choose Package</a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
