@extends('layouts/app')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-fw fa-plus mr-2"></i>
        {{ $title }}
    </h1>

    <div class="card">
        <div class="card-header">
                <a href="{{ route('user') }}" class="btn btn-sm btn-success">
                    <i class="fas fa-arrow-left mr-2"></i> Kembali
                </a>

        </div>

        <div class="card-body">

            <form action="{{ route('userStore') }}" method="post">
                @csrf

            <div class="row mb-2">
                <div class="col-xl-6 col-12 mb-1">
                    <label class="form-label" for="nama">
                        <span class="text-danger">*</span>
                        Nama:
                    </label>
                    <input class="form-control @error ('nama') is-invalid @enderror" type="text" name="nama" id="nama" value="{{old('nama')}}" >
                    @error('nama')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-xl-6 col-12 mb-1">
                    <label class="form-label" for="email">
                        <span class="text-danger">*</span>
                        Email:
                    </label>
                    <input class="form-control @error ('email') is-invalid @enderror" type="email" name="email" id="email" value="{{old('email')}}">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

            </div>

            <div class="row mb-2">
                <div class="col-12">
                    <label class="form-label" for="jabatan">
                        <span class="text-danger">*</span>
                        Jabatan:
                    </label>
                    <select name="jabatan" id="jabatan" class="form-control @error ('jabatan') is-invalid @enderror" >
                        <option selected disabled>--Pilih Jabatan--</option>
                        <option value="Admin">Admin</option>
                        <option value="Karyawan">Karyawan</option>
                    </select>
                    @error('jabatan')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-xl-6 col-12 mb-1">
                    <label class="form-label" for="password">
                        <span class="text-danger">*</span>
                        Password:
                    </label>
                    <input class="form-control @error ('password') is-invalid @enderror" type="password" name="password" id="password" value="{{old('password')}}">
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-xl-6 col-12 mb-1">
                    <label class="form-label" for="password_confirmation">
                        <span class="text-danger">*</span>
                        Konfirmasi Password:
                    </label>
                    <input class="form-control  @error ('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" id="password_confirmation" >

                </div>
            </div>

            <div>
                <button class="btn btn-sm btn-primary" type="submit">
                    <i class="fas fa-save mr-2"></i>
                    Simpan
                </button>
            </div>
            </form>

        </div>
    </div>


@endsection


