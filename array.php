xammp

<?php

$group_array = array(
    'user_id'    => array(594,    597,     594,    598   ),
    'user_first' => array('John', 'James', 'John', 'John'),
);

// Find unique user_ids
$uniques = array_unique($group_array['user_id']);

// Keep only the uniques
foreach ($group_array as $column => $collection) {
    $group_array[$column] = array_intersect_key($collection, $uniques);
}

echo '<pre>';
// print_r($group_array);
echo '</pre>';

$stickers = [
	[
		'sid' => 4309,
		'pid' => 0,
		'bsid' => 0,
		'actions' => 'app_notify_hosts',
		'cuid' => 0,
		'sticker_owner_id' => 610789556314
	],
	[
		'sid' => 4309,
		'pid' => 0,
		'bsid' => 72,
		'actions' => 'app_notify_hosts',
		'cuid' => 0,
		'sticker_owner_id' => 610789556314
	],
	[
		'sid' => 510,
		'pid' => 10,
		'bsid' => 5,
		'actions' => 'app_sms_hosts',
		'cuid' => 0,
		'sticker_owner_id' => 610789556314
	],
	[
		'sid' => 4309,
		'pid' => 0,
		'bsid' => 0,
		'actions' => 'app_notify_hosts',
		'cuid' => 0,
		'sticker_owner_id' => 610789556314
	],
	[
		'sid' => 1,
		'pid' => 0,
		'bsid' => 50,
		'actions' => 'app_notify_hosts',
		'cuid' => 0,
		'sticker_owner_id' => 610789556314
	],
	[
		'sid' => 510,
		'pid' => 10,
		'bsid' => 5,
		'actions' => 'app_sms_hosts',
		'cuid' => 0,
		'sticker_owner_id' => 610789556314
	],
	[
		'sid' => 510,
		'pid' => 8,
		'bsid' => 5,
		'actions' => 'app_sms_hosts',
		'cuid' => 0,
		'sticker_owner_id' => 610789556314
	],
	[
		'sid' => 38,
		'pid' => 0,
		'bsid' => 75,
		'actions' => 'app_sms_hosts',
		'cuid' => 0,
		'sticker_owner_id' => 610789556314
	],
	[
		'sid' => 38,
		'pid' => 0,
		'bsid' => 75,
		'actions' => 'app_sms_hosts',
		'cuid' => 20,
		'sticker_owner_id' => 610789556314
	],
	[
		'sid' => 38,
		'pid' => 0,
		'bsid' => 75,
		'actions' => 'app_sms_hosts',
		'cuid' => 20,
		'sticker_owner_id' => 610789556314
	]
];


$already_save_stickers = [];

function get_unique_associate_array ($array) {
    $serialized_array = array_map ("serialize", $array);
    foreach ($serialized_array as $key => $val) {
         $result [$val] = true;

    }
    return array_map ("unserialize", (array_keys ($result)));
}

$already_save_stickers = get_unique_associate_array ($stickers);

// print_r($already_save_ss);

$out = array();
foreach ($stickers as $row) {
    $out[$row['sid']] = $row;
}
$array = array_values($out);

?>

<pre>
	<?php 
	print_r($already_save_stickers); 
	?>
</pre>

<pre>
	<?php 
	// print_r($array); 
	?>
</pre>


/************************************************/

<?php
/*
function get_cars($obj) {
  if (!is_object($obj)) {
    return false;
  }
return $obj->cars;
}

$obj = new stdClass();
$obj->cars = array("Volvo", "BMW", "Audi");

var_dump(get_cars(null));
echo "<br>";
var_dump(get_cars($obj));



private $action_users_ids = [
    'sms_user' => [],
    'notify_user' => [],
    'email_user' => []
];
$this->action_users = StickerActionUsers::find([
	'sticker_id = :sticker_id:',
	'bind' => ['sticker_id' => $this->sticker->sticker_id]
]);

foreach ($this->action_users as $action_user) {
	$this->action_users_ids[$action_user->action][] = $action_user->user_id;
}
*/


