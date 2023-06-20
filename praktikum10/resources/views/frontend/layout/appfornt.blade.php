@include('frontend.layout.home')
@include('frontend.layout.about')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            @yield('content')
        </div>
    </main>
</div>
</div>
@include('frontend.layout.bottom')