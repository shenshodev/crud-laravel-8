<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('theme/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('theme/css/material-dashboard.css')}}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('theme/css/demo.css')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="{{ asset('theme/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{ asset('theme/css/google-roboto-300-700.css')}}" rel="stylesheet" />



</head>
<body>
    @include('layouts.page.navbar')
    <div class="wrapper wrapper-full-page">
        <div class="full-page {{ request()->is('login') ? 'login-page' : 'register-page' }} {{ request()->is('/') ? 'register-page' : 'register-page' }} " filter-color="black" data-image="{{ asset('theme/img/login.jpg')}}">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            @yield('content')
            
            @include('layouts.page.footer')
        </div>
    </div>
</body>
    <!--   Core JS Files   -->
    <script src="{{ asset('theme/js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('theme/js/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('theme/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('theme/js/material.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('theme/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
    <!-- Forms Validations Plugin -->
    <script src="{{ asset('theme/js/jquery.validate.min.js')}}"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="{{ asset('theme/js/moment.min.js')}}"></script>
    <!--  Charts Plugin -->
    <script src="{{ asset('theme/js/chartist.min.js')}}"></script>
    <!--  Plugin for the Wizard -->
    <script src="{{ asset('theme/js/jquery.bootstrap-wizard.js')}}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('theme/js/bootstrap-notify.js')}}"></script>
    <!--   Sharrre Library    -->
    <script src="{{ asset('theme/js/jquery.sharrre.js')}}"></script>
    <!-- DateTimePicker Plugin -->
    <script src="{{ asset('theme/js/bootstrap-datetimepicker.js')}}"></script>
    <!-- Vector Map plugin -->
    <script src="{{ asset('theme/js/jquery-jvectormap.js')}}"></script>
    <!-- Sliders Plugin -->
    <script src="{{ asset('theme/js/nouislider.min.js')}}"></script>
    <!--  Google Maps Plugin    -->
    <!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->
    <!-- Select Plugin -->
    <script src="{{ asset('theme/js/jquery.select-bootstrap.js')}}"></script>
    <!--  DataTables.net Plugin    -->
    <script src="{{ asset('theme/js/jquery.datatables.js')}}"></script>
    <!-- Sweet Alert 2 plugin -->
    <script src="{{ asset('theme/js/sweetalert2.js')}}"></script>
    <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{ asset('theme/js/jasny-bootstrap.min.js')}}"></script>
    <!--  Full Calendar Plugin    -->
    <script src="{{ asset('theme/js/fullcalendar.min.js')}}"></script>
    <!-- TagsInput Plugin -->
    <script src="{{ asset('theme/js/jquery.tagsinput.js')}}"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="{{ asset('theme/js/material-dashboard.js')}}"></script>

    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('theme/js/demo.js')}}"></script>

	<script src="{{ asset('theme/js/material-kit.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        $().ready(function() {
            demo.checkFullPageBackgroundImage();

            setTimeout(function() {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatables').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [5, 10, 15, -1],
                    [5, 10, 15, "All"]
                ],
                responsive: true,
                language: {
                search: "_INPUT_",
                searchPlaceholder: "Buscar...",
                info: "Mostrando página _PAGE_ de _PAGES_",
                infoEmpty: "No hay registros para mostrar",
			    sInfoEmpty: "Mostrando de 0 a 0 de 0 registros",
			    lengthMenu: "Mostrando _MENU_ registros",
			    zeroRecords: "No hay coincidencias en la búsqueda",
                infoFiltered: " - Filtrado de _MAX_ registros",
                paginate: {
                    first: "Primera página",
                    last: "Última página",
                    next: "Siguiente",
                    previous: "Anterior"
                }
            }
            });
    
    
            var table = $('#datatables').DataTable();
    
            // Edit record
            table.on('click', '.edit', function() {
                $tr = $(this).closest('tr');
    
                var data = table.row($tr).data();
                alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
            });
    
            // Delete a record
            table.on('click', '.remove', function(e) {
                $tr = $(this).closest('tr');
                table.row($tr).remove().draw();
                e.preventDefault();
            });
    
            //Like record
            table.on('click', '.like', function() {
                alert('You clicked on Like button');
            });
    
            $('.card .material-datatables label').addClass('form-group');
        });
    </script>
</html>
