<?php



$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "risk";



$connect = mysqli_connect($hostname, $username, $password, $databaseName);


$query = "SELECT * FROM `users`";



$result1 = mysqli_query($connect, $query);



?>

<!DOCTYPE html>

<html>

    <head >
	<style>
	body{
		background-image:url("ee.jpg");
		background-repeat:no-repeat;
		background-size:1500px 1000px;
		</style>
        <title> risk hesaplama aracı </title>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
	

    <body >

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> 
	

	<form name="uyelik" class="form-signin" method="post"action="test.php" >
	<h2 class="form-signin-heading"> YATIRIM RİSKİ HESAPLAMA</h2>
    Yatırım Miktarını Giriniz: <input type="text" name="adi"class="form-control" >
	Vade(Yıl) Giriniz: <input type="text" name="yat"class="form-control">
	Şirket Seçiniz:<select name="oc"  class="form-control" >
				<option name="hsdfj"value="seçiniz"</option>
            <?php while($row1 = mysqli_fetch_array($result1)):;?>
			
            <option class="form-control" value="<?php echo $row1[2];?>"<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
			

            <?php endwhile;?>

        </select>
      <input type="submit" name="gonder" value="HESAPLA"class="form-control" style="background-color: #00FFFF" /> </form>
	 


   </form>
       


    
    </body>

</html>


