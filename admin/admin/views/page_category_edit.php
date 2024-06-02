<div class="p-3 vh-100">
<form method="post" action=""enctype="multipart/form-data" class="form p-3 ">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <label for="">Tên danh mục</label>
                    <input value="<?=$dm['tendanhmuc']?>" type="text" name="tendanhmuc" class="form-control">
                </div>
                <div>
                    <label for="">Hình ảnh</label>
                    <input  type="file" name="hinhanh" class="form-control">
                </div>  
                <div>
                    <label for="">Trạng thái</label>
                    <select class="form-select" name="tinhtrangdm" >
                    <option value="Đang hoạt động" <?php if($dm['tinhtrangdm']=="Đang hoạt động") echo 'selected'; ?> >Đang hoạt động</option>
                    <option value="Tạm ngưng" <?php if($dm['tinhtrangdm']=="Tạm ngưng") echo 'selected'; ?> >Tạm ngưng</option>
                    </select>
                </div>
                <div class="text-center">
                    <input class="btn btn-danger m-5" type="submit" name="editCategory_submit" value="Cập nhật">
                </div>
            </div>
            <div class="col-md-6 ">
            <img class="my-3" src="../furni-1.0.0/images/<?=$dm['hinhanh']?>" width="400" height="200" alt="">
            </div>
        </div>
        
    </form>
</div>