@extends('layout.template')
@section('content')
    <h3>Tambah Data Pembeli</h3>
    <form method="POST" action="/pembeli/store" class="row g-3 needs-validation" novalidate>
        @csrf
        <div class="mb-3">
            <label for="kode_pembeli" class="form-label">Kode Pembeli</label>
            <input type="text" class="form-control" id="kode_pembeli" name="kode_pembeli" value="{{ old('kode_pembeli') }}" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
        </div>
        <div class="mb-3">
            <label for="aset" class="form-label">aset</label>
            <select class="form-select" id="aset" name="aset" required>
                <option value="">-- Pilih aset --</option>
                @foreach ($aset as $j)
                    <option value="{{ $j->nama_aset }}" {{ old('aset') == $j->id ? 'selected' : '' }}>
                        {{ $j->nama_aset }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
