<?php 
$cart = "";
if(!isset($_SESSION['CART']) || count($_SESSION['CART']) == 0){
   $cart = "Không có sản phẩm trong giỏ hàng";
}
?>
<section class="page-title">
    <div class="container">
        <h4 class="text-uppercase">Chi tiết của sản phẩm </h4>
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a>
            </li>
            <li class="active"><a href="shop_cart.php"><?= $title ?></a>
            </li>
        </ol>
    </div>
</section>
<section class="body-content ">

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <p><?= $cart ?> <a href="index.php">Quay lại mua hàng</a></p>
                        <table class="table cart-table">
                            <thead>
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Số lượng</th>
                                    <th>Đơn giá</th>
                                    <th>Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $totalMoney = 0; ?>
                                <?php
                                if (isset($_SESSION['CART'])) {
                                 foreach ($_SESSION['CART'] as $item): ?>
                                   <?php $totalMoney += $item['quantity']*$item['price']; ?>
                                   <tr>
                                    
                                    <td><a href="#"><?= $item['name'] ?></a>
                                    </td>
                                    <td>
                                        <div class="cart-img">
                                            <a href="#">
                                                <img src='public/uploads/product/<?= $item['feature_image']; ?>' alt="">
                                            </a>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="cart-action">
                                            <input type="number" class="form-control cart-quantity" id="item-<?=$item['id']?>"  value="<?= $item['quantity']?>"
                                            name="quantity">
                                            <button onclick="changeQuantity(<?=$item['id']?>)" class="btn btn-default" type="button"><i class="fa fa-refresh"></i>
                                            </button>
                                            <a class="btn btn-default"  href="remove-item.php?pId=<?=$item['id']?>"><i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                    </td>
                                    <td><?= $item['price'] ?></td>
                                    <td><?= $item['quantity']*$item['price'] ?></td>
                                </tr>
                            <?php endforeach ;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- accordion 2 start-->
                
            <dl class="accordion">
                <dt>
                    <a href="#">...</a>
                </dt>
                <!-- <dd style="display: none;">
                    
                </dd> -->
            </dl>
            <!-- accordion 1 end-->
            <dl class="accordion">
                <dt>
                    <a href="#">Thanh toán sau (Ship,Chuyển,..)</a>
                </dt>
                <dd style="display: none;">
                    <form class="coupon-form" action="add-order.php" method="POST" data-toggle="validator">
                        <p>Vui lòng nhập thông tin của bạn</p>

                        <div class="form-group">
                            <label>Họ tên</label>
                            <input type="text" name="name" class="form-control" minlength="5" required="" data-error="Tên phải có hơn 5 kí tự ">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" name="phone" class="form-control" minlength="12" required="" data-error="Vui lòng nhập lại số điện thoại">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" minlength="6" required="" data-error="Email không chính xác!">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">

                            <label>Tỉnh/Thành</label>
                            <select class="form-control" name="address">

                                <option value="Hà Nội">Hà Nội</option>
                                <option value="Bắc Giang">Bắc Giang</option>
                                <option value="GE">Tây Ninh</option>
                                <option value="Long An">Long An</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="Cà Mau">Cà Mau</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GT">BangKok</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="Kiên Giang">Kiên Giang</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Yêu cầu khác *</label>
                            <input type="text" class="form-control" name="note">
                        </div>
                        <input type="hidden" name="total" value="<?=$totalMoney?>">

                        <button type="submit" class="btn btn-small btn-dark-solid" >Thanh toán</button>
                    </form>
                </dd>
            </dl>
            <!-- accordion 2 end-->
            <style>
                    .portfolio-meta li span{
                     min-width: 230px;
                    }
                </style>
            <ul class="portfolio-meta m-bot-60 pull-right">
                <li><span> Tạm tính </span> <?=$totalMoney?></li>
                <li><span><strong class="cart-total"> Tổng tiền thanh toán</strong></span>  <strong class="cart-total"><?=$totalMoney?></strong>
                </li>
            </ul>

            <div class="cart-btn-row inline-block">
                

                <a href="index.php" class="btn btn-medium btn-dark-solid btn-transparent  pull-right">  Tiếp tục mua hàng </a>
            </div>
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="margin-top: 10%;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p class="text-center text-danger">Bạn vui lòng nhập thông tin vào đơn đặt hàng!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

        </div>
    </div>
</div>
</div>

</section>
<script>
    function changeQuantity(itemId){
        var quantityChangeNumber = document.querySelector(`#item-${itemId}`).value;
        window.location.href = `update-cart-item.php?itemId=${itemId}&quantity=${quantityChangeNumber}`;
    }
</script>