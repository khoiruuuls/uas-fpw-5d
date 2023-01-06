@extends('master')
@section('title','Data Mahasiswa')
@section('content')
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-light p-4">
                    @if (session()->has('message'))
                        <div class="mb-3">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{session()->get('message')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    @endif
                    <div class="d-flex justify-content-between">
                        <div class="mb-2">
                            <h2>Data Mahasiswa</h2>
                            <p>Dibawah ini merupakan data Mahasiswa</p>
                        </div>
                        <a href="{{route('mahasiswa.create')}}" class="btn btn-light p-3 mb-5">
                            <h6 class="mb-0"> Tambah Data Mahasiswa</h6>    
                        </a>
                    </div>
                    
                    <div class="bdr table-responsive">
                        <table class="table">
                            <thead class="bg-primary text-white">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>NPM</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Bimbingan Mata Kuliah</th>
                                    <th>Nilai Kumulatif</th>
                                    <th>Aksi</th>
                                    <th>Progres Laporan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($mahasiswas as $mahasiswa)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td class="text-center">{{$mahasiswa->npm}}</td>
                                        <td>{{$mahasiswa->nama_mahasiswa}}</td>
                                        <td>
                                            @forelse ($mahasiswa->dosens as $item)
                                            {{$item->matakuliah}}
                                            <br>
                                            @empty
                                            <div>
                                                Tidak ada bimbingan . . .
                                            </div>
                                            @endforelse
                                        </td>
                                        <td class="text-center">
                                            {{( $mahasiswa->absen*0.1 + $mahasiswa->tugas*0.2 + $mahasiswa->uts*0.3 + $mahasiswa->uas*0.4) }}
                                        </td> 
                                        <td class="text-center">
                                            <form action="{{ route('mahasiswa.destroy',$mahasiswa->id) }}" method="POST">
                                                <a href="{{ route('mahasiswas.take',$mahasiswa->id) }}" class="btn btn-primary">Ambil</a>
                                                <a href="{{ route('mahasiswa.edit',$mahasiswa->id) }}" class="btn btn-success">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('mahasiswa.show',$mahasiswa->id) }}" class="btn btn-primary">Lihat</a>
                                        </td>
                                    </tr>
                                    @empty
                                    <td colspan="8">Tidak ada data . . .</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
