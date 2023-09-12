<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->        
        @vite(['resources/css/template.css', 'resources/js/app.js'])
    </head>
    <body>    
        <div class="wrapper">
            <nav id="sidebar" class="sidebar js-sidebar">
                <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="{{ route('dashboard') }}">
                    <span class="align-middle">🧬 SICM</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">Páginas</li>

                    <li class="sidebar-item {{ request()->routeIs('dashboard') ? 'active' : ''}}">
                    <a class="sidebar-link" href="{{ route('dashboard') }}">
                        <i class="align-middle" data-feather="sliders"></i>
                        <span class="align-middle">Escritorio</span>
                    </a>
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('profile.edit') ? 'active' : ''}}">
                    <a class="sidebar-link" href="{{ route('profile.edit') }}">
                        <i class="align-middle" data-feather="user"></i>
                        <span class="align-middle">Perfíl</span>
                    </a>
                    </li>

                    @if (count(Auth::user()->modules->where('menu', 'Servicios')) > 0)
                        <li class="sidebar-header">Servicios</li>
                    @endif

                    @if (in_array('Quimioterapia', Auth::user()->modules->pluck('Permiso')->toArray()))
                        <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('chemotherapy.index') }}">
                            <i class="align-middle" data-feather="activity"></i>
                            <span class="align-middle">Quimioterapia</span>
                        </a>
                        </li>
                    @endif 
                    
                    @if (in_array('Nutrición Parenteral', Auth::user()->modules->pluck('Permiso')->toArray()))
                        <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('parenteral.index') }}">
                            <i class="align-middle" data-feather="star"></i>
                            <span class="align-middle">Nutrición Parenteral</span>
                        </a>
                        </li>
                    @endif
                    
                    @if (in_array('Antibiótico', Auth::user()->modules->pluck('Permiso')->toArray()))
                        <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('antibiotic.index') }}">
                            <i class="align-middle" data-feather="zap"></i>
                            <span class="align-middle">Antibiótico</span>
                        </a>
                        </li>
                    @endif

                    @if (count(Auth::user()->modules->where('menu', 'Bitácoras')) > 0)
                        <li class="sidebar-header">Bitácora</li>
                    @endif

                    @if (in_array('Bitácora Quimioterapia', Auth::user()->modules->pluck('Permiso')->toArray()))
                        <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
                            <i class="align-middle" data-feather="square"></i>
                            <span class="align-middle">Bitácora Quimioterapia</span>
                        </a>
                        </li>
                    @endif

                    @if (in_array('Bitácora Nutrición', Auth::user()->modules->pluck('Permiso')->toArray()))
                        <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
                            <i class="align-middle" data-feather="check-square"></i>
                            <span class="align-middle">Bitácora Nutrición</span>
                        </a>
                        </li>
                    @endif

                    @if (in_array('Bitácora Antibióticos', Auth::user()->modules->pluck('Permiso')->toArray()))
                        <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
                            <i class="align-middle" data-feather="grid"></i>
                            <span class="align-middle">Bitácora Antibióticos</span>
                        </a>
                        </li>                 
                    @endif

                    <li class="sidebar-header">Herramientas</li>

                    <li class="sidebar-item">
                    <a class="sidebar-link" href="#">
                        <i class="align-middle" data-feather="pie-chart"></i>
                        <span class="align-middle">Analíticas</span>
                    </a>
                    </li>

                    <li class="sidebar-item">
                    <a class="sidebar-link" href="#">
                        <i class="align-middle" data-feather="settings"></i>
                        <span class="align-middle">Ajustes</span>
                    </a>
                    </li>

                    <li class="sidebar-item">
                    <a class="sidebar-link" href="#">
                        <i class="align-middle" data-feather="help-circle"></i>
                        <span class="align-middle">Centro de ayuda</span>
                    </a>
                    </li>
                </ul>

                <div class="sidebar-cta d-none">
                    <div class="sidebar-cta-content">
                    <strong class="d-inline-block mb-2">Upgrade to Pro</strong>
                    <div class="mb-3 text-sm">
                        Are you looking for more components? Check out our premium
                        version.
                    </div>
                    <div class="d-grid">
                        <a href="upgrade-to-pro.html" class="btn btn-primary"
                        >Upgrade to Pro</a
                        >
                    </div>
                    </div>
                </div>
                </div>
            </nav>   
            
            <div class="main">
                <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                    <li class="nav-item dropdown">
                        <a
                        class="nav-icon dropdown-toggle"
                        href="#"
                        id="alertsDropdown"
                        data-bs-toggle="dropdown"
                        >
                        <div class="position-relative">
                            <i class="align-middle" data-feather="bell"></i>
                            <span class="indicator">4</span>
                        </div>
                        </a>
                        <div
                        class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                        aria-labelledby="alertsDropdown"
                        >
                        <div class="dropdown-menu-header">4 New Notifications</div>
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                <i
                                    class="text-danger"
                                    data-feather="alert-circle"
                                ></i>
                                </div>
                                <div class="col-10">
                                <div class="text-dark">Update completed</div>
                                <div class="text-muted small mt-1">
                                    Restart server 12 to complete the update.
                                </div>
                                <div class="text-muted small mt-1">30m ago</div>
                                </div>
                            </div>
                            </a>
                            <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                <i class="text-warning" data-feather="bell"></i>
                                </div>
                                <div class="col-10">
                                <div class="text-dark">Lorem ipsum</div>
                                <div class="text-muted small mt-1">
                                    Aliquam ex eros, imperdiet vulputate hendrerit et.
                                </div>
                                <div class="text-muted small mt-1">2h ago</div>
                                </div>
                            </div>
                            </a>
                            <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                <i class="text-primary" data-feather="home"></i>
                                </div>
                                <div class="col-10">
                                <div class="text-dark">Login from 192.186.1.8</div>
                                <div class="text-muted small mt-1">5h ago</div>
                                </div>
                            </div>
                            </a>
                            <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                <i class="text-success" data-feather="user-plus"></i>
                                </div>
                                <div class="col-10">
                                <div class="text-dark">New connection</div>
                                <div class="text-muted small mt-1">
                                    Christina accepted your request.
                                </div>
                                <div class="text-muted small mt-1">14h ago</div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="dropdown-menu-footer">
                            <a href="#" class="text-muted">Show all notifications</a>
                        </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                        class="nav-icon dropdown-toggle"
                        href="#"
                        id="messagesDropdown"
                        data-bs-toggle="dropdown"
                        >
                        <div class="position-relative">
                            <i class="align-middle" data-feather="message-square"></i>
                        </div>
                        </a>
                        <div
                        class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                        aria-labelledby="messagesDropdown"
                        >
                        <div class="dropdown-menu-header">
                            <div class="position-relative">4 New Messages</div>
                        </div>
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                <img
                                    src="https://i.pinimg.com/564x/75/fd/1c/75fd1cd1e6adcd1e27820689de5abeaf.jpg"
                                    class="avatar img-fluid rounded-circle"
                                    alt="Vanessa Tucker"
                                />
                                </div>
                                <div class="col-10 ps-2">
                                <div class="text-dark">Vanessa Tucker</div>
                                <div class="text-muted small mt-1">
                                    Nam pretium turpis et arcu. Duis arcu tortor.
                                </div>
                                <div class="text-muted small mt-1">15m ago</div>
                                </div>
                            </div>
                            </a>
                            <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                <img
                                    src="https://i.pinimg.com/564x/8f/22/2b/8f222b40b0ca96c608ebc5dfcb9aa072.jpg"
                                    class="avatar img-fluid rounded-circle"
                                    alt="William Harris"
                                />
                                </div>
                                <div class="col-10 ps-2">
                                <div class="text-dark">William Harris</div>
                                <div class="text-muted small mt-1">
                                    Curabitur ligula sapien euismod vitae.
                                </div>
                                <div class="text-muted small mt-1">2h ago</div>
                                </div>
                            </div>
                            </a>
                            <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                <img
                                    src="https://i.pinimg.com/564x/b2/f6/6b/b2f66b77b96a27917b819bd16983e623.jpg"
                                    class="avatar img-fluid rounded-circle"
                                    alt="Christina Mason"
                                />
                                </div>
                                <div class="col-10 ps-2">
                                <div class="text-dark">Christina Mason</div>
                                <div class="text-muted small mt-1">
                                    Pellentesque auctor neque nec urna.
                                </div>
                                <div class="text-muted small mt-1">4h ago</div>
                                </div>
                            </div>
                            </a>
                            <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                <img
                                    src="https://d34u8crftukxnk.cloudfront.net/slackpress/prod/sites/6/E12KS1G65-W0168RE00G7-133faf432639-512.jpeg"
                                    class="avatar img-fluid rounded-circle"
                                    alt="Sharon Lessman"
                                />
                                </div>
                                <div class="col-10 ps-2">
                                <div class="text-dark">Sharon Lessman</div>
                                <div class="text-muted small mt-1">
                                    Aenean tellus metus, bibendum sed, posuere ac,
                                    mattis non.
                                </div>
                                <div class="text-muted small mt-1">5h ago</div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="dropdown-menu-footer">
                            <a href="#" class="text-muted">Show all messages</a>
                        </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                        class="nav-icon dropdown-toggle d-inline-block d-sm-none"
                        href="#"
                        data-bs-toggle="dropdown"
                        >
                        <i class="align-middle" data-feather="settings"></i>
                        </a>

                        <a
                        class="nav-link dropdown-toggle d-none d-sm-inline-block"
                        href="#"
                        data-bs-toggle="dropdown"
                        >
                        <img
                            src="https://images.fineartamerica.com/images/artworkimages/mediumlarge/3/blue-mountains-abstract-minimalist-landscape-at-sunrise-matthias-hauser.jpg"
                            class="avatar img-fluid rounded me-1"
                            alt="Charles Hall"
                        />
                        <span class="text-dark">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="{{route('profile.edit')}}"
                            ><i class="align-middle me-1" data-feather="user"></i>
                            Perfíl</a
                        >
                        <a class="dropdown-item" href="#"
                            ><i class="align-middle me-1" data-feather="pie-chart"></i>
                            Analíticas</a
                        >
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"
                            ><i class="align-middle me-1" data-feather="settings"></i>
                            Ajustes</a
                        >
                        <a class="dropdown-item" href="#"
                            ><i
                            class="align-middle me-1"
                            data-feather="help-circle"
                            ></i>
                            Centro de ayuda</a
                        >
                        <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">Salir</a>
                            </form>
                        </div>
                    </li>
                    </ul>
                </div>
                </nav>

                <main class="content">
                    {{ $slot }}
                </main>

                <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                    <div class="col-6 text-start">
                        <p class="mb-0">
                        <a
                            class="text-muted"
                            href="{{ route('dashboard')}}"
                            target="_blank"
                            ><strong>SICM</strong></a
                        >
                        -
                        <a
                            class="text-muted"
                            href="{{ route('dashboard')}}"
                            target="_blank"
                            ><strong>Sistema Integral para Central de Mezclas</strong></a
                        >
                        &copy;
                        </p>
                    </div>
                    <div class="col-6 text-end d-none">
                        <ul class="list-inline">
                        <li class="list-inline-item">
                            <a
                            class="text-muted"
                            href="https://adminkit.io/"
                            target="_blank"
                            >Support</a
                            >
                        </li>
                        <li class="list-inline-item">
                            <a
                            class="text-muted"
                            href="https://adminkit.io/"
                            target="_blank"
                            >Help Center</a
                            >
                        </li>
                        <li class="list-inline-item">
                            <a
                            class="text-muted"
                            href="https://adminkit.io/"
                            target="_blank"
                            >Privacy</a
                            >
                        </li>
                        <li class="list-inline-item">
                            <a
                            class="text-muted"
                            href="https://adminkit.io/"
                            target="_blank"
                            >Terms</a
                            >
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
                </footer>
            </div>
        </div>            
        </div>
    </body>
</html>
