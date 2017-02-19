<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
</head>
<body>
    <div id="app">
        <div class="off-canvas-wrapper">
            <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

                <div class="title-bar" data-responsive-toggle="widemenu" data-hide-for="medium">
                    <div class="title-bar-left">
                        <span class="title-bar-title">Recruiter</span>
                    </div>
                    <div class="title-bar-right">
                        <span class="title-bar-title">Login</span>
                        <button class="menu-icon" type="button" data-open="offCanvasRight"></button>
                    </div>
                </div>

                <!-- off-canvas right menu -->
                <div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
                    <ul class="vertical dropdown menu" data-dropdown-menu>
                        <li><a href="right_item_1">Right item 1</a></li>
                        <li><a href="right_item_2">Right item 2</a></li>
                        <li><a href="right_item_3">Right item 3</a></li>
                    </ul>
                </div>

                <div class="off-canvas-content" data-off-canvas-content>

                    @include('partials/header')

                    @yield('content')

                </div>

            </div>
        </div>
    </div>

    @include('layouts/script')

</body>
</html>