//            $stickers = Stickers::findAll(["conditions" => "Stickers.sticker_id IN({$ids})"]);
		$stickers = [];
        $stickers_name = "";
        $stickers_count = count($stickers);
        
            foreach ($stickers as $i => $sticker){
              if($stickers_count > 3){
                if(($i+1) < $stickers_count-1){
                  $stickers_name.= $sticker->getName().', ';
                }elseif(($i+1) == $stickers_count-1){
                  $stickers_name.= $sticker->getName().' and ';
                }elseif(($i+1) == $stickers_count){
                  $stickers_name.= $sticker->getName().'.';
                }
              }else{
                if(($i+1) < $stickers_count){
                  $stickers_name.= $sticker->getName().' and ';
                }elseif(($i+1) == $stickers_count){
                  $stickers_name.= $sticker->getName().'.';
                }
              }
            }

            $text = "Asan added {$stickers_name}";

            echo $text;

$sticker_data = [
			[
				'id' => 1,
				'name' => 'name_1 1'
			],
			[
				'id' => 2,
				'name' => 'name_2 0'
			],
			[
				'id' => 3,
				'name' => 'name_3 0'
			],
			[
				'id' => 4,
				'name' => 'name_4 1'
			],
			[
				'id' => 2,
				'name' => 'name_2 1'
			],
			[
				'id' => 1,
				'name' => 'name_1 2'
			],
			[
				'id' => 2,
				'name' => 'name_2 2'
			],
			[
				'id' => 2,
				'name' => 'name_2 4'
			],
			[
				'id' => 2,
				'name' => 'name_2 5'
			],
			[
				'id' => 3,
				'name' => 'name_3 1'
			],
			[
				'id' => 3,
				'name' => 'name_3 2'
			],
			[
				'id' => 1,
				'name' => 'name_1 3'
			],
			[
				'id' => 3,
				'name' => 'name_3 4'
			],
			[
				'id' => 4,
				'name' => 'name_4 2'
			],
			[
				'id' => 5,
				'name' => 'name_5 1'
			],
		];

/*
echo count($sticker_data);
echo '<pre>';
echo print_r($sticker_data);
echo '</pre>';
*/

$sticker_all = $sticker_owner_ids = [];
echo count($sticker_data);
foreach ($sticker_data as $value) {
	$sticker_owner_ids[] = $value['id'];
	if(in_array($value['id'], $sticker_owner_ids)){
		$sticker_all[$value['id']][] = $value;
	}	
}
// echo '<pre>';
// echo print_r($sticker_all);
// echo '</pre>';

/*
$sticker_all = [	
		'1' => [
			[
				'id' => 1,
				'name' => 'name_1 1'
			],
			[
				'id' => 2,
				'name' => 'name_1 2'
			],
			[
				'id' => 3,
				'name' => 'name_1 3'
			],
			[
				'id' => 4,
				'name' => 'name_1 4'
			],
			[
				'id' => 5,
				'name' => 'name_1 5'
			]
		],
		'2' => [
			[
				'id' => 6,
				'name' => 'name_2 1'
			],
			[
				'id' => 7,
				'name' => 'name_2 2'
			],
			[
				'id' => 8,
				'name' => 'name_2 3'
			]
		],
		'3' => [
			[
				'id' => 9,
				'name' => 'name_3 1'
			]
		],
		'4' => [
			[
				'id' => 10,
				'name' => 'name_4 1'
			]
		],
		'5' => [
			[
				'id' => 11,
				'name' => 'name_5 1'
			],
			[
				'id' => 12,
				'name' => 'name_5 2'
			]
		],
		'6' => [
			[
				'id' => 13,
				'name' => 'name_2 1'
			],
			[
				'id' => 14,
				'name' => 'name_2 2'
			],
			[
				'id' => 15,
				'name' => 'name_2 3'
			]
		]
];

echo '<pre>';
echo print_r($sticker_all);
echo '</pre>';
*/

foreach($sticker_all as $stickers){
	echo '<pre>';
	echo print_r($stickers);
	echo '</pre>';

    $stickers_name = "";
    $stickers_count = count($stickers);
        
    foreach ($stickers as $i => $sticker){
      if($stickers_count > 3){
        if(($i+1) < $stickers_count-1){
          $stickers_name.= $sticker['name'].', ';
        }elseif(($i+1) == $stickers_count-1){
          $stickers_name.= $sticker['name'].' and ';
        }elseif(($i+1) == $stickers_count){
          $stickers_name.= $sticker['name'].'.';
        }
      }else{
        if(($i+1) < $stickers_count){
          $stickers_name.= $sticker['name'].' and ';
        }elseif(($i+1) == $stickers_count){
          $stickers_name.= $sticker['name'].'.';
        }
      }
    }

    $text = "Asan used {$stickers_name}";

    echo $text;
}



