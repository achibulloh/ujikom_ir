@extends('admin.layouts.menu')
@section('title', 'Laporan')

		<!--**********************************
            Header start
        ***********************************-->
		@section('header')
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                               Laporan 
                            </div>
                        </div>
                    </div>
				</nav>
			</div>
		</div>
		@endsection
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        @section('content')
		<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                <div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="/admin">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="/laporan">Laporan</a></li>
					</ol>
                </div>
				<!-- row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="profile card card-body px-3 pt-3 pb-0">
											<div class="profile-head">
												<div class="profile-info">
													<div class="profile-details">
													<div class="col-12">
															<div class="card">
																<div class="card-header">
																	<div class="example">
																		{{-- <p class="mb-1">Pilih Waktu Laporan</p> --}}
																		<input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2023 - 01/31/20123">
																	</div>
																	<ul class="header-right">
																		<a data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" class="btn btn-primary d-sm-inline-block d-none">Generate Report<i class="las la-signal ms-3 scale5"></i></a>
																	</ul>
																</div>
																<div class="card-body">
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
																					<th>Status </th>
																				</tr>
																			</thead>
																			<tbody>
																			@foreach ($data as $items)
																				<tr>
																					<td>{{ $loop->iteration }}</td>
																					<td>{{ $items->invoice }}</td>
																					<td>{{ $items->id_kasir }}</td>
																					<td>{{ $items->nama_pelangan }}</td>
																					<td>{{ $items->jumlah_menu }}</td>
																					<td>{{ $items->formatRupiah('total_bayar') }}</td>
																					<td>{{ $items->metode_pembayaran }}</td>
																					<td>@if ($items->status == 'success')<span class="badge light badge-success"><i class="fa fa-circle text-success me-1"></i>Success</span> @elseif ($items->status_akun == 'pending') <span class="badge light badge-warning"><i class="fa fa-circle text-warning me-1"></i>Pending</span> @else ($items->status_akun == 'cencel') <span class="badge light badge-danger"><i class="fa fa-circle text-denger me-1"></i>Cencel</span> @endif</td>
																					<!-- <td><strong>120$</strong></td> -->
																				</tr>
																				@endforeach
																			</tbody>
																		</table>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
            </div>
        </div>
		@endsection
        <!--**********************************
            Content body end
        ***********************************-->