@extends('layout')

@section('content')
    <h1>Tambah Mahasiswa</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ old('nama') }}"><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" value="{{ old('nim') }}"><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" value="{{ old('jurusan') }}"><br><br>

        <button type="submit" class="btn btn-hijau">Simpan</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-merah">Kembali</a>

    </form>
@endsection
