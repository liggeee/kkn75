<div class="card">
    <div class="card-header">Tambah Data Kependudukan Anda</div>

    <div class="card-body">
        <form id="form-adddata" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" name="nama" placeholder="Masukkan Nama" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="number" name="nik" placeholder="Masukkan NIK" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="number" name="nkk" placeholder="Masukkan No KK" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="number" name="rt" placeholder="Masukkan No RT" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="number" name="rw" placeholder="Masukkan No RW" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="text" name="dusun" placeholder="Masukkan Nama Dusun" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="text" name="street" placeholder="Masukkan Alamat Jalan Tulis ' - ' Jika Tidak Ada" class="form-control" required>
            </div>
            <div class="form-group d-flex justify-content-around">
                <input type="text" name="born" placeholder="Tempat Lahir" class="form-control mr-2">
                <input type="date" name="birthdate" placeholder="Tanggal Lahir" class="form-control" required>
            </div>
            <div class="form-group">
                <select name="gender" id="" class="form-control" required>
                    @foreach ($genders as $gender)
                        <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select name="job" id="" class="form-control" required>
                    @foreach ($jobs as $job)
                        <option value="{{ $job->id }}">{{ $job->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select name="education" id="" class="form-control" required>
                    @foreach ($educations as $education)
                        <option value="{{ $education->id }}">{{ $education->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <select name="religion" id="" class="form-control" required>
                    @foreach ($religions as $religion)
                        <option value="{{ $religion->id }}">{{ $religion->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <select name="marital" id="" class="form-control" required>
                    @foreach ($marital_status as $marital)
                        <option value="{{ $marital->id }}">{{ $marital->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <p class="badge badge-danger">Upload Foto KTP</p>
                <input type="file" name="file" class="form-control" required>
            </div>

            <div class="form-group">
                <button class="btn btn-lg btn-primary" type="submit">Tambahkan Data</button>
            </div>
        </form>
    </div>
</div>

<script>
    $('#form-adddata').submit(function (e) {
        e.preventDefault();
        var form = new FormData($(this)[0]);
        var route = '/adddata/store'
        var div = $('#content');
        var spinner = $('#spinner');
        swal({
                title: "Apakah anda yakin dengan data anda ?",
                buttons: ["Tidak", "Ya"],
                confirmButtonColor: "#00D084",
                closeModal: true,
                dangerMode: true,
                cache: false
            })
            .then((value) => {
                if (value) {
                    $.ajax({
                        type: "POST",
                        url: route,
                        data: form,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                        },
                        beforeSend: function(data) { // Are not working with dataType:'jsonp'
                            spinner.show();
                            div.hide();
                        },
                        error: function(xhr, status, error) {
                            spinner.hide();
                            div.show();
                            var obj = JSON.parse(xhr.responseText);
                            console.log(obj);
                            for (k in obj.errors) {
                                var a = JSON.stringify(obj.errors[k][0]);
                                swal("Sorry !", a, "error");
                            }
                        },
                        success: function(data) {
                            div.html(data);
                            div.show();
                            spinner.hide();
                            swal("Good job!", "Data Anda Telah Ditambahkan!", "success");
                        }
                    });
                }
            });
    })
</script>