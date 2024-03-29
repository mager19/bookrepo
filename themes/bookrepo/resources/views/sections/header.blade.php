<header class="banner header__home">
  <div class="container mx-auto">
    <div class="flex flex-wrap items-center px-4">
      <div class="w-1/2">
        <a class="brand" href="{{ home_url('/') }}">
          <img src={{ $heroFields['logo'] }} alt={!! $siteName !!}>
        </a>
      </div>

      @if (has_nav_menu('primary_navigation'))
      <div class="w-1/2 flex justify-end">
        <nav class="nav-primary hidden lg:block" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
        </nav>

        <!-- Button trigger mobile -->

        <button type="button" class="mobile-nav border-none lg:hidden w-3/12 flex justify-end" id="menumobile">
          <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22 18.3333C22 19.2538 21.2538 20 20.3333 20H12.6667C11.7462 20 11 19.2538 11 18.3333V18.3333C11 17.4129 11.7462 16.6667 12.6667 16.6667H20.3333C21.2538 16.6667 22 17.4129 22 18.3333V18.3333ZM22 10C22 10.9205 21.2538 11.6667 20.3333 11.6667H1.66667C0.746192 11.6667 0 10.9205 0 10V10C0 9.07952 0.746192 8.33333 1.66667 8.33333H20.3333C21.2538 8.33333 22 9.07952 22 10V10ZM22 1.66667C22 2.58714 21.2538 3.33333 20.3333 3.33333H1.66667C0.746193 3.33333 0 2.58714 0 1.66667V1.66667C0 0.746192 0.746192 0 1.66667 0H20.3333C21.2538 0 22 0.746192 22 1.66667V1.66667Z" fill="#031B4C" />
          </svg>

        </button>

        <!-- Button trigger mobile -->
      </div>
      @endif
    </div>
  </div>
</header>