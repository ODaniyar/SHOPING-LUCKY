<footer id="footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->


<!---->
<!--<script src="/template/js/jquery.js"></script>-->
<!--<script src="/template/js/bootstrap.min.js"></script>-->
<!--<script src="/template/js/jquery.scrollUp.min.js"></script>-->
<!--<script src="/template/js/price-range.js"></script>-->
<!--<script src="/template/js/jquery.prettyPhoto.js"></script>-->
<!--<script src="/template/js/main.js"></script>-->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="/template/js/jquery.cycle2.js"></script>

<script src="/template/js/jquery.cycle2.carousel.js"></script>
<script>
    $(document).ready(function (){
        $('.add-to-cart').click(function (){
            var id = $(this).attr('data-id');
            $.post("/cart/addAjax/"+id,{},function(response) {
                $('#cart-count').html(response);

            });
            return false;
        });
    });
</script>

</body>
</html>
