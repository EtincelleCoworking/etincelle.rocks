<div class="col-lg-3 col-md-6">
    <div class="image-box team-member hc-shadow-2 mb-20">
        <div class="overlay-container overlay-visible">
            <img src="{{$picture_url}}" alt="">
            <a href="{{route('member.profile', ['slug' => $slug])}}" class="overlay-link"><i class="fa fa-plus"></i></a>
            <div class="overlay-bottom">
                <div class="text">
                    <h3 class="title margin-clear">{{$firstname}}</h3>
                    <p class="margin-clear">{{$job}}</p>
                </div>
            </div>
        </div>
    </div>
</div>