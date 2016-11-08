<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/login" method="post">
            {{ csrf_field() }}

            <div class="form-grup">
                Email:
                <input type="text" name="email" id="">
            </div>

            <div class="form-grup">
                Password : <input type="password" name="password" id="">
            </div>

            <input type="submit" Value="Click" name="login" class="btn btn-primary">

        </form>


    </div>

    <div class="col-md-4"></div>

</div>

</body>
</html>