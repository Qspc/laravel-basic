<div class="flex flex-row justify-center bg-red-500 p-4 text-white font-bold	">

    <div class="mx-2 hover:bg-black-700"><a href="/home">Home</a> </div>
    <div class="mx-2"><a href="/">laravel</a></div>

    @auth
        <div class="mx-2"><a href="/dashboard">Dashboard</a></div>
        <form action="logout" method="post">
            @csrf
            <div class="mx-2"><button type="submit" class="font-bold">logout</button></div>
        </form>
        @else
            <div class="mx-2"><a href="/login">Login</a></div>
    @endauth

</div>

