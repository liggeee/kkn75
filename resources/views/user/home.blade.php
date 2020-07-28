@extends('layouts.userapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="text-center mb-3" id="spinner" style="display:none">
                <div class="spinner-border text-info" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <div id="content">
                @if (!$data->isEmpty())
                @php
                $i = 0;
                @endphp
                @foreach ($data as $item)
                @php
                $i++;
                @endphp
                <div class="card mb-2">
                    <div class="card-header">Data {{ $i }}</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <p>{{ $item->name }} / {{ $item->nik }}</p>
                        <hr>
                        @if ($item->status == 0)
                        <div class="badge btn-block badge-warning">
                            Menunggu Diverifikasi
                        </div>
                        <button id="{{ $item->id }}" class="edit-data btn btn-block btn-success">
                            Edit Data <i class="fa fa-edit"></i>
                        </button>
                        @elseif ($item->status == 1)
                        <div class="badge btn-block badge-danger">
                            Ditolak
                        </div>
                        <button id="{{ $item->id }}" class="edit-data btn btn-block btn-success">
                            Edit Data <i class="fa fa-edit"></i>
                        </button>
                        @else
                        <button id="{{ $item->id }}" class="create-surat btn btn-block btn-primary">
                            Buat Surat <i class="fa fa-plus"></i>
                        </button>
                        <button id="{{ $item->id }}" class="edit-data btn btn-block btn-success">
                            Edit Data <i class="fa fa-edit"></i>
                        </button>
                        @endif
                    </div>
                </div>
                @endforeach

                @else
                <div class="card text-center">
                    <div class="card-header">DATA ANDA</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        Maaf Harap isikan data anda dulu Dengan Menggunakan Menu <i class="fa fa-plus"></i>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection