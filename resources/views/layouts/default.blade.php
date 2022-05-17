<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    <header>
        @include('includes.nav')
    </header>
    <main>
        @yield('content')
    </main>
    @include('includes.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