/*
    foreach ($stickers as $i => $sticker){
      if($stickers_count > 3){
        if(($i+1) < $stickers_count-1){
          $stickers_name.= $sticker->getName().', ';
        }elseif(($i+1) == $stickers_count-1){
          $stickers_name.= $sticker->getName().' and ';
        }elseif(($i+1) == $stickers_count){
          $stickers_name.= $sticker->getName().'.';
        }
      }else{
        if(($i+1) < $stickers_count){
          $stickers_name.= $sticker->getName().' and ';
        }elseif(($i+1) == $stickers_count){
          $stickers_name.= $sticker->getName().'.';
        }
      }
    }
*/    

?>


/***************************************************/

<?php

$user = 'asan';
$horses = array('ak-kuula','ak-jalyn','asan','honda');

      if ($user && count($horses)) {
          foreach ($horses as $horse) {
//            $user_log_id = $horse->owner_id === $user->getId() ? $user->getId() : $horse->getOwnerId();
            $log_viewers =[];

            if($horse == 'ak-kuula'){
              $log_viewers = [
                [
                  "user_id" => $horse,
                  "horse_profile" => true,
                  "user_profile" => true,
                  "can_dismiss" => true,
                  "can_approve" => true,
                  "approve_class" => 'js-log-approve',
                  "can_cancel" => false,
                  "can_edit" => false,
                ]
              ];
            }else if($horse == 'ak-jalyn'){
              $log_viewers = [
                  [
                    "user_id" => $horse,
                    "horse_profile" => true,
                    "user_profile" => true,
                    "can_dismiss" => true,
                    "can_approve" => true,
                    "approve_class" => 'js-log-approve',
                    "can_cancel" => false,
                    "can_edit" => false,
                  ],
                  [
                    "user_id" => $user,
                    "horse_profile" => true,
                    "user_profile" => true,
                    "can_dismiss" => true,
                    "can_approve" => false,
                    "can_cancel" => false,
                    "can_edit" => false,
                  ]
                ];

            }else if($horse == 'asan'){
              $log_viewers = [
                  [
                    "user_id" => $horse,
                    "horse_profile" => true,
                    "user_profile" => true,
                    "can_dismiss" => true,
                    "can_approve" => true,
                    "approve_class" => 'js-log-approve',
                    "can_cancel" => false,
                    "can_edit" => false,
                  ]
                ]; 
            }

              if(!empty($log_viewers)){
                  echo '<pre>';
                  print_r($log_viewers);
                  echo '</pre>';
                  /*
                HorsesLogs::addLog([
                  "poster"      => $user,
                  "horse"    => $horse ? $horse : 0,
                  "transfer_id" => 0,
                  "type"        => HorsesLogs::TYPE_HORSES_STICKER,
                  "note"        => $description,
                  "text"        => $text,
                  "viewers"     => $log_viewers,
                  "html"        => $html_template
                ]);
                */
              }

          }
        }


?>

<?php

$arr = array();

if(count($arr)) { echo 'empty count'; }
if(sizeof($arr)) { echo 'empty sizeof'; }
if($array) { echo 'empty simple'; }
if(empty($arr)) { echo 'empty empty'; }
if(array_shift($arr)) { echo 'empty array_shift'; }
//if($arr[0]) { echo 'empty'; }

?>
<hr/>
<?php

$user = 'azim';
$horses = array('ak-kuula','ak-jalyn','honda','mazda');

      if ($user && count($horses)) {
          foreach ($horses as $horse) {
              
            $log_viewers =[];

            if($horse == 'ak-jalyn'){                
                $log_viewers = [
                  [
                    "user_id" => $horse,
                    "horse_profile" => true,
                    "user_profile" => true,
                    "can_dismiss" => true,
                    "can_approve" => true,
                    "approve_class" => 'js-log-approve',
                    "can_cancel" => false,
                    "can_edit" => false,
                  ]
                ];                
            }else if($horse == 'honda'){
                $log_viewers = [
                  [
                    "user_id" => $horse,
                    "horse_profile" => true,
                    "user_profile" => true,
                    "can_dismiss" => true,
                    "can_approve" => true,
                    "approve_class" => 'js-log-approve',
                    "can_cancel" => false,
                    "can_edit" => false,
                  ]
                ];
                //$log_viewers=array_merge($log_viewers, $new_viewers);
            }

              if(!empty($log_viewers)){
                  echo '<pre>';
                  print_r($log_viewers);
                  echo '</pre>';
                  
              }

          }
        }
    
