<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách đơn hàng</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <thead>
                  <th>STT</th>
                  <th>Tên khách hàng</th>
                  <th>Điện thoại</th>
                  <th>Phương thức thanh toán</th>
                  <th>Chuyển đến</th>
                  <th>Thời gian đặt hàng</th>
                  <th>Tổng tiền</th>
                  <th>Sửa</th>
                </thead>
                <tbody>
                  <?php foreach ($list_order as $index => $value): ?>
                    
                <tr>
                  <td><?= $index+1 ?></td>
                  <td><?= $value->Customer_name ?></td>
                  <td><?= $value->Phone ?></td>
                  <td>
                    <?php 
                        if ($value->Payment_method == 1 ) {
                          echo '<span class="label label-success">Thanh toán sau khi nhận hàng</span></td>';
                        }
                        else {
                          echo '<span class="label label-primary">Thanh toán trực tuyến</span></td>';
                        }
                     ?>
                    
                  <td><?= $value->Customer_address ?></td>
                  <td><?= $value->Order_date ?></td>
                  <td><?= $value->Total_price ?></td>
                  <td> <a href="order-remove.php?id=<?= $value->ID_order?>" class="btn btn-sm btn-danger">Xóa</a></td>
                </tr>
              <?php endforeach ?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>