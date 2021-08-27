@include('layouts.nav')


@yield('content')


@include('layouts.footer')
<script src="{{ URL::asset('js/mainjs/main.js') }}"></script>
@yield('script')
</body>

</html>
