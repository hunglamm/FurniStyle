<div class="p-3 vh-100">
    <form method="post" action="" enctype="multipart/form-data" class="form p-3">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="tensanpham" class="form-control">
                </div>
                <div>
                    <label for="">Danh mục</label>
                    <select class="form-select" name="madanhmuc" id="">
                        <option value="1">Ghế sopha</option>
                        <option value="2">Ghế gỗ</option>
                        <option value="3">Bàn Tròn</option>
                        <option value="4">Bàn Vuông</option>
                    </select>
                </div>
                <div>
                    <label for="">Hình ảnh</label>
                    <input type="file" name="anhsanpham" class="form-control">
                </div>  
                <div>
                    <label for="">Giá</label>
                    <input type="text" name="gia" class="form-control">
                </div>
                <div>
                    <label for="">Chi tiết</label>
                    <input type="text" name="chitiet" class="form-control">
                </div>
                <div>
                    <label for="">Số lượng</label><br>
                    <input type="number" name="soluong" value="0" class="form-control">
                </div>
                <div>
                    <label for="">Trạng thái</label>
                    <select class="form-select" name="tinhtrang" id="">
                        <option value="Đang hoạt động">Đang hoạt động</option>
                        <option value="Tạm ngưng">Tạm ngưng</option>
                    </select>
                </div>
                
                <div class="text-center">
                    <input class="btn btn-danger m-5" type="submit" name="addProduct_submit" value="Thêm sản phẩm">
            </div>
            <div class="col-md-6 ">
            </div>
        </div>
        
    </form>
</div>