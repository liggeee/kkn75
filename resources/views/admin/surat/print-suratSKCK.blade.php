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
                                SURAT KETERANGAN CATATAN KEPOLISIAN
                            </u>
                        </p>

                        <p style="margin-bottom: 30pt;" class="kop12">Nomor : 470.2 / {{ $data->mail_number }} / 430.12.7.5/ {{ $carbon->now()->isoFormat('YYYY') }}</p>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="indentasi">
                    Yang bertanda tangan dibawah ini, Kepala Desa Kecamatan
                    Kabupaten Jember, menerangkan bahwa :
                </div>
                <div id="isi3">
                    <table width="100%">
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
                            <td width="23%">Nama </td>
                            <td width="3%">:</td>
                            <td width="64%">{{ $data->userdata->name }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>{{ $data->userdata->gender->name }} </td>
                        </tr>
                        <tr>
                            <td>Tempat, Tanggal Lahir </td>
                            <td>:</td>
                            <td>{{ $data->userdata->born }}/ {{ $carbon->parse($data->userdata->birthdate)->isoFormat(' D MMMM YYYY') }}</td>
                        </tr>
                        <tr>
                            <td>NIK </td>
                            <td>:</td>
                            <td>{{ $data->userdata->nik }}</td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan </td>
                            <td>:</td>
                            <td>WNI</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>{{ $data->userdata->religion->name }}</td>
                        </tr>
                        <tr>
                            <td>Status Perkawinan</td>
                            <td>:</td>
                            <td>{{ $data->userdata->maritalStatus->name }}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan </td>
                            <td>:</td>
                            <td>{{ $data->userdata->education->name }}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td>{{ $data->userdata->job->name }}</td>
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


                    <div style="margin-top: 10pt;" class="indentasi">
                        Orang tersebut benar-benar penduduk Desa Jenggawah Kecamatan Jenggawah, Kabupaten Jember, yang
                        berdomisili dialamat tersebut diatas, dan selanjutnya yang bersangkutan menurut pengamatan dan
                        pengetahuan kami beradat istiadat baik / berkelakuan baik dan tidak pernah tersangkut urusan
                        dengan Kepolisian.
                        Surat keterangan ini dipergunakan untuk: Kelengkapan persyaratan melamar pekerjaan didalam
                        negeri.

                    </div>
                    <div style="margin-top: 10pt;" class="indentasi">
                        Demikian surat keterangan ini kami buat dengan sebenarnya, kepada yang berwajib untuk menjadi
                        periksa.
                    </div>

                </div>
                <table width="100%">
                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td align="center">Mengetahui</td>
                        <td align="center">Jenggawah, 06 Juli 2020</td>
                    </tr>
                    <tr>
                        <td align="center">BABHINKAMBTIBMAS</td>
                        <td align="center">Kepala Desa Jenggawah</td>
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
                        <td></td>
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
                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td align="center">
                            <u> Sunarto Hadi.P </u>
                        </td>
                        <td align="center">
                            <u>SUPARDI</u>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">Reg. Nomor..............................</td>
                        <td align="center">Mengetahui</td>
                    </tr>
                    <tr>
                        <td align="center">Mengetahui</td>
                        <td align="center">KAPOLSEK JENGGAWAH</td>
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
                        <td></td>
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
                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td align="center">CAMAT JENGGAWAH</td>
                        <td align="center">
                            <u>SUNARTO</u>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="center">AKP NRP : 77080073</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>