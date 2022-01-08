  <!--MODAL DANG KI LAI THU-->
  <div class="modal" id="infoModal">
    <div class="modal-dialog" style="width: 800px !important;">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Đăng kí lái thử</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="pwd">Họ tên:</label>
                <input type="text" class="form-control" placeholder="Nhập họ tên" id="hoten">
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" placeholder="Nhập email" id="email">
              </div>

              <div class="form-group">
                <label for="email">Số điện thoại:</label>
                <input type="text" class="form-control" placeholder="Nhập số điện thoại" id="sdt">
              </div>

              <div class="form-group">
                <label for="mauxe">Mẫu xe:</label>
                <select class="form-control" id="mauxe">
                </select>
              </div>
            </div>

            <div class="col-6">
            <img style="width: 100%;" src="./uploads/laithu.jpg" alt="">
            </div>
          </div>


          <div hidden id="show-error" class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button>
            <p id="msg-error"></p>
          </div>
          <button id="btn-dangkilaithu" type="button" class="btn btn-primary">Đăng kí lái thử</button>
        </div>

      </div>
    </div>
  </div>