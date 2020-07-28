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
                                SURAT KELAHIRAN
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
                            <td width="23%">Hari</td>
                            <td width="7%">:</td>
                            <td width="70%">kkkkk</td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td>mmmmmmmmmmmm</td>
                        </tr>
                        <tr>
                            <td>Di</td>
                            <td>:</td>
                            <td>mmmmmmmm</td>
                        </tr>
                        <tr>
                            <td>Anak Ke</td>
                            <td>:</td>
                            <td>ssssss</td>
                        </tr>
                        <tr>
                            <td>Telah Lahir Seorang Anak</td>
                            <td>:</td>
                            <td>perempuan</td>
                        </tr>

                        <tr>
                            <td>Bernama</td>
                            <td>:</td>
                            <td>aaaaaaaa</td>
                        </tr>
                        <tr>
                            <td>Dari Seorang Ibu Bernama</td>
                            <td>:</td>
                            <td>aaaaaaaa</td>
                        </tr>
                        <tr>
                            <td>Istri Dari</td>
                            <td>:</td>
                            <td>aaaaaaaa</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>aaaaaaaa</td>
                        </tr>
                    </table>
                    
                    <div class="indentasi">
                    Surat keterangan ini  dibuat  atas  dasar  yang sebenarnya.
                    </div>
                    <table class="ttd" width="100%">

                   
@include('surat.component/standart-footer')
</div>
</div>
<div id="aside"></div>
</div>
</body>

</html>