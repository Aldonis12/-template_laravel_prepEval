<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ajout Tout type</title>
    <link rel="stylesheet" href="{{ asset('assets/css/simplebar.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app-light.css') }}" id="lightTheme" disabled>
    <link rel="stylesheet" href="{{ asset('assets/css/app-dark.css') }}" id="darkTheme">
</head>
<body class="vertical  dark  ">
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
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
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
                    <a class="nav-link" href="/Ajouter">
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
    <style>
        .ck-editor__editable[role="textbox"] {
            min-height: 100px;
        }
        .ck-content .image {
            max-width: 80%;
            margin: 20px auto;
        }
    </style>
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Ajout tout type</h2>
                    <p class="text-muted"></p>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <form action="/AjouterBe" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Varchar</label>
                                                <input type="text" name="caractere" class="form-control" value="demosy laravel">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Nombre</label>
                                                <input type="number" step="any" name="nombre" class="form-control" value="21822.219">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Date</label>
                                                <input type="date" name="daty" class="form-control" value="2022-10-10">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Time</label>
                                                <input type="time" step="1" name="times" class="form-control" value="10:00:00">
                                            </div>
                                            <br>
                                            <div class="form-group col-md-6">
                                                <label>Date time</label>
                                                <input type="datetime-local" step="1" name="datybe"  value="2022-10-10 10:00:00" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="customFile">Image</label>
                                                <div class="custom-file">
                                                    <input type="file" name="file" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Choisir une image</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Texte</label>
                                                <textarea name="texte">KARAKORY LARAVEL</textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Ajouter</button>
                                    </form>
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
    $('.input-phoneus').mask('(+261) 00-000-00');
    window.dataLayer = window.dataLayer || [];
    function gtag()
    {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');

</script>
<script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/super-build/ckeditor.js"></script>
<script>
    CKEDITOR.ClassicEditor.create(document.querySelector("textarea"), {
        toolbar: {
            items: [
                'exportPDF','exportWord', '|',
                'findAndReplace', 'selectAll', '|',
                'heading', '|',
                'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                'bulletedList', 'numberedList', 'todoList', '|',
                'outdent', 'indent', '|',
                'undo', 'redo',
                '-',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                'alignment', '|',
                'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                'textPartLanguage', '|',
                'sourceEditing'
            ],
            shouldNotGroupWhenFull: true
        },
        list: {
            properties: {
                styles: true,
                startIndex: true,
                reversed: true
            }
        },
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
            ]
        },
        placeholder: 'Welcome to CKEditor 5!',
        fontFamily: {
            options: [
                'default',
                'Arial, Helvetica, sans-serif',
                'Courier New, Courier, monospace',
                'Georgia, serif',
                'Lucida Sans Unicode, Lucida Grande, sans-serif',
                'Tahoma, Geneva, sans-serif',
                'Times New Roman, Times, serif',
                'Trebuchet MS, Helvetica, sans-serif',
                'Verdana, Geneva, sans-serif'
            ],
            supportAllValues: true
        },
        fontSize: {
            options: [ 10, 12, 14, 'default', 18, 20, 22 ],
            supportAllValues: true
        },
        htmlSupport: {
            allow: [
                {
                    name: /.*/,
                    attributes: true,
                    classes: true,
                    styles: true
                }
            ]
        },
        htmlEmbed: {
            showPreviews: true
        },
        link: {
            decorators: {
                addTargetToExternalLinks: true,
                defaultProtocol: 'https://',
                toggleDownloadable: {
                    mode: 'manual',
                    label: 'Downloadable',
                    attributes: {
                        download: 'file'
                    }
                }
            }
        },
        mention: {
            feeds: [
                {
                    marker: '@',
                    feed: [
                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                        '@sugar', '@sweet', '@topping', '@wafer'
                    ],
                    minimumCharacters: 1
                }
            ]
        },
        removePlugins: [
            'CKBox',
            'CKFinder',
            'EasyImage',
            'RealTimeCollaborativeComments',
            'RealTimeCollaborativeTrackChanges',
            'RealTimeCollaborativeRevisionHistory',
            'PresenceList',
            'Comments',
            'TrackChanges',
            'TrackChangesData',
            'RevisionHistory',
            'Pagination',
            'WProofreader',
            'MathType',
            'SlashCommand',
            'Template',
            'DocumentOutline',
            'FormatPainter',
            'TableOfContents'
        ]
    });
</script>
</body>
</html>