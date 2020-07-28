<div id="user-data" data-user="{{ $id }}" style="display: none"></div>
@foreach ($mails as $mail)
<div class="card mb-2">
    <div class="card-header">Model Surat</div>
    <div class="card-body d-flex justify-content-between">
      <h5>{{ $mail->name }}</h5>

      <button id="{{ $mail->id }}" class="btn to-form btn-primary">Buat Surat <i class="fa fa-plus"></i></button>
    </div>
</div>
@endforeach

<script>
    $('.to-form').on('click',function () {
        var id = $('#user-data').attr('data-user');
        var mail = $(this).attr('id');
        var spinner = $('#spinner');
        var div = $('#content');
        var route = '/mail/create';
        $.ajax({
            type:'GET',
            url: route,
            data:{id:id,mail:mail} ,
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
</script>