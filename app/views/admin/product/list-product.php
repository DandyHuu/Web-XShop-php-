<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bảng danh sách danh mục</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Tên sản phẩm</th>
                  <th class="text-center">Ảnh</th>
                  <th>Mô tả</th>
                  <th>
                      <a href="product-add.php" class="btn btn-sm btn-success">Thêm</a>
                  </th>
                </tr>
                <?php foreach ($list_product as $index => $c): ?>
                <tr>
                  <td><?= $index+1 ?></td>
                  <td style="width: 15%;"><?= $c->Name  ?></td>
                  <td style="width: 10%;"><img style="width: 100%;" src="../<?= $c->Feature_image  ?>" alt=""></td>
                  <td style="width: 50%;"><?= $c->Description  ?></td>
                  
                  <td>
                    <a href="product-edit.php?id=<?= $c->ID?>"  class="btn btn-sm btn-info">Sửa</a>
                    <a href="product-remove.php?id=<?= $c->ID?>" class="btn btn-sm btn-danger">Xóa</a>
                </td>
                </tr>
                <?php endforeach ?>
              </tbody></table>
            </div>
            <div class="text-center col-md-12">
                <ul class="pagination custom-pagination">
                    <?= $list_page ?>
                </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>