@if (session('message'))
    <script type="text/javascript">
        toastr.options =
        {
        "closeButton" : true,
        'debug' : true,
        "progressBar" : true,
        "backgroundColor": "blue !important"
        }
        toastr.success("{{ session('message') }}");
    </script>
@endif
@if (session('error'))
    <script type="text/javascript">
        toastr.options =
        {
        "closeButton" : true,
        'debug' : true,
        "progressBar" : true
        }
        toastr.error();("{{ session('error') }}");
    </script>
@endif
@if (session('warning'))
    <script type="text/javascript">
        toastr.options =
        {
        "closeButton" : true,
        'debug' : true,
        "progressBar" : true
        }
        toastr.warning("{{ session('warning') }}");
    </script>
@endif