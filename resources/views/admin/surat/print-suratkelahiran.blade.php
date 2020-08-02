<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('admin.surat.component/print-style')
    @inject('carbon', 'Carbon\Carbon')
</head>

<body>
    <div id="content" class="container_12 clearfix">
        <div id="content-main" class="grid_7">
            <div>
                <div width="100%">
                    <div align="center">
                        <p style="margin-bottom: 30pt" class="kop1 bold">
                            <u>
                                SURAT KELAHIRAN
                            </u>
                        </p>
                        <p style="margin-bottom: 30pt;" class="kop12">Nomor : 470.2 / {{ $data->mail_number }} /
                            430.12.7.5/ {{ $carbon->now()->isoFormat('YYYY') }}</p>
                    </div>
                </div>

                <div id="isi3">
                    <div>
                        Yang bertanda tangan dibawah ini menerangkan bahwa pada :
                    </div>
                    <table width="100%">
                        <tr>
                            <td width="23%">Hari</td>
                            <td width="7%">:</td>
                            <td width="70%">{{ $carbon->parse($maildata['tgllahir'])->isoFormat('dddd') }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td>{{ $carbon->parse($maildata['tgllahir'])->isoFormat('DD MMMM YYYY') }}</td>
                        </tr>
                        <tr>
                            <td>Di</td>
                            <td>:</td>
                            <td>{{ $maildata['kotalahir'] }}</td>
                        </tr>
                        <tr>
                            <td>Anak Ke</td>
                            <td>:</td>
                            <td>{{ $maildata['anakke'] }}</td>
                        </tr>
                        <tr>
                            <td>Telah Lahir Seorang Anak</td>
                            <td>:</td>
                            <td>{{ $maildata['kelamin'] }}</td>
                        </tr>

                        <tr>
                            <td>Bernama</td>
                            <td>:</td>
                            <td>{{ $maildata['namaanak'] }}</td>
                        </tr>
                        <tr>
                            <td>Dari Seorang Ibu Bernama</td>
                            <td>:</td>
                            <td>{{ $maildata['namaistri'] }}</td>
                        </tr>
                        <tr>
                            <td>Istri Dari</td>
                            <td>:</td>
                            <td>{{ $data->userdata->name }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>Dusun {{ $data->userdata->dusun }}, RT {{ $data->userdata->rt }} / RW.
                                {{ $data->userdata->rw }}
                                Desa Jenggawah Kecamatan Jenggawah
                                Kabupaten Jember</td>
                        </tr>
                    </table>

                    <div class="indentasi">
                        Surat keterangan ini dibuat atas dasar yang sebenarnya.
                    </div>

                </div>
            </div>
            @include('admin.surat.component/standart-footer')
            <div id="aside"></div>
        </div>
</body>

</html>