?>
<hr/>
<?php

$new_input = array(
    'type' => 'text', 
    'label' => 'First name', 
    'show' => true, 
    'required' => true
);

$new_input['additional_1'] = 'new add first';
$new_input['additional_2'] = 'new add second';

echo '<pre>';
print_r($new_input);
echo '</pre>';
/*
$new_input = array_push($new_input, $new_input["make"] = 'BMW'); 

echo '<pre>';
print_r($new_input);
echo '</pre>';
*/

?>
<hr/>
<?php
/*
$data = array();
foreach($file_data as $value) {
    list($category, $question) = explode('|', $value, 2);

    if(!isset($data[$category])) {
        $data[$category] = array();
    }
    $data[$category][] = $question;
}
print_r($data);
*/
?>

<?php

function array_insert_after($key, array &$array, $new_key, $new_value) {
  if (array_key_exists($key, $array)) {
    $new = array();
    foreach ($array as $k => $value) {
      $new[$k] = $value;
      if ($k === $key) {
        $new[$new_key] = $new_value;
      }
    }
    return $new;
  }
  return FALSE;
}


$rows = array("8" => array(1950,1951,1952),"9" => array(1953,1954,1955,1956));

function array_insert_id_year($results){
    $rows = [];
    foreach ($results as $result) {
      //  $rows[$result['id']][] = $result['year'];
        $rows_ar[$result['id']][] = $result['year'];
        $rows[] = $result['id'][] = $result;
    }
    return $rows;
}
function array_insert_id_year_m($results){
    foreach ($results as $result) {
        $rows_ar[$result['id']][] = $result;
    }
    return $rows_ar;
}
function array_insert_id_year_r($results){
    foreach ($results as $result) {
        $result[] = $result;
        //$result['id'][] = $result;
    }
    return $result;
}

$res_1 = array_insert_id_year($rows);
$res_2 = array_insert_id_year_m($rows);
$res_3 = array_insert_id_year_r($rows);
echo '<pre>';
print_r($res_1);
echo '</pre>';
echo '<pre>';
print_r($res_2);
echo '</pre>';
echo '<pre>';
print_r($res_3);
echo '</pre>';
?>

<hr/>

<?php
$authors = array( "A", "B", "C", "D", "E", "F" );

$books = array(
  array(
    "title" => "A Book",
    "authorId" => 2,
    "pubYear" => 1937
  ),
  array(
    "title" => "B Book",
    "authorId" => 0,
    "pubYear" => 1939
  ),
  array(
    "title" => "C Book",
    "authorId" => 3,
    "pubYear" => 1859
  ),
  array(
    "title" => "D Book",
    "authorId" => 4,
    "pubYear" => 1667
  ),
  array(
    "title" => "E Book",
    "authorId" => 5,
    "pubYear" => 1945
  ),
  array(
    "title" => "F Book",
    "authorId" => 1,
    "pubYear" => 1925
  ),
);

foreach ( $books as &$book ) {
  $book["authorName"] = $authors[$book["authorId"]];
}

echo "<pre>";
print_r( $books );
echo "</pre>";

?>

<hr/>

<?php
$film=array(

                "comedy" => array(

                                0 => "Pink Panther",

                                1 => "john English",

                                2 => "See no evil hear no evil"

                                ),

                "action" => array (

                                0 => "Die Hard",

                                1 => "Expendables"

                                ),

                "epic" => array (

                                0 => "The Lord of the rings"

                                ),

                "Romance" => array

                                (

                                0 => "Romeo and Juliet"

                                )

            );
            
echo $film["comedy"][0];
?>
<hr/>

<?php

