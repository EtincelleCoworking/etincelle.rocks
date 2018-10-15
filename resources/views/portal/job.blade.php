@extends('portal.layout')

@section('title', 'Page Title')
@section('description', 'Page description')

@section('content')
    @include('components.breadcrumb', ['links' => [['target' => '', 'caption' => $job, 'icon' =>'user-tie']]])

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
                    <h1 class="page-title">{{$job}}</h1>
                    <div class="separator-2"></div>
                    <div class="row grid-space-10">
                        @foreach($users as $user)
                            @include('components.team.card', $user)
                        @endforeach
                    </div>

                </div>
                <!-- main end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->
@endsection
