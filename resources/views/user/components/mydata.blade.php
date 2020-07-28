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

<script>
    $('.mymenu').on('click',function() {
        var route = '/'+$(this).attr('id');
        var div = $('#content');
        var spinner = $('#spinner');
        $.ajax({
            type:'GET',
            url: route,
            cache: false,
            beforeSend: function(data) { // Are not working with dataType:'jsonp'
                spinner.show();
                div.hide();
            },
            error: function(xhr, status, error) {
                swal("Sorry !", 'Halaman Tidak Ditemukan', "error");
                spinner.hide();
                div.show();
            },
            success: function(data) {
                div.html(data);
                div.show();
                spinner.hide();
            }
        })   
    })

    $('.create-surat').on('click',function() {
        var route = "/mail";
        var div = $('#content');
        var spinner = $('#spinner');
        var id = $(this).attr('id');
        $.ajax({
            type: "GET",
            url: route,
            data: {id:id},
            beforeSend: function(data) { // Are not working with dataType:'jsonp'
                spinner.show();
                div.hide();
            },
            error: function(xhr, status, error) {
                swal("Sorry !", 'Halaman Tidak Ditemukan', "error");
                spinner.hide();
                div.show();
            },
            success: function(data) {
                div.html(data);
                div.show();
                spinner.hide();
            }
        });
    })

    $('.edit-data').on('click',function() {
        var route = "/adddata/edit";
        var div = $('#content');
        var spinner = $('#spinner');
        var id = $(this).attr('id');
        $.ajax({
            type: "GET",
            url: route,
            data: {id:id},
            beforeSend: function(data) { // Are not working with dataType:'jsonp'
                spinner.show();
                div.hide();
            },
            error: function(xhr, status, error) {
                swal("Sorry !", 'Halaman Tidak Ditemukan', "error");
                spinner.hide();
                div.show();
            },
            success: function(data) {
                div.html(data);
                div.show();
                spinner.hide();
            }
        });
    })
</script>