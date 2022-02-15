<head>
    <meta charset="UTF-8">
    <title>E-Fit</title>
    @if(Auth::check() && Auth::user()->name=='admin')
    <link rel="stylesheet" href="{{ URL::asset('admin_v3.css') }}"/>
    @else
    <link rel="stylesheet" href="{{ URL::asset('user_final.css') }}"/>
    @endif
</head>