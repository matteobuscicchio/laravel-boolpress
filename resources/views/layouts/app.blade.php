@include('layouts.head')
        <div class="flex-center position-ref full-height">
     
            <nav class="top-right links">
                <a href="{{route('home')}}">Home</a>
                <a href="{{route('articles.index')}}">Articles</a>
                <a href="{{route('categories.index')}}">Categories</a>   
                <a href="{{route('tags.index')}}">Tag</a>
            </nav>
            <main>
                @yield('content')
            </main>
        </div>
@include('layouts.footer')