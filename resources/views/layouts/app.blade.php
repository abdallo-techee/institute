{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/custom.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html> --}}

{{--  --}}
{{--  --}}
{{--  --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Institute</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet"> --}}

    {{-- <link href="{{ asset(path: 'assets/css/app.css') }}" rel="stylesheet"> --}}

{{--  --}}
{{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
{{--
<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
<link href="{{ asset('resources/css/custom.css') }}" rel="stylesheet"> --}}


  <!-- Fonts -->
  {{-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet"> --}}

  {{-- <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}


  <!-- Scripts -->
  {{-- @vite(['resources/css/custom.css', 'resources/js/app.js']) --}}
{{--  --}}
{{-- </head> --}}

{{--  --}}

{{--  --}}

{{-- <body class="bg-gray-50 text-gray-800"> --}}



{{-- Sidebar Drawer Items --}}
    {{-- <div class="wrapper white-back ">
        <nav id="sidebar" class="sidebar js-sidebar white-back sidebar  md:block fixed left-0 top-0 w-40 h-full bg-white z-50 transition-all duration-300">
 --}}

            {{--  --}}

{{--
    <div class="sidebar-content js-simplebar white-back">

        <a class="sidebar-brand " href="{{ route('institute') }}">
            <span class="align-middle">@yield('institute_sidebar_name') </span>
        </a>

        <ul class="sidebar-nav main-color-back">
            <li class="sidebar-header">
                Main
            </li>

            <li class="sidebar-item {{ request()->routeIs('institute') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('institute') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span
                        class="align-middle">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->routeIs('institute_profile') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('institute_profile') }}">
                    <i class="align-middle" data-feather="user"></i> <span
                        class="align-middle">Profile</span>
                </a>
            </li> --}}
            <!-- -->
            {{-- <li class="sidebar-item {{ request()->routeIs('institute') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('institute') }}">
                    <i class="align-middle" data-feather="layers"></i> <span
                        class="align-middle">Courses Adv Posts</span>
                </a>
            </li> --}}
<!-- -->
            {{-- <li class="sidebar-header">
                Category
            </li>

            <li class="sidebar-item {{ request()->routeIs('institute.create_category') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('institute.create_category') }}">
                    <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Create</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->routeIs('institute.manage_category') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('institute.manage_category') }}">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Manage</span>
                </a>
            </li> --}}


            <!-- -->
{{-- <!-- -->
<li class="sidebar-header">
Course Advertisement
</li>

</li>
<li class="sidebar-item {{request()->routeIs('institute.create_course_adv')?'active':''}}">
<a class="sidebar-link" href="{{route('institute.create_course_adv')}}">
<i class="align-middle" data-feather="plus"></i> <span class="align-middle">Create</span>
</a>
</li>

<li class="sidebar-item {{request()->routeIs('institute.manage_course_adv')?'active':''}}">
<a class="sidebar-link" href="{{route('institute.manage_course_adv')}}">
<i class="align-middle" data-feather="list"></i>
<span class="align-middle">Manage</span>
</a>
</li> --}}
            <!-- -->

            {{-- <li class="sidebar-header">
                Tools
            </li>

            </li>
            <li class="sidebar-item {{request()->routeIs('institute_settings')?'active':''}}">
                <a class="sidebar-link" href="{{route('institute_settings')}}">
        <i class="align-middle" data-feather="settings"></i>
        <span class="align-middle">Settings</span>
        </a>
            </li> --}}



            <!-- -->
            <!-- -->

            <!-- -->
            <!-- -->

{{--
        </ul>

    </div>






        </nav> --}}

           <!-- Main Content -->
        {{-- <main class="flex flex-col w-100 space-y-4 p-0 transition-all duration-300 md:ml-0 mr-0 md:mr-0 ml-0"> --}}

                    {{--  --}}
            <!-- Contains Header Elements , logo , login buttons , search bar , drawer button -->
            {{-- <header class="bg-white shadow-md">
    @include('layouts.navigation') --}}






{{--  --}}

            {{-- </header> --}}

    {{--  --}}


            {{-- @yield('content') --}}

         {{-- up with drawer items --}}
        <!-- Footer -->
        {{-- <footer class="bg-gray-900 text-white py-6 text-center">
            <div class="container-fluid">
                <div class="row text-muted">
                    <div class="col-6 text-start">
                        <p class="mb-0">
                            <a class="text-muted" href=""
                                target="_blank"><strong>Your Institute</strong></a> - <a class="text-muted"
                                href="" target="_blank"><strong>Institute Panel
                                    </strong></a> &copy;
                        </p>
                    </div>
                    <div class="col-6 text-end">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="text-muted" href="" target="_blank">Support</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="" target="_blank">Help Center</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="" target="_blank">Privacy</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="" target="_blank">Terms</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <p>&copy; {{ date('Y') }} Your Institute. All rights reserved.</p>
                    </footer>



            </main> --}}



        {{--  --}}






        {{--  --}}
        {{--  --}}
        {{--  --}}
        {{--  --}}

    {{-- </div> --}}



{{--
    {{--  --}}


{{--
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!-- Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	{{-- <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5"> --}}
	{{-- <meta name="author" content="AdminKit"> --}}
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	{{-- <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" /> --}}

	<title>@yield('user_page_title')</title>

	<link href="{{asset(path: 'assets/css/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">


    @vite(['resources/css/custom.css', 'resources/js/app.js'])

</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="{{route('dashboard')}}">
          <span class="align-middle">User</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Main
					</li>

					<li class="sidebar-item {{request()->routeIs('dashboard')?'active':''}}">
						<a class="sidebar-link" href="{{route('dashboard')}}">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

  <!-- -->

  <li class="sidebar-item {{request()->routeIs('user_following')?'active':''}}">
    <a class="sidebar-link" href="{{route('user_following')}}">
<i class="align-middle" data-feather="users"></i> <span class="align-middle">Following</span>
</a>
</li>


<!-- -->
  <!-- -->

  <li class="sidebar-item {{request()->routeIs('user_course_adv_marked')?'active':''}}">
    <a class="sidebar-link" href="{{route('user_course_adv_marked')}}">
<i class="align-middle" data-feather="bookmark"></i> <span class="align-middle">Course Adv Marked</span>
</a>
</li>


<!-- -->
                    <!-- -->


					<li class="sidebar-item {{request()->routeIs('user_history')?'active':''}}">
						<a class="sidebar-link" href="{{route('user_history')}}">
              <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">History</span>
            </a>
					</li>


                    <!-- -->

                    <!-- -->
                    <!-- -->
                    <!-- -->



                    <li class="sidebar-header">
						Tools
					</li>

					</li>
                    <li class="sidebar-item {{request()->routeIs('user_settings')?'active':''}}">
						<a class="sidebar-link" href="{{route('user_settings')}}">
              <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Settings</span>
            </a>
					</li>


                    <!-- -->
                    <!-- -->

                    <!-- -->
                    <!-- -->


				</ul>
{{--
				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Upgrade to Pro</strong>
						<div class="mb-3 text-sm">
							Are you looking for more components? Check out our premium version.
						</div>
						<div class="d-grid">
							<a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
						</div>
					</div>
				</div>
			</div> --}}
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">

                <div class="container text-center ">

          {{-- row drawer button + logo--}}
          <div class="d-flex justify-content-start">
            {{-- drawer button + logo --}}
          <div class="flex flex-row  items-center ">
              <a class="sidebar-toggle js-sidebar-toggle">
                  <i class="hamburger align-self-center"></i>

                </a>
                <img src="/images/home/light/your_ins_logo.png" alt="Logo"
                class="logo img-fluid">
                {{--  --}}
                {{--  --}}
                {{--  --}}




          </div>

          <div></div>

          </div>
      {{-- row end --}}




{{--  --}}

                </div>


     {{-- contain menus --}}
     <div class="navbar-collapse">
   {{-- buttons login--}}
   <div class="d-flex justify-content-center">
    {{--  --}}
    {{--  --}}
    {{--  --}}
    @if (Route::has('login'))
    <div class="flex gap-4 justify-between">
             @auth
                 <a
                     href="{{ route('admin') }}"
                     {{-- class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]  dark:hover:text-white/80 dark:focus-visible:ring-white" --}}
                     class="bg-green gap-1 m-5 position-relative text-danger"
                 >

                 </a>
             @else

              <a
              href="{{ route('login') }}"
              class="btn btn-secondary btn-lg whitespace-nowrap"
          >
          Log in
          </a>




                 @if (Route::has('register'))

                  <a
                  href="{{ route('register') }}"
                  class="btn btn-secondary btn-lg"
                  {{-- class="bg-var(--main-color) text-black px-4 py-2 rounded-md hover:bg-gray-800 mr-3 ml-3 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D30] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white" --}}
              >
              Register
              </a>

    {{--  --}}
    {{-- <button type="submit" class="btn btn-secondary btn-lg">
    Log in
    </button> --}}
    {{--  --}}
    {{--  --}}

             @endif
                 @endauth
</div>
             @endif
    {{--  --}}


                   {{--  --}}


      </div>
        {{--  --}}
        {{--  --}}
        {{--  --}}
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                    <div class="position-relative">
                        <i class="align-middle" data-feather="bell"></i>
                        <span class="indicator">4</span>
                    </div>
                </a>
                {{--  --}}
                {{--  --}}
                {{--  --}}

        {{--  --}}




                {{--  --}}
                {{--  --}}
                {{--  --}}


                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                    <div class="dropdown-menu-header">
                        4 New Notifications
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="text-danger" data-feather="alert-circle"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">Update completed</div>
                                    <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                    <div class="text-muted small mt-1">30m ago</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="text-warning" data-feather="bell"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">Lorem ipsum</div>
                                    <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                                    <div class="text-muted small mt-1">2h ago</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="text-primary" data-feather="home"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">Login from 192.186.1.8</div>
                                    <div class="text-muted small mt-1">5h ago</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="text-success" data-feather="user-plus"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">New connection</div>
                                    <div class="text-muted small mt-1">Christina accepted your request.</div>
                                    <div class="text-muted small mt-1">14h ago</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-menu-footer">
                        <a href="#" class="text-muted">Show all notifications</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                    <div class="position-relative">
                        <i class="align-middle" data-feather="message-square"></i>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                    <div class="dropdown-menu-header">
                        <div class="position-relative">
                            4 New Messages
                        </div>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                </div>
                                <div class="col-10 ps-2">
                                    <div class="text-dark">Vanessa Tucker</div>
                                    <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
                                    <div class="text-muted small mt-1">15m ago</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
                                </div>
                                <div class="col-10 ps-2">
                                    <div class="text-dark">William Harris</div>
                                    <div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
                                    <div class="text-muted small mt-1">2h ago</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
                                </div>
                                <div class="col-10 ps-2">
                                    <div class="text-dark">Christina Mason</div>
                                    <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
                                    <div class="text-muted small mt-1">4h ago</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
                                </div>
                                <div class="col-10 ps-2">
                                    <div class="text-dark">Sharon Lessman</div>
                                    <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
                                    <div class="text-muted small mt-1">5h ago</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-menu-footer">
                        <a href="#" class="text-muted">Show all messages</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
        <i class="align-middle" data-feather="settings"></i>
        </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">

                    <img src="{{ asset('assets/img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded me-1" />
        <span class="text-dark">User Name</span>
        </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
                    <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
                    <div class="dropdown-divider"></div>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <input type="submit" value="Logout" class="ms-3 btn btn-warning">


                    </form>
                                        </div>
            </li>
        </ul>
        {{--  --}}
        {{--  --}}
        {{--  --}}

                          </div>




        {{--  --}}


      {{-- row  search bar--}}
      <div class="row ">
        <div class="col-md-8">
{{-- Search bar --}}
<div class="flex items-center m-0 px-0 rounded-full">

<span class="-mr-8 search-bar-above rounded-full">
<i data-feather="search"></i> <!-- Search Icon -->
</span>
<input type="text"  placeholder="Search about any thing"
 class="px-10 py-2 border rounded-full focus:outline-none focus:ring focus:ring-teal-300 p-10 " />
</div>



          </div>

        </div>

{{-- row search end --}}

			</nav>

			<main class="content">
				<div class="container-fluid p-0">



					@yield("user_layout")

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="" target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin Template</strong></a>								&copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="{{asset('assets/js/app.js')}}"></script>

</body>

</html>

