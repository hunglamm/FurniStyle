<div class="p-3 vh-100">
<form method="post" action=""enctype="multipart/form-data" class="form p-3 ">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <label for="">Tên Sản Phẩm</label>
                    <input value="<?=$sp['tensanpham']?>" type="text" name="tensanpham" class="form-control">
                </div>
                <div>
                    <label for="">Giá Sản Phẩm</label>
                    <input value="<?=$sp['gia']?>" type="text" name="gia" class="form-control">
                </div>
                <div>
                    <label for="">Hình ảnh</label>
                    <input  type="file" name="anhsanpham" class="form-control">
                </div>  
                <div>
                    <label for="">Chi tiết</label>
                    <input value="<?=$sp['chitiet']?>" type="text" name="chitiet" class="form-control">
                </div>
                <div>
                    <label for="">Số lượng</label><br>
                    <input type="number" name="soluong" value="<?=$sp['soluong']?>" class="form-control">
                </div>
                <div>
                    <label for="">Sản phẩm mới</label>
                    <select class="form-select" name="sanphammoi" >
                    <option value="Mới" <?php if($sp['sanphammoi']=="Mới") echo 'selected'; ?> >Mới</option>
                    <option value="Cũ" <?php if($sp['sanphammoi']=="Cũ") echo 'selected'; ?> >Cũ</option>
                    </select>   
                </div>
                <div>
                    <label for="">Sản phẩm nổi bật</label>
                    <select class="form-select" name="sanphamnoibat" >
                    <option value="Có" <?php if($sp['sanphamnoibat']=="Có") echo 'selected'; ?> >Có</option>
                    <option value="Không" <?php if($sp['sanphamnoibat']=="Không") echo 'selected'; ?> >Không</option>
                    </select>   
                </div>
                <div>
                    <label for="">Trạng thái</label>
                    <select class="form-select" name="tinhtrang" >
                    <option value="Đang hoạt động" <?php if($sp['tinhtrang']=="Đang hoạt động") echo 'selected'; ?> >Đang hoạt động</option>
                    <option value="Tạm ngưng" <?php if($sp['tinhtrang']=="Tạm ngưng") echo 'selected'; ?> >Tạm ngưng</option>
                    </select>   
                </div>
                <div class="text-center">
                    <input class="btn btn-danger m-5" type="submit" name="editProduct_submit" value="Cập nhật">
                </div>
            </div>
            <div class="col-md-6 ">
            <img class="my-3" src="../furni-1.0.0/images/<?=$sp['anhsanpham']?>" width="400" height="300" alt="">
            </div>
        </div>
        
    </form>
</div>