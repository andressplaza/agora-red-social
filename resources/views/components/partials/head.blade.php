<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- Social Meta --}}
<x-social-meta title="Hello World" description="Blade components are awesome!" image="http://example.com/social.jpg" />

{{-- Title --}}
<title>{{ config('app.name', 'Forum') }}</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&display=swap" rel="stylesheet">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
<script src="https://code.createjs.com/1.0.0/easeljs.min.js"></script>




<!-- Include Choices CSS -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css"
/>



<!-- Include Choices JavaScript (latest) -->
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

 



{{-- Livewire --}}
<livewire:styles />

{{-- Blade UI Kit --}}
@bukStyles(true)
