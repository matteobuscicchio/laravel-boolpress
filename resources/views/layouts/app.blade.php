@include('layouts.head')
        <div class="flex-center position-ref full-height">
     
            <nav class="top-right links">
                <a href="{{route('home')}}">Home</a>        
                <a href="{{route('article')}}">Articles</a>
            </nav>
            <main>
                @yield('content')
            </main>
        </div>
@include('layouts.footer')