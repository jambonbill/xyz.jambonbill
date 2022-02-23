<?php
//show as list/grid
$list=$HEN->list();
?>
<table class="table table-striped table-dark">
  <thead>
    <tr>

      <th scope="col">Name</th>
      <th scope="col">description</th>
      <th scope="col">mimetype</th>
      <th scope="col">editions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    /*
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
     */
    foreach($list as $r){
    	if($r['editions']>100)continue;
    	//print_r($r);exit;
      echo '<tr>';
    	//echo '<th scope="row">1</th>';
    	echo '<td>'.$r['name'].'</td>';
    	echo '<td>'.$r['description'].'</td>';
    	echo '<td>'.$r['mimetype'].'</td>';
    	echo '<td>'.$r['editions'].'</td>';
    }
  	?>
  </tbody>
</table>