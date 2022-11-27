# Tugas_Akhir_Percobaan5

M Khalfan R D 2055061014

Sistem yang saya buat terkait dengan pendataan informasi dari mahasiswa yang pada menu utama terdapat tampilan awal dari owner website tersebut kemudian juga bisa melihat daftar data yang telah diinputkan

Cara menjalankan di Local
1. Menyiapkan composer agar bisa membuka laravel project
2. Masuk ke bagian folder views lalu akan muncul layouts, posts, uts
3. Layouts sebagai navbar dari wbsite yang akan menjadi master untuk teplating
4. Abaikan posts.
5. Masuk ke bagian uts, lalu akan muncul 3 file dengan format .php
6. Untuk membuka file secara live maka,
7. Buka terminal lalu jalankan php artisan serve
8. Maka akan muncul alamat local pada website tujuan

Design Database
1. Untuk nama database adalah wf_laravel
2. kemudian pada bagian 3 buah field dengan id(primary key), nama(string), npm(integer), alamat(string) 

Routes
Route::get('/', function () {
    return view('uts/welcome');
});

Route::get('/app', function () {
    return view('layouts/app');
});

Route::get('/form', function () {
    return view('uts/form');
});

Route::get('/uts', [UtsController::class, 'create'])->name('uts.create');
Route::post('/uts/store', [UtsController::class, 'store'])->name('uts.store');
Route::get('/uts/table', [UtsController::class, 'table'])->name('uts.table');
Route::delete('/delete/uts/show/{uts}', [UtsController::class, 'delete'])->name('uts.delete');
