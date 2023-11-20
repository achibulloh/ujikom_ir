<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" type="image/png" href="https://i.ibb.co/yYM1VbG/LogoOnly.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- <link href="{{ asset('assets/dsadmin/vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <style>
        .table {
            color: #535353;
        }

        .invoice-content {
            font-family: 'Poppins', sans-serif;
            color: #535353;
            font-size: 14px;
        }

        .invoice-content a {
            text-decoration: none;
        }

        .invoice-content .img-fluid {
            max-width: 100% !important;
            height: auto;
        }

        .invoice-content .form-control:focus {
            box-shadow: none;
        }

        .invoice-content h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
            font-family: 'Poppins', sans-serif;
            color: #535353;
        }

        .mb-0{
            margin-bottom: 0;
        }

        .mb-10{
            margin-bottom: 10px;
        }

        .mb-20{
            margin-bottom: 20px;
        }

        .mb-30{
            margin-bottom: 30px;
        }

        .container{
            max-width: 1000px;
            margin: 0 auto;
        }

        .invoice-content .f-w-600 {
            font-weight: 500 !important;
        }

        .invoice-content .text-14 {
            font-size: 14px;
        }

        .invoice-content .invoice-table th:first-child,
        .invoice-content .invoice-table td:first-child {
            text-align: left;
        }

        .invoice-content .color-white {
            color: #fff!important;
        }

        .invoice-content .inv-header-1 {
            text-transform: uppercase;
            font-weight: 700;
            font-size: 24px;
        }

        .invoice-content .inv-header-2 {
            text-transform: uppercase;
            font-weight: 600;
            font-size: 20px;
        }

        .invoice-content .inv-title-1 {
            font-weight: 500;
            font-size: 16px;
        }

        .invoice-content .invo-addr-1 {
            font-size: 14px;
            margin-bottom: 20px;
            line-height: 23px;
        }

        .invoice-content .item-desc-1 {
            text-align: left;
        }

        .invoice-content .item-desc-1 span {
            display: block;
        }

        .invoice-content .item-desc-1 small {
            display: block;
        }

        .invoice-content .important-notes-list-1 {
            font-size: 14px !important;
            padding-left: 15px;
            margin-bottom: 15px;
        }

        .invoice-content .important-notes-list-1 li {
            margin-bottom: 5px;
        }

        .invoice-content .bank-transfer-list-1 {
            font-size: 13px !important;
            padding-left: 0px;
        }

        .invoice-content .important-notes {
            font-size: 12px !important;
        }

        .invoice-content .invoice-btn-section {
            text-align: center;
            margin-top: 27px;
        }

        table th{
            font-weight: 400;
        }



        /** Invoice 6 start **/
        .invoice-6 {
            padding: 30px 0;
            background: #fff6f6;
        }

        .invoice-6 .mb-30{
            margin-bottom: 30px;
        }

        .invoice-6 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
            color: #262525;
        }

        .invoice-6 .invoice-info {
            background: #f3f4f7;
            position: relative;
            padding: 50px;
            z-index: 0;
        }

        .invoice-6 .invoice-info:before {
            content: "";
            width: 100%;
            height: 300px;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            background: #bac7c7;
        }

        .invoice-6 .invoice-contant{
            background: #fff;
        }

        .invoice-6 .invoice-contact-us{
            max-width: 230px;
            margin-left: auto;
        }

        .invoice-6 .invoice-contact-us ul{
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
        }

        .invoice-6 .logo img{
            height: 100px;
            width: 350px;
            margin-top: 10px;
        }

        .invoice-6 .invoice-headar{
            padding: 0 50px 40px;
        }

        .invoice-6 .invoice-contact-us h1{
            font-size: 20px;
            margin-bottom: 15px;
            color: #262525;
        }

        .invoice-6 .invoice-contact-us ul li{
            font-size: 14px;
            line-height: 25px;
            color: #535353;
        }

        .invoice-6 .invoice-contact-us ul li i{
            width: 20px;
            color: #535353;
        }

        .invoice-6 .invoice-contact-us ul li a{
            color: #535353;
        }

        .invoice-6 .inv-title-1 {
            color: #005ce7;
            margin-bottom: 5px;
        }

        .invoice-6 .name {
            font-size: 18px;
            margin-bottom: 5px;
            text-transform: uppercase;
            color: #262525;
            font-weight: 500;
        }

        .invoice-6 .name.mb-10{
            margin-bottom: 10px;
        }

        .invoice-6 .invoice-number-inner{
            max-width: 230px;
            margin-left: auto;
        }

        .invoice-6 .invoice-name{
            font-weight: 600;
            font-size: 30px;
        }

        .invoice-6 .table-outer {
            overflow-y: hidden;
            overflow-x: auto;
        }

        .invoice-6 .default-table thead th {
            position: relative;
            padding: 10px 20px;
            font-size: 11px;
            color: #005ce7;
            font-weight: 500;
            line-height: 30px;
            white-space: nowrap;
        }

        .invoice-6 .default-table tbody tr {
            position: relative;
            border-bottom: 1px solid #ECEDF2;
        }

        .invoice-6 .default-table tr td {
            position: relative;
            padding: 10px 20px;
            font-size: 11px;
            color: #535353;
            font-weight: 400;
        }

        .invoice-6 .default-table tr td strong{
            font-weight: 500;
        }

        .invoice-6 .default-table {
            position: relative;
            background: #ffffff;
            border: 0;
            border-radius: 5px;
            overflow: hidden;
            width: 700px;
            min-width: 500px;
        }

        .invoice-6 .default-table thead {
            background: #F5F7FC;
            border-radius: 8px;
            color: #ffffff;
        }

        .invoice-6 .payment-method ul {
            list-style: none;
            padding: 0;
        }

        .invoice-6 .payment-method ul li strong {
            font-weight: 500;
        }

        .invoice-6 .invoice-top{
            padding: 50px 50px 20px;
        }

        .invoice-6 .order-summary{
            padding: 0 50px 50px;
        }

        .invoice-6 .invoice-bottom{
            padding: 0 50px 20px;
        }

        .invoice-6 .invoice-bottom .inv-title-1{
            margin-bottom: 7px;
        }

        .invoice-6 .payment-method{
            max-width: 230px;
            margin-left: auto;
        }

        /** MEDIA **/
        @media (max-width: 992px) {
            .invoice-6 {
                padding: 30px 0;
            }

            .invoice-6 .order-summary .default-table thead th {
                padding: 12px 20px;
            }

            .invoice-6 .order-summary .default-table tr td {
                padding: 12px 20px;
            }
        }

        @media (max-width: 768px) {
            .invoice-6 .invoice-top {
                padding: 30px 30px 0;
            }

            .invoice-6 .order-summary {
                padding: 0 30px 30px;
            }

            .invoice-2 .invoice-id .info {
                margin: 0 auto 0 0;
                padding: 0;
            }

            .invoice-6 .invoice-bottom {
                padding: 0 30px 0;
            }

            .invoice-6 .invoice-headar {
                padding: 30px;
            }

            .invoice-6 .invoice-info {
                background: #f5f7fc;
                padding: 0;
            }


            .invoice-6 .default-table tr td {
                padding: 15px 20px;
            }

            .invoice-6 .default-table thead th {
                padding: 15px 20px;
            }

            .invoice-6 .order-summary .default-table thead th {
                padding: 10px 12px;
            }

            .invoice-6 .order-summary .default-table tr td {
                padding: 10px 12px;
            }
        }

        @media (max-width: 580px){
            .invoice-6 .invoice-contact-us {
                max-width: 100%;
                margin: 0;
            }

            .invoice-6 .invoice-number-inner {
                max-width: 100%;
                margin: 0;
            }

            .invoice-6 .payment-method {
                max-width: 100%;
                margin: 0 0 30px;
            }

            .invoice-6 .logo img {
                height: 25px;
                margin: 0 0 10px;
            }

            .invoice-6 .invoice-name {
                font-size: 24px;
            }
        }
        /** Invoice 6 end **/


    </style>
    <title>Laporan</title>
