<?php
include 'connectiondatabase.php';
if(isset($_GET['genre'])){
	if($_GET['genre']=="action"){
		$reponse = $bdd->query('SELECT * FROM entities WHERE movies=0 AND categoryId=1');
		while ($donnees = $reponse->fetch())
		{
			echo "<a href=\"video.php?titre=" . $donnees['Name'] . "\"><div class=\"d-inline my-2 mx-2\">" . $donnees['Thumbnails'] . "</div></a>";
		}
		$reponse->closeCursor();

	}elseif($_GET['genre']=="comedies"){
		$reponse = $bdd->query('SELECT * FROM entities WHERE movies=0 AND categoryId=2');
		while ($donnees = $reponse->fetch())
		{
			echo "<a href=\"video.php?titre=" . $donnees['Name'] . "\"><div class=\"d-inline my-2 mx-2\">" . $donnees['Thumbnails'] . "</div></a>";
		}
		$reponse->closeCursor();

	}elseif($_GET['genre']=="drama"){
		$reponse = $bdd->query('SELECT * FROM entities WHERE movies=0 AND categoryId=3');
		while ($donnees = $reponse->fetch())
		{
			echo "<a href=\"video.php?titre=" . $donnees['Name'] . "\"><div class=\"d-inline my-2 mx-2\">" . $donnees['Thumbnails'] . "</div></a>";
		}
		$reponse->closeCursor();
	
	}elseif($_GET['genre']=="horror"){
		$reponse = $bdd->query('SELECT * FROM entities WHERE movies=0 AND categoryId=4');
		while ($donnees = $reponse->fetch())
		{
			echo "<a href=\"video.php?titre=" . $donnees['Name'] . "\"><div class=\"d-inline my-2 mx-2\">" . $donnees['Thumbnails'] . "</div></a>";
		}
		$reponse->closeCursor();
	
	}elseif($_GET['genre']=="romantic"){
		$reponse = $bdd->query('SELECT * FROM entities WHERE movies=0 AND categoryId=5');
		while ($donnees = $reponse->fetch())
		{
			echo "<a href=\"video.php?titre=" . $donnees['Name'] . "\"><div class=\"d-inline my-2 mx-2\">" . $donnees['Thumbnails'] . "</div></a>";
		}
		$reponse->closeCursor();
	
	}elseif($_GET['genre']=="scififantasy"){
		$reponse = $bdd->query('SELECT * FROM entities WHERE movies=0 AND categoryId=6');
		while ($donnees = $reponse->fetch())
		{
			echo "<a href=\"video.php?titre=" . $donnees['Name'] . "\"><div class=\"d-inline my-2 mx-2\">" . $donnees['Thumbnails'] . "</div></a>";
		}
		$reponse->closeCursor();
	}else{
		$reponse = $bdd->query('SELECT * FROM entities WHERE movies=0 AND categoryId=7');
		while ($donnees = $reponse->fetch())
		{
			echo "<a href=\"video.php?titre=" . $donnees['Name'] . "\"><div class=\"d-inline my-2 mx-2\">" . $donnees['Thumbnails'] . "</div></a>";
		}
		$reponse->closeCursor();
	}
}else{
	$reponse = $bdd->query('SELECT * FROM entities WHERE movies=0');
	while ($donnees = $reponse->fetch())
	{
		echo "<a href=\"video.php?titre=" . $donnees['Name'] . "\"><div class=\"d-inline my-2 mx-2\">" . $donnees['Thumbnails'] . "</div></a>";
	}
	$reponse->closeCursor();
}
?>