<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title','Developers Best Friend')
    </title>

    <meta charset='utf-8'>

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css' rel='stylesheet'>

    <link href='/css/p3.css' type='text/css' rel='stylesheet'>
        @yield('head')

</head>
<body>



    <nav id= 'links'>
        <div class="container">
        <div class="row">
            <div class="offset-md-0 col-md-4">
                <a href='/form/create'>Lorem Ipsum</a>
            </div>

            <div class="offset-md-0 col-md-4">
                <a href="/"><h3>Developer's Best friend</h3></a>
            </div>

            <div class="col-md-0 offset-md-4">
                <a href='/users/form'>Random Users</a>
            </div>
        </div>
    </div>

    </nav>


    <section>
        {{-- Main page content will be yielded here --}}
        @yield('form')
    </section>
    <section>
        {{-- Main page content will be yielded here --}}
        @yield('ipsum')
    </section>
    <section>
      @yield('name')
    </section>
    <section>
      @yield('landing')
    </section>

    @yield('body')
</body>

</html>
