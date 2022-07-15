
<?php
include 'config.php';
?>

	
	<center><input type="text" class="search" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"><table id='reservation' style='width: 90%' border='2'>
			<th>Name</th>
			<th>IC</th>
			<th>Phone number</th>
			<th>Gender</th>
			
			</tr></center>
<?php			
          
	$result = mysqli_query ($conn,$sql="select * from register");
	while ($row = mysqli_fetch_assoc ($result)){ 

		?>
			<tr>
			<td><?php echo $row ['name'] ?></td>
			<td><?php echo $row ['ic']?></td>
			<td><?php echo $row ['phone'] ?></td>
			<td><?php echo $row ['gender'] ?></td>
			
			</tr>

<?php
	}
mysqli_free_result($result);
?>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("reservation");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
