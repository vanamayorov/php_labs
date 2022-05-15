<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body>
<div class="global-wrapper">
    @include('components.header')
    <main class="main">
        @yield('content')
    </main>
</div>
@include('components.footer-links')
</body>
</html>
