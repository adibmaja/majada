<?php
//    if(isset($_POST['plus'])){
//        $data1 = $_POST['data1'];
//        $data2 = $_POST['data2'];
//        echo $data1+$data2;
//    }
//
//if(isset($_POST['minus'])){
//    $data1 = $_POST['data1'];
//    $data2 = $_POST['data2'];
//    echo $data1-$data2;
//}
//?>
<!--<form method="post">-->
<!--    <input type="text" name="data1">-->
<!--    <input type="text" name="data2">-->
<!--    <input type="submit" name="plus" value="+">-->
<!--    <input type="submit" name="minus" value="-">-->
<!--</form>-->

<?php
class calculation{
    public function plus($data1,$data2){
        echo $data1+$data2;
    }
    public function minus($data1,$data2){
        echo $data1-$data2;
    }
    public function multiplication($data1,$data2){
        echo $data1*$data2;
    }
    public function division($data1,$data2){
        echo $data1/$data2;
    }
}
if(isset($_POST['plus'])){
    $data1 = $_POST['data1'];
    $data2 = $_POST['data2'];
    $calculation = new calculation;
    $calculation->plus($data1,$data2);
}

if(isset($_POST['minus'])){
    $data1 = $_POST['data1'];
    $data2 = $_POST['data2'];
    $calculation = new calculation;
    $calculation->minus($data1,$data2);
}

if(isset($_POST['multiplication'])){
    $data1 = $_POST['data1'];
    $data2 = $_POST['data2'];
    $calculation = new calculation;
    $calculation->multiplication($data1,$data2);
}

if(isset($_POST['division'])){
    $data1 = $_POST['data1'];
    $data2 = $_POST['data2'];
    $calculation = new calculation;
    $calculation->division($data1,$data2);
}
}
?>
<form method="post">
    <input type="text" name="data1">
    <input type="text" name="data2">
    <input type="submit" name="plus" value="+">
    <input type="submit" name="minus" value="-">
    <input type="submit" name="multiplication" value="*">
    <input type="submit" name="division" value="/">
</form>


