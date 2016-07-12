<?php
 $parent = isset($_POST['id']) ? (int)$_POST['id'] : 0;
 $result = array();
 $data = array();
 
 try {
	$db = new PDO('mysql:host=localhost;dbname=jack', 'root', 'gongyan');
	$db->query("SET NAMES UTF8");
	//this query selects all records that are children of our requested $parent id
	//all fields of each record is retrieved (c.*)
	//also the following subquery adds a new field (child_count) to our records
	//(SELECT COUNT(*) FROM city c2 WHERE c2.parent = c.id) = number of records that their parent id is equal to our record's id
    foreach($db->query('SELECT c.* ,(SELECT COUNT(*) FROM jc_menu c2 WHERE c2.pid = c.id) as child_count
						FROM jc_menu c WHERE c.pid='.$parent)
			as $row)
	{

			$item = array(
				'name' => $row['menu_name'] ,
				'type' => $row['child_count'] > 0 ? 'folder' : 'item',
				'additionalParameters' =>  array('id' => $row['id'])
			);

			if($row['child_count'] > 0)
				 $item['additionalParameters']['children'] = true;
			else {
				  //we randomly make some items pre-selected for demonstration only
				  //in your app you can set $item['additionalParameters']['item-selected'] = true
				  //for those items that have been previously selected and saved and you want to show them to user again
				if(mt_rand(0, 3) == 0)
					$item['additionalParameters']['item-selected'] = true;
			}

			$data[$row['id']] = $item;
	}

	$result['status'] = 'OK';
	$result['data'] = $data;
	
 }
 catch(PDOException $ex) {
     $result['status'] = 'ERR';
	 $result['message'] = $ex->getMessage();
 }


echo json_encode($result);