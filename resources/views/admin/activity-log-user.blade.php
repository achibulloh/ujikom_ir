@extends('admin.layouts.menu')
@section('title', 'Activity Log Users')

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
                                Activity Log Users 
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
						<li class="breadcrumb-item"><a href="/activity">Activity Log Users</a></li>
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
                                    {{-- <h4 class="card-title">Fees Collection</h4> --}}
                                </li>
                                <ul class="header-right">
                                    {{-- <a data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" class="btn btn-primary d-sm-inline-block d-none">Tambah Users<i class="las la-signal ms-3 scale5"></i></a> --}}
                                </ul>
                        
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
												<th>Email </th>
                                                <th>Status </th>
                                                <th>Role </th>
                                                <th>Last Seen </th>
                                                <th>Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
										@foreach ($data as $items)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img class="rounded-circle" width="35" src="{{$items->photo == null ? asset('assets/image/logo_bpi.png') : asset($items->photo)}}" alt=""></td>
                                                <td>{{ $items->username }}</td>
                                                <td>{{ $items->nama_lengkap }}</td>
                                                <td>{{ $items->email }}</td>
                                                <td>
                                                    @if(Cache::has('user-is-online-' . $items->id))
                                                        <span class="badge light badge-success"><i class="fa fa-circle text-success me-1"></i>Online</span>
                                                        {{-- <span class="text-success"></span> --}}
                                                    @else
                                                        <span class="badge light badge-danger"><i class="fa fa-circle text-denger me-1"></i>Offline</span>
                                                        {{-- <span class="text-secondary">Offline</span> --}}
                                                    @endif
                                                </td>
                                                <td>{{ $items->role }}</td>
                                                <td align=center>{{ \Carbon\Carbon::parse($items->last_seen)->diffForHumans() }}</td>
                                                <td>
                                                                                       <!-- Delete -->
                                                                                       <a type="button" class="btn btn-primary shadow btn-xs" data-bs-toggle="modal" data-bs-target="#Delet{{$items->id}}">
                                                                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-white" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                                                                        </a>
                                                                                       <!-- End Delete -->
                                                                                       <!-- Modal Alert Delete -->
                                                                                           <div class="modal fade" id="Delet{{$items->id}}">
                                                                                               <div class="modal-dialog" role="document">
                                                                                                   <div class="modal-content">
                                                                                                       <div class="modal-header">
                                                                                                           <h5 class="modal-title">Logout Users : {{ $items->username }}</h5>
                                                                                                           <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                                                                           </button>
                                                                                                       </div>
                                                                                                       <div class="modal-body">Are you sure to Logout ?</div>
                                                                                                       <div class="modal-footer">
                                                                                                           <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                                                                           {{-- <form action="{{route('hapususer', $items->id)}}" method="post">
                                                                                                               @method('delete')
                                                                                                               @csrf --}}
                                                                                                               <a type="button" href="/logout/id-{{ $items->id }}" class="btn btn-primary">Yes, Logout</a>
                                                                                                           </form>
                                                                                                       </div>
                                                                                                   </div>
                                                                                               </div>
                                                                                           </div>
                                                                                       <!-- End Modal Alert Delete -->
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
