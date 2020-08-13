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
                        @include('admin.surat.component/kop')

                        <p style="margin-top: 40pt;" class="kop18 bold">
                            <u>
                                SURAT KETERANGAN TIDAK MAMPU
                            </u>
                        </p>

                        <p style="margin-bottom: 10pt;" class="kop12">Nomor : 470 / {{ $data->mail_number }} / 35.06.16.2003/ {{ $carbon->now()->isoFormat('YYYY') }}</p>
                        <div class="clear"></div>

                    </div>

                </div>
                <div id="isi3">
                    <div class="indentasi">Yang bertanda tangan di bawah ini, saya Kepala Desa Jenggawah <span class="capital">Kecamatan
                      Jenggawah</span> , menerangkan bahwa penduduk kami :
                    </div>
                    <table style="padding-left: 40px;" width="100%">
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td width="3%">I.</td>
                            <td width="20%">Nama Orang tua/wali</td>
                            <td width="3%">:</td>
                            <td width="64%">{{ $data->userdata->name }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Tempat/Tgl. Lahir </td>
                            <td>:</td>
                            <td>{{ $data->userdata->born }}/
                                {{ $carbon->parse($data->userdata->birthdate)->isoFormat(' D MMMM YYYY') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Agama </td>
                            <td>:</td>
                            <td>{{ $data->userdata->religion->name }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Pekerjaan </td>
                            <td>:</td>
                            <td>{{ $data->userdata->job->name }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Alamat </td>
                            <td>:</td>
                            <td>Dusun {{ $data->userdata->dusun }}, RT {{ $data->userdata->rt }} / RW.
                                {{ $data->userdata->rw }}
                                Desa Jenggawah Kecamatan Jenggawah
                                Kabupaten Jember</td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td>II.</td>
                            <td>Nama Anak</td>
                            <td>:</td>
                            <td>{{ $maildata['namaanak'] }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>{{ $maildata['kelamin'] }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Tempat/Tgl. Lahir </td>
                            <td>:</td>
                            <td>{{ $maildata['kotalahir'] }}/
                                {{ $carbon->parse($maildata['tgllahir'])->isoFormat(' D MMMM YYYY') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>Dusun {{ $data->userdata->dusun }}, RT {{ $data->userdata->rt }} / RW.
                                {{ $data->userdata->rw }}
                                Desa Jenggawah Kecamatan Jenggawah
                                Kabupaten Jember</td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>

                    </table>
                    <div class="indentasi">
                        Orang tersebut benar-benar penduduk Desa Jenggawah <span class="capital3">Kecamatan
                           Kabupaten </span> yang berdomisili  di alamat tersebut diatas. 
                           Adapun orang tersebut diatas tergolong keluarga yang tidak mampu dengan penghasilan orangtua/wali 
                           setiap bulannya ± Rp  1.000. 000,00,- (Satu Juta Rupiah).
                    </div>
                    <div class="indentasi">
                    Selanjutnya surat keterangan ini dipergunakan untuk: {{ $maildata['keperluan'] }}
                    </div>
                    <div style="margin-top: 10pt;" class="indentasi">Demikian surat keterangan ini kami buat dengan sebenarnya dan dapatnya dipergunakan sebagaimana mestinya.
                    </div>
                </div>
                <table class="ttd" width="100%">

                   
                @include('admin.surat.component/standart-footer')
        </div>
    </div>
    <div id="aside"></div>
    </div>
</body>

</html>