</head>
<body>
    <div class="invoice-6 invoice-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="invoice-inner clearfix">
                        <div class="invoice-info clearfix" id="invoice_wrapper">
                            <div class="invoice-headar">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="invoice-logo">
                                            <!-- logo started -->
                                            <div class="logo">
                                                <img src="png" alt="logo">
                                            </div>
                                            <!-- logo ended -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="invoice-contact-us">
                                            <h1>Contact Us</h1>
                                            <ul class="link">
                                                <li>
                                                    <i class="fa fa-map-marker"></i> 15A Jl.Muararjeun Kaler, Kota Bandung
                                                </li>
                                                <li>
                                                    <i class="fa fa-envelope"></i> <a href="mailto:info@smartcashier.com">info@smartcashier.com</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-phone"></i> <a href="tel:+55-417-634-7071">+62 812 151 5809</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-contant">
                                <div class="invoice-top">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h1 class="invoice-name">Laporan</h1>
                                        </div>
                                        <div class="col-sm-6 mb-30">
                                            <div class="invoice-number-inner">
                                                <h6 class="mb-0">Mulai Hari : <span>{{$start}}</span></h6>
                                                <h6 class="mb-0">Akhir Hari : <span>{{$end}}</span></h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-30">
                                            <div class="invoice-number">
                                                <h4 class="inv-title-1">Dibuat Oleh :</h4>
                                                <h2 class="name mb-10">{{ auth()->user()->nama_lengkap }}</h2>
                                                <p class="invo-addr-1 mb-0">
                                                   {{ auth()->user()->role }} <br/>
                                                   {{ auth()->user()->email }} <br/>
                                                   {{ auth()->user()->alamat }} <br/>
                                                </p>
                                            </div></br></br>
                                            <div class="invoice-number">
                                                <h4 class="inv-title-1">Dibuat Pada Tanggal :</h4>
                                                {{-- <p>Tanggal/Waktu: <span id="tanggalwaktu"></span></p> --}}
                                                <h2 class="name mb-10"><?php echo date("d/m/Y H:i:s") ?></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="invoice-center">
                                    <div class="order-summary">
                                        <div class="table-outer">
                                            <table class="default-table invoice-table">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Invoice</th>
                                                    <th>Nama Kasir</th>
                                                    <th>Nama Pelangan</th>
                                                    <th>Jumlah Menu</th>
                                                    <th>Total Bayar</th>
                                                    <th>Metode Pembayaran</th>
                                                    <th>Tanggal Transaksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $items)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>TR-0{{ $items->id_kasir }}</td>
                                                            <td>{{ $items->id_kasir }}</td>
                                                            <td>{{ $items->nama_pelangan }}</td>
                                                            <td>{{ $items->jumlah_menu }}</td>
                                                            <td>{{ $items->formatRupiah('total_bayar') }}</td>
                                                            <td>{{ $items->metode_pembayaran }}</td>
                                                            <td>{{ $items->created_at }}</td>
                                                        </tr>
                                                    @endforeach  
                                                        <tr>
                                                            <td colspan="5"><strong>Total Penghasilan :</strong></td>
                                                            <td><strong>$9,750</strong></td>
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="invoice-bottom">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <div class="terms-conditions mb-30">
                                                <h3 class="inv-title-1 mb-10">Terms & Conditions</h3>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5">
                                            <div class="payment-method mb-30">
                                                <h3 class="inv-title-1 mb-10">Payment Method</h3>
                                                <ul class="payment-method-list-1 text-14">
                                                    <li><strong>Account No:</strong> 00 123 647 840</li>
                                                    <li><strong>Account Name:</strong> Jhon Doe</li>
                                                    <li><strong>Branch Name:</strong> xyz</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="card-body">
        <div class="table-responsive">
            <table id="example4" class="display" style="min-width: 845px">
                <thead>
                    <tr>
                        <th> # </th>
                        <th>Invoice</th>
                        <th>Nama Kasir</th>
                        <th>Nama Pelangan </th>
                        <th>Jumlah Menu </th>
                        <th>Total Bayar </th>
                        <th>Metode Pembayaran </th>
                        <th>Tanggal Transaksi </th>
                        <th>Status </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $items)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>TR-0{{ $items->id_kasir }}</td>
                        <td>{{ $items->id_kasir }}</td>
                        <td>{{ $items->nama_pelangan }}</td>
                        <td>{{ $items->jumlah_menu }}</td>
                        <td>{{ $items->formatRupiah('total_bayar') }}</td>
                        <td>{{ $items->metode_pembayaran }}</td>
                        <td>{{ $items->created_at }}</td>
                        <td>@if ($items->status == 'success')<span class="badge light badge-success"><i class="fa fa-circle text-success me-1"></i>Success</span> @elseif ($items->status_akun == 'pending') <span class="badge light badge-warning"><i class="fa fa-circle text-warning me-1"></i>Pending</span> @else ($items->status_akun == 'cencel') <span class="badge light badge-danger"><i class="fa fa-circle text-denger me-1"></i>Cencel</span> @endif</td>
                        <!-- <td><strong>120$</strong></td> -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}
</div>
<script>
    function updateTanggalWaktu() {
        var tw = new Date();
        var tahun = tw.getFullYear();
        var hari = tw.getDay();
        var bulan = tw.getMonth();
        var tanggal = tw.getDate();

        var hariarray = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        var bulanarray = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

        var tanggalwaktu = hariarray[hari] + ", " + tanggal + " " + bulanarray[bulan] + " " + tahun;
        document.getElementById("tanggalwaktu").textContent = tanggalwaktu;
    }

    // Panggil fungsi saat dokumen selesai dimuat
    document.addEventListener("DOMContentLoaded", updateTanggalWaktu);
</script>
</body>
</html>