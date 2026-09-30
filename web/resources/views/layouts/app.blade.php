<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light" style="color-scheme: light only;">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta name="color-scheme" content="light only"/>
<meta name="supported-color-schemes" content="light"/>
<title>@yield('title', 'Toko Kelontong — Belanja Makanan & Kebutuhan Harian Khas Nusantara')</title>
<meta name="description" content="@yield('meta_description', 'Katalog snack, bumbu rempah, kopi, dan makanan instan khas Nusantara dari produsen lokal. Harga eceran dan grosir — Toko Kelontong Klaten.')"/>
<link rel="icon" type="image/png" sizes="64x64" href="{{ asset('favicon-64.png') }}"/>
<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>
<link rel="apple-touch-icon" href="{{ asset('images/logo-mark.png') }}"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400..900;1,9..144,400..900&family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com"></script>
<script>
tailwind.config={darkMode:'class',theme:{extend:{colors:{"surface-container-high":"#eadfd2","background":"#fbf6ef","surface-container-low":"#f3ebdf","surface-bright":"#fdfaf5","on-secondary-fixed":"#12240f","primary":"#96521e","on-tertiary-container":"#fff8ee","secondary":"#446744","secondary-fixed-dim":"#aad1a6","primary-container":"#d9b48a","surface-dim":"#ddd0c0","on-error":"#ffffff","on-primary":"#fff8ee","on-secondary":"#ffffff","outline":"#7d6a57","error":"#b3372e","outline-variant":"#e0cdb6","on-primary-fixed-variant":"#ffb59c","on-primary-container":"#fff8ee","surface":"#fbf6ef","surface-container-lowest":"#ffffff","on-primary-fixed":"#3b1400","on-error-container":"#fff1ec","inverse-on-surface":"#f5eee4","on-tertiary-fixed":"#2c1c00","tertiary":"#a16207","inverse-surface":"#33302b","on-tertiary":"#ffffff","on-tertiary-fixed-variant":"#684d00","on-background":"#1f1b16","secondary-container":"#c3eabe","tertiary-fixed":"#ffe0b0","tertiary-container":"#8a5a10","surface-variant":"#eee1d0","surface-container":"#f3e7d7","error-container":"#ffdad4","tertiary-fixed-dim":"#ffc96b","on-secondary-fixed-variant":"#2d4e2e","surface-tint":"#96521e","primary-fixed":"#ffd8b0","inverse-primary":"#ffb59c","on-secondary-container":"#486b48","on-surface":"#1f1b16","secondary-fixed":"#c5edc1","on-surface-variant":"#504437"},borderRadius:{"DEFAULT":"0.375rem","lg":"0.5rem","xl":"0.875rem","full":"9999px"},spacing:{"space-lg":"1.5rem","gutter-mobile":"1rem","space-sm":"0.75rem","space-2xl":"3rem","gutter-desktop":"1.5rem","container-max":"1240px","space-3xl":"4rem","space-xs":"0.5rem","space-md":"1rem","space-xl":"2rem","space-2xs":"0.25rem","space-4xl":"6rem"},fontFamily:{"display":["Fraunces","serif"],"headline-lg":["Fraunces","serif"],"headline-md":["Fraunces","serif"],"headline-sm":["Fraunces","serif"],"title-lg":["Plus Jakarta Sans","sans-serif"],"title-md":["Plus Jakarta Sans","sans-serif"],"body-lg":["Plus Jakarta Sans","sans-serif"],"body-md":["Plus Jakarta Sans","sans-serif"],"body-sm":["Plus Jakarta Sans","sans-serif"],"label-lg":["Plus Jakarta Sans","sans-serif"],"label-md":["Plus Jakarta Sans","sans-serif"],"label-sm":["Plus Jakarta Sans","sans-serif"]},fontSize:{display:["48px",{lineHeight:"56px",letterSpacing:"-0.02em",fontWeight:"700"}],"headline-lg":["36px",{lineHeight:"44px",letterSpacing:"-0.015em",fontWeight:"700"}],"headline-md":["28px",{lineHeight:"36px",fontWeight:"600"}],"headline-sm":["20px",{lineHeight:"28px",fontWeight:"600"}],"title-lg":["18px",{lineHeight:"26px",fontWeight:"700"}],"title-md":["16px",{lineHeight:"24px",fontWeight:"600"}],"body-lg":["18px",{lineHeight:"28px",fontWeight:"400"}],"body-md":["15px",{lineHeight:"24px",fontWeight:"400"}],"body-sm":["13px",{lineHeight:"20px",fontWeight:"400"}],"label-lg":["14px",{lineHeight:"20px",letterSpacing:"0.02em",fontWeight:"600"}],"label-md":["12px",{lineHeight:"16px",letterSpacing:"0.04em",fontWeight:"600"}],"label-sm":["11px",{lineHeight:"14px",letterSpacing:"0.06em",fontWeight:"700"}]}}}}
</script>
<style>
:root {
  color-scheme: light only;
  supported-color-schemes: light;
}
html, body {
  color-scheme: light only;
  background-color: #fbf6ef !important;
  color: #1f1b16 !important;
  overflow-x: hidden;
  max-width: 100vw;
}
::-webkit-scrollbar{display:none;}
</style>
</head>
<body class="bg-surface font-body-md text-body-md text-on-surface antialiased overflow-x-hidden w-full">
@include('partials.header')
<main class="w-full pt-28 bg-surface overflow-x-hidden">
@yield('content')
</main>
@include('partials.footer')
</body>
</html>
