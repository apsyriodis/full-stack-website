<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

        <title>Laracasts Assets</title>
    </head>
    <body>
        <div id="app">
            <div class="container mx-auto">
                <header class="pt-10 mb-16">
                    <h1>
                        <router-link to="/"><img src="/images/logo.svg" alt="laracasts"></router-link>
                    </h1>
                </header>

                <main class="flex">
                    <aside class="w-1/5 whitespace-nowrap mr-32">
                        <section class="mb-6">
                            <h5 class="uppercase font-bold text-lg mb-6">The Brand</h5>

                            <ul>

                                <li class="mb-6"><router-link to="/" exact>Logo</router-link></li>
                                <li class="mb-6"><router-link to="/logosymbol">Logo Symbol</router-link></li>
                                <li class="mb-6"><router-link to="/colors">Colors</router-link></li>
                                <li><router-link to="/typography">Typography</router-link></li>
                            </ul>
                        </section>

                        <section class="mt-20">
                            <h5 class="uppercase font-bold mb-6 text-lg">Doodles</h5>

                            <ul>
                                <li class="mb-6"><router-link to="/mascot">Mascot</router-link></li>
                                <li class="mb-6"><router-link to="/illustrations">Illustrations</router-link></li>
                                <li class="mb-6"><router-link to="/loaders">Loaders & Animations</router-link></li>
                                <li><router-link to="/wallpapers">Wallpapers</router-link></li>
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
    </body>
</html>
