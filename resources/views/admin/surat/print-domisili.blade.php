<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('surat.component/print-style')
    @inject('carbon', 'Carbon\Carbon')
</head>

<body>
    <div id="content" class="container_12 clearfix">
        <div id="content-main" class="grid_7">
            <div>
                <div width="100%">
                    <div align="center">
                        @include('surat.component/kop')
                        <p style="margin-top: 30pt;" class="kop18 bold">
                            <u>
                                SURAT KETERANGAN
                            </u>
                        </p>

                        <p style="margin-bottom: 10pt;" class="kop12">Nomor : 470 / 01 / 35.09.16.2003/2020 </p>
                        <div class="clear"></div>

                    </div>
                </div>

                <div id="isi3">
                    <div class="indentasi">
                    Yang bertanda tangan dibawah ini Kepala Desa Jenggawah Kecamatan Jenggawah Kabupaten Jember, 
                    menerangkan  dengan sebenarnya bahwa :
                    </div>

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
                            <td width="64%">almas</td>
                        </tr>
                        <tr>
                            <td width="23%">Jenis Kelamin</td>
                            <td width="3%">:</td>
                            <td width="64%">laki-laki</td>
                        </tr>
                        <tr>
                            <td width="23%">Tempat/Tgl.Lahir/Umur</td>
                            <td width="3%">:</td>
                            <td width="64%">Jember, 17-07-1986</td>
                        </tr>
                        <tr>
                            <td width="23%">N I K</td>
                            <td width="3%">:</td>
                            <td width="64%">3509090909090909</td>
                        </tr>
                        <tr>
                            <td width="23%">Kewarganegaraan</td>
                            <td width="3%">:</td>
                            <td width="64%">WNI</td>
                        </tr>
                        <tr>
                            <td width="23%">Agama</td>
                            <td width="3%">:</td>
                            <td width="64%">Islam</td>
                        </tr>
                        <tr>
                            <td width="23%">Status  Perkawinan</td>
                            <td width="3%">:</td>
                            <td width="64%">Belum Kawin</td>
                        </tr>
                        <tr>
                            <td width="23%">Pekerjaan</td>
                            <td width="3%">:</td>
                            <td width="64%">pelajar</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>Dusun Krajan,  RT 015 / RW. 002
                            Desa Jenggawah Kecamatan Jenggawah
                            Kabupaten Jember
                            </td>
                        </tr>
                        
                    </table>
                    <div class="indentasi">
                    Orang  tersebut diatas benar-benar penduduk Desa Jenggawah Kecamatan Jenggawah Kabupaten Jember, dan saat ini masih berdomisili dialamat tersebut diatas, dan KTP yang bersangkutan masih dalam proses. 
                    </div>
                    <div class="indentasi">
                    Surat keterangan ini dipergunakan untuk :  Kelengkapan administrasi penerimaan BPNT
                    </div>
                    <div class="indentasi">
                    Demikian surat keterangan ini dibuat dan untuk dapatnya dipergunakan sebagaimana mestinya.
                    </div>
                </div>
                </div>
                @include('surat.component/standart-footer')
            </div>
        </div>
        <div id="aside"></div>
    </div>
</body>

</html>