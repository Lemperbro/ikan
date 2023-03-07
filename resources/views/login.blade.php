@extends('layouts.two')
@section('container')

<div class=" h-screen py-60">
    <form class="mx-auto  w-[60%] bg-main4 rounded-md px-8 py-10 ">
        <h1 class="text-main3 font-semibold text-3xl text-center">Login</h1>

        <div class="mt-4 ">
            <label for="username" class="text-main3 text-lg">Username</label>
            <input type="text" name="username" class="w-full h-12 bg-main p-2 text-main3 mt-4">
        </div>

        <div class="mt-4 ">
            <label for="password" class="text-main3 text-lg">Password</label>
            <input type="password" name="password" class="w-full h-12 bg-main p-2 text-main3 mt-4">
        </div>

        <div class="flex justify-between mt-8">
            <button class="bg-main2 py-2 px-4 rounded-md">Login</button>
            <a href="" class="text-main3 bg-red-600 py-2 px-4 rounded-md">Lupa Password</a>
        </div>
        
        <div class="flex mt-8">
            <h1 class="text-main3">Belum punya akun ? <a href="" class="text-main2">Daftar Disini</a></h1>
        </div>
    </form>
</div>
<p></p>

@endsection