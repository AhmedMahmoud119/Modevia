<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="./assets/images/fav.png">
    <title>Edu Digit</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css" rel="stylesheet" />
    <style>
        /*.dataTables_paginate{*/
        /*    display: none;*/
        /*}*/
    </style>
</head>

<body>
<div class="loader" id="loader">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
</div>
<main>
    <div class="response">
        <div id="particles" class="particles"></div>
        <svg class="bg-shape" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1205.46 968.93">
            <path d="M1212.38,50.21l-86,684.35a35,35,0,0,1-25.1,29.31l-749,214.52a35,35,0,0,1-42.72-22.14L9.18,94.48A35,35,0,0,1,41.11,47.94l1135.38-37.1A35,35,0,0,1,1212.38,50.21Z" transform="translate(-7.2 -10.82)" />
        </svg>
        <div class="container-fluid z-10">
            <div class="row">
                <div class="col-md-1 d-flex flex-column align-items-center">
                    <img src="./assets/images/edulogo-3.png" alt="img">
                    <button class="menu-btn mt-5 mb-auto"><img src="./assets/images/menu.svg" alt="img"></button>
                    <a href="{{route('logout')}}" class="logout-btn "><img src="./assets/images/logout.svg" alt="img"></a>
                </div>
                <div class="col-md-11">
                    <div class="table-container p-5">
                        <div class="row ">
                            <div class="col-lg-9 mb-4">
                                <div class="form-group search">
                                    <input type="text" class="filter-data" placeholder="search">
                                    <button>
                                        <svg width="20" viewBox="0 0 256 256">
                                            <path fill="#a2a3a4" d="m229.7 218.3l-43.3-43.2a92.2 92.2 0 1 0-11.3 11.3l43.2 43.3a8.2 8.2 0 0 0 11.4 0a8.1 8.1 0 0 0 0-11.4ZM40 116a76 76 0 1 1 76 76a76.1 76.1 0 0 1-76-76Z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class=" d-flex align-items-center justify-content-end gap-20">
{{--                                    <a href="{{ url()->current() }}?change_language=ar" class="d-flex align-items-center gap-10 text-dark"><img src="./assets/images/ksa.svg" alt="img" class="width-30"> AR </a>--}}
                                    <div class="uktra-btn">
                                        <img src="/assets/images/uktralogo-2.png" alt="">
                                        <h6 class="m-0">uktra</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 mb-4">
                                <h3>users data</h3>
                            </div>
                            <div class="col-6 text-end mb-4">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle btn-style-2" type="button" data-bs-toggle="dropdown" aria-expanded="false"> Download </button>
                                    <ul class="dropdown-menu p-0">
                                        <li>
                                            <a class="dropdown-item d-flex justify-content-between align-items-center px-3 py-2 export-pdf" href="">
                                                PDF <img src="./assets/images/pdf.svg" alt="img" class="width-25">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex justify-content-between align-items-center px-3 py-2 export-excel" href="#">
                                                excel <img src="./assets/images/excel.svg" alt="img" class="width-25">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
{{--                            <div class="col-6 col-lg-2  mb-4">--}}
{{--                                <select class="form-select style-2">--}}
{{--                                    <option selected>sort by</option>--}}
{{--                                    <option value="1">One</option>--}}
{{--                                    <option value="2">Two</option>--}}
{{--                                    <option value="3">Three</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
                            <div class=" col-6 col-lg-2 mb-4">
                                <div class="form-group">
                                    <input type="date" name="date" class="date style-2">
                                </div>
                            </div>
                            <div class="col-6 col-lg-2 mb-4">
                                <div class="form-group">
                                    <input type="text" placeholder="service" class="position style-2">
                                </div>
                            </div>

                            <div class=" col-6 col-lg-2 mb-4 text-end">
                                <button class="btn-style-1 border-none filter-btn"> filter <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#mdvoy9euxa)">
                                            <path d="M10 16.5h4v-1.833h-4V16.5zm-7-11v1.833h18V5.5H3zm3 6.417h12v-1.834H6v1.834z" fill="currentcolor" />
                                        </g>
                                        <defs>
                                            <clipPath id="mdvoy9euxa">
                                                <path fill="currentcolor" transform="rotate(90 12 12)" d="M0 0h22v24H0z" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="table-responsive max-h-400">
                            @if(session('success'))
                                <div class="alert alert-success" style="width: 100%" role="alert">{{session('success')}}</div>
                            @endif
                            <table class="table min-w-1000 " id="kt_datatable">
                                <thead>
                                <tr>
                                    <th scope="col">date & time</th>
                                    <th scope="col">name</th>
                                    <th scope="col">email</th>
                                    <th scope="col">phone</th>
                                    <th scope="col">service</th>
                                    <th scope="col">doctor</th>
                                    <th scope="col">action</th>
                                </tr>
                                </thead>
                                <tbody>


                                </tbody>
                            </table>
                        </div>
                        <div aria-label="Page navigation example">
                            <ul class="pagination justify-content-center m-0">
                                <li class="page-item"><a class="page-link d-flex align-items-center gap-10 previous" href="#">
                                        <svg width="18" viewBox="0 0 256 256" class="arrow-rtl">
                                            <path fill="currentColor"
                                                  d="M224 128a8 8 0 0 1-8 8H59.3l58.4 58.3a8.1 8.1 0 0 1 0 11.4a8.2 8.2 0 0 1-11.4 0l-72-72a8.1 8.1 0 0 1 0-11.4l72-72a8.1 8.1 0 0 1 11.4 11.4L59.3 120H216a8 8 0 0 1 8 8Z" />
                                        </svg> Previous</a></li>
{{--                                <li class="page-item"><a class="page-link " href="#">1</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">4</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">5</a></li>--}}
                                <li class="page-item">

                                    <a href="#" class="page-link d-flex align-items-center gap-10 next">
                                        Next
                                        <svg class="arrow-rtl" width="18" viewBox="0 0 256 256">
                                            <path fill="currentColor" d="m220.2 132.2l-72 72a5.9 5.9 0 0 1-8.4-8.4l61.7-61.8H40a6 6 0 0 1 0-12h161.5l-61.7-61.8a5.9 5.9 0 0 1 8.4-8.4l72 72a5.8 5.8 0 0 1 0 8.4Z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="copyrights ">
                        <span class="text-white"> powered by</span> <a href="#" target="_blank"><img src="./assets/images/uktralogo.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<button class="to-top">
    <img src="./assets/images/scroll.gif" alt="">
</button>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/particles.min.js"></script>
<script src="./assets/js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css" rel="stylesheet" />

<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src ="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src ="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>

<script>
    let languages = {
        'ar': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Arabic.json',
        'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
    };
    var table = $('#kt_datatable').DataTable({
        responsive: true,
        paging:   true,
        ordering: false,
        info:     false,
        filter:     false,
        language: {
            url: languages['{{ app()->getLocale() }}']
        },
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('users') }}" ,
            type: 'GET',
            data: function (d) {
                d.search = $('.filter-data').val()
                d.date = $('.date').val()
                d.doctor = $('.doctor').val()
                d.service = $('.service').val()
            },
        },
        columns: [
            {data: 'date', name: 'date'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
            {data: 'service', name: 'service'},
            {data: 'doctor', name: 'doctor'},
            {data: 'actions', name: 'actions'},
        ],

    });

    // $('#export_print').on('click', function (e) {
    //     e.preventDefault();
    //     table.button(0).trigger();
    // });

    $('.next').on('click', function() {
        table.page('next').draw('page');
    });

    $('.previous').on('click', function() {
        table.page('previous').draw('page');
    });

    $('.filter-data , .date , .position').on('keyup', function() {
        table.ajax.reload();
    });

    $('.gov , .how_you_heard_about_us').on('change', function() {
        table.ajax.reload();
    });

    $('.filter-btn').on('click', function() {
        table.ajax.reload();
    });

    $('.export-pdf').on('click', function() {
        search = $('.filter-data').val(),
        date = $('.date').val(),
        position = $('.position').val()
        gov = $('.gov').val()
        how_you_heard_about_us = $('.how_you_heard_about_us').val()
        window.open('{{route('export-pdf')}}?search='+search+'&date='+date+'&position='+position+'&gov='+gov+'&how_you_heard_about_us='+how_you_heard_about_us, '_blank')
    });

    $('.export-excel').on('click', function() {
        search = $('.filter-data').val(),
        date = $('.date').val(),
        position = $('.position').val()
        gov = $('.gov').val()
        how_you_heard_about_us = $('.how_you_heard_about_us').val()
        window.open('{{route('export')}}?search='+search+'&date='+date+'&position='+position+'&gov='+gov+'&how_you_heard_about_us='+how_you_heard_about_us, '_blank')
    });

</script>

</body>

</html>
