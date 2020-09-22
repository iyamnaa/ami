<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Amal Madani Indonesia') }}</title>
    <link rel="icon" href="{{ asset('images/madani-logo.png') }}">
    <meta name="theme-color" content="forestgreen" />

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/receipt.css') }}">
</head>
<body>
    <div class="receipt-container vertical-align-center">
        <div class="receipt-layer">
            <div class="receipt-header">
                <div class="receipt-company">
                    <table class="company-info">
                        <tr>
                            <td>
                                <div>
                                    <img src="{{ asset('images/madani-logo.png') }}">
                                </div>
                            </td>
                            <td>
                                <b> Amal Madani Indonesia </b> <br>
                                Filantrophy and Humanity Organization <br>
                                Sk. Menteri Hukum dan HAM RI No. AHU - 1333.AH.01.04 tahun 2013 <br>
                                Lembaga Amil Zakat SK Kementrian Agama RI No. 599 Tahun 2017 Prov. Jawa Barat
                            </td>
                        </tr>
                    </table>
                </div><div class="receipt-address vertical-align-center">
                    <table class="address-info">
                        <tr>
                            <td>
                                <div class="map-icon">
                                <i class="fa fa-map-marker"></i>
                                </div>
                            </td>
                            <td>
                                Komp.Padasuka Indah No.B 11 Kota Cimahi <br>
                                Provinsi Jawa Barat - Telp.(022) 20665182 <br>
                                www.amalmadani.com
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="receipt-body">
                <div class="data-donatur">
                    <div class="data-box">
                        <table>
                            <tr width="100%">
                                <td width="45%"> <div class="table-data"> No.  </div> </td>
                                <td> <div class="table-data"> Tanggal : <span> {{$transaction->created_at}}  </span></div> </td>
                            </tr>
                        </table>
                            <div class="data-title"> Donatur / Muzaki </div>
                            Bismillahirrahmanirrahim, saya yang bertandatangan dibawah ini
                        <table>
                            <tr width="100%">
                                <td width="55%"> <div class="table-data"> NID. <span> </span> </div> </td>
                                <td> <div class="table-data"> Telp. <span> {{ $transaction->telephone }} </span> </div> </td>
                            </tr>
                            <tr width="100%">
                                <td colspan="2"> <div class="table-data"> Nama. <span> {{ $transaction->name }} </span>  </div> </td>
                            </tr>
                            <tr width="100%">
                                <td colspan="2"> <div class="table-data"> Alamat. <span> {{ $transaction->address }} </span> </div> </td>
                            </tr>
                        </table>
                        <span class="text-justify"> Dengan ikhlas memberikan sebagian harta saya yang bersumber dari harta halal,
                        untuk didayagunakan dan disalurkan kepada yang berhak sesuai tuntunan syariat Islam.
                        Dengan rincian sebagai berikut </span>
                    </div>
                </div><div class="data-tambahan">
                    <div class="data-box">
                        <div class="data-title" style="color:green;text-align:right">
                            Bukti Pembayaran Donasi Zakat Infak Shodaqoh dan Wakaf
                        </div>
                        <div class="data-title"> Petugas / Amil </div>
                        <table>
                            <tr width="100%">
                                <td> <div class="table-data"> Nia. <span> {{ $transaction->nia }} </span> </div> </td>
                            </tr>
                            <tr>
                                <td> <div class="table-data"> Nama. <span> {{ $transaction->amil_name }} </span> </div> </td>
                            </tr>
                        </table>
                        <div class="data-title" style="font-size:1rem"> Transaksi Bank </div>
                        <table>
                            <tr width="100%">
                                <td colspan="2"> <div class="table-data"> Transfer Bank. <span> - </span> </div> </td>
                            </tr>
                            <tr width="100%">
                                <td> <div class="table-data"> No Rek. <span> - </span> </div> </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
                <table class="donation-table" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th width="15%"> No </th>
                            <th width="35%"> Akad </th>
                            <th width="10%"> Qty </th>
                            <th width="20%"> Nominal </th>
                            <th width="20%"> Jumlah </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="15%"> {{ 1 }} </td>
                            <td width="35%" style="text-transform: capitalize"> {{ $transaction->akad }} </td>
                            <td width="10%"> {{ $transaction->qty }} </td>
                            <td width="20%"> {{ $transaction->amount }} </td>
                            <td width="20%"> {{ $transaction->amount * $transaction->qty }} </td>
                        </tr>
                        @for($i=0;$i< 4;$i++)
                        <tr>
                            <td width="15%"> - </td>
                            <td width="35%"></td>
                            <td width="10%"></td>
                            <td width="20%"></td>
                            <td width="20%"></td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
                <table class="donation-table" cellspacing="0" cellpadding="0">
                    <tr class="row-total">
                        <td width="68%" colspan="3">  </td>
                        <td width="12%"> Total </td>
                        <td width="20%"> {{ $transaction->amount * $transaction->qty }} </td>
                    </tr>
                </table>
                <table class="table-footer">
                    <tr>
                        <td width=15% align="center" class="coloum-ttd">
                            <hr>
                            <b> Donatur / Muzaki </b>
                        </td>
                        <td width="70%" align="center">
                            <p style="font-size:1rem;font-weight:bold">
                            Jazakumullahu Khairan Katsira <br>
                            Terima Kasih
                            </p>
                            <p>
                               <b>Aajarokallahu Fiimaa A'thoita Wa Baaroka Fiima Abqoita Wa Ja'alahu Laka Thohuuran</b><br>
                                "Semoga Allah memberikan pahala kepada mu atas apa yang telah engkau berikan <br>
                                (Zakatkan/Infakkan) dan semoga Allah memberkahimu dan harta-harta yang masih <br>
                                engkau sisakan dan semoga pula menjadikannya pemebersih (dosa) bagi mu"
                            </p>
                        </td>
                        <td width="15%" align="center" class="coloum-ttd">
                            <hr>
                            <b> Petugas / Amil </b>
                        </td>
                    </tr>
                </table>
        </div>
    </div>
</body>
</html>