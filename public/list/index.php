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
	<base href="/">
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
	<title>jambonbill.xyz</title>
<style type="text/css">
body{
	background-color: #111111;
    font-family: monospace;
}
</style>
</head>
<body>

<div class="container-fluid">
	<h1 style="color:#dedede">jambonbill.xyz
		<a href="https://twitter.com/jambonbill" target=twitter><i class="fab fa-twitter"></i></a>
	</h1>
	<p style="color:#dedede">
	https://hicetnunc.art/jambonbill - Coder / Cryptoartist / Generative Art / PETSCII / Textmode
	</p>
	<hr />


<div class="row">
<?php
$list=$HEN->list();
//echo '<pre>';print_r($list);

foreach($list as $k=>$r){
	if(!$r['mimetype'])continue;
	if($r['mimetype']!='image/gif')continue;

	echo '<div class="col-sm-6 col-md-4 col-lg-3">';

	//https://getbootstrap.com/docs/4.0/components/card/
	echo '<div class="card" style="width: 18rem;">';

	//image
	$src="img/thumbnail.png";
	if($r['ipfs_url'])$src=$r['ipfs_url'];
	echo '<a href="https://hic.art/'.$r['hen_id'].'">';
	echo '<img class="card-img-top" src="'.$r['ipfs_url'].'" style="width: 100%; display: block;"  alt="'.$r['name'].'">';
	echo '</a>';
	//body
	echo '<div class="card-body">';
	//title
	echo '<h5 class="card-title">'.$r['name'].'</h5>';
	//subtitle
	echo '<h6 class="card-subtitle mb-2 text-muted">'.$r['mimetype'].'</h6>';
	echo '<p class="card-text">'.$r['description'].'</p>';
	echo '</div>';

	//details
	echo '<ul class="list-group list-group-flush">';
    //echo '<li class="list-group-item">mimetype</li>';
    echo '<li class="list-group-item">editions:'.$r['editions'].'</li>';
    //echo '<li class="list-group-item">x Tez</li>';
  	echo '</ul>';

	echo '</div>';//card
	echo '</div>';//col

	//print_r($r);exit;
}?>
</div><!-- /row -->
</div><!-- /container -->
</body>