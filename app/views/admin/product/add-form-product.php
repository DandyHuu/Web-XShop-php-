<div class="box box-warning">
            <!-- /.box-header -->

            <div class="box-body">
              <form role="form" id="category-form" action="product-save-add.php" method="post"   novalidate enctype="multipart/form-data">
                <!-- text input -->
                <div class="form-group">
                  <input type="hidden" name="ID" class="form-control" placeholder="Enter ..." value="">
                </div>
                <div class="form-group">
                  <label>Tên sản phẩm <span class="text-danger">*</span></label>
                  <input type="text" name="Name" class="form-control" placeholder="Enter ..." value="">
                </div>
                <div class="form-group">
                  <label>Giá demo <span class="text-danger">*</span></label>
                  <input type="text" name="List_price" class="form-control" placeholder="Enter ..." value="">
                </div>
                <div class="form-group">
                  <label>Giá bán <span class="text-danger">*</span></label>
                  <input type="text" name="Sell_price" class="form-control" placeholder="Enter ..." value="">
                </div>
                <div class="form-group">
                  <label>Ảnh <span class="text-danger">*</span></label>
                  <input type="file" name="image" class="form-control"  value="">
                </div>

                <div class="form-group">
                  <label>Đánh giá sao <span class="text-danger">*</span></label>
                  <select name="Star" class="form-control">
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="2">3</option>
                         <option value="2">4</option>
                         <option value="2">5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Sản phẩm hot <span class="text-danger">*</span></label>
                  <select name="Hot" class="form-control">
                         <option value="0">Hot</option>
                         <option value="1">Bình thường</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Trạng thái <span class="text-danger">*</span></label>
                  <input type="text" name="Status" class="form-control" placeholder="Enter ..." value="">
                </div>
                <div class="form-group">
                  <label>Chi tiết sản phẩm <span class="text-danger">*</span></label>
                  <input type="text" name="Detail" class="form-control" placeholder="Enter ..." value="">
                </div>

                <div class="form-group">
                  <label>Số lượng <span class="text-danger">*</span></label>
                  <input type="text" name="Stock" class="form-control" placeholder="Enter ..." value="">
                </div>
                

                <!-- textarea -->
                <div class="form-group">
                  <label>Thuộc danh mục</label>
              <select name="Cate_id" class="form-control">
                  <?php foreach ($parent as $cate): ?>
                         <option value=""><?= $cate->Name ?></option>
                   <?php endforeach ?>  
             </select>
                </div>
         <!-- textarea -->
            <div class="form-group">
              <label>Mô tả <span class="text-danger">*</span></label>
              <textarea class="form-control textarea" rows="5" placeholder="Enter ..." name="Description"></textarea>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-sm btn-success">Lưu</button>
              <a href="category-list.php" class="btn btn-sm btn-danger">Huỷ</a>
           </div>

              </form>
            </div>
            <!-- /.box-body -->
          </div>


<style>
  label.error{
    color: red;
  }
</style>
<script>
  
  $(function () {
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5();


    $('#category-form').validate({
      rules: {
        name: {
          required: true,
          minlength: 4,
          maxlength: 100,
          remove: 'check-category-name.php'
        },
        parent_id: {
          required: true
        },
        image: {
          extension: "jpg|jpeg|png|gif"
        }
      },
      messages: {
        name:{
          required: "Vui lòng nhập tên danh mục",
          minlength: "Độ dài tối thiểu lớn hơn 4 ký tự"
        }
      }
    });
  });
</script>