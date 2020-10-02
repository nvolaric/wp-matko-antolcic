<article @php post_class() @endphp>
  <header>
    <h2 class="excerpt text-center">{!! get_the_excerpt() !!}</h2>
    <!-- @include('partials/entry-meta') -->
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
