@extends('layout')

@section('content')
    <h1>Edit Mahasiswa</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ old('nama', $mahasiswa->nama) }}"><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" value="{{ old('nim', $mahasiswa->nim) }}"><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" value="{{ old('jurusan', $mahasiswa->jurusan) }}"><br><br>

        <button type="submit" class="btn btn-hijau">Update</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-merah">Batal</a>

    </form>
@endsection
