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
        <input type="text" name="namaanak" value="{{ $maildata['namaanak'] }}" placeholder="Tulis Nama Anak"
            class="form-control" required>
    </div>
    <div class="form-group">
        <input type="number" name="nikanak" value="{{ $maildata['nikanak'] }}" placeholder="Tulis NIK Anak"
            class="form-control" required>
    </div>
    <div class="form-group">
        <input type="text" name="asalsekolah" value="{{ $maildata['asalsekolah'] }}"
            placeholder="Tulis Asal Sekolah Anak" class="form-control" required>
    </div>
    <div class="form-group d-flex justify-content-between">
        <input type="text" name="tmptlahir" placeholder="Tulis Tempat Lahir Anak" value="{{ $maildata['tmptlahir'] }}"
            class="form-control" required>
        <input type="date" name="tgllahir" class="ml-2 form-control" value="{{ $maildata['tgllahir'] }}" required>
    </div>
    <div class="form-group">
        <input type="text" name="keperluan" placeholder="Tulis Keperluan" class="form-control"
            value="{{ $maildata['keperluan'] }}" required>
    </div>
    <div class="form-group">
        <label for="">Penghasilan</label>
        <select class="form-control" name="penghasilan" id="">
            <option @if ($maildata['penghasilan']=="Dibawah Rp 500.000" ) selected @endif value="Dibawah Rp 500.000">
                Dibawah Rp 500.000</option>
            <option @if ($maildata['penghasilan']=="Dibawah Rp 1.000.000" ) selected @endif value="Dibawah Rp 1.000.000">
                Dibawah Rp 1.000.000</option>
            <option @if ($maildata['penghasilan']=="Dibawah Rp 2.500.000" ) selected @endif value="Dibawah Rp 2.500.000">
                Dibawah Rp 2.500.000</option>
            <option @if ($maildata['penghasilan']=="Dibawah Rp 5.000.000" ) selected @endif value="Dibawah Rp 5.000.000">
                Dibawah Rp 5.000.000</option>
            <option @if ($maildata['penghasilan']=="Rp 5.000.000 - Rp 8.000.000" ) selected @endif
                value="Rp 5.000.000 - Rp 8.000.000">Rp 5.000.000 - Rp 8.000.000</option>
            <option @if ($maildata['penghasilan']=="Diatas Rp 8.000.000" ) selected @endif value="Diatas Rp 8.000.000">
                Dibawah Rp 8.000.000</option>
        </select>
    </div>
    <div class="form-group mt-3">
        <label for="">No Surat</label>
        <input type="number" name="mailnumber" value="{{ $data->mail_number }}" class="form-control">
    </div>
    <div class="form-group mt-3">
        <label for="">Nama Penandatangan</label>
        <input type="test" name="ttd" value="{{ $maildata['ttd'] }}" class="form-control">
    </div>
    <div class="form-group mt-3">
        <label for="">Jabatan Penandatangan</label>
        <input type="test" name="jabatanttd" value="{{ $maildata['jabatanttd'] }}" class="form-control">
    </div>


    <div class="form-group d-flex justify-content-around">
        <button class="btn btn-submit btn-danger" onclick="event.preventDefault();
        document.getElementById('reject').submit();">
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