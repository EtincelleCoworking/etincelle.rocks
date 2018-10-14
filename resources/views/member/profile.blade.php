@extends('portal.layout')

@section('title', 'Page Title')
@section('description', 'Page description')

@section('content')
    <!-- main-container start -->
    <!-- ================ -->
    <section class="main-container">

        <div class="container">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-12">

                    <!-- page-title start -->
                    <!-- ================ -->
                    <h1 class="page-title">{{$user['firstname']}} {{$user['lastname']}}</h1>
                    <div class="separator-2"></div>

                </div>
                <!-- main end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->
@endsection
