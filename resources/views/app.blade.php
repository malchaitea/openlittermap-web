<!DOCTYPE html>
<html lang="en">
    @include('header')
    <body>
        <div id="app">
            @yield('content')
        </div>
    </body>

    <script src="https://js.stripe.com/v3"></script>
    <script src="{{ mix('/js/manifest.js') }}"></script>
    <script src="{{ mix('/js/vendor.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="/js/wow.js"></script>
    <script>
        var wow = new WOW();
        wow.init();
    </script>
</html>
