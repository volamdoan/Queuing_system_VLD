
    <button style="margin-left: 405px;
                    margin-top: 14px;" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <div class="modal-body ">
        <div class="row d-flex justify-content-center align-items-center">
            <h3 class="">Số thứ tự được cấp</h3>
            <h1 style="color: #FF7506;font-size: 70px;">{{$numberNow->number}}{{$numberNow->id}}</h1>
            <h5 class="col-md-12 text-center">DV:{{$numberNow->number_service}}</h5>
        </div>


    </div>
    <div class="modal-footer">
        <div class="row d-flex justify-content-center align-items-center">
            <h5 class="col-md-12 text-center text-white">Thời gian cấp: {{$numberNow->created_at}}</h5>
            <h5 class="col-md-12 text-center text-white">Hạn sử dụng: {{$numberNow->updated_at}}</h5>
        </div>
    </div>