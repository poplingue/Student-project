<nav class="col-xs-12">
    <ul class="navbar-collapse navbar-left list-inline">
        <li>
            <a href="{{url('/')}}/">accueil</a>
        </li>
        @if(Auth::check())
            <li>
                <a href="{{url('dashboard')}}/">dashboard</a>
            </li>
        @endif
        @foreach($menu as $category)
        <li>
            <a href="{{url('category/'.$category->id)}}/">{{$category->title}}</a>
        </li>
        @endforeach
    </ul>
</nav>