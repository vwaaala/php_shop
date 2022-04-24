<?php
$product_shuffle = $product->getData();
shuffle($product_shuffle)
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
                    <a href="#"><img src="../static/image/products/<?php echo $item['image'] ?? "1.png";?>" alt="product1" class="img-fluid"></a>
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
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
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
