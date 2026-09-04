<!DOCTYPE html>
<html lang="id" class="light" style="color-scheme: light only;">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta name="color-scheme" content="light only"/>
<meta name="supported-color-schemes" content="light"/>
<title>@yield('title', 'Toko Kelontong — Rasa Asli Indonesia, Dikirim ke Seluruh Dunia')</title>
<meta name="description" content="@yield('meta_description', 'Oleh-oleh khas Nusantara pilihan — snack, bumbu rempah, kopi, dan makanan kering terbaik dari produsen lokal. Pengiriman internasional oleh CV. Bertiga Tradexa.')"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,400..800;1,400..800&family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com"></script>
<script>
tailwind.config={darkMode:'class',theme:{extend:{colors:{"surface-container-high":"#eae7e7","background":"#fcf9f8","surface-container-low":"#f6f3f2","surface-bright":"#fcf9f8","on-secondary-fixed":"#012106","primary":"#9f3c16","on-tertiary-container":"#fffbff","secondary":"#446744","secondary-fixed-dim":"#aad1a6","primary-container":"#bf542c","surface-dim":"#dcd9d9","on-error":"#ffffff","on-primary":"#ffffff","on-secondary":"#ffffff","outline":"#8a726a","error":"#ba1a1a","outline-variant":"#dec0b7","on-primary-fixed-variant":"#822801","on-primary-container":"#fffbff","on-surface":"#1b1c1c","surface":"#fcf9f8","surface-container-lowest":"#ffffff","on-primary-fixed":"#390c00","on-error-container":"#93000a","inverse-on-surface":"#f3f0ef","on-tertiary-fixed":"#2c1700","tertiary":"#854f00","inverse-surface":"#303030","on-tertiary":"#ffffff","primary-fixed":"#ffdbcf","inverse-primary":"#ffb59c","on-tertiary-fixed-variant":"#683d00","on-background":"#1b1c1c","secondary-container":"#c3eabe","tertiary-fixed":"#ffdcbc","tertiary-container":"#a76501","surface-variant":"#e5e2e1","surface-container":"#f0eded","error-container":"#ffdad6","tertiary-fixed-dim":"#ffb86a","on-secondary-fixed-variant":"#2d4e2e","surface-tint":"#a23e18","primary-fixed-dim":"#ffb59c","surface-container-highest":"#e5e2e1","secondary-fixed":"#c5edc1","on-secondary-container":"#486b48","on-surface-variant":"#57423b"},borderRadius:{"DEFAULT":"0.125rem","lg":"0.25rem","xl":"0.5rem","full":"0.75rem"},spacing:{"space-lg":"1.5rem","gutter-mobile":"1rem","space-sm":"0.75rem","space-2xl":"3rem","gutter-desktop":"1.5rem","container-max":"1240px","space-3xl":"4rem","space-xs":"0.5rem","space-md":"1rem","space-xl":"2rem","space-2xs":"0.25rem","space-4xl":"6rem"},fontFamily:{"display":["Epilogue"],"headline-lg":["Epilogue"],"headline-md":["Epilogue"],"headline-sm":["Epilogue"],"title-lg":["Plus Jakarta Sans"],"title-md":["Plus Jakarta Sans"],"body-lg":["Plus Jakarta Sans"],"body-md":["Plus Jakarta Sans"],"body-sm":["Plus Jakarta Sans"],"label-lg":["Plus Jakarta Sans"],"label-md":["Plus Jakarta Sans"],"label-sm":["Plus Jakarta Sans"]},fontSize:{"display":["48px",{lineHeight:"56px",letterSpacing:"-0.02em",fontWeight:"700"}],"headline-lg":["36px",{lineHeight:"44px",letterSpacing:"-0.015em",fontWeight:"600"}],"headline-md":["28px",{lineHeight:"36px",fontWeight:"600"}],"headline-sm":["20px",{lineHeight:"28px",fontWeight:"600"}],"title-lg":["18px",{lineHeight:"26px",fontWeight:"700"}],"title-md":["16px",{lineHeight:"24px",fontWeight:"600"}],"body-lg":["18px",{lineHeight:"28px",fontWeight:"400"}],"body-md":["15px",{lineHeight:"24px",fontWeight:"400"}],"body-sm":["13px",{lineHeight:"20px",fontWeight:"400"}],"label-lg":["14px",{lineHeight:"20px",letterSpacing:"0.02em",fontWeight:"600"}],"label-md":["12px",{lineHeight:"16px",letterSpacing:"0.04em",fontWeight:"600"}],"label-sm":["11px",{lineHeight:"14px",letterSpacing:"0.06em",fontWeight:"700"}]}}}}
</script>
<style>
:root {
  color-scheme: light only;
  supported-color-schemes: light;
}
html, body {
  color-scheme: light only;
  background-color: #fcf9f8 !important;
  color: #1b1c1c !important;
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
