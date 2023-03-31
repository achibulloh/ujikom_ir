<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart Chasier - Dasboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/stylee.css') }}">
  <!-- FAVICONS ICON -->
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/image/png/LogoOnly.png') }}" />
</head>
<body class="bg-blue-gray-50" x-data="initApp()" x-init="initDatabase()">
  <!-- noprint-area -->
  <div class="hide-print flex flex-row h-screen antialiased text-blue-gray-800">
    <!-- left sidebar -->
    <div class="flex flex-row w-auto flex-shrink-0 pl-4 pr-2 py-4">
      <div class="flex flex-col items-center py-4 flex-shrink-0 w-20 bg-cyan-500 rounded-3xl">
        <a href="/kasir"
           class="flex items-center justify-center h-12 w-12 bg-cyan-50 text-cyan-700 rounded-full">
           <img src="{{ asset('assets/image/png/LogoOnly.png') }}" alt="SMART CHASIER" >
        </a>
        <ul class="flex flex-col space-y-2 mt-12">
          <li>
            <a href="/kasir" class="flex items-center">
              <span class="flex items-center justify-center h-12 w-12 rounded-2xl bg-cyan-300 shadow-lg text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
              </span>
            </a>
          </li>
        </ul>
            <a class="mt-auto flex items-center justify-center text-cyan-200 hover:text-cyan-100 h-10 w-10 focus:outline-none" href="/logout">
              <span class="flex items-center justify-center h-12 w-12 rounded-2xl bg-cyan-300 shadow-lg text-white">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 512 512" fill="white"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z"/></svg>
              </span>
            </a>
      </div>
    </div>
    <!-- Modal -->
    {{-- <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            You seriously want logout?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <a href="/logout" type="button" class="btn btn-primary">Logout</a>
          </div>
        </div>
      </div>
    </div> --}}

    <!-- page content -->
    <div class="flex-grow flex">
      <!-- store menu -->
      <form action="{{ route('kasir.cari') }}" method="GET" >
        <div class="flex flex-col bg-blue-gray-50 h-full w-full py-4">
          <div class="flex px-2 flex-row relative">
            <button type="submit">
              <div class="absolute left-5 top-3 px-2 py-2 rounded-full bg-cyan-500 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </div>
            </button>
                <input name="cari" type="text" class="bg-white rounded-3xl shadow text-lg full w-full h-16 py-4 pl-16 transition-shadow focus:shadow-2xl focus:outline-none" placeholder="Cari menu ..." value="{{$request->cari}}" autofocus />
              </form>
          </div>
        <div class="h-full overflow-hidden mt-4">
          <div class="h-full overflow-y-auto px-2">
            <div class="grid grid-cols-4 gap-4 pb-3">
              @foreach ($data as $items)
              <form action="{{ route('cart.store')}}" method="POST">
                @csrf
                <button type="submit">
                  <div type="hidden" class="select-none cursor-pointer transition-shadow overflow-hidden rounded-2xl bg-white shadow hover:shadow-lg" >
                    <input type="hidden" name="id_menu" value="{{$items->id_menu}}" >
                    <input type="hidden" name="qty" value="1" >
                    <img src="{{$items->photo_menu == null ? asset('photo/LogoOnly.png') : asset($items->photo_menu)}}" alt="{{$items->nama_menu}}">
                    <div class="flex pb-3 px-3 text-sm -mt-3">
                      <p class="flex-grow truncate mr-1">{{$items->nama_menu}}</p>
                      <p class="nowrap font-semibold">{{$items->formatRupiah('harga') }}</p>
                    </div>
                  </div>
                </button>
              </form>
              @endforeach
              {{-- {{$items->links()}} --}}
              </div>
            </div>
        </div>
      </div>
      <!-- end of store menu -->

      <!-- right sidebar -->
      <div class="w-5/12 flex flex-col bg-blue-gray-50 h-full bg-white pr-4 pl-2 py-4">
        <div class="bg-white rounded-3xl flex flex-col h-full shadow">

          <!-- cart items -->
          <div class="flex-1 flex flex-col overflow-auto">
            <div class="h-16 text-center flex justify-center">
              <div class="pl-8 text-left text-lg py-4 relative">
                <!-- cart icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <div class="text-center absolute bg-cyan-500 text-white w-5 h-5 text-xs p-0 leading-5 rounded-full -right-2 top-3">{{$totalCart}}</div>
              </div>
              <div class="flex-grow px-8 text-right text-lg py-4 relative">
                @foreach ($cart as $items)
                <form action="{{ route('clear',$items->id_kasir)}}" method="POST">
                  @endforeach
                  @csrf
                  {{-- @method('delete') --}}
                  <!-- trash button -->
                  <button type="submit" class="text-blue-gray-300 hover:text-pink-500 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                  </button>
                </form>
              </div>
            </div>

            <div class="flex-1 w-full px-4 overflow-auto">
              @foreach ($cart as $items)
              @php 
              $total = 0;
              @endphp
                <div class="select-none mb-3 bg-blue-gray-50 rounded-lg w-full text-blue-gray-700 py-2 px-2 flex justify-center">
                  <img src="{{$items->menu->photo_menu == null ? asset('photo/LogoOnly.png') : asset($items->menu->photo_menu)}}" alt="{{$items->menu->nama_menu}}" class="rounded-lg h-10 w-10 bg-white shadow mr-2">
                  <div class="flex-grow">
                    <h5 class="text-sm">{{$items->menu->nama_menu}}</h5>
                    <p class="text-xs block">{{$items->menu->formatRupiah('harga')}}</p>
                  </div>
                  <div class="py-1">
                    <div class="w-28 grid grid-cols-3 gap-2 ml-2">
                      <form action="{{ route('kurangqty')}}" method="POST">
                        @csrf 
                        @if(Session::has("delet"))
                           @method('delete')
                        @endif
                          <input type="hidden" name="id_menu" value="{{$items->id_menu}}" >
                          <input type="hidden" name="qty" value="1" >
                          <button type="submit" class="rounded-lg text-center py-1 text-white bg-blue-gray-600 hover:bg-blue-gray-700 focus:outline-none w-8 h-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-3 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                            </svg>
                          </button>
                      </form>
                      <input value="{{$items->qty}}" type="text" class="bg-white rounded-lg w-8 h-8 text-center shadow focus:outline-none focus:shadow-lg text-sm" readonly>
                      <form action="{{ route('tambahqty')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id_menu" value="{{$items->id_menu}}" >
                        <input type="hidden" name="qty" value="1" >
                        <button type="submit" class="rounded-lg text-center py-1 text-white bg-blue-gray-600 hover:bg-blue-gray-700 focus:outline-none w-8 h-8">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-3 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                          </svg>
                        </button>
                      </form>
                      </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
          <!-- end of cart items -->

          <!-- payment info -->
          <div class="select-none h-auto w-full text-center pt-3 pb-4 px-4">
            <div class="flex mb-3 text-lg font-semibold text-blue-gray-700">
              <div>TOTAL</div>
              <div class="text-right w-full" id="totalHarga">Rp. {{$totalHargaFormatted}}</div>
            </div>
            <div class="mb-3 text-blue-gray-700 px-3 pt-2 pb-3 rounded-lg bg-blue-gray-50">
              <hr class="my-2">
                <div class="flex text-lg font-semibold">
                  <div class="flex-grow text-left">CASH</div>
                  <div class="flex text-right">
                    <div class="mr-2">Rp</div>
                    <input type="number" class="w-28 text-right bg-white shadow rounded-lg focus:bg-white focus:shadow-lg px-2 focus:outline-none" id="totalBayar">
                  </div>
                </div>
              <hr class="my-2">
            </div>
            <div class="flex mb-3 text-lg font-semibold bg-cyan-50 text-blue-gray-700 rounded-lg py-2 px-3">
              <div class="text-cyan-800">CHANGE</div>
              <div
                class="text-right flex-grow text-cyan-600" id="change">
              </div>
            </div>
            <div class="text-white rounded-2xl text-lg w-full py-3 focus:outline-none">
              <button data-bs-toggle="modal" data-bs-target="#totransaksi" type="submit" class="text-white bg-cyan-600 rounded-2xl text-lg w-full py-3 focus:outline-none">BAYAR</button>
            </div>
            {{-- Modal --}}
              <div class="modal fade" id="totransaksi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Transaksi</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('transaksi') }}" method="POST">
                           @csrf
                            <div class="mb-3 row">
                              <label for="nama_pelangan" class="col-sm-3 col-form-label">Nama Pelangan</label>
                              <div class="col-sm-9">
                                <input type="Text" class="form-control @error('nama_pelangan') is-invalid @enderror" placeholder="Nama Pelangan" name="nama_pelangan" value="{{old('nama_pelangan')}}" id="nama_pelangan">
                                <span class="text-danger">@error('nama_pelangan') {{$message}} @enderror</span>
                              </div>  
                            </div>
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Foto Menu</th>
                                  <th>Nama Menu</th>
                                  <th>Qty</th>
                                  <th>Total Pembayaran</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($cart as $items)
                                <tr>
                                  <th>{{ $loop->iteration }}</th>
                                  <th><img class="rounded-circle" width="35" src="{{$items->menu->photo_menu == null ? asset('assets/image/logo_bpi.png') : asset($items->menu->photo_menu)}}" alt="{{$items->nama_menu}}"></th>
                                  <th>{{$items->menu->nama_menu}}</th>
                                  <th>{{$items->qty}}</th>
                                  {{-- Formater idr --}}
                                  @php
                                    $total = $items->menu->harga * $items->qty;
                                    $total1 =number_format($total,2,',','.');
                                  @endphp
                                  {{-- End Formater idr --}}
                                  <th>Rp. {{$total1}}</th>
                                </tr>
                                @endforeach
                                <tr>
                                  <th colspan="4">Total Bayar</th>
                                  <th>Rp. {{$totalHargaFormatted}}</th>
                                </tr>
                                <tr>
                                  <th colspan="4">Uang Tunai</th>
                                  <th id="totalBayar">Rp. 0</th>
                                </tr>
                                <tr>
                                  <th colspan="4">Change</th>
                                  <th id="change">Rp. 0</th>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="text-white bg-cyan-600 rounded-2 text-lg w-40 py-2 focus:outline-none">Lanjut</button>
                          </form>
                        </div>
                  </div>
                </div>
              </div>
					  {{-- End Modal --}}
          </div>
          <!-- end of payment info -->
        </div>
      </div>
      <!-- end of right sidebar -->
    </div>

  {{-- <div id="print-area" class="print-area"></div> --}}
  <!-- Scripts -->
  <script src="{{ asset('assets/js/scriptt.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/idb/build/iife/index-min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    const getTotalHarga = document.getElementById('totalHarga');
    const getTotalBayar = document.getElementById('totalBayar');
    const getKembalian = document.getElementById('change');

    getTotalBayar.addEventListener('change', (e) => {
        const totalHarga = +(getTotalHarga.innerText.replace(/\D/g, ''));
        getKembalian.innerText = (+(e.target.value) - totalHarga).toLocaleString('id-ID',{style: 'currency',currency: 'IDR',});
    })

    // getTotalBayar.on('change', (e) => {
    //   const totalHarga = +(getTotalHarga.innerText.replace(/\D/g, ''))
    //   console.log(e.target.value)
    //   // const totalHarga = parseInt(getTotalHarga.innerText.replace('Rp. ', ''))
    //   // const totalBayar = parseInt(e.target.value.replace(',', ''))
    //   // const kembalian = `Rp. ${(totalHarga - totalBayar).toLocaleString('id-ID')}`
    //   // getKembalian.innerText = kembalian;
    // })

  </script>
  @if(Session::has("success"))
  <script>
        toastr.success("{{Session::get('success')}}", "Success", {
          positionClass: "toast-top-right",
          timeOut: 5e3,
          closeButton: !0,
          debug: !1,
          newestOnTop: !0,
          progressBar: !0,
          preventDuplicates: !0,
          onclick: null,
          showDuration: "300",
          hideDuration: "1000",
          extendedTimeOut: "1000",
          showEasing: "swing",
          hideEasing: "linear",
          showMethod: "fadeIn",
          hideMethod: "fadeOut",
          tapToDismiss: !1
        })
  </script>
  @endif
</body>
</html>