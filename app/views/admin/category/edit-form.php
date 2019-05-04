<div class="box box-warning">
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" id="category-form" action="category-update.php" method="post"   novalidate>
                <!-- text input -->
                <input type="hidden" name="id" value="<?= $case->ID?>">
                <div class="form-group">
                  <label>Tên danh mục <span class="text-danger">*</span></label>
                  <input type="text" name="name" class="form-control" placeholder="Enter ..." value="<?= $case->Name?>">
                </div>
                

                <!-- textarea -->
                <div class="form-group">
                  <label>Danh mục cha</label>
              <select name="parent_id" class="form-control">
			             <option value="0">--- Danh mục gốc ---</option>
			            <?php foreach ($parent as $cate): ?>
			                   <option value="<?= $cate->ID?>"><?= $cate->Name ?></option>
			             <?php endforeach ?>  
			       </select>
                </div>
				 <!-- textarea -->
            <div class="form-group">
			        <label>Mô tả <span class="text-danger">*</span></label>
			        <textarea class="form-control textarea" rows="5" placeholder="Enter ..." name="Description"><?= $case->Description?></textarea>
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
          name
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