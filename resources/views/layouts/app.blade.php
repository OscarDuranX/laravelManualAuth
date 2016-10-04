<!doctype html>
<html lang="en">

@section('htmlheader')
    @include('layouts.partials.htmlheader')
@endsection

<body>

@include('layouts.partials.sidebar')


@yield('main-content')

@section('footer')
    @include('layouts.partials.footer')
@endsection
</body>
</html>