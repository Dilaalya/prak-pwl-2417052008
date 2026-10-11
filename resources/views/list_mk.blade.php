@extends('layouts.app')

@section('content')

<style>
    .mk-table thead th {
        background-color: #F0FDFA;
        color: #1E293B;
        font-weight: 600;
        border-bottom: 2px solid #0F766E;
        padding: 15px;
    }

    .mk-table tbody td {
        padding: 14px 15px;
        border-bottom: 1px solid #E5E7EB;
        vertical-align: middle;
    }

    .mk-table tbody tr:nth-child(odd) td {
        background-color: #FFFFFF;
    }

    .mk-table tbody tr:nth-child(even) td {
        background-color: #FAFAFA;
    }

    .mk-table .mk-id {
        font-size: 13px;
        overflow-wrap: anywhere;
    }

    .btn-mk-edit {
        background-color: #0D9488;
        color: white;
        border: none;
    }

    .btn-mk-edit:hover {
        background-color: #0F766E;
        color: white;
    }

    .btn-mk-delete {
        background-color: #DC3545;
        color: white;
        border: none;
    }

    .btn-mk-delete:hover {
        background-color: #BB2D3B;
        color: white;
    }
</style>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">

            <div class="card border-0"
                 style="border-radius: 35px;
                        box-shadow: 0 15px 45px rgba(0,0,0,0.12);
                        overflow: hidden;">

                <div class="card-body p-4">

                    <h2 class="fw-bold text-center mb-4">
                        Daftar Mata Kuliah
                    </h2>

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
                        </div>
                    @endif

                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ url('/matakuliah/create') }}"
                           class="btn text-white px-4 py-2 rounded-3"
                           style="background-color: #0D9488;">
                            + Tambah Mata Kuliah
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table mk-table text-center align-middle mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Mata Kuliah</th>
                                    <th>SKS</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($mks as $mk)
                                    <tr>
                                        <td class="mk-id">{{ $mk->id }}</td>
                                        <td>{{ $mk->nama_mk }}</td>
                                        <td>{{ $mk->sks }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="{{ url('/matakuliah/' . $mk->id . '/edit') }}"
                                                   class="btn btn-mk-edit rounded-3 px-3 py-2">
                                                    Edit
                                                </a>

                                                <form action="{{ url('/matakuliah/' . $mk->id) }}"
                                                      method="POST"
                                                      onsubmit="return confirm('Yakin ingin menghapus mata kuliah ini?')">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                            class="btn btn-mk-delete rounded-3 px-3 py-2">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="py-4 text-muted">
                                            Belum ada data mata kuliah.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-3" style="color: #6B7280; font-size: 13px;">
                        Menampilkan {{ $mks->count() }} mata kuliah
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
