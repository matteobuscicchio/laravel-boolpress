@include('layouts.head')
        <div class="flex-center position-ref full-height">
     
            <nav class="top-right links">
                <a href="{{route('home')}}">Home</a>
                <a href="{{route('articles.index')}}">Articles</a>
                <a href="{{route('categories.index')}}">Categories</a>   
                <a href="{{route('tags.index')}}">Tag</a>

                <a href="/api/articles">api articles</a>
                <a href="/api/categories">api categories</a>
                <a href="/api/tags">api tags</a>

                <a href="/spa">spa</a>
            </nav>
        </div>
        <main>
            @yield('content')
            @yield('content_table')
        </main>
@include('layouts.footer')