<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hướng dịch vụ - Mối quan hệ</title>
    <!-- link font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <!-- link bootstrap 4 - css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- link style main -->
    <link rel="stylesheet" type="text/css" href="./index.style.css">
</head>

<body>
    <div class="relationship" id="relationship">
        <!-- Start: Header -->
        <div class="header mt-3">
            <div class="d-flex align-items-center">
                <button id="create--relationship" class="create--relationship p-2">Tạo mối quan hệ</button>
            </div>
        </div>
        <!-- End: Header -->
        <!-- Start: Main -->
        <div class="main mt-3" id="main">
            <div class="wrapper">
                <div class="list--rela row m-0">
                    <div class="items col-lg-6">
                        <div class="content--list--rela p-3 d-flex align-items-center position-relative">
                            <div class="avt--relationship pr-3 mr-3">
                                <img src="../Authorization/images/girl.jpg" height="100px" width="100px" alt="">
                            </div>
                            <div class="info--rela position-relative">
                                <p class="mb-1"><b>Anh</b> Vi Quy Duc <span class="phone"> - 0914667941</span></p>
                                <p class="mb-1">Thời gian gặp: 10:10 - 01/01/2018</p>
                                <p class="mb-1">Địa điểm: Số nhà 11, Xã ABC, Huyện XYZ, TP. Hà Nội</p>
                                <p class="mb-1">Thông tin khác: Cuộc gặp định mệnh</p>
                            </div>
                            <div class="position-absolute dots dots--options">
                                <div class="position-relative">
                                    <div class="show--actions"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></div>
                                    <div class="actions--rela position-absolute">
                                        <p class="mb-0">Xem chi tiết</p>
                                        <p class="mb-0">Sửa</p>
                                        <p class="mb-0">Xóa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Main -->
        <!-- Start: Footer -->
        <div class="footer" id="footer"></div>
        <!-- End: Footer -->

        <!-- Popup Create Relationships -->
        <div class="modal--wrapper">
            <div class="modal--dialog d-flex justify-content-center align-items-center">
                <div class="modal--content px-3 py-4">
                    <div class="modal--header">
                        <div class="title">Tạo mối quan hệ</div>
                    </div>
                    <div class="modal--body my-3">
                        <form action="" name="" methods="">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Loại quan hệ</label>
                                <div class="position-relative">
                                    <select name="" id="" class="options--choose-rela">
                                        <option value="1">Anh</option>
                                        <option value="1">Em</option>
                                        <option value="1">Thầy</option>
                                        <option value="1">Chú</option>
                                    </select>
                                    <!-- <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" style="width:90%" placeholder="Nhập loại quan hệ"> -->
                                    <div class="plus position-absolute" style="top: 5px; right: 1rem; cursor: pointer">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Nhập tên">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ảnh</label>
                                <input type="file" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số điện thoại</label>
                                <input type="nmber" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Nhập số điện thoại">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Địa chỉ</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Nhập địa chỉ">
                            </div>
                            <div class="form-group d-flex align-items-center">
                                <label>Thời gian gặp</label>
                                <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
                                    <input class="form-control" type="text" readonly />
                                    <span class="input-group-addon" style="height: 34px; width: 39px; line-height: 34px; padding: 0;"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ghi chú</label>
                                <textarea type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Thông tin khác"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal--footer d-flex justify-content-between align-items-center">
                        <button class="btn--skip">HỦY</button>
                        <button class="btn--submit">TẠO</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- link font awesome -->
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
    <!-- script jq -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <!-- link js bootstrap -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script> -->

    <!-- link js main -->
    <!-- <script src="index.script.js"></script> -->
</body>

</html>