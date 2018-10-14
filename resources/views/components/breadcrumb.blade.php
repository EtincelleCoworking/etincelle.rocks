<!-- breadcrumb start -->
<!-- ================ -->
<div class="breadcrumb-container">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <i class="fa fa-home pr-2"></i>
                <a class="link-dark" href="{{route('homepage')}}">Accueil</a>
            </li>
            @foreach($links as $link)
                <li class="breadcrumb-item @if(empty($link['target'])) active @endif">
                    @if(!empty($link['icon']))
                        <i class="fa fa-{{$link['icon']}} pr-2"></i>
                    @endif
                    @if(empty($link['target']))
                        {{$link['caption']}}
                    @else
                        <a class="link-dark" href="{{$link['target']}}">{{$link['caption']}}</a>
                    @endif
                </li>
            @endforeach
        </ol>
    </div>
</div>
<!-- breadcrumb end -->