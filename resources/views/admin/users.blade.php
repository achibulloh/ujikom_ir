@extends('admin.layouts.menu')
@section('title', 'Management Users')

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
                               Management Users 
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
						<li class="breadcrumb-item"><a href="/users">Management Users</a></li>
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
                                <h4 class="card-title">Fees Collection</h4>
								<ul class="navbar-nav header-right">
                            <li class="nav-item">
								<a data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" class="btn btn-primary d-sm-inline-block d-none">Tambah Users<i class="las la-signal ms-3 scale5"></i></a>
							</li>
							<!-- Modal Alert Tambah Users -->
							<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Tambah Users</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
													<form action="" method="post">
													<div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
													</form>
												</div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </ul>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example4" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Username</th>
                                                <th>Nama Lengkap</th>
                                                <th>Nomor Telepon</th>
												<th>Email</th>
												<th>Jenis Kelamin</th>
                                                <th>Alamat</th>
                                                <th>Status Akun</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										@foreach ($data as $items)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $items->username }}</td>
                                                <td>{{ $items->nama_lengkap }}</td>
                                                <td>{{ $items->nomor_tlp }}</td>
                                                <td>{{ $items->email }}</td>
												<td>@if ( $items->jenis_kelamin == 'L') Laki-Laki @else ( $items->jenis_kelamin == 'P') Perempuan @endif</td>
												<td>{{ $items->alamat }}</td>
												<td>@if ($items->status_akun == 'active')<span class="badge light badge-success"><i class="fa fa-circle text-success me-1"></i>Active</span> @elseif ($items->status_akun == 'pending') <span class="badge light badge-warning"><i class="fa fa-circle text-warning me-1"></i>Pending</span> @else ($items->status_akun == 'blokir') <span class="badge light badge-danger"><i class="fa fa-circle text-denger me-1"></i>Blokir</span> @endif</td>
                                                <td>{{ $items->role }}</td>
                                                <!-- <td><strong>120$</strong></td> -->
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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