<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Liste Tout type</title>
    <link rel="stylesheet" href="{{ asset('assets/css/simplebar.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app-light.css') }}" id="lightTheme" disabled>
    <link rel="stylesheet" href="{{ asset('assets/css/app-dark.css') }}" id="darkTheme">
</head>

<body class="vertical dark ">
    <div class="wrapper">
        <nav class="topnav navbar navbar-light">
            <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                <i class="fe fe-menu navbar-toggler-icon"></i>
            </button>

            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="dark">
                        <i class="fe fe-sun fe-16"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
            <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3"
                data-toggle="toggle">
                <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <nav class="vertnav navbar navbar-light">
                <div class="w-100 mb-4 d-flex">
                    <a class="navbar-brand mx-auto mt-2 flex-fill text-center">
                        <strong>Tout Types</strong>
                    </a>
                </div>

                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="/ajouter">
                            <i class="fe fe-plus-circle fe-16"></i>
                            <span class="ml-3 item-text">Ajouter</span>
                        </a>
                    </li>
                    <li class="nav-item w-100">
                        <a class="nav-link" href="/Liste">
                            <i class="fe fe-layers fe-16"></i>
                            <span class="ml-3 item-text">Listes</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row">

                            <div class="col-md-12 my-4">
                                <h2 class="h4 mb-1">Liste</h2>
                                <div class="card shadow">
                                    <div class="card-body">
                                        <div class="toolbar">
                                            <form class="form">
                                                <div class="form-row">
                                                    <div class="form-group col-auto">
                                                        <label class="sr-only">Search</label>
                                                        <input type="text" class="form-control" id="search1"
                                                            value="" placeholder="Recherche">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <table class="table table-borderless table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Caractere</th>
                                                    <th>Nombre</th>
                                                    <th>Date</th>
                                                    <th>Temps</th>
                                                    <th>Date et temps</th>
                                                    <th>Texte</th>
                                                    <th>Details en PDF</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($touttype as $type)
                                                    <tr>
                                                        <td>
                                                            <div class="avatar avatar-md">
                                                                <img src="{{asset('/storage/images/'.$type->image)}}" alt="..."
                                                                    class="avatar-img rounded-circle">
                                                            </div>
                                                        </td>
                                                        <td>{{ $type->caractere }}</td>
                                                        <td>{{ $type->nombre }}</td>
                                                        <td>{{ $type->daty }}</td>
                                                        <td>{{ $type->times }}</td>
                                                        <td>{{ $type->datytime }}</td>
                                                        <td>{{ $type->texte }}</td>
                                                        <td>
                                                                <a href="/pdf/{{ $type->id }}"><button type="submit" class="btn mb-2 btn-secondary"><span class="fe fe-download fe-1"></span></button></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>ID</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($image as $img)
                                                    <tr>
                                                        <td>
                                                            <div class="avatar avatar-md">
                                                                <img src="{{ $img->image }}" alt="..."
                                                                    class="avatar-img rounded-circle" style="width: 100px; height: 100px;">
                                                            </div>
                                                        </td>
                                                        <td>{{ $img->id }}</td>
                                                        <td><a href="/update/{{ $img->id }}">Modifier</a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <nav aria-label="Table Paging" class="mb-0 text-muted">
                                            <ul class="pagination justify-content-center mb-0">
                                                <li class="page-item"><a class="page-link">1</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.stickOnScroll.js') }}"></script>
    <script src="{{ asset('assets/js/tinycolor-min.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <script src="{{ asset('assets/js/apps.js') }}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>
</body>
</html>