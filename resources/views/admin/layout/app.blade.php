<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lordz Of Steel Dashboard </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/css/multi-select.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <!-- plugin css file  -->
    <link rel="stylesheet" href="{{asset('admin/plugin/datatables/responsive.dataTables.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/plugin/datatables/dataTables.bootstrap5.min.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">--}}


    <!-- project css file  -->
    <link rel="stylesheet" href="{{asset('admin/css/ebazar.style.min.css')}}">

</head>

<body>
<div id="ebazar-layout" class="theme-blue">

    @include('admin.layout.sidebar')

    <div class="main px-lg-4 px-md-4">

        @include('admin.layout.navbar')

        @yield('content')

    </div>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+5hb7H6jt+hQmQnpHd/n4Vwf5i5HhFf5a0bi8fh"
        crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/js/jquery.multi-select.min.js"></script>

<!-- Jquery Core Js -->
<script src="{{asset('admin/bundles/libscripts.bundle.js')}}"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>--}}

<!-- Plugin Js -->
<script src="{{asset('admin/bundles/apexcharts.bundle.js')}}"></script>
<script src="{{asset('admin/bundles/dataTables.bundle.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<!-- Jquery Page Js -->
<script src="{{asset('admin/js/template.js')}}"></script>
<script src="{{asset('admin/js/page/index.js')}}"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1Jr7axGGkwvHRnNfoOzoVRFV3yOPHJEU&callback=myMap"></script>
<script>
    $(document).ready(function () {
        toastr.options.timeOut = 10000;
        @if (Session::has('error'))
        toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('success'))
        toastr.success('{{ Session::get('success') }}');
        @endif
    });

</script>
@stack('script')
<script>
    $('#myDataTable')
        .addClass('nowrap')
        .dataTable({
            responsive: true,
            columnDefs: [{
                targets: [-1, -3],
                className: 'dt-body-right'
            }]
        });
</script>
</body>

</html>
