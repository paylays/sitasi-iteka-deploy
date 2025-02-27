<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
    navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page">
                    {{ str_replace('-', ' ', Request::route()->getName()) }}</li>
            </ol>
            <h6 class="font-weight-bolder mb-0 text-capitalize">{{ str_replace('-', ' ', Request::route()->getName()) }}
            </h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-end" id="navbar">
            {{-- <div class="nav-item d-flex align-self-end">
                <a href="https://www.creative-tim.com/product/soft-ui-dashboard-laravel" target="_blank" class="btn btn-primary active mb-0 text-white" role="button" aria-pressed="true">
                    Download
                </a>
            </div> --}}
            {{-- <div class="ms-md-3 pe-md-3 d-flex align-items-center">
            <div class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Type here...">
            </div>
            </div> --}}
            <ul class="navbar-nav  justify-content-end">

                @livewire('notification')
                <li class="nav-item d-flex align-items-center">
                    <span class="nav-link text-body font-weight-bold px-0"
                        style="border: none; background-color: transparent;">
                        <i class="fa fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none">{{ auth()->user()->name }}</span>
                    </button>
                </li>
                <li class="nav-item px-3 d-flex align-items-center">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="nav-link text-body font-weight-bold px-0"
                            style="border: none; background-color: transparent;">
                            <i class="fa fa-sign-out me-sm-1"></i>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
