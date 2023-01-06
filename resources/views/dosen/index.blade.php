@extends('master')
@section('title','Data Dosen')
@section('content')
    <div class="container pt-4">
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
                            <h2>Data Dosen</h2>
                            <p>Dibawah ini merupakan data Dosen</p>
                        </div>
                        <a href="{{route('dosen.create')}}" class="btn btn-light p-3 mb-5">
                            <h6 class="mb-0"> Tambah Data Dosen </h6>
                        </a>
                    </div>
                    
                    <div class="bdr table-responsive">
                        <table class="table">
                            <thead class="bg-primary text-white">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>NIDN</th>
                                    <th>Nama Dosen</th>
                                    <th>Bimbingan Mata Kuliah</th>
                                    <th>Mahasiswa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dosens as $dosen)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td class="text-center" >{{$dosen->nidn}}</td>
                                        <td>{{$dosen->nama_dosen}}</td>
                                        <td>{{$dosen->matakuliah}}</td>
                                        <td>
                                            @forelse ($dosen->mahasiswas as $item)
                                                {{$item->nama_mahasiswa}}
                                                <br>
                                            @empty
                                            <div>
                                                Tidak ada Mahasiswa . . .
                                            </div>
                                            @endforelse
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('dosen.destroy',$dosen->id) }}" method="POST">
                                                <a href="{{ route('dosen.edit',$dosen->id) }}" class="btn btn-success">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <td colspan="6">Tidak ada data . . .</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
