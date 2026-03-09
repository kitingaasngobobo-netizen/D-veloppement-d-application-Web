<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP</title>
</head>

<body>

<h2>Liste des étudiants</h2>

<a href="ajouter.php">Ajouter un étudiant</a>

<table border="1">
<tr>
<th>ID</th>
<th>Nom</th>
<th>Email</th>
<th>Age</th>
<th>Actions</th>
</tr>

<?php

$sql = "SELECT * FROM etudiants";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){

echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['nom']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['age']."</td>";
echo "<td>
<a href='modifier.php?id=".$row['id']."'>Modifier</a>
<a href='supprimer.php?id=".$row['id']."'>Supprimer</a>
</td>";
echo "</tr>";

}

?>

</table>

</body>
</html>