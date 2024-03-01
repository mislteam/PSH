<style>
    .bottom-navbar {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #2196F3;
        padding: 10px;
        z-index: 200;
    }
    .bottom-navbar a {
        text-decoration: none;
        color: #000000;
    }

    .active-button-nav {
        color: #e0deef;
    }
</style>

<div class="bottom-navbar p-2">
    <div class="d-flex justify-content-around">
        <div class="text-center bot-nav-item">
            <a href="{{route('home')}}"> 
                <i class="fa-solid fa-house"></i> <br>             
                <small class="nav-button-text {{url()->current() == url('/') ? 'active-button-nav' : ''}}"> 
                    <span class="translate">Home</span> 
                </small>
            </a> 
        </div>
        <div class="text-center bot-nav-item">
            <a href="{{route('user.market')}}"> 
                <i class="fa-solid fa-chart-line"></i> <br>          
                <small class="nav-button-text {{url()->current() == url('/market') ? 'active-button-nav' : ''}}">  
                    <span class="translate"> Market </span> 
                </small>
            </a>
        </div>
        <div class="text-center bot-nav-item">
            <a href="{{route('user.trade')}}"> 
                <i class="fa-solid fa-rotate"></i> <br>             
                <small class="nav-button-text {{url()->current() == url('/trade') ? 'active-button-nav' : ''}}"> 
                    <span class="translate"> Trades </span> 
                </small>
            </a>
        </div>
        <div class="text-center bot-nav-item">
            <a href="{{route('user.wallet')}}"> 
                <i class="fa-solid fa-wallet {{url()->current() == url('/wallet') ? 'active-button-nav' : ''}}"></i> <br>             
                <small class="nav-button-text">
                    <span class="translate"> Wallets </span>
                </small>
            </a>
        </div>
    </div>
</div>