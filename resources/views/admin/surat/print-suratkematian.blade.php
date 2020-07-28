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
                    <p style="margin-bottom: 30pt" class="kop1 bold">
                           
                    UNTUK YANG BERSANGKUTAN
                            
                        </p>
                        <p style="margin-bottom: 30pt" class="kop1 bold">
                            <u>
                                SURAT KETERANGAN KEMATIAN
                            </u>
                        </p>
                        <p style="margin-bottom: 30pt;" class="kop12">Nomor : 470.2 / 02 / 430.12.7.5/ 2000</p>
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
                            <td width="70%">kkkkk</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>mmmmmmmmmmmm</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>mmmmmmmm</td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td>:</td>
                            <td>20th</td>
                        </tr>
                        </table>

                        <div>
                        Telah Meninggal dunia pada  :
                    </div>
                       
                    <table width="55%">
                        <tr>
                            <td>Hari</td>
                            <td>:</td>
                            <td>aaaaaaaa</td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td>10-10-2010</td>
                        </tr>
                        <tr>
                            <td>Di</td>
                            <td>:</td>
                            <td>Dsn, RT RW Desa Kec. Kabupaten</td>
                        </tr>
                        <tr>
                            <td>Disebabkan Karena</td>
                            <td>:</td>
                            <td>sakit</td>
                        </tr>
                    </table>
                    
                    <div class="indentasi">
                    Demikian Surat Keterangan ini dibuat atas dasar yang 
Sebenarnya dan dapat dipergunakan sebagaimana mestinya

                    </div>
                    <table class="ttd" width="100%">

                   
@include('surat.component/standart-footer')
</div>
</div>
<div id="aside"></div>
</div>
</body>

</html>