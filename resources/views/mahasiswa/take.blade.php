@extends('master')
@section('title','Ambil Bimbingan')
@section('content')
<div class="container pt-4 bg-white ">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-light p-4">
                <h2 class="text-center">Ambil Bimbingan</h2>
                <div class="pt-3">
                    <div class="card-body">
                        <form action="{{route('mahasiswas.takeStore',['mahasiswa' => $mahasiswa->id])}}" method="post">
                            @csrf
                            <div>
                                <div class="form-group row">
                                    @foreach ($dosens as $item)  
                                    <ul class="list-group py-2 col-md-6">
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1 px-2" name="dosen_id[]" type="checkbox" id="{{$item->id}}" value="{{$item->id}}">
                                            <label class="form-check-label px-3" for="{{$item->id}}">{{$item->nama_dosen}} - {{$item->matakuliah}}</label>
                                        </li>
                                    </ul>
                                    @endforeach    
                                </div>
                                <div class="mt-3 d-flex flex-row-reverse">
                                    <button type="submit" class="btn btn-primary text-center">Ambil Jadwal</button>
                                </div>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
