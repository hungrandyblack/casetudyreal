<?php
include_once "csdl.php";
//Lấy tất cả từ bảng thể loại
$findlaptop    = "SELECT * FROM `products` WHERE product_type_id =4 limit 5";
//thực hiện truy vấn
$laptop        = $connect->query( $findlaptop );
//tùy chọn kiểu trả về
$laptop->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$laptops        = $laptop->fetchAll();
?>
<?php include_once "../view/headeer.php";?>
<h1 style="margin-top: 114px;color: aqua;" >Lap Top</h1>
<div style="margin-top: 108px;">
    <div style="display:flex;margin-top: -97px">
            <?php foreach ( $laptops as $number => $product): ?>
                <div>
            <img style="width: 241px;height: 133px;" src="<?php echo $product->image_product; ?>" alt="">
               <br>
               <br>
                    <p style="margin-top: -14px;margin-left: 53px;"><?php echo $product->product; ?></p>
                    <p style="margin-top: 6px;margin-left: 53px;"><?php echo number_format($product->price)." VND"; ?></p>
                    <a href="product.php?id=<?php echo $product->id; ?>" class="mua" >Buy</a>
    
              </div>
            <?php endforeach; ?>
        </div>
    </div>
    <h1 style="margin-top: 114px;color: aqua;">Updating</h1>
<?php include_once "../view/foooter.php";?>