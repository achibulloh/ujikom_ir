@extends('admin.layouts.menu')
@section('title', 'Menu')

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
                               Menu 
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
						<li class="breadcrumb-item"><a href="/menu">Menu</a></li>
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
												<li class="nav-item">
													<h4 class="card-title">Fees Collection</h4>
												</li>
												<ul class="header-right">
													<a data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" class="btn btn-primary d-sm-inline-block d-none">Tambah Category<i class="las la-signal ms-3 scale5"></i></a>
												</ul>
											<!-- Modal Alert Tambah Users -->
											<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
														<div class="modal-dialog modal-lg">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Tambah Menu</h5>
																	<button type="button" class="btn-close" data-bs-dismiss="modal">
																	</button>
																</div>
																<div class="modal-body">
																	<form action="" method="POST">
																		@csrf
																			<!-- Nama Kategori -->
																				<div class="mb-3 row">
																					<label for="nama_kategori" class="col-sm-3 col-form-label">Nama Menu</label>
																					<div class="col-sm-9">
																						<input type="Text" class="form-control @error('nama_kategori') is-invalid @enderror" placeholder="Nama Kategori" name="nama_kategori" value="{{old('nama_kategori')}}" id="nama_kategori">
																						<span class="text-danger">@error('nama_kategori') {{$message}} @enderror</span>
																					</div>
																				</div>
																			<!-- End Nama kategori -->
																			<div class="modal-footer">
																				<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
																				<button type="submit" class="btn btn-primary" name="submit">Tambah Kategori</button>
																			</div>
																	</form>
																</div>
															</div>
														</div>
													</div>
										
											</div>
											<div class="card-body">
												<div class="table-responsive">
													<table id="example4" class="display" style="min-width: 845px">
														<thead>
															<tr>
																<th> # </th>
																<th> Foto Menu </th>
																<th> Nama Menu </th>
																<th> Nama Category </th>
																<th> Harga </th>
																<th> Stok Barang </th>
																<th> Action </th>
															</tr>
														</thead>
														<tbody>
														@foreach ($data as $items)
															<tr>
																<td>{{ $loop->iteration }}</td>
																<td><img class="rounded-circle" width="35" src="{{ asset('assets/dsadmin/images/profile/small/pic1.jpg 	') }}" alt=""></td>
																<td>KT-{{ $items->id_kategori }}</td>
																<td>{{ $items->nama_kategori }}</td>
																<td>{{ $items->nama_kategori }}</td>
																<td>{{ $items->nama_kategori }}</td>
																<td>{{ $items->nama_kategori }}</td>
																<!-- <td><strong>120$</strong></td> -->
																<td>
																	<div class="d-flex">
																			<!-- Update -->
																				<button data-bs-toggle="modal" data-bs-target=".edit{{$items->id_kategori}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></button>
																			<!-- End Update -->
																			<!-- Modal Alert Update -->
																				<div class="modal fade edit{{$items->id_kategori}}" tabindex="-1" role="dialog" aria-hidden="true">
																					<div class="modal-dialog modal-lg">
																						<div class="modal-content">
																							<div class="modal-header">
																								<h3 class="modal-title">Edit Kategori</h3>
																								<button type="button" class="btn-close" data-bs-dismiss="modal">
																								</button>
																							</div>
																							<div class="modal-body">
																								<form action="{{ url('kategori/'.$items->id_kategori.'/updatekategori') }}" method="POST">
																									@csrf
																										<!-- Nama Lengkap -->
																											<div class="mb-3 row">
																												<label for="nama_kategori" class="col-sm-3 col-form-label">Nama Kategori</label>
																												<div class="col-sm-9">
																													<input type="Text" class="form-control @error('nama_kategori') is-invalid @enderror"        placeholder="Nama Kategori" name="nama_kategori" value="{{ $items->nama_kategori }}" id="nama_kategori">
																													<span class="text-danger">@error('nama_kategori') {{$message}} @enderror</span>
																												</div>
																											</div>
																										<!-- End Nama Lengkap -->
																										<div class="modal-footer">
																											<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
																											<button type="submit" class="btn btn-primary" name="submit">Update Users</button>
																										</div>
																								</form>
																							</div>
																						</div>
																					</div>
																				</div>
																			<!-- End Modal Alert Update -->
																			<!-- Delete -->
																				<a type="button" class="btn btn-danger shadow btn-xs sharp" data-bs-toggle="modal" data-bs-target="#Delete{{$items->id_kategori}}"><i class="fa fa-trash"></i></a>
																			<!-- End Delete -->
																			<!-- Modal Alert Delete -->
																				<div class="modal fade" id="Delete{{$items->id_kategori}}">
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
																								<form action="{{ route('hapuskategori', $items->id_kategori) }}" method="post">
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