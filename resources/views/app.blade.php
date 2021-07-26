<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="font-sans">
        <div id="app">
            <div class="container px-8">

                <header class="py-6 mb-8">
                    <h1 class="py-6 mb-8">
                        <img src="/images/logo.svg" alt="Laracasts">
                    </h1>
                </header>

                <main class="flex">
                    <aside class="w-1/5 pt-8">
                        <section class="mb-10">
                            <h5 class="uppercase font-bold mb-5 text-base">The Brand</h5>
                            <ul>
                                <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'logo' }" exact>Logo</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'logo-symbol' }">Logo Symbol</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'colors' }">Colors</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'typography' }">Typography</router-link></li>
                            </ul>
                        </section>

                        <section>
                            <h5 class="uppercase font-bold mb-5 text-base">Doodles</h5>
                            <ul>
                                <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'mascot' }">Mascot</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'illustrations' }">Illustrations</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'loaders-and-animations' }">Loaders & Animations</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'wallpapers' }">Wallpapers</router-link></li>
                            </ul>
                        </section>
                    </aside>

                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>

            </div>
        </div>
        
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
