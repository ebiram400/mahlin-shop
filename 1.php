<?php
include_once ("./conn.php");
$sql = $conn->prepare('SELECT * FROM products');
$sql->execute();
$result = $sql->get_result();
if ($result->num_rows > 0) {
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    for ($i = 1; $i <= min($result->num_rows, 12); $i++) {

        $stmt = $conn->prepare('SELECT size,url FROM picture WHERE product_id=?');
        $stmt->bind_param('i', $rows[$i - 1]['id']);
        $stmt->execute();
        $response = $stmt->get_result();
        $main_pic = '';
        if ($response->num_rows > 0) {
            $pics = $response->fetch_all(MYSQLI_ASSOC);
            foreach ($pics as $j) {
                if ($j['size'] == '1') {
                    $main_pic = $j['url'];
                }
            }
        }

        echo '<div class="col-xl-4 col-sm-6 mb--50">
                <div class="zakas-product">
                    <div class="product-inner">
                        <figure class="product-image">
                            <a href="product-details.html">
                                <img src="' . $main_pic . '" alt="Products">
                            </a>
                            <div class="zakas-product-action">
                                <div class="product-action d-flex">
                                    <div class="product-size">
                                        <a href="" class="action-btn">
                                            <span class="current">XL</span>
                                        </a>
                                        <div class="product-size-swatch">
                                            <span class="product-size-swatch-btn variation-btn">
                                                L
                                            </span>
                                            <span class="product-size-swatch-btn variation-btn">
                                                M
                                            </span>
                                            <span class="product-size-swatch-btn variation-btn">
                                                S
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-color">
                                        <a href="" class="action-btn">
                                            <span class="current abbey">Abbey</span>
                                        </a>
                                        <div class="product-color-swatch">
                                            <span class="product-color-swatch-btn blue variation-btn">
                                                Blue
                                            </span>
                                            <span class="product-color-swatch-btn copper variation-btn">
                                                Copper
                                            </span>
                                            <span class="product-color-swatch-btn old-rose variation-btn">
                                                Old Rose
                                            </span>
                                        </div>
                                    </div>
                                    <a href="wishlist.html" class="action-btn">
                                        <i class="flaticon flaticon-like"></i>
                                    </a>
                                    <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                        <i class="flaticon flaticon-eye"></i>
                                    </a>
                                </div>
                            </div>
                            <span class="product-badge">New</span>
                        </figure>
                        <div class="product-info">
                            <h3 class="product-title mb--15">
                                <a href="product-details.html">' . $rows[$i - 1]['name'] . '</a>
                            </h3>
                            <div class="product-price-wrapper mb--30">
                                <span class="money">' . $rows[$i - 1]['price'] . '</span>
                            </div>
                            <a href="cart.php" class="btn btn-small btn-bg-sand btn-color-dark">اضافه کردن به سبد خرید</a>
                        </div>
                    </div>
                </div>
                <div class="zakas-product-list">
                    <div class="product-inner">
                        <figure class="product-image">
                            <a href="product-details.php">
                                <img src="assets/img/products/prod-19.jpg" alt="Products">
                            </a>
                            <div class="product-thumbnail-action">
                                <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                    <i class="flaticon flaticon-eye"></i>
                                </a>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h3 class="product-title mb--25">
                                <a href="product-details.php">Long Cartigen</a>
                            </h3>
                            <div class="zakas-product-action-list mb--20">
                                <div class="product-size mb--25">
                                    <div class="product-size-swatch">
                                        <span class="product-size-swatch-btn variation-btn">
                                            xxl
                                        </span>
                                        <span class="product-size-swatch-btn variation-btn">
                                            XL
                                        </span>
                                        <span class="product-size-swatch-btn variation-btn">
                                            L
                                        </span>
                                        <span class="product-size-swatch-btn variation-btn">
                                            M
                                        </span>
                                        <span class="product-size-swatch-btn variation-btn">
                                            S
                                        </span>
                                    </div>
                                </div>
                                <div class="product-color">
                                    <div class="product-color-swatch">
                                        <span class="product-color-swatch-btn variation-btn abbey">
                                            Abbey
                                        </span>
                                        <span class="product-color-swatch-btn variation-btn blue">
                                            Blue
                                        </span>
                                        <span class="product-color-swatch-btn variation-btn copper">
                                            Copper
                                        </span>
                                        <span class="product-color-swatch-btn variation-btn old-rose">
                                            Old Rose
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-price-wrapper mb--15 mb-sm--10">
                                <span class="money">$80</span>
                                <span class="money-separator">-</span>
                                <span class="money">$200</span>
                            </div>
                            <p class="product-short-description mb--20">
                                Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                            </p>  
                            <div class="zakas-product-action-list d-flex">
                                <a href="cart.php" class="btn btn-small btn-bg-sand btn-color-dark">اضافه کردن به سبد خرید</a>
                                <a href="wishlist.html" class="ml--20 action-btn">
                                    <i class="flaticon flaticon-like"></i>
                                </a>
                            </div>                                            
                        </div>
                    </div>
                </div>
            </div>';
    }
}
?>