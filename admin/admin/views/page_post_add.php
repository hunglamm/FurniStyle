<div class="p-3 vh-100">
    <form method="post" action="" enctype="multipart/form-data" class="form p-3">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <label for="">Tên bài viết</label>
                    <input type="text" name="tenbaiviet" class="form-control">
                </div>
                <div>
                    <label for="">Hình ảnh bài viết</label>
                    <input type="file" name="hinhanhbv" class="form-control">
                </div>  
                <div>
                    <label for="">Nội dung bài viết</label>
                    <input type="text" name="noidungbaiviet" class="form-control">
                </div>
                <div>
                    <label for="">Tác giả</label>
                    <input type="text" name="tacgia" class="form-control">
                </div>
                <div>
                    <label for="">Ngày đăng</label><br>
                    <input type="date" name="ngaydang" class="form-control">
                </div>
                <div class="text-center">
                    <input class="btn btn-danger m-5" type="submit" name="addPost_submit" value="Thêm bài viết">
            </div>
            <div class="col-md-6 ">
            </div>
        </div>
        
    </form>
</div>