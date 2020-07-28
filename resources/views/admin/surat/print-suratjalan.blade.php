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
                            SURAT KETERANGAN JALAN/BEPERGIAN
                            </u>
                        </p>

                        <p style="margin-bottom: 30pt;" class="kop12">Nomor : 470.2 / 02 / 430.12.7.5/ 2000</p>
                        <div class="clear"></div>

                    </div>
                </div>
                <div class="indentasi">
                    Yang bertanda tangan dibawah ini Kepala Desa Jenggawah Kecamatan Jenggawah Kabupaten Jember, 
                    menerangkan bahwa  :
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
                            <td width="23%">1. Nama Lengkap</td>
                            <td width="3%">:</td>
                            <td width="64%">mmmm</td>
                        </tr>
                        <tr>
                            <td>2. Jenis Kelamin</td>
                            <td>:</td>
                            <td>mmmmmm </td>
                        </tr>
                        <tr>
                            <td>3. Tempat/Tgl. Lahir </td>
                            <td>:</td>
                            <td>jjjjj </td>
                        </tr>
                        <tr>
                            <td>4. Kewarganegaraan </td>
                            <td>:</td>
                            <td>Indonesia</td>
                        </tr>

                      <tr>
                            <td width="23%">5. NIK</td>
                            <td width="3%">:</td>
                            <td width="64%">NIK</td>
                        </tr> 

                     
                        <tr>
                            <td>6. Agama</td>
                            <td>:</td>
                            <td>sssss</td>
                        </tr>
                        <tr>
                            <td>7. Status Perkawinan</td>
                            <td>:</td>
                            <td>hhhhhh</td>
                        </tr>
                        <tr>
                            <td>8. Pekerjaan</td>
                            <td>:</td>
                            <td>kkkk</td>
                        </tr>
                        <tr>
                            <td>9. Alama</td>
                            <td>:</td>
                            <td>RT. , RW. , Dusun , Desa , Kec. </td>
                        </tr>
                        <tr>
                            <td>10. Tujuan Ke</td>
                            <td>:</td>
                            <td>ffff</td>
                        </tr>
                        <tr>
                            <td>11. Alasan (Bermaksud)</td>
                            <td>:</td>
                            <td>ffff</td>
                        </tr>
                        <tr>
                            <td>12. Keterangan lain-lain</td>
                            <td>:</td>
                            <td>rrrrrrrrrrrrrr</td>
                        </tr>
                        <tr>
                            <td>13. Pengikut</td>
                            <td>:</td>
                            <td> orang</td>
                        </tr>
                        <tr>
                        <td>14. Masa berlaku</td>
                            <td>3 </td>
                            <td>Bulan dari tgl. 04-07-2020 s/d 04-10-2020.</td>
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