<?php
$list=$HEN->list();
//echo '<pre>';print_r($list);
foreach($list as $k=>$r){
	if(!$r['mimetype'])continue;
	if($r['mimetype']!='image/gif')continue;
	if($r['editions']>100)continue;//mistakes were made

	echo '<div class="col-sm-6 col-md-3">';

	//https://getbootstrap.com/docs/4.0/components/card/
	echo '<div class="card">';

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
}