<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">

<!-- Web Fonts -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

<!-- CSS Global Compulsory -->
{{ Html::style(asset('plugins/bootstrap/css/bootstrap.min.css'))}}
{{--<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">--}}

{{ Html::style(asset('css/style.css')) }}
{{--<link rel="stylesheet" href="css/style.css">--}}

<!-- CSS Header and Footer -->
{{ Html::style(asset('css/headers/header-v6.css')) }}

<!-- CSS Implementing Plugins -->
{{ Html::style(asset('css/footers/footer-v1.css'))}}
{{ Html::style(asset('plugins/animate.css'))}}
{{ Html::style(asset('plugins/line-icons/line-icons.css'))}}
{{ Html::style(asset('plugins/font-awesome/css/font-awesome.min.css'))}}
{{ Html::style(asset('css/architecture.style.css'))}}

<!-- CSS Theme -->
{{--{{ Html::style(asset('css/theme-colors/blue.css'), array('id'=>'style_color'))}}--}}
{{ Html::style(asset('css/theme-colors/anacolor.css'), array('id'=>'style_color'))}}
{{ Html::style(asset('css/theme-skins/dark.css'))}}

<!-- CSS Customization -->
{{ Html::style(asset('css/custom.css'))}}