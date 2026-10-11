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
                        Edit Pengguna
                    </h3>
                </div>

                <div class="card-body px-5 pt-3 pb-3">
                    <p class="text-center mb-4" style="color: #8a8a8a;">
                        Perbarui data pengguna di bawah ini
                    </p>

                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nama" class="form-label fw-semibold">
                                Nama
                            </label>

                            <input
                                type="text"
                                class="form-control form-control-lg rounded-3 @error('nama') is-invalid @enderror"
                                id="nama"
                                name="nama"
                                value="{{ old('nama', $user->nama) }}"
                                placeholder="Masukkan nama"
                                required>

                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="npm" class="form-label fw-semibold">
                                NPM
                            </label>

                            <input
                                type="text"
                                class="form-control form-control-lg rounded-3 @error('npm') is-invalid @enderror"
                                id="npm"
                                name="npm"
                                value="{{ old('npm', $user->npm) }}"
                                placeholder="Masukkan NPM"
                                required>

                            @error('npm')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="kelas_id" class="form-label fw-semibold">
                                Kelas
                            </label>

                            <select
                                class="form-select form-select-lg rounded-3 @error('kelas_id') is-invalid @enderror"
                                name="kelas_id"
                                id="kelas_id"
                                required>

                                @foreach ($kelas as $kelasItem)
                                    <option
                                        value="{{ $kelasItem->id }}"
                                        {{ old('kelas_id', $user->kelas_id) == $kelasItem->id ? 'selected' : '' }}>
                                        {{ $kelasItem->nama_kelas }}
                                    </option>
                                @endforeach
                            </select>

                            @error('kelas_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <hr class="my-3">

                        <div class="d-flex justify-content-end gap-2">
                            <a
                                href="{{ route('user.index') }}"
                                class="btn btn-outline-secondary px-4 py-2 rounded-3">
                                Batal
                            </a>

                            <button
                                type="submit"
                                class="btn text-white px-4 py-2 rounded-3"
                                style="background-color: #0D9488; border: none;">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
