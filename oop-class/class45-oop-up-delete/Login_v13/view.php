<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Country</th>
        <th>Phone</th>
        <th>Biography</th>
        <th>Skill</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
<?php

include('../function.php');

$select = "SELECT * FROM students";
$data = $webapps->select($select);
while ($all_data = $data->fetch_object()) { ?>
    <tr>
        <td><?php echo $all_data->name; ?></td>
        <td><?php echo $all_data->email; ?></td>
        <td><?php 
                $country_id = $all_data->country_code_id;
                $country_sql = "SELECT * FROM country_code_id WHERE id='$country_id'";
                $country_data = $webapps->select($country_sql);
                while ($country_name = $country_data->fetch_object()) {
                    echo $country_name->code_id;
                }
            ?>
        </td>
        <td><?php echo $all_data->phone; ?></td>
        <td>
            <?php 
                $file = $all_data->biography;
                if(file_exists('../biography/'.$file)){
                    $file_data = fopen('../biography/'.$file,"r");
                    echo fread($file_data,filesize('../biography/'.$file));
                }else{
                    echo "no data found";
                }
            ?>
        </td>
        <td><?php echo $all_data->skill_Level; ?></td>
        <td>
            <?php 
                $file = $all_data->picture;
                if(file_exists('../image/'.$file)){ ?>
            <img src="../image/<?php echo $all_data->picture; ?>" width="30px">
                <?php }else{
                    echo "no image found";
                }
            ?>
        </td>
        <td>
            <a href="edit.php?id=<?php echo $all_data->id; ?>">Edit</a>
            <a href="">Delete</a>
        </td>
    </tr>
<?php 
    }
?>
</table>        
