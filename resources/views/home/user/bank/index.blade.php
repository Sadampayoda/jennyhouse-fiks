@extends('templete.html')

@section('conten')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <h2 class="mb-4">Daftar Kartu Kredit</h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Tabel Daftar Kartu Kredit -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Kartu</th>
                        <th>Nomor Kartu</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bank as $kartuKredit)
                    <tr>
                        <td>{{ $kartuKredit->metode }}</td>
                        <td>{{ $kartuKredit->nomor }}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ route('kartu.kredit.edit', $kartuKredit->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <!-- Tombol Hapus -->
                            <form action="{{ route('kartu.kredit.destroy', $kartuKredit->id) }}" method="post" style="display:inline;">
                                @csrf
                                
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kartu kredit ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Tombol Tambah Kartu Kredit -->
            <a href="{{ route('kartu.kredit.create') }}" class="btn btn-success">Tambah Kartu Kredit Baru</a>
        </div>
    </div>
</div>
@endsection
