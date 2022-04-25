<!-- New Phones -->
<?php
// shuffle product sequence
shuffle($product_shuffle);
// request method post
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if (isset($_POST['new_phones_submit']))
    {
        $cart->addToCart($_POST['product_id'],$_POST['user_id']);
    }
}
?>
?>
<section id="new-phones">
    <div class="container">
        <h4 class="font-rubik font-size-20">New Phones</h4>
        <hr>

        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item) {?>
            <div class="item py-2 bg-light">
                <div class="product font-rale">
                    <a href="<?php printf('%s?item_id=%s','product-detail.php',$item['id']) ?>"><img src="../static/image/products/<?php echo $item['image']?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <h6><?php echo $item['name']?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$<?php echo $item['price']?></span>
                        </div>
                        <form method="post">
                            <input type="hidden" name="product_id" value="<?php echo $item['id'];?>">
                            <input type="hidden" name="user_id" value="<?php echo 1;?>">
                            <button type="submit" name="new_phones_submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <!-- !owl carousel -->

    </div>
</section>
<!-- !New Phones -->

