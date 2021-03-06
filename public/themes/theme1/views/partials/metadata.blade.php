<meta http-equiv="content-type" content="text/html; charset=utf-8" />
{!! isset($seo) ? $seo : null !!}
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Raleway:300,400,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ theme_asset('css/bootstrap.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('admin_theme/vendor/font-awesome/css/font-awesome.min.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ theme_asset('style.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ theme_asset('css/dark.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ theme_asset('css/font-icons.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ theme_asset('css/animate.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ theme_asset('css/magnific-popup.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ theme_asset('css/responsive.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ theme_asset('css/additional.css') }}" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>{{ isset($title) ? $title .' | '. setting('site.title') : setting('site.title') }}</title>
@stack ('style')