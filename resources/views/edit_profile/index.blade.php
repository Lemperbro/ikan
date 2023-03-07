@extends('layouts.main')

@section('container')

<div class=" ml-60 pt-6">
    <h1 class="text-main3 font-semibold text-2xl">Edit Profile</h1>
    <form action="" class=" w-[60%] mx-auto mt-16">
        <div class="w-full mb-4">
            <img src="img/ft1.jpg" alt="" class="w-24 h-24 mx-auto rounded-full object-cover">
            <label for="image" class="text-center block cursor-pointer text-main3 text-lg mt-4 font-semibold ">Ganti Foto</label>
            <input type="file" name="image" id="image" class="hidden">
        </div>  
        <div class="w-full mb-4">
            <label for="nama" class="text-main3 font-semibold text-lg">Nama</label>
            <input type="text" name="nama" class="h-12 w-full rounded-lg bg-main4 text-main3 mt-4 p-2">
        </div>
        <div class="w-full mb-4">
            <label for="email" class="text-main3 font-semibold text-lg">Email</label>
            <input type="email" name="email" class="h-12 w-full rounded-lg bg-main4 text-main3 mt-4 p-2">
        </div>
        <div class="w-full mb-4">
            <label for="no_hp" class="text-main3 font-semibold text-lg">No Telephone</label>
            <input type="number" name="no_hp" class="h-12 w-full rounded-lg bg-main4 text-main3 mt-4 p-2">
        </div>
        <div class="w-full mb-4">
            <label for="alamat" class="text-main3 font-semibold text-lg">Alamat</label>
            <input type="text" name="alamat" class="h-12 w-full rounded-lg bg-main4 text-main3 mt-4 p-2">
        </div>
        <button type="submit" name="kirim" class="bg-main2 text-main py-2 px-4 mt-4 rounded-md text-lg">Selesai</button>
    </form>
</div>
@endsection