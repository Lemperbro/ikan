@extends('layouts.two')

@section('container')
<div class=" h-screen py-10">
    <form class="mx-auto  w-[60%] bg-main4 rounded-md px-8 py-10 " method="POST" action="">
        <h1 class="text-main3 font-semibold text-3xl text-center">Register</h1>

        <div class="mt-4 ">
            <label for="username" class="text-main3 text-lg">Username</label>
            <input type="text" name="username" class="w-full h-12 bg-main p-2 text-main3 mt-4">
        </div>

        <div class="mt-4 ">
            <label for="password" class="text-main3 text-lg">Password</label>
            <input type="password" name="password" class="w-full h-12 bg-main p-2 text-main3 mt-4">
        </div>

        <div class="mt-4 ">
            <label for="konfirmasi_password" class="text-main3 text-lg">Konfirmasi Password</label>
            <input type="password" name="konfirmasi_password" class="w-full h-12 bg-main p-2 text-main3 mt-4">
        </div>

        <div class="mt-4 ">
            <label for="email" class="text-main3 text-lg">Email</label>
            <input type="email" name="email" class="w-full h-12 bg-main p-2 text-main3 mt-4">
        </div>

        <div class="mt-4 ">
            <label for="no_tlpn" class="text-main3 text-lg">No_telephone</label>
            <input type="number" name="no_tlpn" class="w-full h-12 bg-main p-2 text-main3 mt-4">
        </div>

        <div class="mt-4 ">
            <label for="alamat" class="text-main3 text-lg">Alamat</label>
            <input type="teks" name="alamat" class="w-full h-12 bg-main p-2 text-main3 mt-4">
        </div>

        <div class="flex justify-between mt-8">
            <button type="submit" class="bg-main2 py-2 px-4 rounded-md" >Daftar</button>
            <a href="" class="text-main3 bg-red-600 py-2 px-4 rounded-md">Kembali</a>
        </div>
            <!--ketika menggunakan wysiwyg dan ingin mencetaknya, agar htmlspecialchars nya tidak berfungsi gunakannlah <?php //{!! $contoh !!}?>-->
  
        
    </form>

    

    @foreach ($data as $data)

        <div>
            <a href="/post/{{ $data->slug }}" class="text-main2">{{ $data->name }}</a>
            <br>
            <br>
        </div>
    @endforeach

</div>
@endsection