@extends('layouts.app')

@section('content')

<style>
    .mk-form-control:focus {
        border-color: #0F766E;
        box-shadow: 0 0 0 0.2rem rgba(15,118,110,0.15);
    }

    .btn-mk-save {
        background-color: #0D9488;
        color: white;
        border: none;
    }

    .btn-mk-save:hover {
        background-color: #0F766E;
        color: white;
    }
</style>

<div class="container d-flex align-items-center justify-content-center py-4"
     style="min-height: 70vh;">

    <div class="row justify-content-center w-100">
        <div class="col-md-7 col-lg-5">

            <div class="card border-0"
                 style="border-radius: 35px;
                        box-shadow: 0 15px 45px rgba(0,0,0,0.15);
                        overflow: hidden;">

                <div class="card-header bg-white border-0 text-center pt-4 pb-2">
                    <h3 class="fw-bold mb-0" style="color: #000000;">
                        Tambah Mata Kuliah
                    </h3>
                </div>

                <div class="card-body px-4 px-md-5 pt-3 pb-4">

                    <p class="text-center mb-4" style="color: #8a8a8a;">
                        Isi data mata kuliah di bawah ini
                    </p>

                    <form action="{{ url('/matakuliah') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nama_mk" class="form-label fw-semibold">
                                Nama Mata Kuliah
                            </label>

                            <input
                                type="text"
                                class="form-control form-control-lg rounded-3 mk-form-control"
                                id="nama_mk"
                                name="nama_mk"
                                value="{{ old('nama_mk') }}"
                                placeholder="Masukkan nama mata kuliah"
                                required>

                            @error('nama_mk')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="sks" class="form-label fw-semibold">
                                SKS
                            </label>

                            <input
                                type="number"
                                class="form-control form-control-lg rounded-3 mk-form-control"
                                id="sks"
                                name="sks"
                                value="{{ old('sks') }}"
                                placeholder="Masukkan jumlah SKS"
                                min="1"
                                required>

                            @error('sks')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <hr class="my-4">

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ url('/matakuliah') }}"
                               class="btn btn-outline-secondary rounded-3 px-4 py-2">
                                Batal
                            </a>

                            <button type="submit"
                                    class="btn btn-mk-save rounded-3 px-4 py-2">
                                Simpan
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
