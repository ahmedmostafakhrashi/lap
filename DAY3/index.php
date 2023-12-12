<?php include("header.php"); ?>
<div class="row">
<div class="col-6">
<?php 
/*************************************** 5 String Functions *********************************************************** */
?>
<div class="card mt-5">
<div class="card-header"> 5 String Functions </div>
<div class="card-body row  px-5">
<?php $text = " Hello "; ?>
<div class="card mt-5">
<div class="card-header"> str_repeat() </div>
<div class="card-body row">
<?php 
echo str_repeat($text, 3);
?>
</div>
</div>



<div class="card mt-5">
<div class="card-header"> substr() </div>
<div class="card-body row">
<?php 
echo substr($text, 0,2);
?>
</div>
</div>


<div class="card mt-5">
<div class="card-header"> md5() </div>
<div class="card-body row">
<?php 
echo md5($text);
?>
</div>
</div>


<div class="card mt-5">
<div class="card-header"> number_format() </div>
<div class="card-body row">
<?php 
echo number_format(154846);
?>
</div>
</div>


<div class="card mt-5">
<div class="card-header"> strpos() </div>
<div class="card-body row">
<?php 
echo strpos($text, "l");
?>
</div>
</div>
</div>
</div>
</div>

<div class="col-6">

<?php 
/*************************************** 5 Array Functions *********************************************************** */
$arr  =  ["ahmed","mohamed","mostafa","mahmoud"];
$arr1 =  ["mostafa","mohamed","mostafa","mahmoud"];
$arr3 =  ["mostafa1","mohamed2","hmada10","mahmoud4"];

?>
<div class="card mt-5">
<div class="card-header"> 5 Array Functions </div>
<div class="card-body row  px-5">


<div class="card mt-5">
<div class="card-header"> array_diff() </div>
<div class="card-body row">

<?php 

$def = array_diff($arr,$arr1);

foreach($def as $item){
        echo $item;
}
?>
</div>
</div>



<div class="card mt-5">
<div class="card-header"> array_search() </div>
<div class="card-body row">
<?php 
$search_index = array_search("mostafa", $arr);
echo $arr[$search_index];
?>
</div>
</div>



<div class="card mt-5">
<div class="card-header"> array_merge() </div>
<div class="card-body row">
<?php 
$merge = array_merge($arr, $arr1);
foreach($merge as $item){
        echo $item." ";
}
?>
</div>
</div>


<div class="card mt-5">
<div class="card-header"> natsort() </div>
<div class="card-body row">
<?php 
 natsort($arr3);
foreach($arr3 as $item){
        echo $item." ";
}
?>
</div>
</div>



<div class="card mt-5">
<div class="card-header"> array_rand() </div>
<div class="card-body row">
<?php
$rand_index = array_rand($arr, count($arr) -2);

echo $arr[$rand_index[0]] . " - ";
echo $arr[$rand_index[1]] ;

?>
</div>
</div>



</div>
</div>

</div>

</div>

<?php 
/*************************************** Form *********************************************************** */
?>
<div class="card mt-3">
<div class="card-header"> Form</div>
        <div class="card-body row">
        <h5 class="card-title text-center mb-4">
                <?php 
                        function is_required($input){
                                if(empty($input)){
                                        return false;
                                }else{
                                        return true;
                                }
                        }

if(isset($_POST['submit'])){
if(!is_required($_POST['username']) or !is_required($_POST['password']) ){
        echo '<div class="alert alert-danger" role="alert"> ERROR! required:username and password   </div>';
}else{
        $username = htmlspecialchars((trim(strip_tags($_POST['username']))));
        $password = md5(htmlspecialchars((trim(strip_tags($_POST['password'])))));
        echo '<div class="alert alert-success" role="alert"> Username : '.$username.' <br> Password : '.$password.'  </div>';
}
}

                ?>

        </h5>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="row d-flex flex-column align-items-center">


<div class="mb-3 col-4">
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Username</span>
    <input type="text" name="username" class="form-control" >
</div>
</div>


<div class="mb-3 col-4">
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">password</span>
    <input type="password" name="password" class="form-control" >
</div>
</div>

<div class=" row d-flex flex-column align-items-center col-4 ">
  <button type="submit" class="btn btn-primary" name="submit" value="OK">Login</button>
</div>

</form>

</div>
</div>