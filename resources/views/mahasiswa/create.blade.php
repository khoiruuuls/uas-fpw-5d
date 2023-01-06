@extends('master')
@section('title','Buat Data Mahasiswa')
@section('content')
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-light p-4">
                    <h2 class="text-center">Tambah Data Mahasiswa</h2>
                    <p class="text-center">Silahkan masukkan data dengan benar dan lengkap!</p>
                    <form action="{{route('mahasiswa.store')}}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="npm" class="form-label">NPM</label>
                            <input type="text" name="npm" id="npm" placeholder="Masukkan Npm" class="form-control" value="{{old('npm')}}">
                            @error('npm')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="nama_mahasiswa" class="form-label">Masukan Nama</label>
                            <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" placeholder="Masukkan Nama" class="form-control" value="{{old('nama_mahasiswa')}}">
                            @error('nama_mahasiswa')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                <option selected disabled>Pilih Jenis Kelamin</option>
                                <option value="Laki - Laki" {{old('jenis_kelamin') == "Laki - Laki" ? "selected" : ""}}>Laki - Laki</option>
                                <option value="Perempuan" {{old('jenis_kelamin') == "Perempuan" ? "selected" : ""}}>Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class=" d-flex flex-row-reverse">
                            <button type="submit" class="btn btn-primary">Tambah Data Mahasiswa</button>
                        </div>
                        <p></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
