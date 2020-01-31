



 <?php
	$try=array(	"su12"=>array("name"=>"kunal singh","class"=>10,"marks"=>array("hindi"=>40,"english"=>82,"maths"=>59)),
					"su13"=>array("name"=>"jaswin singh",
							   "class"=>10,"marks"=>array("hindi"=>48,"english"=>74,"maths"=>63)),
					"su14"=>array("name"=>"asit prakash",
							   "class"=>10,"marks"=>array("hindi"=>92,"english"=>52,"maths"=>47)),
					"su15"=>array("name"=>"pranav prakash",
							   "class"=>10,"marks"=>array("hindi"=>42,"english"=>56,"maths"=>75)),
					);
	// print_r($details);

// $sum=$try['su12']['marks']['hindi'];
// echo $sum;
foreach ($try as $i => $values) {
    print "$i {\n";


    foreach ($values as $key => $value1) {
      $t=0;
        if(!is_array($value1))
        print "    $key => $value1  \n";
        if (is_array($value1))
        {
          foreach ($value1 as $key => $value12) {
              print "    $key => $value12  \n";
              $t+=$value12;
        }
        $marks[]=array($i=>$t);
      }

    }
    print "}\n";
}
uasort($marks, function($a, $b){
    return strcmp($a['$id'], $b['$id']);
});

print_r($arr);
print_r($marks);
?>
