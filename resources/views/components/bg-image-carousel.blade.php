<div class="carousel-item {{ $class }}">
  <img class="d-block w-100" src="{{ wp_get_attachment_image_src($image, 'full')[0] }}" alt="Matko Antolčić" style="display:none" sizes="100vw" srcset="{{ wp_get_attachment_image_srcset($image, 'full') }}">
  {!! $slot !!}
</div>
