<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$data->pageTitle}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      img {
          max-width: 100%;
          width: 100%;
          height: auto;
          object-fit: contain;
      }
    </style>
</head>
<body>

    @include('header')
    <main>
      <x-page-hero :title='$data->pageTitle'/>
      <section class="py-5">
        <div class="container">
          <div class="row align-items-center justify-content-center">

            @foreach ($data->hero->values as $box)
            <div class="col-sm-12 col-md-6 col-lg-4">
              {!! $box->content->value !!}
            </div>
            @endforeach

          
          </div>
        </div>
      </section>

      <section class="py-5">
        <div class="container">
          <div class="row align-items-center justify-content-center">

            @foreach ($data->blocks->values as $block)
              <div class="col-sm-12 col-md-6">
                {!! $block->content->value !!}
              </div>
            @endforeach

          
          </div>
        </div>
      </section>

    </main>

    @include('footer')
</body>
</html>