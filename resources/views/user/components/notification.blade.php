@php
$i = 0;
@endphp
@if (!$data->isEmpty())
@foreach ($data as $item)
@php
$i++;
@endphp
<div class="card mb-2">
    <div class="card-header">Surat Ke - {{ $i }}</div>

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <p>{{ $item->userdata->name }} / {{ $item->userdata->nik }}</p>
        <hr>
        <p>Surat {{ $item->mail->name }}</p>
        @if ($item->status == 0)
        <div class="badge btn-block badge-warning">
            Menunggu Diverifikasi
        </div>
        @elseif ($item->status == 1)
        <div class="badge btn-block badge-danger">
            Ditolak
        </div>
        @else
        <div class="badge btn-block badge-success">
            Telah Diverifikasi Silahkan Ambil Di Kantor Desa
        </div>
        @endif
    </div>
</div>
@endforeach
@endif