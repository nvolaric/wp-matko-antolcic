export default {
  init() {
    // JavaScript to be fired on all pages
      $('.third-button').on('click', function () {
        $('.animated-icon').toggleClass('open');
      });

      $('.home a[href*="#radovi"]').click(function(e) {
        e.preventDefault();

        $('html, body').animate({
          scrollTop: $('#radovi').offset().top }, 500);
      });

      $('a[href*="#kontakt"]').click(function(e) {
        e.preventDefault();

        $('html, body').animate({
          scrollTop: $('#kontakt').offset().top }, 500);
      });

// ovde maknuti /mantolcic
    if ($('.single').length || $('.page').length) {
        var homeurl = window.location.host;
        $('a[href*="#radovi"]').attr('href', 'https://' + homeurl + '/mantolcic/#radovi');

        $('.wp-block-gallery figure a').addClass('img-hover-zoom');

    }

    $('.navbar a').on('click', function(){
      $('.navbar-collapse').collapse('hide');
      $('.animated-icon').toggleClass('open');
    });

    $('footer .wpforms-recaptcha-container').hide();
    $('footer .wpforms-form button').hide();


    $('footer .wpforms-container-full').on('click', function(){
      $('footer .wpforms-recaptcha-container').slideDown();
      $('footer .wpforms-form button').slideDown();
    });

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    /**
* Prevent default click behavior on WordPress gallery image links
*/
  $(document).on('click', '.blocks-gallery-item a', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox({alwaysShowClose: true});
  });

  // Make an ekko lightbox out of WordPress galleries
  $('.wp-block-gallery a[href]').filter(function() {
    return /(jpg|gif|png)$/.test($(this).attr('href'));
  }).each(function() {
    // Get link attr
    // var link = $(this).attr('href');

    // Get the image ALT text
    // var alt = $(this).find('img').attr('alt');
    //
    // // Strip the file extension
    // var filename = link.substr(0, $(this).attr('href').lastIndexOf('.')) || $(this).attr('href');
    //
    // // Get the index of just the filename without the path
    // var fileNameIndex = filename.lastIndexOf('/') + 1;
    //
    // // Return just the filename without the path and without the extension
    // filename = filename.substr(fileNameIndex);

    // Get the ALT text so we can use it as a caption ONLY if it's NOT the same as the filename!
    // WordPress automatically uses the filename as ALT text if no caption or ALT is set, so we don't want to use it if they're the same.
    // var caption = (filename === alt) ? '' : alt;

    var captiondva = $(this).next('.blocks-gallery-item__caption').text();
    // Get the gallery ID
    // var gallery = $(this).closest('.wp-block-gallery').attr('id');
    // alert(captiondva);

    // Add ekko lightbox data-attributes
    $(this).attr({'data-toggle': 'lightbox', 'data-gallery': 'gallery', 'data-footer': captiondva});

  });
  },
};
