@php
    use App\Models\Components;
@endphp

<header>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="/">Global Protection</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          @foreach(Components::getPrimaryMenu() as $item)

            @if(empty($item->children))
              
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href={{$item->url}}>{{$item->title}}</a>
              </li>

            @else

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href={{$item->url}} role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{$item->title}}
              </a>
              <ul class="dropdown-menu">

                @foreach($item->children as $dropdownItem)
                  <li><a class="dropdown-item" href={{$dropdownItem->url}}>{{$dropdownItem->title}}</a></li>
                @endforeach

              </ul>
            </li>

            @endif

          @endforeach

        </ul>
      </div>
    </div>
  </nav>
</header>