@extends('layouts.app')
@inject('carbon', 'Carbon\Carbon')
@section('content')
<div class="card mt-3">
    <div class="card-header">
        <h5>Data Surat </h5>
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
                        Jenis Surat
                    </th>
                    <th>
                        No Surat
                    </th>
                    <th>
                        Print
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
                        {{ $item->userdata->user->name }}
                    </td>
                    <td>
                        {{ $item->userdata->name }}
                    </td>
                    <td>
                        {{ $item->userdata->nik }}
                    </td>
                    <td>
                        Surat {{ $item->mail->name }}
                    </td>
                    <td>
                        {{ $item->mail_number }}
                    </td>
                    <td>
                        @if ($item->mail_number != null)
                        <a href="#" class="btn btn-success">
                            <i class="fa fa-print"></i>
                        </a>
                        @endif
                    </td>
                    <td>
                        <button id="{{ $item->id }}" class="actions btn btn-primary" data-toggle="modal" data-target="#penduduk">
                            <i class="fa fa-folder"></i>
                        </button>
                    </td>
                </tr>

                
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="penduduk" tabindex="-1" role="dialog"
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
                <div id="form-value">

                </div>
            </div>
            {{-- <div class="modal-footer">
                <a href="#" class="btn btn-primary" data-dismiss="modal">Cancel</a>
                <button type="submit" class="btn btn-danger" 
                onclick="event.preventDefault();
                document.getElementById('rejct-{{ $item->id }}').submit();" >Tolak</button>
                <button type="submit" class="btn btn-success" onclick="event.preventDefault();
                document.getElementById('acc-{{ $item->id }}').submit();" >Verifikasi</button>
                
            </div> --}}
        </div>
    </div>
</div>
@endsection

