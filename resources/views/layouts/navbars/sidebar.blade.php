<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{url('/')}}/home" class="simple-text logo-normal">
      {{ __('GangaServices') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('profile.edit') }}">
          <i class="material-icons">person</i>
            <p>{{ __('Edit Profile') }}</p>
        </a>
      </li>
      <!-- <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Laravel Examples') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li> 
      -->
      <li class="nav-item{{ $activePage == 'setting' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('setting') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Setting') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'worklist' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('worklist') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Worklist') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'account' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">account_balance_wallet</i>
            <p>{{ __('Account') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'feedback' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('feedback') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Feedback') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>