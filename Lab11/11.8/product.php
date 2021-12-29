<?php
require_once("connect.php");
$query ="SELECT * FROM product WHERE prd_name like '" . $_POST["keyword"] . "%' ORDER BY prd_name";
$results = mysqli_query($conn, $query);
?>
<ul>
<?php
while ($row = mysqli_fetch_array($results)) {
?>
<li onClick="selectProduct('<?php echo $row["prd_name"]; ?>');"><?php echo $row["prd_name"]; ?></li>
<?php
}
?>
</ul>
