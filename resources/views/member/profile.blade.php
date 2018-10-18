@extends('portal.layout')

@section('title')
    {{$user['firstname']}} {{$user['lastname']}}
@endsection

@section('description')
    {{$user['bio_short']}}
@endsection

@section('content')
    @include('components.breadcrumb', ['links' => [
            ['target' => route('city', ['city_slug' => $user['city_slug']]), 'caption' => $user['city_name'], 'icon' =>'location-arrow'],
            ['target' => '', 'caption' => sprintf('%s %s', $user['firstname'], $user['lastname']), 'icon' =>'user-ninja'],
        ]])

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
                    <h1 class="page-title">
                        {{$user['firstname']}} {{$user['lastname']}}
                        {{--
                        <a class="btn btn-gray btn-animated pull-right" href="#">
                            E-mail
                            <i class="fa fa-envelope-o"></i>
                        </a>
                        --}}
                        @if($user['website'])
                            <a class="btn btn-gray btn-animated pull-right" href="{{$user['website']}}">
                                Visitez mon site
                                <i class="fa fa-globe"></i>
                            </a>
                        @endif
                    </h1>
                    <div class="separator-2"></div>
                    <!-- page-title end -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="image-box team-member hc-shadow mb-20">
                                <div class="overlay-container overlay-visible">
                                    <img src="{{$user['picture_url']}}" alt="">
                                    <a href="{{$user['picture_url_large']}}" class="popup-img overlay-link"
                                       title="{{$user['firstname']}} {{$user['lastname']}}"><i
                                                class="fa fa-plus"></i></a>
                                    <div class="overlay-bottom">
                                        <div class="text">
                                            <h3 class="title margin-clear">{{$user['bio_short']}}</h3>
                                            @if($user['phone'])
                                                <p class="margin-clear"><i
                                                            class="fa fa-phone-square"></i> {{$user['phone']}}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-5">
                            {{$user['bio_long']}}
                            {{--

                            <div class="progress style-2 dark">
                                <span class="text"></span>
                                <div class="progress-bar progress-bar-white" role="progressbar"
                                     data-animate-width="95%">
                                    <span class="label hc-element-invisible" data-animation-effect="fadeInLeftSmall"
                                          data-effect-delay="1000">CSS</span>
                                </div>
                            </div>
                            <div class="progress style-2 dark">
                                <span class="text"></span>
                                <div class="progress-bar progress-bar-white" role="progressbar"
                                     data-animate-width="85%">
                                    <span class="label hc-element-invisible" data-animation-effect="fadeInLeftSmall"
                                          data-effect-delay="1000">HTML5</span>
                                </div>
                            </div>
                            <div class="progress style-2 dark">
                                <span class="text"></span>
                                <div class="progress-bar progress-bar-white" role="progressbar"
                                     data-animate-width="95%">
                                    <span class="label hc-element-invisible" data-animation-effect="fadeInLeftSmall"
                                          data-effect-delay="1000">Design</span>
                                </div>
                            </div>
                            <div class="progress style-2 dark">
                                <span class="text"></span>
                                <div class="progress-bar progress-bar-white" role="progressbar"
                                     data-animate-width="80%">
                                    <span class="label hc-element-invisible" data-animation-effect="fadeInLeftSmall"
                                          data-effect-delay="1000">PHP</span>
                                </div>
                            </div>
                            --}}
                        </div>
                        <div class="col-md-3 ml-xl-auto">
                            @if($user['social_linkedin'] || $user['social_twitter'] || $user['social_twitter'] || $user['social_facebook'] || $user['social_instagram'] || $user['social_github'])
                                <h3 class="mt-4">Suivez moi</h3>
                                <div class="separator-2"></div>
                                @if($user['social_linkedin'])
                                    <a href="{{$user['social_linkedin']}}" class="btn btn-animated linkedin btn-sm">
                                        Linkedin <i class="pl-10 fa fa-linkedin"></i>
                                    </a>
                                @endif
                                @if($user['social_twitter'])
                                    <a href="{{$user['social_twitter']}}" class="btn btn-animated twitter btn-sm">
                                        Twitter <i class="fa fa-twitter"></i>
                                    </a>
                                @endif
                                @if($user['social_facebook'])
                                    <a href="{{$user['social_facebook']}}" class="btn btn-animated facebook btn-sm">
                                        Facebook <i class="fa fa-facebook"></i>
                                    </a>
                                @endif
                                @if($user['social_instagram'])
                                    <a href="{{$user['social_instagram']}}" class="btn btn-animated instagram btn-sm">
                                        Instagram <i class="fa fa-instagram"></i>
                                    </a>
                                @endif
                                @if($user['social_github'])
                                    <a href="{{$user['social_github']}}" class="btn btn-animated btn-gray btn-sm">
                                        GitHub <i class="fa fa-github"></i>
                                    </a>
                                @endif
                            @endif
                            {{--
                                                        @if($user['website'])
                                                            <h3 class="mt-4">En savoir plus</h3>
                                                            <div class="separator-2"></div>
                                                            <a class="btn btn-gray collapsed btn-animated" href="{{$user['website']}}">
                                                                Visitez mon site
                                                                <i class="fa fa-plus"></i>
                                                            </a>
                                                        @endif
                            --}}
                        </div>
                    </div>

                </div>
                <!-- main end -->

            </div>

        </div>
    </section>
    <!-- main-container end -->
@endsection
