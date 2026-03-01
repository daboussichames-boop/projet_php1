<?php
$con=mysqli_connect("localhost","root","","personne");
if(!$con)
    {
        echo "connection echouée";
    }
$sql="INSERT INTO agenda (nom,prenom,adresse,age,telephone) VALUES ('chames','daboussi','tunis',20,'5566777')";
$result=mysqli_query($con,$sql);
$sql="INSERT INTO agenda (nom,prenom,adresse,age,telephone) VALUES ('rabeb','ameur','tunis',20,'5566777')";
$result=mysqli_query($con,$sql);
$sql="INSERT INTO agenda (nom,prenom,adresse,age,telephone) VALUES ('rahma','ameur','tunis',20,'5566777')";
$result=mysqli_query($con,$sql);
$sql="INSERT INTO agenda (nom,prenom,adresse,age,telephone) VALUES ('chiraz','belghithe','tunis',20,'5566777')";
$result=mysqli_query($con,$sql);
$sql="INSERT INTO agenda (nom,prenom,adresse,age,telephone) VALUES ('ibtissem','bridi','tunis',20,'5566777')";
$result=mysqli_query($con,$sql);
?>