$pet1 = array(
    'name' => 'Chew Barka',
    'breed' => 'Bichon',
    'age'  => '2 years',
    'weight' => 8,
    'bio'   => 'The park, The pool or the Playground - I love to go anywhere! I am really great at... SQUIRREL!',
    'filename' => 'pet1.png'
);

$pet2 = array(
    'name' => 'Spark Pug',
    'breed' => 'Pug',
    'age'  => '1.5 years',
    'weight' => 11,
    'bio'   => 'You want to go to the dog park in style? Then I am your pug!',
    'filename' => 'pet2.png'
);

$pet3 = array(
    'name' => 'Pico de Gato',
    'breed' => 'Bengal',
    'age'  => '5 years',
    'weight' => 9,
    'bio'   => 'Oh hai, if you do not have a can of salmon I am not interested.',
    'filename' => 'pet3.png'
);

$pancake = array(
    'name' => 'Pancake the Bulldog',
    'age'  => '1 year',
    'weight' => 9,
    'bio' => 'Lorem Ipsum',
    'filename' => 'pancake.png'
);
$pancake['breed'] = 'Bulldog';

$pets = array($pet1, $pet2, $pet3, $pancake);

echo "<pre>";
//var_dump($pets);
print_r($pets);
echo "</pre>";
?>
<!--<div class="row">
    <?php /*
    foreach ($pets as $cutePet) { ?>
        <div class="col-lg-4 pet-list-item">
            <h2><?php echo $cutePet['name']; ?></h2>

            <img src="/images/<?php echo $cutePet['filename']; ?>" class="img-rounded" title="<?php echo $cutePet['filename']; ?>">

            <blockquote class="pet-details">
                <span class="label label-info"><?php echo $cutePet['breed']; ?></span>
                <?php echo $cutePet['age']; ?>
                <?php echo $cutePet['weight']; ?>
            </blockquote>

            <p>
                <?php echo $cutePet['bio']; ?>
            </p>
        </div>
    <?php } 
    */?>
</div>-->

<?php

$md_array= array (
     'recipe_type' => 
      array (
        18 => 
        array (
          'wpseo_title' => 'Salads',
          'wpseo_desc' => 'Hundreads of recipes for Salads',
          'wpseo_metakey' => ''
        ),
        19 => 
        array (
          'wpseo_title' => 'Main dishes',
          'wpseo_desc' => 'Hundreads of recipes for Main dishes',
          'wpseo_metakey' => ''
        )
      ),
     'cuisine' => 
      array (
        22 => 
        array (
          'wpseo_title' => 'Italian',
          'wpseo_desc' => 'Secrets from Sicily in a click',
          'wpseo_metakey' => ''
        ),
        23 => 
        array (
          'wpseo_title' => 'Chinese',
          'wpseo_desc' => 'Oriental dishes were never this easy to make',
          'wpseo_metakey' => ''
        ),
        24 => 
        array (
          'wpseo_title' => 'Greek',
          'wpseo_desc' => 'Traditional Greek flavors in easy to make recipies',
          'wpseo_metakey' => ''
        )
      ) 
    );

$newdata =  array (
      'wpseo_title' => 'test',
      'wpseo_desc' => 'test',
      'wpseo_metakey' => 'test'
    );
    
$md_array["recipe_type"][] = $newdata;

// array_push($md_array['recipe_type'], $newdata);


?>
<?php
/*


$results = array	(
				array	(
					ID	=>	"0",
					site_name	=>	"site 1",
					state	=>	"AA",
					URL	=>	"http://url.com",
					numbers	=>	array (
								S1_num	=>	"12",
								S2_num	=>	"10"
							),
					Contact	=>	array	(
								First	=>	"Bob",
								Last	=>	"Smith",
								Email	=>	"bob_smith@yahoo.com"
							),
					Type	=>	"1",
					UserName	=>	"username",
					Password	=>	"password"
				)
);
*/
?>

<?php

function merge_db_lists ($list1, $list2) {
  $final_array = array();
  $final_array = go_through_list($list1, $final_array);
  $final_array = go_through_list($list2, $final_array);
  return $final_array;
}   

function go_through_list($list,$output){
  foreach (array_keys($list) as $key){
    if (array_key_exists($key, $output)){
      foreach ($list[$key] as $item ){
        $output[$key][] = $item;
      }  
      arsort($output[$key]);
    }
    else{
      $output[$key] = $list[$key];
    }  
  }
  return $output;
}


