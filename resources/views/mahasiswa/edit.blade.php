@extends('master')
@section('title','Edit Data Mahasiswa')
@section('content')
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-light p-4">
                    <h2 class="text-center">Edit Data Mahasiswa</h2>
                    <p class="text-center">Silahkan masukkan data dengan benar dan lengkap!</p>
                    <form action="{{route('mahasiswa.update', ['mahasiswa' => $mahasiswa->id])}}" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="mb-4">
                            <label for="npm" class="form-label">NPM</label>
                            <input type="text" name="npm" id="npm" placeholder="Masukkan npm" class="form-control" value="{{old('npm') ?? $mahasiswa->npm}}">
                            @error('npm')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                                <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" placeholder="Masukkan Nama mahasiswa" class="form-control" value="{{old('nama_mahasiswa') ?? $mahasiswa->nama_mahasiswa}}">
                                @error('nama_mahasiswa')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                    <option selected disabled>Pilih Jenis Kelamin</option>
                                    <option value="Laki - Laki" {{old('jenis_kelamin') ?? $mahasiswa->jenis_kelamin == "Laki - Laki" ? "selected" : ""}}>Laki - Laki</option>
                                    <option value="Perempuan" {{old('jenis_kelamin') ?? $mahasiswa->jenis_kelamin == "Perempuan" ? "selected" : ""}}>Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="div row mb-4">
                            <div class="col-md-3">
                                <label for="absen" class="form-label">Masukan Nilai Absen</label>
                                <input type="text" name="absen" id="absen" placeholder="Masukan Nilai Absen" class="form-control" value="{{old('absen') ?? $mahasiswa->absen}}">
                                @error('absen')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="tugas" class="form-label">Masukan Nilai Tugas</label>
                                <input type="text" name="tugas" id="tugas" placeholder="Masukan Nilai Tugas" class="form-control" value="{{old('tugas') ?? $mahasiswa->tugas}}">
                                @error('tugas')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="uts" class="form-label">Masukan Nilai UTS</label>
                                <input type="text" name="uts" id="uts" placeholder="Masukan Nilai UTS" class="form-control" value="{{old('uts') ?? $mahasiswa->uts}}">
                                @error('uts')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="uas" class="form-label">Masukan Nilai UAS</label>
                                <input type="text" name="uas" id="uas" placeholder="Masukan Nilai UAS" class="form-control" value="{{old('uas') ?? $mahasiswa->uas}}">
                                @error('uas')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse">
                            <button type="submit" class="btn btn-primary">Edit Data Mahasiswa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
