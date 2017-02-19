<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
</head>
<body>
<div id="app">
    <div class="hide-for-small-only blank-centered">
        @yield('content')
    </div>

    <div class="show-for-small-only blank-centered-mobile">
        @yield('content')
    </div>
</div>

@include('layouts/script')

</body>
</html>
