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
                                <li class="nav-item">
                                    <h4 class="card-title">Fees Collection</h4>
                                </li>
                                <ul class="header-right">
                                    <a data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" class="btn btn-primary d-sm-inline-block d-none">Tambah Users<i class="las la-signal ms-3 scale5"></i></a>
                                </ul>
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
													<form action="{{ route('tambahuser') }}" method="POST" enctype="multipart/form-data" >
                                                        @csrf
                                                            <!-- Photo -->
                                                                <div class="mb-3 row">
                                                                    <label for="username" class="col-sm-3 col-form-label">Foto Profile</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="file" class="form-control @error('photo') is-invalid @enderror"        placeholder="Foto Profile" name="photo" value="{{old('photo')}}" required>
                                                                        <span class="text-danger">@error('photo') {{$message}} @enderror</span>
                                                                    </div>
                                                                </div>
                                                            <!-- End Photo -->
                                                            <!-- Username -->
                                                                <div class="mb-3 row">
                                                                    <label for="username" class="col-sm-3 col-form-label">Username</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="Text" class="form-control @error('username') is-invalid @enderror"        placeholder="Username" name="username" value="{{old('username')}}" required>
                                                                        <span class="text-danger">@error('username') {{$message}} @enderror</span>
                                                                    </div>
                                                                </div>
                                                            <!-- End Username -->
                                                            <!-- Nama Lengkap -->
                                                                <div class="mb-3 row">
                                                                    <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="Text" class="form-control @error('nama_lengkap') is-invalid @enderror"        placeholder="Nama Lengkap" name="nama_lengkap" value="{{old('nama_lengkap')}}" id="nama_lengkap">
                                                                        <span class="text-danger">@error('nama_lengkap') {{$message}} @enderror</span>
                                                                    </div>
                                                                </div>
                                                            <!-- End Nama Lengkap -->
                                                            <!-- Jenis Kelamin -->
                                                                <div class="mb-3 row">
                                                                    <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                                                    <div class="col-sm-9">
                                                                        <select class="default-select form-control wide mb-3 @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="jk" >
                                                                            <option value="L">Laki-Laki</option>
                                                                            <option value="P">Perempuan</option>
                                                                        </select>
                                                                        <span class="text-danger">@error('jenis_kelamin') {{$message}} @enderror</span>
                                                                    </div>
                                                                </div>
                                                            <!-- End Jenis Kelamin -->
                                                            <!-- Alamat -->
                                                                <div class="mb-3 row">
                                                                    <label for="alamat" class="col-sm-3 col-form-label" >Alamat</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="Text" class="form-control @error('alamat') is-invalid @enderror"        placeholder="Alamat" name="alamat" value="{{old('alamat')}}" id="alamat">
                                                                        <span class="text-danger">@error('alamat') {{$message}} @enderror</span>
                                                                    </div>
                                                                </div>
                                                            <!-- End Alamat -->
                                                            <!-- Nomor TLP -->
                                                                <div class="mb-3 row">
                                                                    <label for="nomortlp" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="number" class="form-control @error('nomor_tlp') is-invalid @enderror"        placeholder="Nomor Telepon" name="nomor_tlp" value="{{old('nomor_tlp')}}" id="nomor_tlp">
                                                                        <span class="text-danger">@error('nomor_tlp') {{$message}} @enderror</span>
                                                                    </div>
                                                                </div>
                                                            <!-- End Nomor TLP -->
                                                            <!-- Email -->
                                                                <div class="mb-3 row">
                                                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="email" class="form-control @error('email') is-invalid @enderror"        placeholder="Email" name="email" value="{{old('email')}}" id="email">
                                                                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                                                    </div>
                                                                </div>
                                                            <!-- End Email -->
                                                            <!-- Jenis Kelamin -->
                                                                <div class="mb-3 row">
                                                                    <label for="role" class="col-sm-3 col-form-label">Role</label>
                                                                    <div class="col-sm-9">
                                                                        <select class="default-select form-control wide mb-3 @error('role') is-invalid @enderror" id="role"  name="role">
                                                                            <option value="admin">Admin</option>
                                                                            <option value="kasir">Kasir</option>
                                                                        </select>
                                                                        <span class="text-danger">@error('role') {{$message}} @enderror</span>
                                                                    </div>
                                                                </div>
                                                            <!-- End Jenis Kelamin -->
                                                            <!-- Password -->
                                                                <div class="mb-3 row">
                                                                    <label for="password" class="col-sm-3 col-form-label">Password</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="Password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}"        placeholder="Password" id="password" name="password">
                                                                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                                                    </div>
                                                                </div>
                                                            <!-- End Password -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary" name="submit">Tambah Users</button>
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
                                                <th>Foto</th>
                                                <th>Username </th>
                                                <th>Nama Lengkap </th>
                                                <th>Nomor Telepon </th>
												<th>Email </th>
												<th>Jenis Kelamin </th>
                                                <th>Alamat </th>
                                                <th>Status Akun </th>
                                                <th>Role </th>
                                                <th>Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
										@foreach ($data as $items)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img class="rounded-circle" width="35" src="{{ asset('storage/'.$items->photo) }}" alt=""></td>
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
                                                            <!-- Update -->
                                                                <button data-bs-toggle="modal" data-bs-target=".edit{{$items->id}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></button>
                                                            <!-- End Update -->
                                                            <!-- Modal Alert Update -->
                                                                <div class="modal fade edit{{$items->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h3 class="modal-title">Edit Users</h3>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                            <form action="{{ url('profile/'.$items->id.'/update') }}" method="POST" enctype="multipart/form-data">
                                                                                    @csrf
                                                                                        <!-- Photo -->
                                                                                            <div class="mb-3 row">
                                                                                                <label for="username" class="col-sm-3 col-form-label">Foto Profile</label>
                                                                                                <div class="col-sm-9">
                                                                                                    <input type="file" class="form-control @error('photo') is-invalid @enderror"        placeholder="Foto Profile" name="photo" value="{{$items->photo}}" required>
                                                                                                    <span class="text-danger">@error('photo') {{$message}} @enderror</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        <!-- End Photo -->
                                                                                        <!-- Username -->
                                                                                            <div class="mb-3 row">
                                                                                                <label for="username" class="col-sm-3 col-form-label">Username</label>
                                                                                                <div class="col-sm-9">
                                                                                                    <input type="Text" class="form-control @error('username') is-invalid @enderror"        placeholder="Username" name="username" value="{{ $items->username }}" required>
                                                                                                    <span class="text-danger">@error('username') {{$message}} @enderror</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        <!-- End Username -->
                                                                                        <!-- Nama Lengkap -->
                                                                                            <div class="mb-3 row">
                                                                                                <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                                                                                <div class="col-sm-9">
                                                                                                    <input type="Text" class="form-control @error('nama_lengkap') is-invalid @enderror"        placeholder="Nama Lengkap" name="nama_lengkap" value="{{ $items->nama_lengkap }}" id="nama_lengkap">
                                                                                                    <span class="text-danger">@error('nama_lengkap') {{$message}} @enderror</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        <!-- End Nama Lengkap -->
                                                                                        <!-- Jenis Kelamin -->
                                                                                            <div class="mb-3 row">
                                                                                                <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                                                                                <div class="col-sm-9">
                                                                                                    <select class="default-select form-control wide mb-3 @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="jk" >
                                                                                                        <option value="L" {{$items->jenis_kelamin == 'L' ? 'selected' : ''}}>Laki-Laki</option>
                                                                                                        <option value="P" {{$items->jenis_kelamin == 'P' ? 'selected' : ''}}>Perempuan</option>
                                                                                                    </select>
                                                                                                    <span class="text-danger">@error('jenis_kelamin') {{$message}} @enderror</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        <!-- End Jenis Kelamin -->
                                                                                        <!-- Alamat -->
                                                                                            <div class="mb-3 row">
                                                                                                <label for="alamat" class="col-sm-3 col-form-label" >Alamat</label>
                                                                                                <div class="col-sm-9">
                                                                                                    <input type="Text" class="form-control @error('alamat') is-invalid @enderror"        placeholder="Alamat" name="alamat" value="{{ $items->alamat }}" id="alamat">
                                                                                                    <span class="text-danger">@error('alamat') {{$message}} @enderror</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        <!-- End Alamat -->
                                                                                        <!-- Nomor TLP -->
                                                                                            <div class="mb-3 row">
                                                                                                <label for="nomortlp" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                                                                                <div class="col-sm-9">
                                                                                                    <input type="number" class="form-control @error('nomor_tlp') is-invalid @enderror"        placeholder="Nomor Telepon" name="nomor_tlp" value="{{ $items->nomor_tlp }}" id="nomor_tlp">
                                                                                                    <span class="text-danger">@error('nomor_tlp') {{$message}} @enderror</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        <!-- End Nomor TLP -->
                                                                                        <!-- Email -->
                                                                                            <div class="mb-3 row">
                                                                                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                                                                                <div class="col-sm-9">
                                                                                                    <input type="email" class="form-control @error('email') is-invalid @enderror"        placeholder="Email" name="email" value="{{ $items->email }}" id="email">
                                                                                                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        <!-- End Email -->
                                                                                        <!-- Role -->
                                                                                            <div class="mb-3 row">
                                                                                                <label for="role" class="col-sm-3 col-form-label">Role</label>
                                                                                                <div class="col-sm-9">
                                                                                                    <select class="default-select form-control wide mb-3 @error('role') is-invalid @enderror" id="role"  name="role">
                                                                                                        <option value="admin" {{$items->role == 'admin' ? 'selected' : ''}}>Admin</option>
                                                                                                        <option value="kasir" {{$items->role == 'kasir' ? 'selected' : ''}}>Kasir</option>
                                                                                                    </select>
                                                                                                    <span class="text-danger">@error('role') {{$message}} @enderror</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        <!-- End Role -->
                                                                                        <!-- Status Akun -->
                                                                                            <div class="mb-3 row">
                                                                                                <label for="status_akun" class="col-sm-3 col-form-label">Status Akun</label>
                                                                                                <div class="col-sm-9">
                                                                                                    <select class="default-select form-control wide mb-3 @error('status_akun') is-invalid @enderror" id="status_akun"  name="status_akun">
                                                                                                        <option value="active" {{$items->status_akun == 'active' ? 'selected' : ''}}>Active</option>
                                                                                                        <option value="pending" {{$items->status_akun == 'pending' ? 'selected' : ''}}>Pending</option>
                                                                                                        <option value="blokir" {{$items->status_akun == 'blokir' ? 'selected' : ''}}>Blokir</option>
                                                                                                    </select>
                                                                                                    <span class="text-danger">@error('status_akun') {{$message}} @enderror</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        <!-- End Status Akun -->
                                                                                        <!-- Password -->
                                                                                            <div class="mb-3 row">
                                                                                                <label for="password" class="col-sm-3 col-form-label">Password</label>
                                                                                                <div class="col-sm-9">
                                                                                                    <input type="Password" class="form-control @error('password') is-invalid @enderror"        placeholder="Password" id="password" name="password" value="{{ $items->password }}" >
                                                                                                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        <!-- End Password -->
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
                                                                <a type="button" class="btn btn-danger shadow btn-xs sharp" data-bs-toggle="modal" data-bs-target="#Delet{{$items->id}}"><i class="fa fa-trash"></i></a>
                                                            <!-- End Delete -->
                                                            <!-- Modal Alert Delete -->
                                                                <div class="modal fade" id="Delet{{$items->id}}">
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
                                                                                <form action="{{route('hapususer', $items->id)}}" method="post">
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
