<header>
    <div class="logo">
      <a href="{{('redirect')}}"><img src="" alt="logo"></a>
    
    </div>
   
    <div class="searchbox">
    <form action="#">
      <input class="search" type="text" placeholder="Search for product or categories">
      <x-jet-button class="button">{{__('Search')}}</x-jet-button>
    </form>
     </div>

    <div class="dropdown" style="float:right;">
      <button class="dropbtn">{{$user->name}}</button>
      <div class="dropdown-content">
      <a href="#">{{__('Profile')}}</a>
      <a href="#">{{__('Logout')}}</a>
      </div>
    </div>
</header>
