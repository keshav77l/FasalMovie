<?php




$db = mysqli_connect('localhost:3306', 'root', '', 'fasal');

if($conn){
    echo "Successfully connected to server";
}
else{
    echo "Failed";
}

print(mysqli_query($conn,$sql));


?>
