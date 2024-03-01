@php
    $notifies = auth()->user()->notifies->where('read',0)->sortByDesc('created_at')->slice(0,5)
@endphp
<div class="row border-bottom">
    <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a class="navbar-minimalize minimalize-styl-2 btn bg-custom" href="#"><i class="fa fa-bars"></i> </a>
    </div>
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle count-info font-weight-bold" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i> @if (count($notifies) > 0) <span class="label bg-custom"> {{count($notifies)}} </span> @endif
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    @forelse ($notifies as $notify)
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="{{$notify->link . "?notify_id=" . $notify->id}}" class="dropdown-item">
                                <div>
                                    <i class="fa fa-bell fa-fw mr-1"></i> {{$notify->subject}}
                                     <span class="float-right text-muted small"> {{$notify->created_at->diffForHumans()}} </span>
                                </div>
                            </a>
                        </li>
                    @empty
                        <li class="dropdown-divider"></li>
                        <li>
                            <h5 class="text-center text-danger">
                                No Notifications 
                            </h5>
                        </li>
                    @endforelse
                </ul>
            </li>
            <li class="text-capitalize font-weight-bold">
                <a href="{{ route('accountShow', auth()->id())}}" class="text-decoration-none text-dark"> 
                    <i class="fa fa-user mr-2"></i> {{ auth()->user()->name }}
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                    <i class="fa fa-sign-out"></i> 
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
</div>