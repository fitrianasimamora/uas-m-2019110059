<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'AccountDB') | AccountDB</title>
    <title>@yield('title', 'TransactionDB') | TransactionDB</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('css_after')
</head>

<body>
    {{-- Top Navbar --}}
    <nav class="navbar navbar-expand-md navbar-drag bg-primary">
        <a class="navbar-brand" href="/">
            <i class="fa fa-akun fa-fw" aria-hidden="true"></i>
            <span class="menu-collapsed">AccountDB</span>
        </a>
    </nav>
    <nav class="navbar navbar-expand-md navbar-drag bg-primary">
        <a class="navbar-brand" href="/">
            <i class="fa fa-transaksi fa-fw" aria-hidden="true"></i>
            <span class="menu-collapsed">TransactionDB</span>
        </a>
    </nav>
    {{-- Top Navbar END --}}
    <div class="row" id="body-row">
        {{-- Sidebar --}}
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
            {{-- Menu List --}}
            <ul class="list-group">
                {{-- Separator with title --}}
                <li
                    class="list-group-item sidebar-separator-title
 text-muted d-flex align-items-center menu-collapsed">
                    <small>MENU ACCOUNT DAN TRANSACTION</small>
                </li>
                {{-- Separator END --}}
                <a href="{{ route('accounts.index') }}" class="bg-drag list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-film fa-fw mr-3"></span>
                        <span class="menu-collapsed">Accounts</span>
                    </div>
                <a href="{{ route('transactions.index') }}" class="bg-drag list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-film fa-fw mr-3"></span>
                        <span class="menu-collapsed">Transactions</span>
                    </div>
                </a>
            </ul>
            {{-- Menu List END --}}
        </div>
        {{-- Sidebar END --}}
        {{-- Content --}}
        <div class="col p-4">
            @yield('content')
        </div>
        {{-- Content END --}}
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('js_after')
</body>

</html>
