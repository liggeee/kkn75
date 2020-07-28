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
                                SURAT KETERANGAN BEDA DATA
                            </u>
                        </p>

                        <p style="margin-bottom: 10pt;" class="kop12">Nomor : 470 / 01 / 35.09.16.2003/2020 </p>
                        <div class="clear"></div>

                    </div>

                </div>
                <div id="isi3">
                    <div class="indentasi">Yang bertanda tangan dibawah ini Kepala Desa Jenggawah Kecamatan Jenggawah Kabupaten Jember  menerangkan bahwa :
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
                            <td width="23%">Nama</td>
                            <td width="3%">:</td>
                            <td width="64%"> <b>Almas</b></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin </td>
                            <td>:</td>
                            <td width="64%"> <b>Laki-laki</b></td>
                        </tr>
                        <tr>
                            <td>Tempat dan Tgl. Lahir </td>
                            <td>:</td>
                            <td>mmmmmmmm</td>
                        </tr>
                        <tr>
                            <td>NIK </td>
                            <td>:</td>
                            <td>11111111</td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td>:</td>
                            <td>WNI</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>Islam</td>
                        </tr>
                        <tr>
                            <td>Status Perkawinan</td>
                            <td>:</td>
                            <td>Belum Kawin</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td>www</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>
                                Dusun  RT RW  Desa  Kec. 
                            </td>
                        </tr>
                    </table>
                    <div>
                    Orang tersebut diatas mempunyai identitas tercetak pada  :
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
                            <td width="23%">1.KK  </td>
                            <td width="3%">:</td>
                            <td width="64%"> Atas Nama: NURSAADAH  ,Tgl.Lahir:  Jember , 23-03-1969,NIK : 3509166303680001 ,<u> Pekerjaan Wiraswasta. </u> </td>
                        </tr>
                        <tr>
                            <td>2.E-KTP</td>
                            <td>:</td>
                            <td width="64%"> Atas Nama: NURSAADAH   ,Tgl.Lahir.:Jember , 23-03-1968 ,  
                                NIK: 3509166303680001 , <u>Pekerjaan Petani </u>
                            </td>
                        </tr>
                    </table>
                    <div>
                    Selanjutnya menerangkan bahwa <u> ketiga </u> data tersebut diatas adalah benar-benar satu orang / 
                    orang yang  sama,menurut yang bersangkutan yang paling benar adalah Data tercetak di KK & E-KTP.
                    </div>
                    <div>
                    Surat Keterangan ini dipergunakan untuk : <i>Kelengkapan Persyaratan Administrasi Pencairan  BST.</i>
                    </div>
                    <div class="indentasi"> Demikian surat keterangan ini dibuat dengan sebenarnya dan dapat dipergunakan sebagaimana mestinya. </div>
                    <table class="ttd" width="100%">

                   
@include('surat.component/standart-footer')
</div>
</div>
<div id="aside"></div>
</div>
</body>

</html>
