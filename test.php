 <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'kar ', 'zarar'],
          ['2004',  10000,      4000],
          ['2005',  11700,      4600],
          ['2006',  6600,       11200],
          ['2007',  10300,      5400]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
<?php



$s1=$_POST["adi"];
$s2=$_POST["oc"];	
$s3=$_POST["yat"];	
$sonuc=$s1+(($s1*$s2*$s3)/"100");	
$faiz=(($s1*$s2*$s3)/"100");

if($s2<5 and $s2>0):
    echo "RİSK%10"."<hr><br>TAHMİNİ KÂRINIZ: ".$faiz. "<hr></br>TAHMİNİ ZARARINIZ:".((4/3)*$faiz);
	
	
	echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";

	
	
elseif($s2<10 and $s2>5): 
     echo "RİSK%20"."<hr><br>TAHMİNİ KÂRINIZ: ".$faiz. "<hr></br>TAHMİNİ ZARARINIZ:".((4/3)*$faiz);

	
	echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";

	
	
elseif($s2<25 and $s2>10): 
    echo "RİSK%30"."<hr><br>TAHMİNİ KÂRINIZ: ".$faiz. "<hr></br>TAHMİNİ ZARARINIZ:".((4/3)*$faiz);
	
	
	echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";

	

	
elseif($s2<45 and $s2>25): 
       echo "RİSK%40"."<hr><br>TAHMİNİ KÂRINIZ: ".$faiz. "<hr></br>TAHMİNİ ZARARINIZ:".((4/3)*$faiz);
	
	
	echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";

	
	
	
elseif($s2<55 and $s2>45): 
    echo "RİSK%50"."<hr><br>TAHMİNİ KÂRINIZ: ".$faiz. "<hr></br>TAHMİNİ ZARARINIZ:".((4/3)*$faiz);
	
	
	echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";

	
	
	
elseif($s2<75 and $s2>55): 
    echo "RİSK%60"."<hr><br>TAHMİNİ KÂRINIZ: ".$faiz. "<hr></br>TAHMİNİ ZARARINIZ:".((4/3)*$faiz);
	
	
	echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";

	
	
	include("fb.php");
elseif($s2<100 and $s2>75): 
    echo "RİSK%70"."<hr><br>TAHMİNİ KÂRINIZ: ".$faiz. "<hr></br>TAHMİNİ ZARARINIZ:".((4/3)*$faiz);
	
	
	echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";

	

elseif($s2<180 and $s2>100): 
    echo "RİSK%80"."<hr><br>TAHMİNİ KÂRINIZ: ".$faiz. "<hr></br>TAHMİNİ ZARARINIZ:".((4/3)*$faiz);
	
	
	echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";

	

elseif($s2<250 and $s2>180): 
      echo "RİSK%90"."<hr><br>TAHMİNİ KÂRINIZ: ".$faiz. "<hr></br>TAHMİNİ ZARARINIZ:".((4/3)*$faiz);
	
	
	echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";

	

	
elseif($s2>250 ): 
     echo "RİSK%98"."<hr><br>TAHMİNİ KÂRINIZ: ".$faiz. "<hr></br>TAHMİNİ ZARARINIZ:".((4/3)*$faiz);
	
	
	echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";

	
	
	

else:
    echo "Sonuç:"." ".$sonuc." "."Zararınız:"." ".($s1-$sonuc);
	
	
endif;

?>