$listings = array (
	0 => array("bus_id" => "1234", "name" => "Jim"),
	1 => array("bus_id" => "1235", "name" => "Fred")
	);

$latlongs = array (
	"1234" => array("lat" => 56.31582, "lng" => 6.23551),
	"1235" => array("lat" => 55.58868, "lng" => 5.01604)
	);

foreach($listings AS &$listing) {
	if(array_key_exists($listing['bus_id'],$latlongs)) {
		$listing['lat'] = $latlongs[$listing['bus_id']]['lat'];
		$listing['lng'] = $latlongs[$listing['bus_id']]['lng'];
		$listing['unit'] = 'miles';
	}
}

echo '<pre>';
print_r($listings);
echo '</pre>';
//Prints out:
/* Array (
	[0] => Array ( [bus_id] => 1234 [name] => Jim [lat] => 56.31582 [lng] => 6.23551 [unit] => miles )
    [1] => Array ( [bus_id] => 1235 [name] => Fred [lat] => 55.58868 [lng] => 5.01604 [unit] => miles )
    )
*/
?>
<hr/>

<?php

//Indexed two-dimensional array
$cars = array(
				array("Honda Accord", "V6", 30000),
				array("Toyota Camry", "LE", 24000),
				array("Nissan Altima", "V1"),
			);

//printing array information
echo '<pre>';			
print_r($cars);
echo '</pre>';
echo "<br>";
//var_dump($cars);
//echo "<br>";
//looping through two-dimensional indexed array

for($i=0;$i<count($cars);$i++){
	for($j=0;$j<count($cars[$i]);$j++){
		echo $cars[$i][$j] . " ";
	}
	echo "<br>";
}
echo "<br><br>";

//Indexed Associative two-dimensional array
$cars = array(
				array("Name" => "Honda Accord", "Model" => "V6", "Cost" => 30000),
				array("Name" => "Toyota Camry", "Model" => "LE", "Cost" => 24000),
				array("Name" => "Nissan Altima", "Model" => "V1"),
			);

//printing array information	
echo '<pre>';		
print_r($cars);
echo '</pre>';
echo "<br>";
//var_dump($cars);
//echo "<br>";

//looping through two-dimensional indexed associative array

for($i=0;$i<count($cars);$i++){
	$c=0;
	foreach($cars[$i] as $key=>$value){
		$c++;
		//echo $key."=".$value;
		echo $value;
		if($c<count($cars[$i])) echo ", ";
	}
	echo "<br>";
}

?>

<?php 

$shop = array(array(array("rose", 1.25, 15),
                    array("daisy", 0.75, 25),
                    array("orchid", 1.15, 7) 
                   ),
              array(array("rose", 1.25, 15),
                    array("daisy", 0.75, 25),
                    array("orchid", 1.15, 7) 
                   ),
              array(array("rose", 1.25, 15),
                    array("daisy", 0.75, 25),
                    array("orchid", 1.15, 7) 
                   )
             );
    

echo "<ul>";
for ( $layer = 0; $layer < count($shop); $layer++ )
{
    echo "<li>The layer number $layer";
    echo "<ul>";
   
    for ( $row = 0; $row < count($shop[$layer]); $row++ ) 
    {
       echo "<li>The row number $row";
       echo "<ul>";
     
        for ( $col = 0; $col < count($shop[$layer][$row]); $col++ )
        {
            echo "<li>".$shop[$layer][$row][$col]."</li>";
        } 
        echo "</ul>";
        echo "</li>";
    }
    echo "</ul>";
    echo "</li>";
}   
echo "</ul>";
?>
<hr/>

<?php

$meal = array('breakfast' => 'Walnut Bun',
              'lunch' => 'Cashew Nuts and White Mushrooms',
              'snack' => 'Dried Mulberries',
              'dinner' => 'Eggplant with Chili Sauce');
print "<table>\n";
foreach ($meal as $key => $value) {
    print "<tr><td>$key</td><td>$value</td></tr>\n";
}
print '</table>';

?>
<?php

$row_styles = array('even','odd');
$style_index = 0;
$meal = array('breakfast' => 'Walnut Bun',
              'lunch' => 'Cashew Nuts and White Mushrooms',
              'snack' => 'Dried Mulberries',
              'dinner' => 'Eggplant with Chili Sauce');
