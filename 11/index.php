<?php session_start(); ?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>practice_11</title>
  <style>
	.col1 {
		width: 5%;
		text-align: center;
	}

	.col2 {
		width: 20%;
		text-align: center;
	}

	.col3 {
		text-align: center;
	}
	TH {
		background-color: #c0c0c0;
	}

	  </style>
	</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
	<input name="login" type="text" placeholder="Enter your name"><br><br>
	Select image to upload:<br><br>
  <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
  <input type="submit" value="Upload Image" name="submit"><br><br>
</form>
<?php
	require_once "db/connection.php";
	$sql = "SELECT * FROM users";

	$result = $conn->query($sql);

	$sql = "SELECT * FROM users";

	$result = $conn->query($sql);

	echo '<table border="2" cellpadding="5"  align ="center" width="60%">';
    echo '<tr> 
		<th class="col1"> ID </th> 
        <th class="col2"> Login </th> 
        <th class="col3"> Photo </th> 
        </tr>';    
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";

        echo '<td class="col1" >' . $row["id"] . '</td>';
		echo '<td class="col2" >' . $row["login"] . '</td>';

		echo '<td class="col3" >' ."<img src='public/images/" . $row['photo'] . "' alt='Not found' width=40%; />". "</td>";
		//echo "<td>" .'<img src="public/images/$row["photo"]"'. "</td>";

        //echo "<td>" . $row["photo"] . "</td>";

        echo "</tr>";
    }
    
    echo '</table>';
?>
</body>
</html>