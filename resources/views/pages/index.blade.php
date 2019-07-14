
        @extends('layout.app')

        @section('content')
        

            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

                <form method="POST" action="{{url('pages/index')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
                <input type="text" name="title" placeholder="Tile"><br>
                <input type="text" name="desc" placeholder="Desc"><br>
                <input type="text" name="add_by" placeholder="add_by"><br>
                <textarea name="content" placeholder="content"></textarea><br>
                <select name="status"><br>
                    <option value="active">active</option>
                    <option value="pending">pending</option>
                    <option value="deactive">deactive</option>
                </select>
                <input type="submit" />
                </form>


                <div class="content">
                    <div class="title m-b-md">
                    
                        Laravel index
                    </div>

                   
                    <div class="links">
                        <a href="https://laravel.com/docs">Docs</a>
                        <a href="https://laracasts.com">Laracasts</a>
                        <a href="https://laravel-news.com">News</a>
                        <a href="https://blog.laravel.com">Blog</a>
                        <a href="https://nova.laravel.com">Nova</a>
                        <a href="https://forge.laravel.com">Forge</a>
                        <a href="https://github.com/laravel/laravel">GitHub</a>
                    </div>
                </div>
            </div>
         @endsection