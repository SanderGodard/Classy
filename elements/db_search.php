<?php
if(isset($_GET["q"])){
    $search = $_GET["q"];
    $search = strtoupper($search);
    //echo strlen($search);
    //echo "$search";
  }
/*if($search == "") {
    die(json_encode("Ingen produkter passet ditt søk"));
}*/



$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "products";

$connection = new mysqli($host, $user, $password, $database);

if($connection->connect_error) {
  die("Noe gikk galt..." . $connection->connect_error);
}

$sql = "SELECT brand, product_name FROM product";

$result = $connection->query($sql);

$valid = [];
$p=0;
while($row = $result->fetch_assoc()) {
    
    
    /*for($i=0; $i<strlen($search); $i++) {
        $query = $row['brand'];
        $query = strtoupper($query);
        //echo "$query <br>";
        if(strlen($query >= $i)) {
            if($query[$i] == $search[$i]) {
                $p++;
                echo "$p";
            }
        }
        else {
            $p=0;
        }

        
    }
    

    if($p==strlen($search)) {
        array_push($valid, $row['brand']);
        $p=0;
    }
    //echo $i;
    //echo strlen($search);
    
    //echo "$p";
    */
    array_push($valid, $row['brand']);
}

$result = $connection->query($sql);
$p=0;

while ($row = $result->fetch_assoc()) {
    /*for($i=0; $i<strlen($search); $i++) {
        $query = $row['product_name'];
        $query = strtoupper($query);
        if(strlen($query >= $i)) {
            if($query[$i] == $search[$i]) {
                $p++;
                //echo "$p";
            }
        }
        
    }
    if($p==strlen($search)) {
        array_push($valid, $row['product_name']);
        $p=0;
    }*/
    array_push($valid, $row['product_name']);
}
 


//echo strlen($search);
/*if($valid == []) {
    die(json_encode("Ingen produkter passet ditt søk"));
}*/

$valid = array_unique($valid);
$valid = array_values($valid);

//echo json_encode($valid);


$JSONsearches = json_encode($valid);

echo "$JSONsearches";

