<nav class="main-nav" data-toggle-name="main-nav">  
    @foreach($menu->all() as $item)
        @if(isset($item->link))
            <a class="{{ (Request::is( $item->route ) ? 'main-nav-item is-current-page' : 'main-nav-item') }}" href="{{ $item->link }}">
            {{ $item->title }} <i class="fa fa-chevron-right"></i>
            </a>
        @elseif(isset($item->menu))
            <a href="#" class="main-nav-item"> {{ $item->title }}</a>
            <nav>
                @foreach($item->menu->all() as $subItem)
                    @if(isset($subItem->link))
                        <a href="{{ $subItem->link }}">{{ $subItem->title }}</a>
                    @elseif($subItem->type === 'heading')
                        <span> {{ $subItem->title }} </span>
                    @endif
                @endforeach
            </nav>
        @endif
    @endforeach
</nav>

{{--

Full bootstrap enabled nav found at: http://matthewhailwood.co.nz/clean-menu-management-in-laravel-4/

<nav>  
  <div class="row nav">
    <ul class="nav nav-pills">
      @foreach($menu->all() as $item)
        @if(isset($item->link) && isset($item->disabled))
          <li class="disabled">
            <a href="{{ $item->link }}">{{ $item->title }}</a>
          </li>
        @elseif(isset($item->link))
          <li>
            <a href="{{ $item->link }}">{{ $item->title }}</a>
          </li>
        @elseif(isset($item->menu))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              {{ $item->title }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              @foreach($item->menu->all() as $subItem)
                @if(isset($subItem->link) && isset($subItem->disabled))
                  <li class="disabled">
                    <a href="{{ $subItem->link }}">{{ $subItem->title }}</a>
                  </li>
                @elseif(isset($subItem->link))
                  <li>
                    <a href="{{ $subItem->link }}">{{ $subItem->title }}</a>
                  </li>
                @elseif($subItem->type === 'heading')
                  <li class="dropdown-header">{{ $subItem->title }}</li>
                @elseif($subItem->type === 'divider')
                  <li class="divider"></li>
                @endif
              @endforeach
            </ul>
          </li>
        @endif
      @endforeach
    </ul>
  </div>
</nav>  

--}}