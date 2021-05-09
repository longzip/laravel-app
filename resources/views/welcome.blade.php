<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel - TailWindCSS</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div class="flex flex-wrap py-2">
    <div class="w-full px-4">
      <nav class="relative flex flex-wrap items-center justify-between px-2 py-3 bg-cyan rounded">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
          <div class="w-full relative flex justify-between lg:w-auto px-4 lg:static lg:block lg:justify-start">
            <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white" href="#pablo">
              pink Menu
            </a>
            <button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button">
              <span class="block relative w-6 h-px rounded-sm bg-white"></span>
              <span class="block relative w-6 h-px rounded-sm bg-white mt-1"></span>
              <span class="block relative w-6 h-px rounded-sm bg-white mt-1"></span>
            </button>
          </div>
          <div class="flex lg:flex-grow items-center" id="example-navbar-info">
            <ul class="flex flex-col lg:flex-row list-none ml-auto">
              <li class="nav-item">
                <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#pablo">
                  Discover
                </a>
              </li>
              <li class="nav-item">
                <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#pablo">
                  Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#pablo">
                  Settings
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <!-- <h1 class="m-8 text-3xl text-gray-900 leading-tight"> Just Laravel Posts </h1>
  <div class="px-2">
    <div class="flex flex flex-wrap -mx-2">
      @foreach($data as $post)
      <div class="w-1/3 px-2">
        <img class="" src="{{ $post->jetpack_featured_media_url }}" alt="Sunset in the mountains">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">{!! $post->title->rendered !!}</div>
          <p class="text-gray-700 text-base">
            {!! $post->excerpt->rendered !!}
          </p>
        </div>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><a href="/" target="_blank">Click Here</a></span>

        </div>
      </div>
      @endforeach
    </div>
  </div> -->

  <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>