<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    @if ( is_home() )
      @include('partials.slideshow')
    @else
    <div class="wrap title-wrap">
      @yield('title')
    </div>
    @endif
    <div class="wrap-content">
    <div class="anchor" id="radovi"></div>
    <div class="container container-main pb-5" role="document">
      <div class="content p-4">
        <main class="main">
            <div class="row">
            @yield('content')
          </div>
        </main>
        @if (App\display_sidebar())
          <!-- <aside class="sidebar">
            @include('partials.sidebar')
          </aside> -->
        @endif
      </div>
    </div>
  </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
