  <!-- Optional JavaScript -->
    <script src="{{ asset('homeassets\js\jquery.min.js')}}"></script>
    <script src="{{ asset('homeassets\assets\bootstrap\js\bootstrap.min.js')}}"></script>
    <script src="{{ asset('homeassets\assets\select2\js\select2.min.js')}}"></script>
    <script src="{{ asset('homeassets\assets\matchHeight\js\matchHeight-min.js')}}"></script>
    <script src="{{ asset('homeassets\assets\bxslider\js\bxslider.min.js')}}"></script>
    <script src="{{ asset('homeassets\assets\waypoints\js\waypoints.min.js')}}"></script>
    <script src="{{ asset('homeassets\assets\counterup\js\counterup.min.js')}}"></script>
    <script src="{{ asset('homeassets\assets\magnific-popup\js\magnific-popup.min.js')}}"></script>
    <script src="{{ asset('homeassets\assets\owl-carousel\js\owl.carousel.min.js')}}"></script>
    <script src="{{ asset('homeassets\js\modernizr.custom.js')}}"></script>
    <script src="{{ asset('homeassets\js\custom.js')}}"></script>
    <script src="{{ asset('homeassets\js\jquery.cookie.js')}}"></script>
    <script src="{{ asset('homeassets\assets\datepicker\js\datepicker.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
    <script src="{{ asset('homeassets\js\floating-wpp.js')}}"></script>

    <script type="text/javascript">

        
    $(function () {
        $('#myButton').floatingWhatsApp({
            phone: '+919545578282',
            popupMessage: 'Hello, how can we help you?',
            message: "I'd like more Information",
            showPopup: true,
            showOnIE: false,
            headerTitle: 'WhatsaApp Chat!',
            headerColor: '#128C7E',
            backgroundColor: 'crimson',
            buttonImage: '<img src="whatsapp.svg" />',
            position:'right',
            autoOpenTimeout:3000,
        });
    });
</script>

    @yield('otherjs')
