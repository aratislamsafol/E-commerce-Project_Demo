<script src="js/jquery.min.js"></script>
	<script src="js/fontawesome.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>

    <script src="js/owl.carousel.min.js"></script>
    <script src="js/activatate.js"></script>
	<script src="js/lightbox-plus-jquery.min.js"></script>
	
	<script src="js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
	<script src="js/main.js"></script>

    <script>
        $(".service").on('mouseenter', function () {
            $(this).addClass('shadow-lg bg-white').css({ transition: 'all 1s', borderRadius: '5px' })
        })

        $(".service").on('mouseleave', function () {
            $(this).removeClass('shadow-lg bg-white').css({ transition: 'all 1s' })
        })
    </script>
</body>
</html>