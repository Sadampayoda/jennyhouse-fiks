@extends('templete.html')

@section('conten')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <h2 class="mb-4">Tambah Kartu Kredit Baru</h2>

            <!-- Formulir Tambah Kartu Kredit -->
            <form action="{{ route('kartu.kredit.create') }}" method="post">
                @csrf

                <!-- Select Metode Kartu Kredit -->
                <div class="mb-3">
                    <label for="metode" class="form-label">Pilih Metode Kartu Kredit</label>
                    <select class="form-select" id="metode" name="metode" required>
                        <option value="bca">bca</option>
                        <option value="bank_mandiri">bank_mandiri</option>
                        <option value="bni">bni</option>
                        <option value="bri">bri</option>
                    </select>
                </div>

                <!-- Input Nomor Kartu -->
                <div class="mb-3">
                    <label for="nomor" class="form-label">Nomor Kartu</label>
                    <input type="number" class="form-control" id="nomor" name="nomor" required>
                </div>

                <!-- Tombol Simpan -->
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
