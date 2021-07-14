 <!-- Page Preloder -->
 <div id="preloder">
     <div class="loader"></div>
 </div>

 <!-- Header Section Begin -->
 <header class="header">
     <div class="container">
         <div class="row">
             <div class="col-lg-2">
                 <div class="header__logo">
                     <a href="/">
                         <img src="{{ asset('img/rm_trans.png') }}" alt="" style="width: 50px; height:auto; ">
                     </a>
                 </div>
             </div>
             <div class="col-lg-8">
                 <div class="header__nav">
                     <nav class="header__menu mobile-menu">
                         <ul>
                             @if (Auth::check())
                                 @if (Auth::user()->isAdmin == 'User')
                                     <li><a href="/">Homepage</a></li>
                                     <li><a href="/genre">Genre</a></li>
                                     <li><a href="/blog">Our Blog</a></li>
                                     <li><a href="/contact">Contacts</a></li>
                                     <li class="nav-item dropdown">
                                         <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown"
                                             aria-haspopup="true" aria-expanded="false" v-pre>
                                             {{ Auth::user()->name }} <span class="caret"></span>
                                         </a>

                                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                             <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                 {{ __('Logout') }}
                                             </a>


                                             <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                 style="display: none;">
                                                 @csrf
                                             </form>
                                         </div>
                                     </li>
                                 @else
                                     <li> <a href="/">Homepage</a></li>
                                     <li><a href="/genre">Genre</a></li>
                                     <li><a href="/blog">Our Blog</a></li>
                                     <li><a href="/contact">Contacts</a></li>
                                     <li><a href="#">Admin <span class="arrow_carrot-down"></span></a>
                                         <ul class="dropdown">
                                             <li><a href="{{ route('books.index') }}">Manage Book</a></li>
                                     </li>

                                 @endif

                             @else
                                 <li><a href="/">Homepage</a></li>
                                 <li><a href="/genre">Genre</a></li>
                                 <li><a href="/blog">Our Blog</a></li>
                                 <li><a href="/contact">Contacts</a></li>
                                 <li><a href="/register">Sign Up</a></li>
                                 <li><a href="/login">Login</a></li>
                             @endif

                         </ul>
                     </nav>
                 </div>
             </div>
             <div class="col-lg-2">
                 <div class="header__right">

                     @if (Auth::check())
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>
                         <a href="#" class="search-switch"><span class="icon_search"></span></a>
                         <a href="/"><span class="icon_profile"></span></a>
                         <!-- <a href="{{ url('bookmark') }}"><i class="fa fa-bookmark-o"></i></a> -->
                         <a href="{{ route('logout') }}"
                             onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout
                         </a>
                     @else
                         <a href="#" class="search-switch"><span class="icon_search"></span></a>
                         <a href="/login"><span class="icon_profile"></span></a>
                         <!-- <a href="{{ url('bookmark') }}"><i class="fa fa-bookmark-o"></i></a> -->
                     @endif

                 </div>
             </div>
         </div>
         <div id="mobile-menu-wrap"></div>
     </div>
 </header>
 <!-- Header End -->
