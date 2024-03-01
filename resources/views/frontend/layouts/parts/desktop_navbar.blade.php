@php
    $notifies = App\Models\Notify::where('user_id', auth()->id())->where('read',0)->latest('id')->limit(5)->get();
    $unread_count = App\Models\Notify::where('user_id', auth()->id())->where('read', 0)->count();
@endphp
<div class="bg-light shadow-lg">
    <div class="container">
        <div class="row justify-content-between align-items-center  p-2">
            <div class="nav-logo col-md-5 col-4">
                <a href="/" class="text-decoration-none">
                    <img src="{{asset('image/logo/'.generalSetting('logo'))}}" alt="" 
                        class="img-fluid w-25">
                </a> 
            </div>
            <div class="nav-items col-md-7 col-8">
                <div class="text-end">
                    <ul class="">
                        <li class="nav-item desktop-icon">
                            <a href="/">
                                <i class="fa-solid fa-house"></i> <small class="{{url()->current() == url('/') ? "
                                    active-nav translate" : 'translate' }}"> Home </small>
                            </a>
                        </li>
                        <li class="nav-item desktop-icon">
                            <a href="{{route('user.market')}}">
                                <i class="fa-solid fa-chart-line"></i> <small
                                    class="{{url()->current() == url('/market') ? " active-nav translate" : 'translate' }}">Market</small>
                            </a>
                        </li>
                        <li class="nav-item desktop-icon">
                            <a href="{{route('user.trade')}}">
                                <i class="fa-solid fa-rotate"></i> <small class="{{url()->current() == url('/trade') ? "
                                    active-nav translate" : 'translate' }}">Trades </small>
                            </a>
                        </li>
                        <li class="nav-item desktop-icon">
                            <a href="{{route('user.wallet')}}">
                                <i class="fa-solid fa-wallet"></i> <small class="{{request()->is('wallet*') ? " active-nav translate"
                                    : 'translate' }}">Wallets</small>
                            </a>
                        </li>
    
                        <li class="nav-item nav-icon">
                            <select id="languageSelect" class="form-select" style="font-size: 0.8em !important">
                                <option value="en"> En </option>
                                <option value="zh"> Ch </option>
                                <option value="id"> In </option>
                                <option value="es"> Sp </option>
                                <option value="my"> My </option>
                                <option value="de"> Ger </option>
                                <option value="pt"> Pt </option>
                                <option value="fil"> Phi </option>
                                <option value="vi"> Vi </option>
                              </select>
                        </li>
                        <li class="nav-item nav-icon">
                            <a href="{{route('user.ticket')}}">
                                <i class="fa-solid fa-envelope {{request()->is('support-ticket*') ? " active-nav" : '' }}"
                                    title="Support Ticket"></i>
                            </a>
                        </li>
                        {{-- Notify starts --}}
                        <li class="nav-item nav-icon">
                           @auth
                           <div class="border-0 position-relative notify-container bg-transparent">
                            <a id="toggleNotify" href="#"><i class="fa-solid fa-bell"></i></a>
                            <div id="content" class="position-absolute shadow-lg">
                                {{-- notify content starts --}}                           
                                @forelse ($notifies as $item)
                                    <div class="border border-1 p-2 rounded-2 my-2">
                                        <a href="{{route('user.transaction', ['noti_id' => $item->id])}}" class="text-decoration-none">
                                            <div class="row">
                                                <div class="col-1">
                                                    <i 
                                                        class="fa-solid fa-bell {{$item->read == 0 ? "" : 'text-custom'}}" 
                                                        style="font-size: 16px"
                                                        title="{{$item->read == 0 ? "Unread" : "Read"}}"
                                                    ></i> 
                                                </div>
                                                <div class="col-10 text-start">
                                                    <h6 class="fw-bold"> {{$item->subject}} </h6>
                                                    <small class="text-muted">{{Str::limit($item->description, 100, '...')}} </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @empty
                                    <div class="text-center text-danger"> No Notifications </div>
                                @endforelse
                                {{-- notify content ends --}}
                            </div>
                            @if ($unread_count > 0)
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{$unread_count}}
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            @endif
                        </div>
                           @endauth
                        </li>
                        {{-- Notify ends --}}
                        <li class="nav-item nav-icon">
                            @if (auth()->user())
                            <div class="dropdown">
                                <button class="btn btn-sm dropdown-toggle text-dark border-none" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{route('user.account')}}" class="dropdown-item">
                                            <span>{{auth()->user()->name}}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            <span class="translate">Logout</span>
                                            <i class="fa fa-sign-out ms-2"></i>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            @else
                            <a href="{{route('login')}}"><i class="fa-solid fa-user"></i></a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>