print "<table>\n";
foreach ($meal as $key => $value) {
    print '<tr class="' . $row_styles[$style_index] . '">';
    print "<td>$key</td><td>$value</td></tr>\n";
    // This switches $style_index between 0 and 1
    $style_index = 1 - $style_index;
}
print '</table>';

?>

<?php

$row_styles = array('even','odd');
$dinner = array('Sweet Corn and Asparagus',
                'Lemon Chicken',
                'Braised Bamboo Fungus');
print "<table>\n";

for ($i = 0, $num_dishes = count($dinner); $i < $num_dishes; $i++) {
    print '<tr class="' . $row_styles[$i % 2] . '">';
    print "<td>Element $i</td><td>$dinner[$i]</td></tr>\n";
}
print '</table><br/>';

?>
<?php

$flavors = array('Japanese' => array('hot' => 'wasabi',
                                     'salty' => 'soy sauce'),
                 'Chinese'  => array('hot' => 'mustard',
                                     'pepper-salty' => 'prickly ash'));

// $culture is the key and $culture_flavors is the value (an array)
foreach ($flavors as $culture => $culture_flavors) {
    // $flavor is the key and $example is the value
    foreach ($culture_flavors as $flavor => $example) {
        print "A $culture $flavor flavor is $example.\n<br/>";
    }
}

?>
<hr/>
<?php

$specials = array( array('Chestnut Bun', 'Walnut Bun', 'Peanut Bun'),
                   array('Chestnut Salad','Walnut Salad', 'Peanut Salad') );

// $num_specials is 2: the number of elements in the first dimension of $specials
for ($i = 0, $num_specials = count($specials); $i < $num_specials; $i++) {
    // $num_sub is 3: the number of elements in each subarray
    for ($m = 0, $num_sub = count($specials[$i]); $m < $num_sub; $m++) {
        print "Element [$i][$m] is " . $specials[$i][$m] . "\n<br/>";
    }
}

?>
<hr/>
<?php

$specials = array( array('Chestnut Bun', 'Walnut Bun', 'Peanut Bun'),
                   array('Chestnut Salad','Walnut Salad', 'Peanut Salad') );

// $num_specials is 2: the number of elements in the first dimension of $specials
for ($i = 0, $num_specials = count($specials); $i < $num_specials; $i++) {
    // $num_sub is 3: the number of elements in each subarray
    for ($m = 0, $num_sub = count($specials[$i]); $m < $num_sub; $m++) {
        print "Element [$i][$m] is {$specials[$i][$m]}\n<br/>";
    }
}
echo '<br/><br/>';
?>
<hr/>
<?php
$arrBooks = array(
'Comic' => array(
'Title'=>'Superman',
'Author'=>'Jerry Siegel and Joe Shuster',
'Publication Date' => '1938'),

'Science Fiction' => array(
'Title'=>'Dune',
'Author'=>'Frank Herbert',
'Publication Date'=>'1965'),

'Fantasy' => array(
'Title'=>'The Hobbit',
'Author'=>'J.R.R. Tolkien',
'Publication Date'=>'1937'),   

'Horror' => array(
'Title'=>'Carrie',
'Author'=>'Stephen King',
'Publication Date'=>'1974')
);

foreach ($arrBooks as $obj_key =>$book)
{
echo "$obj_key Book:<br>";
foreach ($book as $key=>$value){
echo "$key: $value<br>";
}
echo "<br>";
}

?>
<hr/>

<?
$Comic = 'Batman';
$ScienceFiction = 'Dreaming Void';
$Fantasy = 'American Gods';
$Horror = 'Frankenstein';

$arrBooks2 = compact ('Comic', 'ScienceFiction', 'Fantasy', 'Horror');

foreach ($arrBooks2 as $key => $value) {
print  "$value is an example of a $key book.<br>\n";
}


/************************************************/


          $stickerReferenceProduct = StickerReference::query()
            ->inWhere('sticker_id', $sticker_ids)
            ->andWhere("object_type = :type:", ['type' => StickerReference::PRODUCT])
            ->execute();
          $data = [
            'sticker_product_ids' => [],
            'sticker_ids' => $sticker_ids
          ];

          /**
           * @var $itemR StickerReference
           */
          foreach ($stickerReferenceProduct as $itemR) {
            $data['sticker_products'][] = [
              "product_id" => $itemR->getObject()->getId(),
              "title" => $itemR->getObject()->getTitle()
            ];
          }
          

