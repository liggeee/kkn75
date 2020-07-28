<div class="row">
    <div class="col-md-3">
        <span class="badge badge-primary">Nama</span>
    </div>
    <div class="col-md-6">
        : {{ $data->userdata->name }}
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <span class="badge badge-primary">NIK</span>
    </div>
    <div class="col-md-6">
        : {{ $data->userdata->nik }}
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <span class="badge badge-primary">Jenis Surat</span>
    </div>
    <div class="col-md-6">
        : Surat {{ $data->mail->name }}
    </div>
</div>
<form action="{{ route('admin.surat.number') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $data->id }}">
    <div class="form-group">
        <label for="">Nama Istri</label>
        <input type="text" name="namaistri" value="{{ $maildata['namaistri'] }}" placeholder="Tulis Nama Istri" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">Nama Anak</label>
        <input type="text" name="namaanak" value="{{ $maildata['namaanak'] }}" placeholder="Tulis Nama Anak Yang Lahir" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">Tanggal Lahir Anak</label>
        <input type="date" name="tgllahir" value="{{ $maildata['tgllahir'] }}" placeholder="Tulis Nama Anak Yang Lahir" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">Kota Lahir Anak</label>
        <input type="text" name="kotalahir" value="{{ $maildata['kotalahir'] }}" placeholder="Tulis Nama Kota" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">Jenis Kelamin Anak</label>
        <select name="kelamin" class="form-control" id="">
            <option 
            @if ($maildata['kelamin'] == "Laki-Laki")
                selected
            @endif 
            value="Laki-Laki">Laki - Laki</option>
            <option 
            @if ($maildata['kelamin'] == "Perempuan")
                selected
            @endif
            value="Perempuan">Perempuan</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Anak Ke</label>
        <input type="text" name="anakke" value="{{ $maildata['anakke'] }}" placeholder="Anak Ke (Tulis dengan Abjad)" class="form-control" required>
    </div>
    <div class="form-group mt-3">
        <label for="">No Surat</label>
        <input type="number" name="mailnumber" value="{{ $data->mail_number }}" class="form-control" >
    </div>
    <div class="form-group mt-3">
        <label for="">Nama Penandatangan</label>
        <input type="test" name="ttd" value="{{ $maildata['ttd'] }}" class="form-control" >
    </div>
    <div class="form-group mt-3">
        <label for="">Jabatan Penandatangan</label>
        <input type="test" name="jabatanttd" value="{{ $maildata['jabatanttd'] }}" class="form-control" >
    </div>
    

    <div class="form-group d-flex justify-content-around">
        <button class="btn btn-submit btn-danger" onclick="event.preventDefault();
        document.getElementById('reject').submit();" >
            Tolak
        </button>
        <button class="btn btn-submit btn-success" onclick="event.preventDefault();
        document.getElementById('verif').submit();">
            Verifikasi
        </button>
        <button type="submit" class="btn btn-submit btn-primary">
            Simpan Perubahan
        </button>

    </div>
</form>

<form id="verif" action="{{ route('admin.surat.verif') }}" method="post">
    @csrf
    <input type="hidden" name="status" value="2">
    <input type="hidden" name="id" value="{{ $data->id }}">   
</form>

<form id="reject" action="{{ route('admin.surat.verif') }}" method="post">
    @csrf
    <input type="hidden" name="status" value="1">
    <input type="hidden" name="id" value="{{ $data->id }}">
</form>