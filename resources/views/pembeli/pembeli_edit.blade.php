@extends('layout.template')

@section('content')
    <div class="card">
        <div class="card-header">
            Form edit Data pembeli
        </div>
        <div class="card-body">
            <form method="POST" action="/pembeli/update/<?= pembeli->id; ?>" class="row g-3 needs-validation" novalidate>
                @csrf
                <div class="mb-3">
                    <label for="kode_pembeli" class="form-label">Kode Pembeli</label>
                    <input type="text" class="form-control" id="kode_pembeli" name="kode_pembeli" value="{{ pembeli->kode_pembeli }}"
                        required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ pembeli->nama }}"
                        required>
                </div>
                <div class="mb-3">
                    <label for="aset" class="form-label">Aset</label>
                    <select class="form-select" id="aset" name="aset" required>
                        <option value="">-- Pilih Aset --</option>
                        @foreach ($aset as $j)
                            <option value="{{ $j->nama_aset }}" {{ pembeli->aset_id == $j->id ? 'selected' : '' }}>
                                {{ $j->nama_aset }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="Laki-laki" {{ pembeli->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                        </option>
                        <option value="Perempuan" {{ pembeli->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                        </option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit Form</button>
            </form>
        @endsection