?>
<br/>

<script>
  let gtus = [{sid: 1333, pid: 25, bsid: 1017, actions: null, cuid: 610789556314, soid: 0},{sid: 1333, pid: 25, bsid: 1017, actions: null, cuid: 610789556314, soid: 0},{sid: 1020, pid: 25, bsid: 250, actions: null, cuid: 610789556314, soid: 0}];

var stickersArray = []; var stickersArray2 = []; var ids = [];

gtus.reduce((acc1,obj) => {
    if (Array.isArray(ids) && ids.length) {
        if(ids.indexOf(obj.sid) === -1){
            ids.push(obj.sid);
            stickersArray2.push(obj);
        }
    }else if(acc1[obj.sid] !== obj.sid || acc1[obj.bsid] !== obj.bsid || acc1[obj.pid] !== obj.pid){
        acc1[obj.sid] = obj;
        ids.push(obj.sid);
        stickersArray2.push(obj);
    }
}, {});

console.log(ids, stickersArray2);

let sttt = [{sid: 1333, pid: 25, bsid: 1017, actions: null, cuid: 610789556314, soid: 0},{sid: 1333, pid: 25, bsid: 1017, actions: null, cuid: 610789556314, soid: 0},{sid: 1020, pid: 25, bsid: 250, actions: null, cuid: 610789556314, soid: 0}];

var stickersArray = [];

let stickers = sttt.reduce((acc1,obj) => {
    if(acc1[obj.sid] !== obj.sid || acc1[obj.bsid] !== obj.bsid){
        acc1[obj.sid] = obj;
    }
    return acc1;
}, {});

for (var k in stickers) {
    if (stickers.hasOwnProperty(k)) {
       stickersArray.push(stickers[k]);
       stickersArray.push({
                      sid: stickers[k].sid,
                      pid: stickers[k].pid,
                      bsid: stickers[k].bsid !== undefined ? stickers[k].bsid : 0,
                      actions: stickers[k].actions,
                      custom_user_id: stickers[k].cuid,
                      sticker_owner_id: stickers[k].soid
                    });
    }
}
console.log(stickersArray);

/*********************/

var stickers_data = used_sticker_ids.reduce((empty_obj,sticker) => {
                    if(empty_obj[sticker.sid] !== sticker.sid || empty_obj[sticker.bsid] !== sticker.bsid || empty_obj[sticker.pid] !== sticker.pid){
                      empty_obj[sticker.sid] = sticker;
                    }
                    sticker_plugin.push({
                      sticker_id: sticker.sid,
                      plugin_id: sticker.pid,
                    });
                    return empty_obj;
                  }, {});
                  for (var k in stickers_data) {
                    if (stickers_data.hasOwnProperty(k)) {
                      stickersArray.push({
                        sid: stickers_data[k].sid,
                        pid: stickers_data[k].pid,
                        bsid: stickers_data[k].bsid !== undefined ? stickers_data[k].bsid : 0,
                        actions: stickers_data[k].actions,
                        custom_user_id: stickers_data[k].cuid,
                        sticker_owner_id: stickers_data[k].soid
                      });
                    }
                  }

/**************************************/

        let stickers_data = usedStickers.reduce((empty_obj,sticker) => {
          if(empty_obj[sticker.sticker_id] !== sticker.sticker_id || empty_obj[sticker.business_id] !== sticker.business_id || empty_obj[sticker.plugin_id] !== sticker.plugin_id){
            empty_obj[sticker.sticker_id] = sticker;
          }
          return empty_obj;
        }, {});

        for (var k in stickers_data) {
          if (stickers_data.hasOwnProperty(k)) {
            stickersArray.push({
              sid: stickers_data[k].sticker_id,
              pid: stickers_data[k].plugin_id ? stickers_data[k].plugin_id : 0,
              bsid: stickers_data[k].business_id !== undefined ? stickers_data[k].business_id : 0,
              actions: stickers_data[k].actions,
              custom_user_id: stickers_data[k].cuid,
              sticker_owner_id: stickers_data[k].soid
            });
          }
        }


</script>