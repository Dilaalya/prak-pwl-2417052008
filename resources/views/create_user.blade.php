@extends('layouts.app')
@section('content')

<div class="container d-flex align-items-center justify-content-center py-4" style="min-height: 70vh;">
    <div class="row justify-content-center w-100">
        <div class="col-md-7 col-lg-5">

            <div class="card border-0"
                style="
                    border-radius: 35px;
                    box-shadow: 0 15px 45px rgba(0, 0, 0, 0.15);
                    overflow: hidden;
                ">

                <div class="card-header bg-white border-0 text-center pt-4 pb-2">
                    <h3 class="fw-bold mb-0" style="color: #000000;">
                        Buat Pengguna Baru
                    </h3>
                </div>

                <div class="card-body px-5 pt-3 pb-3">
                    <p class="text-center mb-4" style="color: #8a8a8a;">
                        Isi data pengguna di bawah ini
                    </p>

                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label fw-semibold">
                                Nama
                            </label>

                            <input
                                type="text"
                                class="form-control form-control-lg rounded-3"
                                styles="font-size: 10px;"
                                id="nama"
                                name="nama"
                                placeholder="Masukkan nama">
                        </div>

                        <div class="mb-3">
                            <label for="npm" class="form-label fw-semibold">
                                NPM
                            </label>

                            <input
                                type="text"
                                class="form-control form-control-lg rounded-3"
                                styles="font-size: 10px;"
                                id="npm"
                                name="npm"
                                placeholder="Masukkan NPM">
                        </div>

                        <div class="mb-3">
                            <label for="kelas_id" class="form-label fw-semibold">
                                Kelas
                            </label>

                            <select
                                class="form-select form-select-lg rounded-3"
                                name="kelas_id"
                                id="kelas_id">

                                @foreach ($kelas as $kelasItem)
                                    <option value="{{ $kelasItem->id }}">
                                        {{ $kelasItem->nama_kelas }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <hr class="my-3">

                        <div class="d-flex justify-content-end">
                            <button
                                type="submit"
                                class="btn text-white px-4 py-2 rounded-3"
                                style="background-color: #0D9488; border: none;">
                                Tambah Pengguna
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection