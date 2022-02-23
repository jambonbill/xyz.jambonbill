<?php
//show as list
header('Content-Type: text/html; charset=utf-8');
session_start();

require __DIR__."/../../vendor/autoload.php";

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
<style type="text/css">
body{
	background-color: #111111;
    font-family: monospace;
}
iframe{
	position:absolute;
	top:0;
	left:0;
}
</style>
</head>
<body>

<div class="container-fluid">
	<h1 style="color:#dedede">jambonbill.xyz
		<a href="https://twitter.com/jambonbill" target=twitter><i class="fab fa-twitter"></i></a>
	</h1>
	<p style="color:#dedede">
	<a href="https://hicetnunc.art/jambonbill">https://hicetnunc.art/jambonbill</a> - PETSCII / Textmode
	</p>
	<hr />

	<iframe src="https://ipfs.io/ipfs/QmbGJwg7ePqAjzvbFPgNb24kaPwLLeXtKBbywQCgfyLvhs" width=512 height=512 frameborder=0></iframe>


<div class="row">
<?php
require "grid.php";
?>
</div><!-- /row -->
</div><!-- /container -->

</body>

