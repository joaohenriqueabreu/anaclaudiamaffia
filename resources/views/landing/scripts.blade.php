<!-- Begin Home -->
    {{ Html::script(asset('plugins/master-slider/masterslider/masterslider.min.js'))}}
    {{ Html::script(asset('plugins/master-slider/masterslider/jquery.easing.min.js'))}}
    {{ Html::script(asset('plugins/counter/waypoints.min.js'))}}
    {{ Html::script(asset('plugins/counter/jquery.counterup.min.js'))}}
    {{ Html::script(asset('plugins/fancybox/source/jquery.fancybox.pack.js'))}}
    {{ Html::script(asset('js/custom.js'))}}
    {{ Html::script(asset('js/plugins/fancy-box.js'))}}
    {{ Html::script(asset('js/plugins/master-slider-fw.js'))}}
<!-- End Home -->

<!-- Begin Blog -->
    {{ Html::script(asset('plugins/master-slider3/masterslider/masterslider.js')) }}
    {{ Html::script(asset('plugins/master-slider3/masterslider/jquery.easing.min.js')) }}
    {{ Html::script(asset('js/plugins/master-slider-showcase3.js')) }}
<!-- End Blog -->

<!-- Begin Serviços -->
    {{--{{ Html::script(asset('plugins/pace/pace.min.js')) }}--}}
    {{ Html::script(asset('plugins/owl-carousel2/owl.carousel.min.js')) }}

    {{ Html::script(asset('plugins/sky-forms-pro/skyforms/js/jquery.form.min.js')) }}
    {{ Html::script(asset('plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js')) }}
    {{ Html::script(asset('plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js')) }}
    {{ Html::script(asset('plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js')) }}

    {{ Html::script(asset('plugins/jquery.parallax.js')) }}
    {{ Html::script(asset('plugins/modernizr.js')) }}
    {{ Html::script(asset('plugins/backstretch/jquery.backstretch.min.js')) }}

{{--    {{ Html::script(asset('js/plugins/pace-loader.js')) }}--}}
    {{ Html::script(asset('js/plugins/owl-carousel2.js')) }}
    {{ Html::script(asset('js/plugins/promo.js')) }}
<!-- End Serviços -->

{{--Metodologia --}}

{{ Html::script(asset('plugins/backstretch/jquery.backstretch.min.js')) }}

{{--End Metodologia--}}

<!-- Begin projetos -->
    {{ Html::script(asset('plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js')) }}
    {{ Html::script(asset('js/plugins/cube-portfolio/cube-portfolio-lightbox.js')) }}
<!-- End projetos -->

{{Html::script(asset('js/forms/contact.js'))}}


    {{Html::script(asset('js/app.js'))}}

<!-- Genenral initialization -->
<script type="text/javascript">
    jQuery(document).ready(function () {
        App.init();
        FancyBox.initFancybox();
        OwlCarousel.initOwlCarousel();
        MSfullWidth.initMSfullWidth();
        MSShowCase3.initMSShowCase3();
        StyleSwitcher.initStyleSwitcher();
        ContactForm.initContactForm();

        $("#phone").mask('(99) 99999-9999');
    });
</script>
<!-- End initialization -->