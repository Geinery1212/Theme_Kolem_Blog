    <footer>
        <section class="footer-menu">
            <div class="container">
                <nav class="main-nav">
                    <ul class="menu" id="menu">
                        <li class="menu__item"><a href="#" class="menu__link menu__link_sm">Inicio</a></li>
                        <li class="menu__item"><a href="#" class="menu__link menu__link_sm">Acerca de</a></li>
                        <li class="menu__item"><a href="#" class="menu__link menu__link_sm">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </section>
        <section class="social-media">
			<div class="social-media-container">
				<a class="twitter social-media__link" href="#"><i class="fa-brands fa-twitter social-media__icon"></i></a>
				<a class="facebook social-media__link" href="#"><i class="fa-brands fa-facebook social-media__icon"></i></a>
				<a class="youtube social-media__link" href="#"><i class="fa-brands fa-youtube social-media__icon"></i></a>
				<a class="github social-media__link" href="#"><i class="fa-brands fa-github social-media__icon"></i></a>
				<a class="instagram social-media__link" href="#"><i class="fa-brands fa-instagram social-media__icon"></i></a>
			</div>
		</section>
        <section class="footer-autor">
            <p class="footer-autor__name">Ervin Aldo Díaz Jiménez</p>
        </section>
    </footer>
    <script src="<?=bloginfo('template_url')?>/js/script.js?v=<?= time(); ?>"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            speed: 600,
            parallax: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <?php wp_footer();?>
</body>

</html>
