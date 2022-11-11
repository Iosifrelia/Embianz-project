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
  @include('sweetalert::alert')
  {{-- header --}}
  <x-dashboardheader />
    {{-- slider --}}
  <x-dashboardnav />
  <section>
  <div class="container">
    <div class="title">
    <h2 class="titile-section">All Categories</h2>
    
    <div class="add-categories">
      <div class="dropdown">
        <button class="dropbtn">+</button>
        <div class="dropdown-content">
          <form action="{{url('/add_category')}}" method="POST">
            @csrf
            <input type="text" name="category_name" id="" placeholder="Category name" required>
            <input type="text" name="category_parent" id="" placeholder="Category parent">
            <input type="text" name="category_longdescript" id="" placeholder="Long Description" required>
            <input type="text" name="category_shortdescript" id="" placeholder="Short Description" required>
            <input class="submit" type="submit" value="Add Category">
          </form>
        </div>
      </div>
    </div>
  </div>
    
    <div class="main-panel">
      <div class="showtable">

      </div>
    </div>
  </div>
</section>
</body>
</htm