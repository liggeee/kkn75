@extends('layouts.app')
@inject('carbon', 'Carbon\Carbon')
@section('content')
<div class="card mt-3">
    <div class="card-header">
        <h5>Data Penduduk </h5>
    </div>
    <div class="card-body">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>
                        Nama User
                    </th>
                    <th>
                        Nama Penduduk
                    </th>
                    <th>
                        NIK Penduduk
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>
                        {{ $item->user->name }}
                    </td>
                    <td>
                        {{ $item->name }}
                    </td>
                    <td>
                        {{ $item->nik }}
                    </td>
                    <td>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#penduduk-{{ $item->id }}">
                            <i class="fa fa-folder"></i>
                        </button>
                    </td>
                </tr>

                <div class="modal fade" id="penduduk-{{ $item->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span class="badge badge-primary">Nama</span>
                                    </div>
                                    <div class="col-md-6">
                                        : {{ $item->name }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <span class="badge badge-primary">NIK</span>
                                    </div>
                                    <div class="col-md-6">
                                        : {{ $item->nik }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <span class="badge badge-primary">KK</span>
                                    </div>
                                    <div class="col-md-6">
                                        : {{ $item->nkk }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <span class="badge badge-primary">Alamat</span>
                                    </div>
                                    <div class="col-md-6">
                                        : Jalan {{ $item->street }} RT {{ $item->rt }} RW {{ $item->rw }} Dusun
                                        {{ $item->dusun }} Desa {{ $item->village }} Kecamatan {{ $item->district }}
                                        Kabupaten {{ $item->city }} Provinsi {{ $item->provincy }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <span class="badge badge-primary">Tempat/Tanggal Lahir</span>
                                    </div>
                                    <div class="col-md-6">
                                        :
                                        {{ $item->born }}/{{ $carbon->parse($item->birthdate)->isoFormat('D MMMM YYYY') }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <span class="badge badge-primary">Kelamin</span>
                                    </div>
                                    <div class="col-md-6">
                                        : {{ $item->gender->name }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <span class="badge badge-primary">Pekerjaan</span>
                                    </div>
                                    <div class="col-md-6">
                                        : {{ $item->job->name }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <span class="badge badge-primary">Status</span>
                                    </div>
                                    <div class="col-md-6">
                                        : {{ $item->maritalStatus->name }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <span class="badge badge-primary">Agama</span>
                                    </div>
                                    <div class="col-md-6">
                                        : {{ $item->religion->name }}
                                    </div>
                                </div>
                                <p><span class="badge badge-primary">Foto KTP</span> :</p>
                                <img src="/storage/images_data/{{ $item->img }}" class="img-fluid" alt="">

                            </div>
                            <div class="modal-footer">
                                <a href="#" class="btn btn-primary" data-dismiss="modal">Cancel</a>
                                <button type="submit" class="btn btn-danger" 
                                onclick="event.preventDefault();
                                document.getElementById('rejct-{{ $item->id }}').submit();" >Tolak</button>
                                <button type="submit" class="btn btn-success" onclick="event.preventDefault();
                                document.getElementById('acc-{{ $item->id }}').submit();" >Verifikasi</button>
                                
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
        {{ $data->render() }}
    </div>
</div>

@foreach ($data as $item1)
<form id="rejct-{{ $item1->id }}" action="{{ route('admin.penduduk.verif') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $item1->id }}">
    <input type="hidden" name="data" value="1">
</form>

<form id="acc-{{ $item1->id }}" action="{{ route('admin.penduduk.verif') }}" method="post">
    @csrf
    <input type="hidden" name="data" value="2">
    <input type="hidden" name="id" value="{{ $item1->id }}">
</form>
@endforeach

@endsection

