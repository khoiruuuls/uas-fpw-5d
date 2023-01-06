@extends('master')
@section('title','Buat Data Mahasiswa')
@section('content')
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-light p-4">
                    {{-- <form action="{{route('mahasiswa.index', ['mahasiswa' => $mahasiswa->id])}}" method="POST"> --}}
                    <h2 class="text-center">Progres Laporan</h2>
                    <div class="py-3">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="">{{$mahasiswa->nama_mahasiswa}}</h4>
                                <h6>{{$mahasiswa->npm}}</h6>
                                <p>Universitas Singaperbangsa Karawang</p>
                            </div>
                            <div>
                                <h4>
                                    @if (( $mahasiswa->absen*0.1 + $mahasiswa->tugas*0.2 + $mahasiswa->uts*0.3 + $mahasiswa->uas*0.4) > 80)
                                        Lulus
                                    @else
                                        Coba Lagi
                                    @endif
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="m-1 pt-4 pb-4 mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-center text-bold">Bimbingan yang diambil</h6>
                                <div class="card mt-4 mx-auto" style="width: 80%">
                                    <ul class="list-group list-group-flush">
                                        @forelse ($mahasiswa->dosens as $item)
                                            <li class="list-group-item">{{$item->matakuliah}}</li>
                                        @empty
                                            <li class="list-group-item"> Tidak ada bimbingan . . . </li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-center">Nilai yang diperoleh</h6>
                                <h1 class="text-center">{{$mahasiswa->absen*0.1 + $mahasiswa->tugas*0.2 + $mahasiswa->uts*0.3 + $mahasiswa->uas*0.4 ?? 0}}</h1>
                                <div class="row mt-4">
                                    <div class="col-md-6 text-center justify-content-between">
                                        <div class="d-flex justify-content-between">
                                            <div>Nilai Tugas</div>
                                            <div>{{$mahasiswa->tugas ?? 0}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-center justify-content-between">
                                        <div class="d-flex justify-content-between">
                                            <div>Nilai Absen</div>
                                            <div>{{$mahasiswa->absen ?? 0}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3 text-center justify-content-between">
                                        <div class="d-flex justify-content-between">
                                            <div>Nilai UTS</div>
                                            <div>{{$mahasiswa->uts ?? 0}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6  mt-3 text-center justify-content-between">
                                        <div class="d-flex justify-content-between">
                                            <div>Nilai UAS</div>
                                            <div>{{$mahasiswa->uas ?? 0}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class=" d-flex flex-row-reverse">
                            <a href="{{route('mahasiswa.index')}}" type="submit" class="btn btn-primary">Kembali</a>
                        </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
