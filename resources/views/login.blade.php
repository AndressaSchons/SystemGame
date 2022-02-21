<x-layout>
    <body>
        <div id="app">
            <form method="post" action="./components/login">
                @csrf

                <router-view></router-view>
            </form>
        </div>

    </body>

</x-layout>
