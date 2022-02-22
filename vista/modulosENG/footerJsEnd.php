<!-- JS here -->
<script src="vista/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="vista/js/vendor/jquery-1.12.4.min.js"></script>
<script src="vista/js/popper.min.js"></script>
<script src="vista/js/bootstrap.min.js"></script>
<script src="vista/js/owl.carousel.min.js"></script>
<script src="vista/js/isotope.pkgd.min.js"></script>
<script src="vista/js/ajax-form.js"></script>
<script src="vista/js/waypoints.min.js"></script>
<script src="vista/js/jquery.counterup.min.js"></script>
<script src="vista/js/imagesloaded.pkgd.min.js"></script>
<script src="vista/js/scrollIt.js"></script>
<script src="vista/js/jquery.scrollUp.min.js"></script>
<script src="vista/js/wow.min.js"></script>
<script src="vista/js/nice-select.min.js"></script>
<script src="vista/js/jquery.slicknav.min.js"></script>
<script src="vista/js/jquery.magnific-popup.min.js"></script>
<script src="vista/js/plugins.js"></script>
<script src="vista/js/gijgo.min.js"></script>
<!--contact js-->
<script src="vista/js/contact.js"></script>
<script src="vista/js/jquery.ajaxchimp.min.js"></script>
<script src="vista/js/jquery.form.js"></script>
<script src="vista/js/jquery.validate.min.js"></script>
<script src="vista/js/mail-script.js"></script>

<script src="vista/js/main.js"></script>
<script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }
    });
    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }

    });
    // $(document).ready(function() {
    //     $('.js-example-basic-multiple').select2();
    // });
    // se inicializa en escondido el input
     $(document).ready(function () {
      $("#leader").hide();
     });

     // se evalua el input select option su opcion y dependiendo muestra o se esconde el input de responsable de equipo
    $(document).on('change', '#tvolunteer', function() {
     let opcion = $("#tvolunteer option:selected").text();
        if(opcion == "Team"){
            $("#leader").show();
        }else{
            $("#leader").hide();
        }
    });
</script>
</body>

</html>