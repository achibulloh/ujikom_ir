@extends('admin.layouts.menu')
@section('title', 'Profile')

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
                                Profile 
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
            <div class="container-fluid">
				
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="/admin">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="/profile">Profile</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo rounded">
                                        <!-- <img src="{{ asset('assets/image/logo_bpi.png') }}" class="img-fluid rounded-circle" alt=""> -->
                                    </div>
                                </div>
                                <div class="profile-info">
									<div class="profile-photo">
										<img src="{{Auth::user()->photo == null ? asset('assets/image/logo_bpi.png') : asset(Auth::user()->photo)}}" class="img-fluid rounded-circle" alt="">
									</div>
									<div class="profile-details">
										<div class="profile-name px-3 pt-2">
											<h4 class="text-primary mb-0">Nama Lengkap :</h4>
											<p>{{ auth()->user()->nama_lengkap }}</p>
										</div>
										<div class="profile-email px-3 pt-2">
											<h4 class="text-primary mb-0">Email :</h4>
											<p>{{ auth()->user()->email }}</p>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#about-me" data-bs-toggle="tab" class="nav-link active show">About Me</a>
                                            </li>
                                            <li class="nav-item"><a href="#profile-settings{{auth()->user()->id}}" data-bs-toggle="tab" class="nav-link">Setting</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content"></br>
                                            <div id="about-me" class="tab-pane fade active show">
                                                <div class="profile-personal-info">
                                                    <h4 class="text-primary mb-4">Personal Information</h4>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Nama Lengkap <span class="pull-end">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>{{ auth()->user()->nama_lengkap }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Username <span class="pull-end">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>{{ auth()->user()->username }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Email <span class="pull-end">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>{{ auth()->user()->email }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Jenis Kelamin <span class="pull-end">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>@if (auth()->user()->jenis_kelamin == 'L') Laki-Laki @else (auth()->user()->jenis_kelamin == 'P') Perempuan @endif</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Nomor Telepon <span class="pull-end">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>{{ auth()->user()->nomor_tlp }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Alamat <span class="pull-end">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>{{ auth()->user()->alamat }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="profile-settings{{auth()->user()->id}}" class="tab-pane fade">
                                                <div class="pt-3">
                                                    <div class="settings-form">
                                                        <h4 class="text-primary">Account Setting</h4><br>
                                                        <form action="{{ url('profile/'.auth()->user()->id.'/update') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="mb-3 row">
                                                                <label for="username" class="col-sm-3 col-form-label">Foto Profile</label>
                                                                <div class="col-sm-9">
                                                                    <input type="file" class="form-control @error('photo') is-invalid @enderror"        placeholder="Foto Profile" name="photo" value="{{ auth()->user()->photo }}">
                                                                    <span class="text-danger">@error('photo') {{$message}} @enderror</span>
                                                                </div>
                                                            </div>                            
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label" id="username" >Username</label>
                                                                    <input type="text" placeholder="Your Username" name="username" id="username" value="{{ auth()->user()->username }}" class="form-control @error('username') is-invalid @enderror">
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label" id="nama_lengkap" >Nama Lengkap</label>
                                                                    <input type="text" placeholder="Nama Lengkap" name="nama_lengkap" id="nama_lengkap" value="{{ auth()->user()->nama_lengkap }}" class="form-control @error('nama_lengkap') is-invalid @enderror">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label" id="email" >Email</label>
                                                                    <input type="email" placeholder="Email" name="email" id="email" value="{{ auth()->user()->email }}" class="form-control @error('email') is-invalid @enderror">
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label" id="nomor_tlp" >Nomor Telepone</label>
                                                                    <input type="number" placeholder="Nomor Telepone" name="nomor_tlp" id="nomor_tlp" value="{{ auth()->user()->nomor_tlp }}" class="form-control @error('nomor_tlp') is-invalid @enderror">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                    <label class="form-label" id="password" >Password</label>
                                                                    <input type="password" placeholder="Password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" id="alamat">Address</label>
                                                                <input type="text" placeholder="Yours Address" name="alamat" id="alamat" value="{{ auth()->user()->alamat }}" class="form-control @error('alamat') is-invalid @enderror">
                                                            </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label" id="jenis_kelamin" >Jenis Kelamin</label>
                                                                    <select class="form-control default-select wide @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="jenis_kelamin">
                                                                        <option value="L" {{auth()->user()->jenis_kelamin == 'L' ? 'selected' : ''}}>Laki-Laki</option>
                                                                        <option value="P" {{auth()->user()->jenis_kelamin == 'P' ? 'selected' : ''}}>Perempuan</option>
                                                                    </select>
                                                                </div>
                                                            <button class="btn btn-primary mb-3" type="submit">Update </button>
                                                        </form>
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
