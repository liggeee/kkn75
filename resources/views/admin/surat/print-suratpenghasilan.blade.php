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
                            SURAT KETERANGAN PENGHASILAN
                            </u>
                        </p>

                        <p style="margin-bottom: 10pt;" class="kop12">Nomor : 470.2 / 01 / 430.11.7.5/ 345</p>
                        <div class="clear"></div>

                    </div>

                </div>
                <div id="isi3">
                    <div class="indentasi">Yang bertanda tangan di bawah ini   :
                    </div>
                    <table style="padding-left: 40px;" width="100%">
                    <tr>
                            <td width="23%">Nama  </td>
                            <td width="3%">:</td>
                            <td width="64%">kepala desa</td>
                        </tr>
                        <tr>
                            <td>NIP/NIK </td>
                            <td>:</td>
                            <td>dkffndkjdf</td>
                        </tr>
                        <tr>
                            <td>Jabatan </td>
                            <td>:</td>
                            <td>kepala desa ....</td>
                        </tr>
                    </table>
                    <div class="indentasi">Menerangkan dengan sebenarnya ,bahwa :
                    </div>
                    <table style="padding-left: 40px;" width="100%">
                       
                        <tr>
                            <td width="23%">I. Nama Orang tua/wali</td>
                            <td width="3%">:</td>
                            <td width="64%">mmmmmmmmmm</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin </td>
                            <td>:</td>
                            <td>dkffndkjdf</td>
                        </tr>
                        <tr>
                            <td>Tempat dan Tgl. Lahir </td>
                            <td>:</td>
                            <td>dkffndkjdf</td>
                        </tr>
                        <tr>
                            <td>NIK </td>
                            <td>:</td>
                            <td>11111111111111</td>
                        </tr>
                        <tr>
                            <td>Agama </td>
                            <td>:</td>
                            <td>islam</td>
                        </tr>
                        <tr>
                            <td>Status Perkawinan</td>
                            <td>:</td>
                            <td>skdkdmdm</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan </td>
                            <td>:</td>
                            <td>skdkdmdm</td>
                        </tr>
                        <tr>
                            <td>Alamat </td>
                            <td>:</td>
                            <td> Dusun  RT RW  Desa  Kec. Kabupaten Jember</td>
                        </tr>
                    </table>
                    <div class="indentasi">Adalah warga kami , Desa Jenggawah Kecamatan 
                    Jenggawah Kab.Jember – Yang merupakan orang tua / Wali dari :
                    </div>
                    <table style="padding-left: 40px;" width="100%">
                        <tr>
                            <td>Nama Anak</td>
                            <td>:</td>
                            <td>ksksksk</td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>:</td>
                            <td>111111111111</td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td>:</td>
                            <td>kdkdkdk</td>
                        </tr>
                        <tr>
                            <td>Tempat/Tgl Lahir</td>
                            <td>:</td>
                            <td> wwwww</td>
                        </tr>
                       
                    </table>
                    <div class="indentasi">
                    Adapun orang tua ( wali ) dari anak tersebut diatas mempunyai penghasilan setiap bulannya kurang lebih   Rp 2.500.000, 00 ( Dua Juta Lima Ratus Ribu Rupiah ).
                    Surat Keterangan ini dipergunakan untuk : Persyaratan Melengkapi Verifikasi data kuliah.

                    </div>
                    <div style="margin-top: 10pt;" class="indentasi">
                    Demikian surat keterangan ini dibuat berdasarkan kenyataan dan pengamatan kami, untuk dipergunakan sebagaimana mestinya. Apabila keterangan ini tidak sesuai dengan kenyataan yang ada, 
                    maka kami siap menerima resiko dan tindakan yang diambil oleh Universitas Jember.
                    </div>
                </div>
                <table class="ttd" width="100%">

                   
                @include('surat.component/standart-footer')
        </div>
    </div>
    <div id="aside"></div>
    </div>
</body>

</html>