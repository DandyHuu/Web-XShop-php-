<div class="row">
	<div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?= $totalCase ?></h3>

        <p>Danh mục</p>
      </div>
      <div class="icon">
        <i class="fa fa-list-ul"></i>
      </div>
      <a href="category-list.php" class="small-box-footer">Quản lí danh mục <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3><?= $totalProduct ?></h3>

        <p>Sản phẩm</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="product-list.php" class="small-box-footer">Quản lí sản phẩm <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3> <?= $totalUser ?></h3>

        <p>Người dùng</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="user-list.php" class="small-box-footer">Quản lí người dùng <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3><?= $totalOrder ?></h3>

        <p>Đơn đặt hàng</p>
      </div>
      <div class="icon">
        <i class="fa fa-truck"></i>
      </div>
      <a href="order-list.php" class="small-box-footer">Quản lí đơn <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>
<div class="row">
  <section class="col-lg-7 connectedSortable ui-sortable">
    <div class="box box-primary">
      <div class="box-header ui-sortable-handle" style="cursor: move;">
        <i class="ion ion-clipboard"></i>

        <h3 class="box-title">Đánh giá của khách hàng</h3>

        <div class="box-tools pull-right">
          <ul class="pagination pagination-sm inline">
            <?=$list_page?>
          </ul>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
        <ul class="todo-list ui-sortable">
          <?php foreach ($list_comment as $item): ?>
            <li>
              <!-- drag handle -->
              <span class="handle ui-sortable-handle">
                <i class="fa fa-ellipsis-v"></i>
                <i class="fa fa-ellipsis-v"></i>
              </span>
              <!-- checkbox -->
              <input type="checkbox" value="">
              <span class="text"><?= $item->C_name  ?></span>
              <!-- todo text -->
              <span class="text"><?= $item->Comment  ?></span>
              <!-- Emphasis label -->

              <small class="label label-danger"><i class="fa fa-clock-o"></i> 
                <?= $item->Time_send ?>
              </small>
              <!-- General tools such as edit or delete-->
              <div class="tools">
                <a href="remove-comment.php?id=<?=$item->ID?>">
                  <i class="fa fa-trash-o" ></i>
                </a>
              </div>
            </li>
          <?php endforeach ?>
          
        </ul>
      </div>
      <!-- /.box-body -->
      <div class="box-footer clearfix no-border">
        <button type="button" class="btn btn-default pull-right"><i class="fa fa-genderless"></i> Mới nhất </button>
      </div>
    </div>    

  </section>
  <!-- Right -->
  <section class="col-lg-5 connectedSortable ui-sortable">
    <div class="box box-solid bg-green-gradient">
      <div class="box-header ui-sortable-handle" style="cursor: move;">
        <i class="fa fa-calendar"></i>

        <h3 class="box-title">Calendar</h3>
        <!-- tools box -->
        <div class="pull-right box-tools">
          <!-- button with a dropdown -->
          <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
          </button>
        </div>
        <!-- /. tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body no-padding">
        <!--The calendar -->
        <div id="calendar" style="width: 100%"><div class="datepicker datepicker-inline"><div class="datepicker-days" style=""><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">March 2018</th><th class="next">»</th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td class="old day" data-date="1519516800000">25</td><td class="old day" data-date="1519603200000">26</td><td class="old day" data-date="1519689600000">27</td><td class="old day" data-date="1519776000000">28</td><td class="day" data-date="1519862400000">1</td><td class="day" data-date="1519948800000">2</td><td class="day" data-date="1520035200000">3</td></tr><tr><td class="day" data-date="1520121600000">4</td><td class="day" data-date="1520208000000">5</td><td class="day" data-date="1520294400000">6</td><td class="day" data-date="1520380800000">7</td><td class="day" data-date="1520467200000">8</td><td class="day" data-date="1520553600000">9</td><td class="day" data-date="1520640000000">10</td></tr><tr><td class="day" data-date="1520726400000">11</td><td class="day" data-date="1520812800000">12</td><td class="day" data-date="1520899200000">13</td><td class="day" data-date="1520985600000">14</td><td class="day" data-date="1521072000000">15</td><td class="day" data-date="1521158400000">16</td><td class="day" data-date="1521244800000">17</td></tr><tr><td class="day" data-date="1521331200000">18</td><td class="day" data-date="1521417600000">19</td><td class="day" data-date="1521504000000">20</td><td class="day" data-date="1521590400000">21</td><td class="day" data-date="1521676800000">22</td><td class="day" data-date="1521763200000">23</td><td class="day" data-date="1521849600000">24</td></tr><tr><td class="day" data-date="1521936000000">25</td><td class="day" data-date="1522022400000">26</td><td class="day" data-date="1522108800000">27</td><td class="day" data-date="1522195200000">28</td><td class="day" data-date="1522281600000">29</td><td class="day" data-date="1522368000000">30</td><td class="day" data-date="1522454400000">31</td></tr><tr><td class="new day" data-date="1522540800000">1</td><td class="new day" data-date="1522627200000">2</td><td class="new day" data-date="1522713600000">3</td><td class="new day" data-date="1522800000000">4</td><td class="new day" data-date="1522886400000">5</td><td class="new day" data-date="1522972800000">6</td><td class="new day" data-date="1523059200000">7</td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2018</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month focused">Mar</span><span class="month">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2010-2019</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span class="year">2014</span><span class="year">2015</span><span class="year">2016</span><span class="year">2017</span><span class="year focused">2018</span><span class="year">2019</span><span class="year new">2020</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2000-2090</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="decade old">1990</span><span class="decade">2000</span><span class="decade focused">2010</span><span class="decade">2020</span><span class="decade">2030</span><span class="decade">2040</span><span class="decade">2050</span><span class="decade">2060</span><span class="decade">2070</span><span class="decade">2080</span><span class="decade">2090</span><span class="decade new">2100</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-centuries" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2000-2900</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="century old">1900</span><span class="century focused">2000</span><span class="century">2100</span><span class="century">2200</span><span class="century">2300</span><span class="century">2400</span><span class="century">2500</span><span class="century">2600</span><span class="century">2700</span><span class="century">2800</span><span class="century">2900</span><span class="century new">3000</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div></div></div>
      </div>
      <!-- /.box-body -->
      
    </div>    

  </section>
</div>