<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{__('Platforma')}}</title>
  <!-- Styles -->
  <link rel="stylesheet" href="admin/dist/css/style.css">
</head>
<body>
  {{-- header --}}
  <x-dashboardheader />
    {{-- slider --}}
  <x-dashboardnav />
  <div class="container">
    

    
    <div class="main-panel">

    </div>
  </div>
</body>
</html>
