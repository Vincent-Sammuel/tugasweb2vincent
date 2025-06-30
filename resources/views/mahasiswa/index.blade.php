@extends('layout')

@section('content')
    <h1>Data Mahasiswa</h1>

    <div class="tombol-kanan">
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-biru">➕ Tambah Data</a>
    </div>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        @foreach($mahasiswas as $i => $mhs)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>
                <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-hijau">Edit</a>
                <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-merah" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
