<?php
// get all product
$product_shuffle = $product->getData();

// shuffle item sequence
shuffle($product_shuffle);

// request method post
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if (isset($_POST['top_sale_submit']))
    {
        $cart->addToCart($_POST['product_id'],$_POST['user_id']);
    }
}
?>
<!-- Top Sale -->
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Top Sale</h4>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <!--  start of top sale product for loop -->
            <?php foreach ($product_shuffle as $item) {?>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="<?php printf('%s?item_id=%s','product-detail.php',$item['id']) ?>"><img src="../static/image/products/<?php echo $item['image'] ?? "1.png";?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <h6><?php echo $item['name'];?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$<?php echo $item['price'] ?? '00.0';?></span>
                        </div>
                        <form method="post">
                            <input type="hidden" name="product_id" value="<?php echo $item['id'];?>">
                            <input type="hidden" name="user_id" value="<?php echo 1;?>">
                            <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- end of top sale product for loop -->
        </div>
        <!-- !owl carousel -->
    </div>
</section>
<!-- !Top Sale -->
