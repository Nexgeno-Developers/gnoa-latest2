@php

$title = !empty(trim($__env->yieldContent('page.title'))) ? str_replace(['&nbsp;', '&amp;', '&amp;amp;'], ['&amp;', '&', '&'], htmlspecialchars_decode($__env->yieldContent('page.title'))) : 'Garib Nawaz Online Academy';

$description = !empty(trim($__env->yieldContent('page.description'))) ? str_replace(['&nbsp;', '&amp;', '&amp;amp;'], ['&amp;', '&', '&'], htmlspecialchars_decode($__env->yieldContent('page.description'))) :
'Garib Nawaz Online Academy,
Property law, IP, and more.';

$page_type = !empty(trim($__env->yieldContent('page.type'))) ? $__env->yieldContent('page.type') : 'website';

$publish_time = !empty(trim($__env->yieldContent('page.publish_time'))) ? $__env->yieldContent('page.publish_time') :
'2023-09-18T13:41:39+00:00';

$url = url()->current();

@endphp


<title>@php echo htmlspecialchars_decode($title) @endphp</title>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="NEXGENO">
<meta name="title" content="@php echo htmlspecialchars_decode($title) @endphp">
<meta name="description" content="@php echo htmlspecialchars_decode($description) @endphp">

<meta property="og:url" content="{{ $url }}">
<meta property="og:type" content="{{ $page_type }}">
<meta property="og:site_name" content="{{ url('') }}">
<meta property="og:locale" content="en_US">

<meta property="og:title" content="@php echo htmlspecialchars_decode($title) @endphp">
<meta property="og:description" content="@php echo htmlspecialchars_decode($description) @endphp">

<meta property="article:modified_time" content="{{ $publish_time }}" />



<!----------------- og tag ------------------->

<meta property="og:image" content="{{ asset('assets/frontend/images/logo.png') }}">
<meta property="og:image:width" content="500">
<meta property="og:image:height" content="500">
<meta property="og:image:type" content="image/png" />

<!----------------- og tag ------------------->

<link rel="shortcut icon" href="{{ asset('/assets/frontend/images/favicon.ico') }}">

<!----------------- twitter ------------------->

<!----------------- canonical ------------------->

<link rel="canonical" href="{{ url()->current() }}">

<!----------------- canonical ------------------->

<!---------------- logo Schema ------------------->


<base id="baseUrl" href="{{url('')}}">


<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-CZ1F5WBLMJ"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-CZ1F5WBLMJ'); </script>