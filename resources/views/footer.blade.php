@php
    use App\Models\Components;
@endphp
{{-- {{dd(Components::getFooterMenu())}} --}}
<footer>
    <div class="container">
      
        <div class="row py-5">
            <div class="col-sm-12 col-lg-6 col-md-6 mb-5">
                <h2 class="mb-4"><a href="#" class="footer-logo">Global Protection</a></h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, voluptatem quos quasi quam recusandae aliquam ea consequatur dolorum et. Tempore.</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
                <h4 class="mb-4">Footer Menu</h4>
                <ul class="list-unstyled">
                    @foreach(Components::getFooterMenu() as $menuItem)
                        <li> 
                            <a href={{$menuItem->url}}>{{$menuItem->title}}</a> 
                        </li>
                    @endforeach
                
                </ul>
            </div>
        </div>

        <div class="row text-center pb-5">
          <p class="mb-0">© Copyright. All rights reserved.</p>
        </div>

      </div>
</footer>