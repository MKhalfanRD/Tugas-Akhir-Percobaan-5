@extends('layouts.app')
@section('slot')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>UTS_M Khalfan R D</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="bg-yellow-300 min-h-screen">
            <div class="p-8">
                <img class="rounded-md mx-auto w-40 shadow-lg shadow-gray-700"
                    src="https://siakadu.unila.ac.id/uploads/fotomhs/thumb/2055061014.jpg?42210" alt="">
                <div class="bg-yellow-200 p-2 mt-7 w-max rounded-md mx-auto shadow-gray-700">
                    <h1 class="font-bold text-xl">M Khalfan Rama Darmawan</h1>
                </div>
            </div>

            <div class="grid gap-4 grid-cols-3 mx-6">
                <div class="bg-yellow-200 rounded-md">
                    <h1 class="text-center font-bold mt-1 text-lg">Profil</h1>
                    <p class="text-center font-semibold mt-3">
                        Hallo semuanya 😁💕
                    <p class="text-justify p-3">
                        Nama saya M Khalfan R D biasa dipanggil dengan sebutan khalfan, saya merupakan mahasiswa angkatan
                        2020 yang sekarang sedang menempuh semester 5 di Program Studi Teknik Informatika. Saya mempunyai
                        rencana tugas akhir yaitu membuat sebuah teknologi di biang Iot dan mentransferkan hasil berupa data
                        tersebut ke dalam sebuah website, sehingga tidak perlu untuk mengunduh software tambahan lagi jika
                        ingin memantau data tersebut bisa langsung menggunakan browser yang biasa dipakai
                    </p>
                    </p>
                </div>
                <div class="bg-yellow-200 rounded-md">
                    <h1 class="text-center font-bold mt-1 text-lg">Riwayat Sekolah</h1>
                    <p class="mt-4">
                    <h1 class="ml-10 font-semibold">2008-2014</h1>
                    <li class="ml-20 mb-3">SDN 2 Rawa Laut Pahoman</li>
                    <h1 class="ml-10 font-semibold">2014-2017</h1>
                    <li class="ml-20 mb-3">SMP IT Daarul 'Ilmi Kemiling</li>
                    <h1 class="ml-10 font-semibold">2017-2020</h1>
                    <li class="ml-20 mb-3">SMA Yayasan Pembina Unila</li>
                    <h1 class="ml-10 font-semibold">2020-sekarang</h1>
                    <li class="ml-20">Teknik Informatika - Universitas Lampung</li>
                    </p>
                </div>
                <div class="bg-yellow-200 rounded-md">
                    <h1 class="text-center font-bold mt-1 text-lg">Mata Kuliah Favorit</h1>
                    <p class="mt-4">
                    <h1 class="ml-3 font-semibold">Konsentrasi Rpl</h1>
                    <li class="ml-7 mb-2">Web Framework</li>
                    <li class="ml-7 mb-2">Keamanan Sistem Informasi</li>
                    <li class="ml-7 mb-2">Internet Of Things</li>
                    </p>
                </div>
            </div>

        </div>
    </body>

    </html>
@endsection
