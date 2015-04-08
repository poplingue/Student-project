<html>
    <head>
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" href="{{url('css/style.css')}}"/>
    </head>
    <body>
        @include('partials.nav')
        <div class="container content">
            <div class="row content">
                @yield('content')
                @yield('category_posts')
                @yield('tag_posts')
                @yield('single')
                @section('sidebar')
                    <div class="col-xs-2">
                        @if(!empty($students))
                        <h3>Étudiants : </h3>
                        <ul class="list-unstyled">
                            @foreach($students as $student)
                            <li id="name">
                              {{$student->name}} {{$student->firstname}} - {{$student->type}}
                            </li>
                            @endforeach
                        </ul>
                        @else
                        <p>Pas d'étudiant pour le moment</p>
                        @endif
                    </div>
                @show
            </div>
        </div>
    </body>
</html>