<!DOCTYPE html>

<head>
</head>
<body>
    <form method="post">
        <label>search</label>
        <input type="text" name="search">
        <input type="submit" name="submit">
</form>
    
</body>
</html>
<?php
$con= new PDO("mysql:host=localhost; dbname=Unknown",'root','');
if(isset($_POST["submit"])){
    $tsr=$_POST["search"];
    $sth=$con->prepare("SELECT * FROM 'search' WHERE Name='$str'");
    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth->execute();
    if($row= $sth->fetch()){
        ?>
        <br><br><br>
        <table>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <tr>
                    <td><?php echo $row->Name; ?></td>
                    <td><?php echo $row->Description; ?></td>
                </tr>
            </tr>
        </table>
        <?php
    }
        

        else{
            echo "name doesnot exist";
        }
        
        
            
    
}



 
 

 
