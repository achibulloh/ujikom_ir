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
													<a data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" class="btn btn-primary d-sm-inline-block d-none">Tambah Menu<i class="las la-signal ms-3 scale5"></i></a>
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
																	<form action="{{ route('tambahmenu') }}" method="POST" enctype="multipart/form-data">
																		@csrf
																			<!-- Photo Menu -->
																				<div class="mb-3 row">
																					<label for="photo_menu" class="col-sm-3 col-form-label">Photo Menu</label>
																					<div class="col-sm-9">
																						<input type="file" class="form-control @error('photo_menu') is-invalid @enderror" placeholder="Photo Menu" name="photo_menu" value="{{old('photo_menu')}}" id="photo_menu">
																						<span class="text-danger">@error('photo_menu') {{$message}} @enderror</span>
																					</div>
																				</div>
																			<!-- End Photo Menu -->
																			<!-- Nama Menu -->
																				<div class="mb-3 row">
																					<label for="nama_menu" class="col-sm-3 col-form-label">Nama Menu</label>
																					<div class="col-sm-9">
																						<input type="Text" class="form-control @error('nama_menu') is-invalid @enderror" placeholder="Nama Menu" name="nama_menu" value="{{old('nama_menu')}}" id="nama_menu">
																						<span class="text-danger">@error('nama_menu') {{$message}} @enderror</span>
																					</div>
																				</div>
																			<!-- End Nama Menu -->
																			<!-- Nama Category -->
																					<div class="mb-3 row">
																						<label for="harga_menu" class="col-sm-3 col-form-label">Nama Category</label>
																						<div class="col-sm-9">
																							<select id="single-select" name="id_kategori">
																								@foreach ($kategori as $items)
																									<option value="{{ $items->id_kategori }}">{{ $items->nama_kategori }}</option>
																								@endforeach
																							</select>
																								<span class="text-danger">@error('id_kategori') {{$message}} @enderror</span>
																						</div>
																					</div>
																			<!-- End Nama Category -->
																			<!-- Harga Menu -->
																				<div class="mb-3 row">
																					<label for="harga_menu" class="col-sm-3 col-form-label">Harga Menu</label>
																					<div class="col-sm-9">
																						<input type="number" class="form-control @error('harga') is-invalid @enderror" placeholder="Harga Menu" name="harga" value="{{old('harga')}}" id="harga_menu">
																						<span class="text-danger">@error('harga') {{$message}} @enderror</span>
																					</div>
																				</div>
																			<!-- End Harga Menu -->
																			<!-- Stok Menu -->
																				<div class="mb-3 row">
																					<label for="stok_menu" class="col-sm-3 col-form-label">Stok Menu</label>
																					<div class="col-sm-9">
																						<input type="number" class="form-control @error('stok') is-invalid @enderror" placeholder="Stok Menu" name="stok" value="{{old('stok')}}" id="stok_menu">
																						<span class="text-danger">@error('stok') {{$message}} @enderror</span>
																					</div>
																				</div>
																			<!-- End Stok Menu -->
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
																<th> Stok Menu </th>
																<th> Action </th>
															</tr>
														</thead>
														<tbody>
														@foreach ($data as $items)
															<tr>
																<td>{{ $loop->iteration }}</td>
																<td><img class="rounded-circle" width="35" src="{{$items->photo_menu == null ? asset('assets/image/logo_bpi.png') : asset($items->photo_menu)}}" alt=""></td>
																<td>{{ $items->nama_menu }}</td>
																<td>{{ $items->kategori->nama_kategori }}</td>
																<td>{{ $items->formatRupiah('harga') }}</td>
																<td>{{ $items->stok }}</td>
																<!-- <td><strong>120$</strong></td> -->
																<td>
																	<div class="d-flex">
																			<!-- Update -->
																				<button data-bs-toggle="modal" data-bs-target=".edit{{$items->id_menu}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></button>
																			<!-- End Update -->
																			<!-- Modal Alert Update -->
																				<div class="modal fade edit{{$items->id_menu}}" tabindex="-1" role="dialog" aria-hidden="true">
																					<div class="modal-dialog modal-lg">
																						<div class="modal-content">
																							<div class="modal-header">
																								<h3 class="modal-title">Edit Menu</h3>
																								<button type="button" class="btn-close" data-bs-dismiss="modal">
																								</button>
																							</div>
																							<div class="modal-body">
																								<form action="{{ url('menu/'.$items->id.'/update') }}" method="POST">
																									@csrf
																										<!-- Photo Menu -->
																											<div class="mb-3 row">
																												<label for="photo_menu" class="col-sm-3 col-form-label">Photo Menu</label>
																												<div class="col-sm-9">
																													<input type="file" class="form-control @error('photo_menu') is-invalid @enderror" placeholder="Photo Menu" name="photo_menu" value="{{ $items->photo_menu }}" id="photo_menu">
																													<span class="text-danger">@error('photo_menu') {{$message}} @enderror</span>
																												</div>
																											</div>
																										<!-- End Photo Menu -->
																										<!-- Nama Menu -->
																											<div class="mb-3 row">
																												<label for="nama_menu" class="col-sm-3 col-form-label">Nama Menu</label>
																												<div class="col-sm-9">
																													<input type="Text" class="form-control @error('nama_menu') is-invalid @enderror" placeholder="Nama Menu" name="nama_menu" value="{{ $items->nama_menu }}" id="nama_menu">
																													<span class="text-danger">@error('nama_menu') {{$message}} @enderror</span>
																												</div>
																											</div>
																										<!-- End Nama Menu -->
																										<!-- Nama Category -->
																												<div class="mb-3 row">
																													<label for="harga_menu" class="col-sm-3 col-form-label">Nama Category</label>
																													<div class="col-sm-9">
																														<select id="single-select" name="id_kategori">
																															@foreach ($kategori as $items)
																																<option value="{{ $items->id_kategori }}">{{ $items->nama_kategori }}</option>
																															@endforeach
																														</select>
																															<span class="text-danger">@error('id_kategori') {{$message}} @enderror</span>
																													</div>
																												</div>
																										<!-- End Nama Category -->
																										<!-- Harga Menu -->
																											<div class="mb-3 row">
																												<label for="harga_menu" class="col-sm-3 col-form-label">Harga Menu</label>
																												<div class="col-sm-9">
																													<input type="number" class="form-control @error('harga') is-invalid @enderror" placeholder="Harga Menu" name="harga" value="{{ $items->harga }}" id="harga_menu">
																													<span class="text-danger">@error('harga') {{$message}} @enderror</span>
																												</div>
																											</div>
																										<!-- End Harga Menu -->
																										<!-- Stok Menu -->
																											<div class="mb-3 row">
																												<label for="stok_menu" class="col-sm-3 col-form-label">Stok Menu</label>
																												<div class="col-sm-9">
																													<input type="number" class="form-control @error('stok') is-invalid @enderror" placeholder="Stok Menu" name="stok" value="{{ $items->stok }}" id="stok_menu">
																													<span class="text-danger">@error('stok') {{$message}} @enderror</span>
																												</div>
																											</div>
																										<!-- End Stok Menu -->
																										<div class="modal-footer">
																											<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
																											<button type="submit" class="btn btn-primary" name="submit">Edit Menu</button>
																										</div>
																								</form>
																							</div>
																						</div>
																					</div>
																				</div>
																			<!-- End Modal Alert Update -->
																			<!-- Delete -->
																				<a type="button" class="btn btn-danger shadow btn-xs sharp" data-bs-toggle="modal" data-bs-target=".Delete{{$items->id_menu}}"><i class="fa fa-trash"></i></a>
																			<!-- End Delete -->
																			<!-- Modal Alert Delete -->
																				<div class="modal fade Delete{{$items->id_menu}}">
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
																								<form action="" method="POST">
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