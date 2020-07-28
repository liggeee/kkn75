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
                                SURAT KETERANGAN TIDAK MAMPU
                            </u>
                        </p>

                        <p style="margin-bottom: 10pt;" class="kop12">Nomor : 470.2 / 01 / 430.11.7.5/ 345</p>
                        <div class="clear"></div>

                    </div>

                </div>
                <div id="isi3">
                    <div class="indentasi">Yang bertanda tangan di bawah ini, saya Kepala Desa <span class="capital">Kecamatan
                      </span> , menerangkan bahwa penduduk kami :
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
                            <td width="23%">I. Nama Orang tua/wali</td>
                            <td width="3%">:</td>
                            <td width="64%">mmmmmmmmmm</td>
                        </tr>
                        <tr>
                            <td>Tempat dan Tgl. Lahir </td>
                            <td>:</td>
                            <td>dkffndkjdf</td>
                        </tr>
                        <tr>
                            <td>Agama </td>
                            <td>:</td>
                            <td>islam</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan </td>
                            <td>:</td>
                            <td>skdkdmdm</td>
                        </tr>
                        <tr>
                            <td>Alamat </td>
                            <td>:</td>
                            <td> Dusun  RT RW  Desa  Kec.</td>
                        </tr>
                    </table>

                    <table style="padding-left: 40px;" width="55%">
                        <tr>
                            <td>II. Nama Anak</td>
                            <td>:</td>
                            <td>ksksksk</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>per</td>
                        </tr>
                        <tr>
                            <td>Tempat dan Tgl. Lahir </td>
                            <td>:</td>
                            <td>kdkdkdk</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>RT  RW Desa  Kec. 
                                 </td>
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
                        Orang tersebut benar-benar penduduk Desa <span class="capital3">Kecamatan
                           Kabupaten </span> yang berdomisili  di alamat tersebut diatas. 
                           Adapun orang tersebut diatas tergolong keluarga yang tidak mampu dengan penghasilan orangtua/wali 
                           setiap bulannya ± Rp  1.000. 000,00,- (Satu Juta Rupiah ).
                    </div>
                    <div class="indentasi">
                    Selanjutnya surat keterangan ini dipergunakan untuk: Melengkapi Persyaratan Pengajuan Mendaftar
                     Sekolah  di SMP Negeri 1 Jenggawah dan Pengajuan Beasiswa Pendidikan. 
                    </div>
                    <div style="margin-top: 10pt;" class="indentasi">
                    Demikian surat keterangan ini kami buat dengan sebenarnya dan dapatnya dipergunakan sebagaimana mestinya.
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