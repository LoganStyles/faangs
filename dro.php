<!DOCTYPE HTML>
<html>
<head>
<title>Gifty an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gifty Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>

</head>
<style>


#widnow{
    width:400px;
    border:solid 1px;
}

#title_bar{
    background: #FEFEFE;
    height: 25px;
    width: 100%;
}
#button{
    border:solid 1px;
    width: 25px;
    height: 23px;
    float:right;
    cursor:pointer;
}
#box{
    height: 250px;
    background: #DFDFDF;
}



</style>
<body>
<div id="dragAndDropFiles" class="uploadArea">
<h1>Drop Images Here</h1>
</div>
<form name="demoFiler" id="demoFiler" enctype="multipart/form-data">
<input type="file" name="multiUpload" id="multiUpload" multiple />
<input type="submit" name="submitHandler" id="submitHandler" value="Upload" />
</form>
<div class="progressBar">
<div class="status"></div>
</div>
</body>


<script>



var config = {
// Valid file formats
support : "image/jpg,image/png,image/bmp,image/jpeg,image/gif",
form: "demoFiler", // Form ID
dragArea: "dragAndDropFiles", // Upload Area ID
uploadUrl: "upload.php" // Server side file url
}
//Initiate file uploader.
$(document).ready(function()
{
initMultiUploader(config);
});
</script>






</html>