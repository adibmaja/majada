<table>
    <th>First name</th>
    <th>last name</th>
    <th>Email</th>
    <th>Date of birth</th>
    <th>Biography</th>
    <th>Gender</th>
    <th>picture</th>
<?php

include('../function.php');

$select = "SELECT * FROM students";
$data = $webapps->select($select);
while ($all_data = $data->fetch_object()) { ?>
    <tr>
        <td><?php echo $all_data->Fname; ?></td>
        <td><?php echo $all_data->Lname; ?></td>
        <td><?php echo $all_data->email; ?></td>
        <td><?php echo $all_data-> dob ; ?></td> 
        <td><?php echo $all_data-> Biography; ?></td> 
        <td><?php echo $all_data-> Gender; ?></td> 
        <td><?php echo $all_data-> picture; ?></td> 
        
    </tr>
<?php 
    }
?>
</table>        
