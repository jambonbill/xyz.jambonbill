<?php
//show as list
header('Content-Type: text/html; charset=utf-8');
session_start();

require __DIR__."/../vendor/autoload.php";

$B=new Djang\Base;
$HEN=new JAM\LogHicetnunc($B);
?>
<html lang="en">
<head>

	<meta charset="utf-8" />

	<link rel="icon" type="image/png" href="/favicon.ico" />

	<meta property="og:title" content="jambonbill.xyz" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://jambonbill.xyz" />
	<meta property="og:image" content="img/jambonbill.png" />
	<meta property="og:description" content="decentralized digital assets" />

	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:creator" content="@jambonbill" />
	<meta name="twitter:title" content="jambonbill" />
	<meta name="twitter:description" content="decentralized digital assets" />
	<meta name="twitter:image" content="img/jambonbill.png" />
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" type="text/css" />
	<script src="js/psp-lib.js" type="text/javascript"></script>
	<title>jambonbill.xyz</title>

<?php
$files=glob("gif/teia/*.gif");
shuffle($files);
//echo '<pre>';print_r($files);echo '</pre>';
?>

<style type="text/css">
body{
	margin:16px;
	background-color: #111111;
    font-family: monospace;
    background-image: url("<?php echo $files[0]?>");
    background-size: 100%;

}
iframe{
	position:absolute;
	top:0;
	left:0;
}
div.container-fluid{

}
</style>
</head>
<body>

<div class="container-fluid">


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">jambonbill.xyz</h5>
    <p class="card-text">PETSCII / Textmode NFT</p>
    <a href="https://www.fxhash.xyz/u/jambonbill" class="btn btn-dark">fxhash.xyz/u/jambonbill</a><br />
    <br />
    <a href="https://teia.art/jambonbill" class="btn btn-dark">teia.art/jambonbill</a><br />

  </div>
</div>

</div><!-- /container -->

</body>

