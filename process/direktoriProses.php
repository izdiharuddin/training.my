<?php
	include "db/pdo.php";
	
	try
	{
		$countKursus = 0;
		$countGenre = 0;
		$arrayKursus = 0;
		//query
		$resource = $db->prepare('SELECT * FROM genrekursus');
		$resource->execute();
		
		//result
		$result = $resource->fetchAll(PDO::FETCH_ASSOC); //FETCH_ASSOC
		//$rows = $result->fetch(PDO::FETCH_NUM);
		//printf_array('%s',$result);
		//echo 'result'.sizeof($result).'<br>';
		
		$data = $result;
		
		
		foreach ($data as $result){
			//echo $result['genreId']." " . strtoupper($result['namaGenre']) ."<br>";
			echo "<table style = \"width:100%\" border=\"1\" table class=\"tb-listing\">";
			echo "<tr bgcolor=\"#FFA500\">";
			echo "<th>Kod</th>";
			echo "<th class=\"title\">Kursus/Bengkel</th>";
			echo "<th>Tahap</th>";
			echo "<th>Masa</th>";
			echo "<th>Tempat</th>";
			echo "<th>Harga</th>";
			echo "</tr>";
			
			echo "<tr class=\"header\">";
			echo "<td align=\"center\" colspan=\"7\" class=\"month\" colspan=\"2\"><h3>".strtoupper($result['namaGenre'])."</h3></td>";
			echo "</tr>";
			
			$genre = $result['genreId'];
			
			$resource = $db->prepare('SELECT * FROM senaraikursus where genre = :genre');
			$resource->bindValue(':genre', $genre);
			
			$resource->execute();
			$rowkursus = $resource->fetchAll(PDO::FETCH_ASSOC);
			$row = $rowkursus;
			foreach ($row as $rowkursus){
				
				echo "<tr>";
				echo "<td>".$rowkursus['kod']."</td>";
				echo "<td>".$rowkursus['kursus']."</td>";
				echo "<td>".$rowkursus['tahap']."</td>";
				echo "<td>".$rowkursus['masa']."</td>";
				echo "<td>".$rowkursus['tempat']."</td>";
				echo "<td> RM ".$rowkursus['harga']."</td>";
				echo "</tr>";
			}
			echo "</table>";
			echo "<br>";
 					
		}
	
		}
	catch(PDOException $ex)
	{
		echo 'DB Query Error: ' . $ex->getMessage();
		exit;
	}
	
	
?>