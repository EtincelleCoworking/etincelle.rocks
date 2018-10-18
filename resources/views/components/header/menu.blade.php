<!-- main-menu -->
<ul class="navbar-nav ml-xl-auto">

    <li class="nav-item"><a class="nav-link" href="{{route('homepage')}}">Accueil</a></li>
    <li class="nav-item dropdown ">
        <a href="#" class="nav-link dropdown-toggle" id="city-dropdown" data-toggle="dropdown" aria-haspopup="true"
           aria-expanded="false">Ville</a>
        <ul class="dropdown-menu" aria-labelledby="city-dropdown">
            @foreach(\App\Http\EtincelleApi::getCities() as $city)
                <li><a href="{{route('city', ['city' => $city['slug']])}}">{{$city['name']}}</a></li>
            @endforeach
        </ul>
    </li>
    <li class="nav-item dropdown ">
        <a href="#" class="nav-link dropdown-toggle" id="job-dropdown" data-toggle="dropdown" aria-haspopup="true"
           aria-expanded="false">Compétence</a>
        <ul class="dropdown-menu" aria-labelledby="job-dropdown">
            @foreach(\App\Http\EtincelleApi::getJobs() as $job)
                <li>
                    <a href="{{route('job', ['job_slug' => $job['slug']])}}">
                        {{$job['name']}}
                        <span class="badge">{{$job['count']}}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </li>
</ul>
<!-- main-menu end -->