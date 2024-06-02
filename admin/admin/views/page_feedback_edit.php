<div class="p-3 vh-100">
<form method="post" action=""enctype="multipart/form-data" class="form p-3 ">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <label for="">Tên Sản Phẩm</label>
                    <input value="<?=$sp['tensanpham']?>" type="text" name="tensanpham" class="form-control">
                </div>
                <div>
                    <label for="">Hình ảnh</label>
                    <input  type="file" name="hinhanh" class="form-control">
                </div>  
                <div>
                    <label for="">Noi dung</label>
                    <input  type="file" name="noidung" class="form-control">
                </div>
                <div>
                    <label for="">Trạng thái</label>
                    <select class="form-select" name="tinhtrangsp" >
                    <option value="Đang hoạt động" <?php if($sp['tinhtrangsp']=="Đang hoạt động") echo 'selected'; ?> >Đang hoạt động</option>
                    <option value="Tạm ngưng" <?php if($sp['tinhtrangsp']=="Tạm ngưng") echo 'selected'; ?> >Tạm ngưng</option>
                    </select>
                </div>
                <div class="text-center">
                    <input class="btn btn-danger m-5" type="submit" name="editProduct_submit" value="Cập nhật">
                </div>
            </div>
            <div class="col-md-6 ">
            <img class="my-3" src="../furni-1.0.0/images/<?=$sp['hinhanh']?>" width="400" height="200" alt="">
            </div>
        </div>
        
    </form>
</div>