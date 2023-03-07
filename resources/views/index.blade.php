@extends('layouts.main')

@section('container')
<section class="relative ml-60 bg-main6 pt-6">
    <h1 class="text-main3 font-semibold text-2xl">Dashboard</h1>

    <div class="w-full overflow-x-scroll grid auto-cols-[100%] grid-flow-col gap-x-4">
        <div class="relative object-cover h-96 ">
            <img src="img/ft1.jpg" alt="" class="object-cover h-96 w-full ">
            <span class="backdrop-blur-sm absolute inset-0 "></span>
            <p class="text-main3 absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] font-semibold">Bandeng Segar Murah</p>
        </div>
        <div class="relative object-cover h-96 ">
            <img src="img/ft1.jpg" alt="" class="object-cover h-96 w-full ">
            <span class="backdrop-blur-sm absolute inset-0 "></span>
            <p class="text-main3 absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] font-semibold">Bandeng Tambak</p>
        </div>
        <div class="relative object-cover h-96 ">
            <img src="img/ft1.jpg" alt="" class="object-cover h-96 w-full ">
            <span class="backdrop-blur-sm absolute inset-0 "></span>
            <p class="text-main3 absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] font-semibold">Mujaer Segar</p>
        </div>
        <div class="relative object-cover h-96 ">
            <img src="img/ft1.jpg" alt="" class="object-cover h-96 w-full ">
            <span class="backdrop-blur-sm absolute inset-0 "></span>
            <p class="text-main3 absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] font-semibold">Bandeng Segar</p>
        </div>
    </div>
    <div class="grid grid-cols-4 gap-8 mt-8">

        <a href="" class="px-2 pt-2 pb-4 bg-main4 rounded-md">
            <img src="img/ft1.jpg" alt="" class="rounded-md h-48 w-full object-cover">
            <h1 class="line-clamp-2 text-main3 mt-2 text-xl font-semibold">Bandeng Segar Murah</h1>
            <p class="font-semibold text-main3 mt-2">Rp. 50.000/Kg</p>
            
            <div class="ml-2">
            <div class="flex mt-2 gap-x-2">
            <img src="icon/location.svg" alt="" class="w-5 object-contain opacity-50">
            <p class="text-main3 font-light text-sm">Maduran, Lamongan, Jawa-timur</p>
            </div>

            <div class="flex gap-x-2 mt-2">
                <img src="img/ft1.jpg" alt="" class="w-5 h-5 object-cover rounded-full">
                <p class="text-main3 text-sm font-light">Lamongan Store</p>
            </div>
            </div>
        </a>
        <a href="" class="px-2 pt-2 pb-4 bg-main4 rounded-md">
            <img src="img/ft2.jpg" alt="" class="rounded-md h-48 w-full object-cover">
            <h1 class="line-clamp-2 text-main3 mt-2 text-xl font-semibold">Mujaer Tambak</h1>
            <p class="font-semibold text-main3 mt-2">Rp. 40.000/Kg</p>
            
            <div class="ml-2">
            <div class="flex mt-2 gap-x-2">
            <img src="icon/location.svg" alt="" class="w-5 object-contain opacity-50">
            <p class="text-main3 font-light text-sm">Maduran, Lamongan, Jawa-timur</p>
            </div>

            <div class="flex gap-x-2 mt-2">
                <img src="img/ft1.jpg" alt="" class="w-5 h-5 object-cover rounded-full">
                <p class="text-main3 text-sm font-light">Lamongan Store</p>
            </div>
            </div>
        </a>
        <a href="" class="px-2 pt-2 pb-4 bg-main4 rounded-md">
            <img src="img/ft2.jpg" alt="" class="rounded-md h-48 w-full object-cover">
            <h1 class="line-clamp-2 text-main3 mt-2 text-xl font-semibold">Mujaer Segar</h1>
            <p class="font-semibold text-main3 mt-2">Rp. 30.000/Kg</p>
            
            <div class="ml-2">
            <div class="flex mt-2 gap-x-2">
            <img src="icon/location.svg" alt="" class="w-5 object-contain opacity-50">
            <p class="text-main3 font-light text-sm">Maduran, Lamongan, Jawa-timur</p>
            </div>

            <div class="flex gap-x-2 mt-2">
                <img src="img/ft1.jpg" alt="" class="w-5 h-5 object-cover rounded-full">
                <p class="text-main3 text-sm font-light">Lamongan Store</p>
            </div>
            </div>
        </a>
        <a href="" class="px-2 pt-2 pb-4 bg-main4 rounded-md">
            <img src="img/ft1.jpg" alt="" class="rounded-md h-48 w-full object-cover">
            <h1 class="line-clamp-2 text-main3 mt-2 text-xl font-semibold">Bandeng Lamongan </h1>
            <p class="font-semibold text-main3 mt-2">Rp. 40.000/Kg</p>
            
            <div class="ml-2">
            <div class="flex mt-2 gap-x-2">
            <img src="icon/location.svg" alt="" class="w-5 object-contain opacity-50">
            <p class="text-main3 font-light text-sm">Lamongan, Jawa-timur</p>
            </div>

            <div class="flex gap-x-2 mt-2">
                <img src="img/ft1.jpg" alt="" class="w-5 h-5 object-cover rounded-full">
                <p class="text-main3 text-sm font-light">Lamongan Store</p>
            </div>
            </div>
        </a>
        <a href="" class="px-2 pt-2 pb-4 bg-main4 rounded-md">
            <img src="img/ft2.jpg" alt="" class="rounded-md h-48 w-full object-cover">
            <h1 class="line-clamp-2 text-main3 mt-2 text-xl font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia totam fuga delectus doloribus sed. Necessitatibus pariatur nemo,</h1>
            <p class="font-semibold text-main3 mt-2">Rp. 50.000</p>
            
            <div class="ml-2">
            <div class="flex mt-2 gap-x-2">
            <img src="icon/location.svg" alt="" class="w-5 object-contain opacity-50">
            <p class="text-main3 font-light text-sm">Maduran, Lamongan, Jawa-timur</p>
            </div>

            <div class="flex gap-x-2 mt-2">
                <img src="img/ft1.jpg" alt="" class="w-5 h-5 object-cover rounded-full">
                <p class="text-main3 text-sm font-light">Lamongan Store</p>
            </div>
            </div>
        </a>
        <a href="" class="px-2 pt-2 pb-4 bg-main4 rounded-md">
            <img src="img/ft1.jpg" alt="" class="rounded-md h-48 w-full object-cover">
            <h1 class="line-clamp-2 text-main3 mt-2 text-xl font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia totam fuga delectus doloribus sed. Necessitatibus pariatur nemo,</h1>
            <p class="font-semibold text-main3 mt-2">Rp. 50.000</p>
            
            <div class="ml-2">
            <div class="flex mt-2 gap-x-2">
            <img src="icon/location.svg" alt="" class="w-5 object-contain opacity-50">
            <p class="text-main3 font-light text-sm">Maduran, Lamongan, Jawa-timur</p>
            </div>

            <div class="flex gap-x-2 mt-2">
                <img src="img/ft1.jpg" alt="" class="w-5 h-5 object-cover rounded-full">
                <p class="text-main3 text-sm font-light">Lamongan Store</p>
            </div>
            </div>
        </a>
        <a href="" class="px-2 pt-2 pb-4 bg-main4 rounded-md">
            <img src="img/ft1.jpg" alt="" class="rounded-md h-48 w-full object-cover">
            <h1 class="line-clamp-2 text-main3 mt-2 text-xl font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia totam fuga delectus doloribus sed. Necessitatibus pariatur nemo,</h1>
            <p class="font-semibold text-main3 mt-2">Rp. 50.000</p>
            
            <div class="ml-2">
            <div class="flex mt-2 gap-x-2">
            <img src="icon/location.svg" alt="" class="w-5 object-contain opacity-50">
            <p class="text-main3 font-light text-sm">Maduran, Lamongan, Jawa-timur</p>
            </div>

            <div class="flex gap-x-2 mt-2">
                <img src="img/ft1.jpg" alt="" class="w-5 h-5 object-cover rounded-full">
                <p class="text-main3 text-sm font-light">Lamongan Store</p>
            </div>
            </div>
        </a>
        <a href="" class="px-2 pt-2 pb-4 bg-main4 rounded-md">
            <img src="img/ft2.jpg" alt="" class="rounded-md h-48 w-full object-cover">
            <h1 class="line-clamp-2 text-main3 mt-2 text-xl font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia totam fuga delectus doloribus sed. Necessitatibus pariatur nemo,</h1>
            <p class="font-semibold text-main3 mt-2">Rp. 50.000</p>
            
            <div class="ml-2">
            <div class="flex mt-2 gap-x-2">
            <img src="icon/location.svg" alt="" class="w-5 object-contain opacity-50">
            <p class="text-main3 font-light text-sm">Maduran, Lamongan, Jawa-timur</p>
            </div>

            <div class="flex gap-x-2 mt-2">
                <img src="img/ft1.jpg" alt="" class="w-5 h-5 object-cover rounded-full">
                <p class="text-main3 text-sm font-light">Lamongan Store</p>
            </div>
            </div>
        </a>
        <a href="" class="px-2 pt-2 pb-4 bg-main4 rounded-md">
            <img src="img/ft1.jpg" alt="" class="rounded-md h-48 w-full object-cover">
            <h1 class="line-clamp-2 text-main3 mt-2 text-xl font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia totam fuga delectus doloribus sed. Necessitatibus pariatur nemo,</h1>
            <p class="font-semibold text-main3 mt-2">Rp. 50.000</p>
            
            <div class="ml-2">
            <div class="flex mt-2 gap-x-2">
            <img src="icon/location.svg" alt="" class="w-5 object-contain opacity-50">
            <p class="text-main3 font-light text-sm">Maduran, Lamongan, Jawa-timur</p>
            </div>

            <div class="flex gap-x-2 mt-2">
                <img src="img/ft1.jpg" alt="" class="w-5 h-5 object-cover rounded-full">
                <p class="text-main3 text-sm font-light">Lamongan Store</p>
            </div>
            </div>
        </a>

    </div>
</section>

@endsection