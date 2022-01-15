<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.svg') }}">

        <!-- CoreUI CSS -->
        <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui@3.4.0/dist/css/coreui.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css" integrity="sha512-n+g8P11K/4RFlXnx2/RW1EZK25iYgolW6Qn7I0F96KxJibwATH3OoVCQPh/hzlc4dWAwplglKX8IVNVMWUUdsw==" crossorigin="anonymous" />

        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body class="c-app">

        @include('partials.sidebar')

        <div class="c-wrapper c-fixed-components">
        <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
            <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
                </svg>
            </button>
            <ul class="c-header-nav ml-auto mr-4">

                <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="c-avatar"><img class="c-avatar-img" src="{{ asset('avatar.jpg') }}" alt="user@email.com"></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pt-0">
                        <div class="dropdown-header bg-light py-2"><strong>Account</strong></div><a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-envelope-open') }}"></use>
                            </svg> Messages<span class="badge badge-success ml-auto">42</span></a>
                        <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div><a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-settings') }}"></use>
                            </svg> Settings</a><a class="dropdown-item" href="#">

                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
                            </svg> Logout</a>
                    </div>
                </li>
            </ul>

        </header>
        <div class="c-body">
            <main class="c-main">

                @yield('content')

            </main>
        </div>
    </div>

        <!-- Optional JavaScript -->
        <!-- Popper.js first, then CoreUI JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js" integrity="sha512-yUNtg0k40IvRQNR20bJ4oH6QeQ/mgs9Lsa6V+3qxTj58u2r+JiAYOhOW0o+ijuMmqCtCEg7LZRA+T4t84/ayVA==" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://unpkg.com/@coreui/coreui@3.4.0/dist/js/coreui.min.js"></script>
{{--        Old Sweetalert CDN--}}
{{--        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>--}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript">

            {{-- Old Sweetalert --}}
            // $('.show_confirm').click(function(event) {
            //     var form =  $(this).closest("form");
            //     event.preventDefault();
            //     swal({
            //         title: `Are you sure you want to delete?`,
            //         icon: "warning",
            //         buttons: true,
            //         dangerMode: true,
            //     })
            //         .then((willDelete) => {
            //             if (willDelete) {
            //                 form.submit();
            //             }
            //         });
            // });

            $('.show_confirm').click(function(event) {
                var form =  $(this).closest("form");
                event.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to delete.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Delete'
                }).then((willDelete) => {
                    if (willDelete.isConfirmed) {
                        form.submit();
                        // Swal.fire(
                        //     'Deleted!',
                        //     'Your file has been deleted.',
                        //     'success'
                        // )
                    }
                })
            });

        </script>
    </body>
</html>

