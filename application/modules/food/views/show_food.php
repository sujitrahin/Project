<div class="single-product-area">
 <div class="container">
    <div class="product-content-right">
<!--เพิ่ม--><a href= "<?php echo site_url('food/add_food_page/')?>">
                  <button class="button">เพิ่มเมนูอาหาร</button>
          </a>

       <div class="row"><br>
         <h3>เมนูอาหาร</h3>
          <?php
               foreach ($food_list as $key => $value)     //ดึงข้อมูลจาก DB มาแสดงใน list
               {
            ?>
            <br/>
         <div class="container" style="padding: 25px;">
                <div class="row row-margin-bottom">
                    <div class="col-md-5 no-padding lib-item" data-category="view">
                        <div class="lib-panel">
                            <div class="row box-shadow">
                            <a href= "<?php echo site_url('food/food_edit/'.$value['food_id']);?>">
                              <button class="button">แก้ไข</button>
                            </a>
                            <a href= "<?php echo site_url('food/delete_food/'.$value['food_id']);?>">
                                <button class="button">ลบ</button>
                            </a>
                                <div class="col-md-6">
                                  <img src="<?php echo base_url('image_gh/'.$value['food_pic']);?>" class="img-circle" alt="" width="304" height="236">
                                </div>
                                <div class="col-md-6">
                                    <div class="lib-row lib-header">
                                        <?php echo $value['food_name'];?>
                                        <div class="lib-header-seperator"></div>
                                    </div>
                                    <div class="lib-row lib-desc">
                                        <?php echo $value['food_detail'];?>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
        </div>
          <?php
                    }
           ?>
      </div>
    </div>
   </div> 
</div>