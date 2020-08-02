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
                            SURAT KETERANGAN PENGHASILAN
                            </u>
                        </p>

                        <p style="margin-bottom: 10pt;" class="kop12">Nomor : 470.2 / {{ $data->mail_number }} / 430.11.7.5/ {{ $carbon->now()->isoFormat('YYYY') }}</p>
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
                            <td width="64%">{{ $maildata['ttd'] }}</td>
                        </tr>
                        <tr>
                            <td>Jabatan </td>
                            <td>:</td>
                            <td>{{ $maildata['jabatanttd'] }}</td>
                        </tr>
                    </table>
                    <div class="indentasi">Menerangkan dengan sebenarnya ,bahwa :
                    </div>
                    <table style="padding-left: 40px;" width="100%">
                       
                        <tr>
                            <td width="3%">I.</td>
                            <td width="20%">Nama Orang tua/wali</td>
                            <td width="3%">:</td>
                            <td width="64%">{{ $data->userdata->name }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Jenis Kelamin </td>
                            <td>:</td>
                            <td>{{ $data->userdata->gender->name }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Tempat dan Tgl. Lahir </td>
                            <td>:</td>
                            <td>{{ $data->userdata->born }}/ {{ $carbon->parse($data->userdata->birthdate)->isoFormat(' D MMMM YYYY') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>NIK </td>
                            <td>:</td>
                            <td>{{ $data->user_data_id }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Agama </td>
                            <td>:</td>
                            <td>{{ $data->userdata->gender->name }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Status Perkawinan</td>
                            <td>:</td>
                            <td>{{ $data->userdata->maritalStatus->name }}</td>
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
                    </table>
                    <div class="indentasi">Adalah warga kami , Desa Jenggawah Kecamatan 
                    Jenggawah Kab.Jember – Yang merupakan orang tua / Wali dari :
                    </div>
                    <table style="padding-left: 40px;" width="100%">
                        <tr>
                            <td width="3%">II.</td>
                            <td width="20%" >Nama Anak</td>
                            <td width="3%" >:</td>
                            <td width="64%" >{{ $maildata['namaanak'] }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>NIK</td>
                            <td>:</td>
                            <td>{{ $maildata['nikanak'] }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Asal Sekolah</td>
                            <td>:</td>
                            <td>{{ $maildata['asalsekolah'] }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Tempat/Tgl Lahir</td>
                            <td>:</td>
                            <td>{{ $maildata['tmptlahir'] }} / {{ $carbon->parse($maildata['tgllahir'])->isoFormat('DD MMMM YYYY') }}</td>
                        </tr>
                       
                    </table>
                    <div class="indentasi">
                    Adapun orang tua ( wali ) dari anak tersebut diatas mempunyai penghasilan setiap bulannya {{ $maildata['penghasilan'] }}.
                    Surat Keterangan ini dipergunakan untuk : {{ $maildata['keperluan'] }}.

                    </div>
                    <div style="margin-top: 10pt;" class="indentasi">
                    Demikian surat keterangan ini dibuat berdasarkan kenyataan dan pengamatan kami, untuk dipergunakan sebagaimana mestinya. Apabila keterangan ini tidak sesuai dengan kenyataan yang ada, 
                    maka kami siap menerima resiko dan tindakan yang diambil oleh Pihak Ketiga.
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