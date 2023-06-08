<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title> Your Daily Codes </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}?v=2.1">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}?v=2.1">
</head>
<body>

    <div class="main-svg">
        @include('fragments.svg')
    </div>

    <div class="content">

        <main class="card">
            <img src="{{asset('assets/img/work-in-progress.png')}}" alt="Work In Progress" class="work-in-progress">
            <h1 class="heading"> This Website Is Under Construction... </h1>
            <div class="vid-info">
                <div class="vid-section">
                    <p> I am currently recording </p>
                    <a class="btn" href="{{$settings->playlist}}" target="_blank">
                        {{$settings->course}}
                        <div class="icon">
                            <span class="hover-text"> open course </span>
                            <i class="material-symbols-outlined">arrow_forward_ios</i>
                        </div>
                    </a>
                    <a class="btn" href="{{asset('files/HTML-CSS-Files.zip')}}" download>
                        Download Files For HTML-CSS Course
                        <div class="icon">
                            <span class="hover-text"> click to download </span>
                            <i class="material-symbols-outlined">download</i>
                        </div>
                    </a>
                </div>
                <div class="vid-section">
                    <div class="socials">
                        <div class="up">
                            <a href="https://www.instagram.com/yourdailycodes" target="_blank" class="part part1">
                                <img src="{{asset('assets/img/instagram.png')}}" class="default" alt="instagram">
                                <img src="{{asset('assets/img/instagram-white.png')}}" class="on-hover" alt="instagram">
                            </a>
                            <a href="https://www.t.me/yourdailycodes" target="_blank" class="part part2">
                                <img src="{{asset('assets/img/telegram.png')}}" class="default" alt="telegram">
                                <img src="{{asset('assets/img/telegram-white.png')}}" class="on-hover" alt="telegram">
                            </a>
                        </div>
                        <div class="down">
                            <a href="https://github.com/yourdailycodes" target="_blank" class="part part3">
                                <img src="{{asset('assets/img/github.png')}}" class="default" alt="github">
                                <img src="{{asset('assets/img/github-white.png')}}" class="on-hover" alt="github">
                            </a>
                            <a href="https://www.youtube.com/@yourdailycodes" target="_blank" class="part part4">
                                <img src="{{asset('assets/img/youtube.png')}}" class="default" alt="youtube">
                                <img src="{{asset('assets/img/youtube-white.png')}}" class="on-hover" alt="youtube">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="vid-section">
                    <p> Latest recorded video </p>
                    <a class="btn" href="{{$settings->latest}}" target="_blank">
                        Season {{$settings->season}} - Episode {{$settings->episode}}
                        <div class="icon">
                            <span class="hover-text"> watch this video </span>
                            <i class="material-symbols-outlined">videocam</i>
                        </div>
                    </a>
                </div>
            </div>
        </main>

    </div>



</body>
</html>
