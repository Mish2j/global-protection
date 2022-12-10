<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$data->pageTitle}}</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>

  {{-- {{dd($data)}} --}}
    {{-- {{dd($data->hero->values)}} --}}
    @include('header')
    <main>
      <section class="py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 col-lg-7 text-center text-lg-start">
              <h1>Industry Leading Managed Services Solutions</h1>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Consectetur laborum quisquam provident odit cum amet.
              </p>
              <button type="button" class="btn btn-circled btn-secondary">
                Purchase Now
              </button>
            </div>
            <div class="col-lg-5 d-none d-lg-block">
              <img src="../assets/banner-img-5.png" alt="" class="img-fluid" />
            </div>
          </div>
        </div>
      </section>
        {{-- <div class="row row-cols-1 row-cols-md-3 g-4">

            @foreach($data->hero->values as $item)
            <a href={{$item->link}}>
                <div class="col">
                    <div class="card">
      
                      {!! $item->content->value !!}
           
                    </div>
                  </div>
            </a>
    
            @endforeach
           
          </div> --}}
    </main>

    @include('footer')
</body>
</html>