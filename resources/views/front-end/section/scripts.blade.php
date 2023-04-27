<!-- fraimwork - jquery include -->
<script src="/assets/js/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<!-- carousel - jquery include -->
    <script src="/assets/js/owl.carousel.min.js"></script>

<!-- mobile menu - jquery include -->
    <script src="/assets/js/mCustomScrollbar.js"></script>

<!-- google map - jquery include -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&amp;ver=2.1.6"></script>
    <script src="/assets/js/gmaps.min.js"></script>

<!-- nice select - jquery include -->
    <script src="/assets/js/nice-select.min.js"></script>

<!-- circle progress - jquery include -->
    <script src="/assets/js/circle-progress.min.js"></script>

<!-- magnific popup - jquery include -->
    <script src="/assets/js/magnific-popup.min.js"></script>

    <!-- filter & masonry js -->
<script src="/assets/js/isotope.pkgd.js"></script>
<script src="/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="/assets/js/masonry.pkgd.min.js"></script>

<!-- counter - jquery include -->
<script src="/assets/js/countto.js"></script>

<!-- pricing range - jquery include -->
<script src="/assets/js/jquery-ui.js"></script>

<!-- animation - jquery include -->
<script src="/assets/js/parallax.min.js"></script>
<script src="/assets/js/wow.min.js"></script>

<!-- custom - jquery include -->
<script src="/assets/js/custom.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<script>
    $(document).ready(function(){
    
     $('.search').keyup(function(){ 
            var query = $(this).val();
            if(query != '')
            {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
             $.ajax({
              url:"{{ route('autocomplete') }}",
              method:"POST",
              data:{q:query},
              success:function(data){
                  console.log(data);
                $('#productList').fadeIn();  
                $('#productList').html(data);
              }
             });
            }
        });
    
        $(document).on('click', 'li', function(){  
            $('.search').val($(this).text());  
            $('#productList').fadeOut();  
        });  
    
    });
    </script>
<script>
    $(document).ready(function(){
        $('#all').click(function(){
            $('.hide-content').fadeIn();
            $("html, body").animate({ scrollTop: 400 }, "slow");
            return false;
        });
        $('#bCards').click(function(){
            $('.hide-content').fadeOut();
            $('.business-card').fadeIn();
            $("html, body").animate({ scrollTop: 400 }, "slow");
            return false;
        });
        $('#banners').click(function(){
            $('.hide-content').fadeOut();
            $('.banner').fadeIn();
            $("html, body").animate({ scrollTop: 400 }, "slow");
            return false;
        });
        $('#envelops').click(function(){
            $('.hide-content').fadeOut();
            $('.envelope').fadeIn();
            $("html, body").animate({ scrollTop: 400 }, "slow");
            return false;
        });
        $('#letterhead').click(function(){
            $('.hide-content').fadeOut();
            $('.letterhead').fadeIn();
            $("html, body").animate({ scrollTop: 400 }, "slow");
            return false;
        });
        $('#folders').click(function(){
            $('.hide-content').fadeOut();
            $('.folders').fadeIn();
            $("html, body").animate({ scrollTop: 400 }, "slow");
            return false;
        });
        $('#stands').click(function(){
            $('.hide-content').fadeOut();
            $('.stands').fadeIn();
            $("html, body").animate({ scrollTop: 400 }, "slow");
            return false;
        });
    });
</script>
@if(Auth::check())
<script>
    $(document).ready(function() {
        setInterval(() => {
            cartCount();
        }, 5000); 
    });
    function cartCount() {
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "GET",
            url: "/cart-count",
            
            success:function(response) {
                $('#cartCount').html(response);
            },
            error: function(error){
                console.log(error)
            }
        });

    }
</script>
@endif
<script>
    $('#loginBtnFront').click(function(e){
            e.preventDefault();
            $.ajaxSetup({
                          headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          }
                      });
          
                  $.ajax({
                    type: "POST",
                    url: "/login-user",
                    data:$('#loginForm').serialize(),
          
                    success:function(response) {
                        console.log(response);
                        if(response > 0)
                        {
                            swal({
                              title: "Success",
                              text: "Please wait while redirect...",
                              type: "success",  
                              timer: 1500,
                              showCancelButton: false,
                              showConfirmButton: false,
                              buttons: false,
                            });
                            addCart(1);
                        } else {
                            swal({
                              title: "Wrong Credentials",
                              text: "Please enter correct Email and Password",
                              type: "error",  
                              timer: 1500,
                              showCancelButton: false,
                              showConfirmButton: false,
                              buttons: false,
                            });
                        }
                    //   swal({
                    //     title: "Success",
                    //     text: "Thank you for your feedback",
                    //     type: "success",  
                    //     timer: 1500,
                    //     showCancelButton: false,
                    //     showConfirmButton: false,
                    //     buttons: false,
                    //   });
                    //   setTimeout(() => {
                    //     window.location.reload();
                    //   }, 100);
                    },
                    error:function(response) {
          
                    }
                  });
          });
</script>
<script>
    const slider = document.querySelector('.parent');
    let mouseDown = false;
    let startX, scrollLeft;
    
    let startDragging = function (e) {
      mouseDown = true;
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
    };
    let stopDragging = function (event) {
      mouseDown = false;
    };
    
    slider.addEventListener('mousemove', (e) => {
      e.preventDefault();
      if(!mouseDown) { return; }
      const x = e.pageX - slider.offsetLeft;
      const scroll = x - startX;
      slider.scrollLeft = scrollLeft - scroll;
    });
    
    // Add the event listeners
    slider.addEventListener('mousedown', startDragging, false);
    slider.addEventListener('mouseup', stopDragging, false);
    slider.addEventListener('mouseleave', stopDragging, false);
</script>