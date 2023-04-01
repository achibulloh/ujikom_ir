@extends('admin.layouts.menu')
@section('title', 'Transaksi')

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
                               Transaksi 
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
						<li class="breadcrumb-item"><a href="/transaksi">Transaksi</a></li>
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
                                                <th>Action </th>
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
												<td>@if ($items->status == 'success')<span class="badge light badge-success"><i class="fa fa-circle text-success me-1"></i>Success</span> @elseif ($items->status_akun == 'pending') <span class="badge light badge-warning"><i class="fa fa-circle text-warning me-1"></i>Pending</span> @else ($items->status_akun == 'cencel') <span class="badge light badge-danger"><i class="fa fa-circle text-denger me-1"></i>Cencel</span> @endif</td>
                                                <!-- <td><strong>120$</strong></td> -->
                                                <td>
													<div class="d-flex">
                                                            <!-- Update -->
                                                                <button data-bs-toggle="modal" data-bs-target=".edit{{$items->id_transaksi}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-info"></i></button>
                                                            <!-- End Update -->
                                                            <!-- Modal Alert Update -->
                                                                <div class="modal fade edit{{$items->id_transaksi}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h3 class="modal-title">Detail Transaksi</h3>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                {{-- hhh --}}
                                                                                <div class="mb-3 row">
                                                                                    <label for="invoice" class="col-sm-3 col-form-label">Invoice Transaksi</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="Text" class="form-control" placeholder="Nama Menu" name="invoice" value="TR-0{{ $items->id_kasir }}" id="invoice" readonly>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mb-3 row">
                                                                                    <label for="id_kasir" class="col-sm-3 col-form-label">Nama Kasir</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="Text" class="form-control" placeholder="Nama Menu" name="id_kasir" value="{{ $items->id_kasir }}" id="id_kasir" readonly>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mb-3 row">
                                                                                    <label for="nama_pelangan" class="col-sm-3 col-form-label">Nama Pelangan</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="Text" class="form-control" placeholder="Nama Menu" name="nama_pelangan" value="{{ $items->nama_pelangan }}" id="nama_pelangan" readonly>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mb-3 row">
                                                                                    <label for="jumlah_menu" class="col-sm-3 col-form-label">Jumlah Pesanan</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="Text" class="form-control" placeholder="Nama Menu" name="jumlah_menu" value="{{ $items->jumlah_menu }}" id="jumlah_menu" readonly>
                                                                                    </div>
                                                                                </div>  
                                                                                <div class="mb-3 row">
                                                                                    <label for="total_bayar" class="col-sm-3 col-form-label">Total Bayar</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="Text" class="form-control" placeholder="Nama Menu" name="total_bayar" value="{{ $items->total_bayar }}" id="total_bayar" readonly>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mb-3 row">
                                                                                    <label for="metode_pembayaran" class="col-sm-3 col-form-label">Metode Pembayaran</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="Text" class="form-control" placeholder="Nama Menu" name="metode_pembayaran" value="{{ $items->metode_pembayaran }}" id="metode_pembayaran" readonly>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mb-3 row">
                                                                                    <label for="status" class="col-sm-3 col-form-label">Status Transaksi</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="Text" class="form-control" placeholder="Nama Menu" name="status" value="{{ $items->status }}" id="status" readonly>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mb-3 row">
                                                                                    <label for="created_at" class="col-sm-3 col-form-label">Tanggal Transaksi</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="Text" class="form-control" placeholder="Nama Menu" name="created_at" value="{{ $items->created_at }}" id="created_at" readonly>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                                                                    {{-- <button type="submit" class="btn btn-primary" name="submit">Edit Menu</button> --}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <!-- End Modal Alert Update -->
                                                            <!-- Delete -->
                                                                {{-- <a type="button" class="btn btn-danger shadow btn-xs sharp" data-bs-toggle="modal" data-bs-target="#Delet{{$items->id_transaksi}}"><i class="fa fa-trash"></i></a> --}}
                                                            <!-- End Delete -->
                                                            <!-- Modal Alert Delete -->
                                                                <div class="modal fade" id="Delet{{$items->id_transaksi}}">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Delete</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">Are you sure to delete ?</div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                                                <!-- @method('delete') -->
                                                                                <form action="" method="post">
                                                                                    @method('delete')
                                                                                    @csrf
                                                                                    <button type="submit" class="btn btn-primary">Yes, Delete</button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <!-- End Modal Alert Delete -->
													</div>												
												</td>
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
