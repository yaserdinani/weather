<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
<div class="card">
    <h2>{{$weather['timezone']}}</h2>
    <h3>{{collect($weather['current']['weather'])->implode("main")}}<span>Wind {{$weather['current']['wind_speed']}}km/h humidity {{$weather['current']['humidity']}}%</span></h3>
    <h1>{{floor($weather['current']['temp'])}}°</h1>
    <div class="sky">
        <div class="sun"></div>
        <div class="cloud">
            <div class="circle-small"></div>
            <div class="circle-tall"></div>
            <div class="circle-medium"></div>
        </div>
    </div>
    <table>
        <tr>
            <td>TUE</td>
            <td>WED</td>
            <td>THU</td>
            <td>FRI</td>
            <td>SAT</td>
        </tr>
        <tr>
            <td>30°</td>
            <td>34°</td>
            <td>36°</td>
            <td>34°</td>
            <td>37°</td>
        </tr>
        <tr>
            <td>17°</td>
            <td>22°</td>
            <td>19°</td>
            <td>23°</td>
            <td>19°</td>
        </tr>
    </table>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
