<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Danh sách người dùng</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <thead>
                  <th style="width: 5%">ID</th>
                  <th style="width: 20%">Họ tên</th>
                  <th>Avatar</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th style="width: 5%">Xóa</th>
                </thead>
                <tbody>
                  <?php foreach ($listUser as $index => $value): ?>
                    
                  <tr>
                  <td><?= $index+1 ?></td>
                  <td><?= $value->Name ?></td>
                  <td style="width: 20%">
                    <?php 
                    // var_dump($listUser);die;
                       if ($value->Avatar == NULL) {
                         echo '<img style="width: 90% " src="../public/uploads/user/avatar2.jpg" alt="">';
                        } 
                        else{
                         
                          echo '<img style="width: 90% " src="../'.$value->Avatar.'" alt="">';
                        }
                     ?>
                  </td>
                  <td><?= $value->Email ?></td>
                  <td><?= $value->Short_description ?></td>
                  <td>
                    <a href="user-remove.php?id=<?= $value->ID ?>" class="btn btn-sm btn-danger">Xóa</a>
                  </td>
                  </tr>
                  <?php endforeach ?>

              </tbody></table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
               <?= $list_page ?>
              </ul>
            </div>
          </div>