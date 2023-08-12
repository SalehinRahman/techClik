<style>
.row{
 background-color: #f4dce3;
}
.color{
 background-color: #ecc3cf;
}
</style>

<?php
include('dbcon_phone.php');
if(isset($_POST["action"]))
{
    $query = $conn->query("SELECT * FROM product");
    if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
    {
        $query = $conn->query("SELECT * FROM product WHERE price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'");
    }
    $total_row = mysqli_num_rows($query);
    $output = '';
    if($total_row > 0){
        while ($row = $query ->fetch_object()) {
            $output .= '
            <div class="col-sm-4 col-lg-3 col-md-3 ">
                <div class = "color " style="border:2px solid white; border-radius:5px; padding:16px; margin-bottom:16px; height:220px;">
                    <img src="'. $row->image .'" alt="" class="img-responsive" >
                    <p align="center"><strong><a href="#">'. $row->name .'</a></strong></p>
                    <h4 style="text-align:center;" class="text-danger" >'. $row->price .'</h4>
                </div>
            </div>';
        }
    }else{
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}
?>
