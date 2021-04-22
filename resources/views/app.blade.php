<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        
        <title>LARAVEL x VUE</title>
    </head>
    <body class="container-fluid bg-gray-100" style="font-family: 'Open Sans', sans-serif; max-width: 1600px">

        <div id="app" class="mx-20 mb-4">
            <div>
                <header class="pt-7 mb-28 ml-16">
                        <router-link to="/"><img src="/images/logo.png" class="w-20 float-left" alt="laracasts"></router-link>
                </header>

                <main class="flex ml-1 -mt-1">
                    <aside class="w-1/5 whitespace-nowrap bg-gray-200 rounded-xl p-4 -ml-4 mr-10">
                        <section class="mb-6">
                            <h5 class="font-bold text-lg mb-6">LARAVEL x VUE</h5>
                            <ul>
                                <li class="mb-6 -ml-8"><router-link to="/" style="text-decoration:none; color:black;" exact>Home</router-link></li>
                                <li class="mb-6 -ml-8"><router-link to="/add_contact" style="text-decoration:none; color:black;" exact>Add Contact</router-link></li>
                                <li class="mb-6 -ml-8"><router-link to="/contact_list" style="text-decoration:none; color:black;">Contact List</router-link></li>
                            </ul>
                        </section>
                    </aside>

                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
        </div>

        <script src="/js/app.js"></script>
        {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    </body>
</html>
