<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>{{ $judul }}</title>
</head>
<body class="bg-main6">
  <header class="">
    <div class="bg-main fixed h-screen w-96 left-0 px-8 py-2 z-10 top-0" id="side-bar">
      <button class="absolute bg-main border rounded-full rotate-180 -right-5 w-10 mt-[11px]" id="btn-sidebar"><img src="/icon/arrow.svg" alt=""></button>
        <h1 class="text-main3 font-semibold text-3xl text-center py-4 ">SIDBAM</h1>

        <!--tampilan profile setelah login start-->
        <div class="flex gap-x-4 mt-4">
            <img src="/img/ft1.jpg" alt="" class="w-12 h-12 rounded-full object-cover">
            <h1 class="text-main3 font-semibold text-xl my-auto">Ryan Yulianto</h1>
        </div>
        <!--tampilan profile setelah login end-->


        <div class="flex mt-4 relative">
          <input type="text" class="h-12 w-full rounded-md py-2 pl-10 pr-2 text-main3 bg-main4">
          <img src="/icon/search.svg" alt="" class="w-7 left-1 absolute top-[5px]">
        </div>

        <div class="mt-8">
          <h1 class="text-main3 font-semibold">Menu</h1>

          <a href="/" class="flex gap-x-4 py-5  p-2 rounded-md {{ ($judul === "Dashboard") ? 'bg-main4' : '' }}">
            <img src="/icon/dashboard.svg" alt="" class="w-7">
            <h1 class="text-main3 text-xl ">Dashboard</h1>
          </a>

          <a href="/lebam" class="flex gap-x-4 py-5   p-2 rounded-md {{ ($judul === "Lebam") ? 'bg-main4' : '' }}">
            <img src="/icon/lebam.svg" alt="" class="w-7">
            <h1 class="text-main3 text-xl ">Lebam</h1>
          </a>

          <a href="/pemdik" class="flex gap-x-4 py-5   p-2 rounded-md {{ ($judul === "Pemdik") ? 'bg-main4' : '' }}">
            <img src="/icon/pemdik.svg" alt="" class="w-7">
            <h1 class="text-main3 text-xl ">Pemdik</h1>
          </a>

          <a href="/pesanan" class="flex gap-x-4 py-5   p-2 rounded-md {{ ($judul === "Pesanan") ? 'bg-main4' : '' }}">
            <img src="/icon/pesanan.svg" alt="" class="w-7">
            <h1 class="text-main3 text-xl ">Pesanan</h1>
          </a>

        </div>

        <div class="mt-8">
          <h1 class="text-main3 font-semibold">General</h1>

          <a href="/edit_profile" class="flex gap-x-4 py-5   p-2 rounded-md {{ ($judul === "Edit Profile") ? 'bg-main4' : '' }}">
            <img src="/icon/profile.svg" alt="" class="w-7">
            <h1 class="text-main3 text-xl ">Edit Profile</h1>
          </a>


          <div class="bg-red-600 p-2 rounded-md w-1/3 mt-52 mx-auto ">
            <div class="flex gap-x-2 ">
              <img src="/icon/logout.svg" alt="" class="w-5">
              <h1 class="text-main3 font-semibold">Logout</h1>
            </div>
        </div>'

        </div>




        


      </div>
  </header>

  <div class="container">
    @yield('container')
  </div>
</body>
</html>