<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <div id="header"> 
                <h2>Header Section</h2>
        </div>
        <div id="container"> 
            <h2>Contain Data</h2>
                @section('container')

                @show()
        </div>
        <div id="footer"> 
                <h2>Footer Section</h2>
        </div>
    </body>
</html>