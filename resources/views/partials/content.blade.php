  <article @php post_class('col col-lg-3 col-md-4 col-sm-6 col-12 ') @endphp data-aos="zoom-out-up">
    <a href="{{ get_permalink() }}">
    <div class="thumb shadow-sm img-hover-zoom img-hover-zoom--brightness">
      @php the_post_thumbnail('medium-large') @endphp
    </div>
    <header>
      <h2 class="entry-title pt-2">{!! get_the_title() !!}</h2>
      <p>@php echo get_post_meta( get_the_ID(), 'godina', true ) @endphp</p>
    </header>
    </a>
  </article>
