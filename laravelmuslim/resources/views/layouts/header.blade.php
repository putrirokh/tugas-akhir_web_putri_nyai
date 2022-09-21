<header>
    <!-- Header Start -->
   <div class="header-area">
        <div class="main-header ">
            <div class="header-top top-bg d-none d-lg-block">
               <div class="container-fluid">
                   <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left d-flex">
                                <div class="flag">
                                    <img src="assets/img/icon/indonesia.png" alt="">
                                </div>
                                <div class="select-this">
                                    <form action="#">
                                        <div class="select-itms">
                                            <select name="select" id="select1">
                                                <option value="">IND</option>
                                                <option value="">MYS</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <ul class="contact-now">     
                                    <li>+62 812 3456 7680</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                               <ul>                                          
                                        <li><a href="{{ url('profile') }}">My Account</a></li>
                                        @if( Auth::user()->role == 'admin')
                                        <li><a href="{{ url('member') }}">Kelola User</a></li>
                                        @endif
                                        <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                                         </a>
     
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             @csrf
                                         </form></li>
                                   <li><a href="product_list.html">Wish List  </a></li>
                                   <li class="hot"><a href="#">Promo</a></li>
                                   <li><a href="checkout.html">Checkout</a></li>
                               </ul>
                            </div>
                        </div>
                   </div>
               </div>
            </div>
           <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                            <div class="logo">
                              <a href="index.html"><img src="assets/img/logo/muslim.jpg" width="200%" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>                                                
                                    <ul id="navigation">                           
                                        <li><a href="{{ url('/home') }}">Home</a></li>
                                       
                                        <li><a href="{{ url('') }}">Master Data</a>
                                            <ul class="submenu">
                                            <li><a href="{{ url('produk') }}">Produk</a></li>
                                            @if( Auth::user()->role != 'customer')
                                            <li><a href="{{ url('kategori') }}">Kategori</a></li>
                                            <li><a href="{{ url('jenis') }}">Jenis</a></li>
                                            <li><a href="{{ url('merek') }}">Merek</a></li>
                                            @endif
                                            </ul>
                                        </li>
                                        
                                        {{--
                                        <li><a href="#">Jenis</a>
                                            <ul class="submenu">
                                            @php 
                                            $rs1 = App\Jenis::all();
                                            @endphp
                                                @foreach ($rs1 as $jen)
                                                <li>
                                                <a href="{{ url('/produk/'.$jen->id) }}" >{{ $jen -> nama }}</a>
                                                </li>
                                                @endforeach                                            
                                        </ul>
                                        </li>
                                        <li><a href="">Pria</a>
                                            <ul class="submenu">
                                                @php 
                                                $rs1 = App\Jenis::all();
                                                @endphp
                                                    @foreach ($rs1 as $jenis)
                                                    <li>
                                                    <a href="{{ url('/produk/'.$jenis->id) }}" >{{ $jenis -> nama }}</a>
                                                    </li>
                                                    @endforeach                                     
                                            </ul>
                                        </li>
                                        <li><a href="">Anak</a>
                                            <ul class="submenu">
                                                
                                            </ul>
                                        </li>
                                        <li><a href="">Brands</a>
                                            <ul class="submenu">
                                                @php 
                                                $rs2 = App\Merek::all();
                                                @endphp
                                                    @foreach ($rs2 as $merek)
                                                    <li>
                                                    <a href="{{ url('/produk/'.$merek->id) }}" >{{ $merek -> nama }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>    

                                    --}}
                                    <li><a href="{{ url('/koleksiproduk') }}">Koleksi Produk</a></li>
                                        <li><a href="{{ url('') }}">Pemesanan</a>

                                        <li><a href="{{ url('/home') }}">Home</a></li>
                                       
                                            <ul class="submenu">
                                            <li><a href="{{ url('/customer') }}">Customer</a></li>
                                            <li><a href="{{ url('/order') }}">Order</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div> 
                        <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                            <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                <li class="d-none d-xl-block">
                                    <form action = "{{ url('/search') }}" method="GET">
                                        <div class="form-box f-right">
                                            <input type="text" name="search" placeholder="cari produk">
                                        </div>    
                                            <div class="search-icon">
                                                <button class="btn btn-primary my-2 my-sm-0" type="submit">
                                                Cari
                                                </button>                                        
                                            </div>
                                    </form>
                                 </li>
                                <li>
                                    <div class="shopping-card">
                                        <a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </li>
                               <li class="d-none d-lg-block"> <a href="{{ route('login') }}" class="btn header-btn">Login</a></li>
                               <li class="d-none d-lg-block"> <a href="{{ route('register') }}" class="btn header-btn">Daftar</a></li>
                               @csrf
                            </ul>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
   </div>
    <!-- Header End -->
</header>