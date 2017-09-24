{{ Html::script(asset('plugins/owl-carousel/owl-carousel/owl.carousel.js')) }}

{{ Html::script(asset('js/app.js')) }}
{{ Html::script(asset('js/plugins/owl-recent-works.js')) }}
{{ Html::script(asset('js/plugins/style-switcher.js')) }}

<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        StyleSwitcher.initStyleSwitcher();
        OwlRecentWorks.initOwlRecentWorksV1();
    });
</script>