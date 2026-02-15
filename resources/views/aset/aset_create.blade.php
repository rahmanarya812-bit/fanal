@extends('layout.template')
@section('content')
    <div class="card">
        <div class="card-header">
            Form Tambah Data Aset
        </div>
        <div class="card-body">
            <form method="POST" action="/aset/store" class="row g-3 needs-validation" novalidate>
                @csrf
                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Nama Aset</label>
                    <input name="nama_aset" type="text" class="form-control" id="validationCustom01" required>
                    <div class="valid-feedback">
                      sangat bagus
                    </div>
                    <div class="invalid-feedback">
                       harap isi nama aset
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
@endsection
