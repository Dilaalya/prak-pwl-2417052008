@extends('layouts.app')
@section('content')

<style>
    .user-table thead th{
        background-color: #F0FDFA;
        color: #1E293B;
        font-weight: 600;
        border-bottom: 2px solid #0F766E;
        padding: 15px;
    }

    .user-table tbody td{
        padding: 14px 15px;
        border-bottom: 1px solid #E5E7EB;
        vertical-align: middle;
    }

    .user-table tbody tr:nth-child(odd) td{
        background-color: #FFFFFF;
    }

    .user-table tbody tr:nth-child(even) td{
        background-color: #FAFAFA;
    }

    .form-control:focus,
    .form-select:focus{
        border-color: #0F766E;
        box-shadow: 0 0 0 0.2rem rgba(15, 118, 110, 0.15);
    }

    .card-table-footer{
        color: #6B7280;
        font-size: 13px;
        padding-top: 15px;
    }
</style>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-10">

            <div class="card border-0"
                style="
                    border-radius: 35px;
                    box-shadow: 0 15px 45px rgba(0, 0, 0, 0.12);
                    overflow: hidden;
                ">

                <div class="card-body p-4">
                    <h2 class="fw-bold text-center mb-4">
                        Daftar Pengguna
                    </h2>

                    <x-user_table :users="$users" />

                    <div class="card-table-footer">
                        Menampilkan {{ $users->count() }} dari
                        {{ $users->count() }} pengguna
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection