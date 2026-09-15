<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Pendikom</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href=" {{ route('student-list') }} ">Beranda</a></li>
            <li><a href=" {{ route('student-about') }} ">Tentang</a></li>
            <li><a href=" {{ route('student-create') }} ">Tambah Mahasiswa</a></li>
        </ul>
    </nav>
    <main>
        @if (session("success"))
            <h4> {{ session("success") }}  </h4>
        @endif
        {{ $slot }}
    </main>
</body>
</html>