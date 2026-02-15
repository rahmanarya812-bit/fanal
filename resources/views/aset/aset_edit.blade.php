@extends('layout.template')

@section('content')
    <div class="card">
        <div class="card-header">
            Form Edit Data Aset
        </div>
        <div class="card-body">
            <form method="POST" action="/aset/update/<?= $aset->id; ?>" class="row g-3 needs-validation" novalidate>
                @csrf
                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Nama Aset</label>
                    <input name="nama_aset" type="text" value="<?= $aset->nama_aset; ?>" class="form-control" id="validationCustom01" required>
                    <div class="valid-feedback">
                       Kerja Bagus
                    </div>
                    <div class="invalid-feedback">
                       harap isi nama Aset
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
@endsection
