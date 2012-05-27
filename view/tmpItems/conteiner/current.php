
<div id="post-wrapper">
    <div class="post">

        <div class="meta">
            <a href="sights.html" class="jbutton jcarousel-prev-disabled jcarousel-prev-disabled-vertical"></a>
            <b style="font-size: 20px; margin-left: 25%;"> Вижте други Забележителности</b>
            <a id="newslist-next" class="jbutton" href="freedom.html"></a>

        </div>
       
        <div class="meta"> <h2 class="title"><b><?=$item['items_name]'];?></b></h2></div>
       <?=$item['items_desc'];?>
        <div style="clear: both;"></div>

        <div class="top-border"></div>

        <div id="portfolio"> 


            <!-- Begin Portfolio Elements -->
            <ul id="gallery" class="grid">

                <!-- Begin Image 1 -->
                <li data-id="id-1" class="photography"> <a href="style/images/art/8_1283786395.jpg" rel="prettyPhoto[gallery]"> <img src="http://www.banite.lh/view/style/images/art/8_1283786395.jpg" alt="" /></a> </li>
                <!-- End Image 1 -->

                <li data-id="id-2" class="illustration"> <a href="style/images/art/devil_bridge1.jpeg" rel="prettyPhoto[gallery]" title=""> <img src="http://www.banite.lh/view/style/images/art/devil_bridge1.jpeg" alt="" /></a> </li>

                <li data-id="id-2" class="illustration"> <a href="style/images/art/devil_bridge2.jpeg" rel="prettyPhoto[gallery]" title=""> <img src="http://www.banite.lh/view/style/images/art/devil_bridge2.jpeg" alt="" /></a> </li>

                <li data-id="id-2" class="illustration"> <a href="style/images/art/devil_bridge3.jpeg" rel="prettyPhoto[gallery]" title=""> <img src="http://www.banite.lh/view/style/images/art/devil_bridge3.jpeg" alt="" /></a> </li>

                <li data-id="id-2" class="illustration"> <a href="style/images/art/devil_bridge4.jpeg" rel="prettyPhoto[gallery]" title=""> <img src="http://www.banite.lh/view/style/images/art/devil_bridge4.jpeg" alt="" /></a> </li>

                <li data-id="id-2" class="illustration"> <a href="style/images/art/devil_bridge5.jpg" rel="prettyPhoto[gallery]" title=""> <img src="http://www.banite.lh/view/style/images/art/devil_bridge5.jpg" alt="" /></a> </li>

                <li data-id="id-2" class="illustration"> <a href="style/images/art/devil_bridge6.jpg" rel="prettyPhoto[gallery]" title=""> <img src="http://www.banite.lh/view/style/images/art/devil_bridge6.jpg" alt="" /></a> </li>

                <li data-id="id-2" class="illustration"> <a href="style/images/art/devil_bridge8.jpg" rel="prettyPhoto[gallery]" title=""> <img src="http://www.banite.lh/view/style/images/art/devil_bridge8.jpg" alt="" /></a> </li>

                <li data-id="id-2" class="illustration"> <a href="style/images/art/devil_bridge9.jpg" rel="prettyPhoto[gallery]" title=""> <img src="http://www.banite.lh/view/style/images/art/devil_bridge9.jpg" alt="" /></a> </li>

                <li data-id="id-2" class="illustration"> <a href="style/images/art/devil_bridge10.jpg" rel="prettyPhoto[gallery]" title=""> <img src="http://www.banite.lh/view/style/images/art/devil_bridge10.jpg" alt="" /></a> </li>

            </ul>
            <!-- End Portfolio Elements --> 

        </div>

    </div>
    <!-- End Description            -->

</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#gallery a[rel^='prettyPhoto']").prettyPhoto({theme:'light_square',autoplay_slideshow: false});
			
        $("ul.grid img").hide()
        $("ul.grid img").each(function(i) {
            $(this).delay(i * 200).fadeIn();
        });
			
    });
</script>
