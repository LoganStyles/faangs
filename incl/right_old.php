<?php
$qrigth = "select * from  advert where rights=1";
$res = mysql_query($qrigth);
if (!$res) {
    echo mysql_error();
}
while ($resc = mysql_fetch_array($res)) {
    echo"<img src=\"banner/{$resc['imgname']}\" width=\"200\" class=\"rightcl\"/>";
}
?>
<script>
    var slideIndex = 0;
    slider();
    function slider() {
        var i;
        // var right = document.getElementsByClassName("rightcl");
        var right = $(".rightcl");
        for (i = 0; i < right.length; i++) {
            right[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > right.length) {
            slideIndex = 1
        }
        ///right[slideIndex-1].style.display = "block"; 
        var element2 = right.eq(slideIndex - 1);
        element2.fadeIn(3000);
        setTimeout(slider, 5000);
    }
</script>