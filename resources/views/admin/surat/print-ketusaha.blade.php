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
                        
                        <p style="margin-top: 40pt;" class="kop18 bold">
                            <u>
                                SURAT KETERANGAN USAHA
                            </u>
                        </p>

                        <p style="margin-bottom: 10pt;" class="kop12">Nomor : 470.2 /02 / 430.11.7.5/ 2000</p>
                        <div class="clear"></div>

                    </div>

                </div>
                <div id="isi3">
                    <div>Yang bertanda tangan dibawah ini saya, Kepala Desa Kecamatan  Kabupaten Jember, menerangkan bahwa :
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
                            <td width="23%">Nama</td>
                            <td width="3%">:</td>
                            <td width="64%">dddd</td>
                        </tr>
                        <tr>
                            <td>Jenis kelamin </td>
                            <td>:</td>
                            <td>dddd</td>
                        </tr>
                        <tr>
                            <td>Tempat/tgl. Lahir  </td>
                            <td>:</td>
                            <td>dddd</td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan </td>
                            <td>:</td>
                            <td>WNI</td>
                        </tr>
                        <tr>
                            <td>Status </td>
                            <td>:</td>
                            <td>dddd</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan </td>
                            <td>:</td>
                            <td>dddd</td>
                        </tr>
                        <tr>
                            <td>Alamat </td>
                            <td>:</td>
                            <td>dddd</td>
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
                    1.	Orang tersebut adalah benar-benar berdomisili pada alamat tersebut diatas,berkelakuan baik
                    </div>
                    <div class="indentasi">
                    2.	Surat Keterangan ini untuk menerangkan bahwa yang bersangkutan diatas benar-benar mempunyai usaha : SALON KECANTIKAN, sampai saat ini usaha tersebut masih berjalan baik dan lancar. 
                    </div>
                    <div class="indentasi">
                    Demikian surat keterangan ini kami buat dengan sebenarnya dan  kepada instansi yang dimaksud mohon menjadikan periksa adanya.
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
                        