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
                  <th>Tên</th>
                  <th>Mô tả</th>
                  <th>Status</th>
                  <th>
                      <a href="category-add.php" class="btn btn-sm btn-success">Thêm</a>
                  </th>
                </tr>
                <?php foreach ($cates as $index => $c): ?>
                <tr>
                  <td><?= $index+1 ?></td>
                  <td><?= $c->Name  ?></td>
                  <td><?= $c->Description  ?></td>
                  
                  <td><span class="label label-success">Approved</span></td>
                  <td>
                    <a href="category-edit.php?id=<?= $c->ID?>" class="btn btn-sm btn-info">Sửa</a>
                    <a href="category-remove.php?id=<?= $c->ID?>" class="btn btn-sm btn-danger">Xóa</a>
                </td>
                </tr>
                <?php endforeach ?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>