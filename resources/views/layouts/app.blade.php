<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Ayuniya LMS</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen">
            @include('layouts.navigation')

            <div class="flex">
                <div class="w-64 pc-nav">
                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 grey-bg text-white">
                        <div class="space-y-1 custom-nav">
                            <div class="profile flex">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" alt="">
                                <div class="profile_name">
                                    <div class="flex welcome"><div class="active-dot"></div> <div class="">Welcome</div></div>
                                    <div class="name">{{ Auth::user()->name }}</div>
                                    <div class="role primary-text">Student</div>
                                </div>
                            </div>
                            <ul>
                                {{-- <li><a href="/dashboard"><i class="fa-solid fa-chart-bar"></i> Dashboard</a></li>
                                <li><a href="/subjects"><i class="fa-solid fa-graduation-cap"></i> Subjects</a></li>
                                <li><a href="/profile"><i class="fa-solid fa-user"></i> Profile</a></li>
                                <li><a href="/assignments"><i class="fa-solid fa-book-open"></i>  Assignments</a></li>
                                <li><a href=""><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li> --}}

                                {{-- IF ADMIN --}}
                                <li><a href="/admin"><i class="fa-solid fa-chart-bar"></i> Dashboard</a></li>
                                <li><a href="/student-list"><i class="fa-solid fa-user"></i> Manage Students</a></li>
                                <li><a href="/instructor-list"><i class="fa-solid fa-chalkboard-user"></i> Manage Instructors</a></li>
                                <li><a href="/subject-list"><i class="fa-solid fa-graduation-cap"></i> Manage Subjects</a></li>
                                <li><a href=""><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
    
                <!-- Page Content -->
                <main>
                    <div class="role">Student</div>
                    {{-- <div class="role">Instructor</div> --}}
                    {{-- <div class="role">Admin</div> --}}
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
