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
                                SURAT KETERANGAN KEMATIAN
                            </u>
                        </p>
                        <p style="margin-bottom: 30pt;" class="kop12">Nomor : 473 / {{ $data->mail_number }} /
                            35.09.16.2003/ {{ $carbon->now()->isoFormat('YYYY') }}</p>
                    </div>
                </div>
                <div id="isi3">
                    <div>
                        Yang bertanda tangan dibawah ini menerangkan bahwa pada :
                    </div>
                    <table width="100%">
                        <tr>
                            <td width="23%">Nama</td>
                            <td width="7%">:</td>
                            <td width="70%">{{ $data->userdata->name }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>{{ $data->userdata->gender->name }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>Dusun {{ $data->userdata->dusun }}, RT {{ $data->userdata->rt }} / RW.
                                {{ $data->userdata->rw }}
                                Desa Jenggawah Kecamatan Jenggawah
                                Kabupaten Jember</td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td>:</td>
                            <td>{{ $carbon->parse($data->userdata->birthdate)->diffInYears($maildata['tglkematian']) }}
                                Tahun</td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Telah Meninggal dunia pada</td>
                            <td>:</td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Hari</td>
                            <td>:</td>
                            <td>{{ $carbon->parse($maildata['tglkematian'])->isoFormat('dddd') }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td>{{ $carbon->parse($maildata['tglkematian'])->isoFormat('dddd, DD MMMM YYYY') }}</td>
                        </tr>
                        <tr>
                            <td>Di</td>
                            <td>:</td>
                            <td>{{ $maildata['tempatkematian'] }}</td>
                        </tr>
                        <tr>
                            <td>Disebabkan Karena</td>
                            <td>:</td>
                            <td>{{ $maildata['sebabkematian'] }}</td>
                        </tr>
                    </table>

                    <div class="indentasi">
                        Demikian Surat Keterangan ini dibuat atas dasar yang
                        Sebenarnya dan dapat dipergunakan sebagaimana mestinya

                    </div>
                </div>
            </div>
            @include('admin.surat.component/standart-footer')
            <div id="aside"></div>
        </div>
</body>

</html>