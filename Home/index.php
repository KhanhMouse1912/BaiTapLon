<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phát triển phần mềm hướng dịch vụ</title>
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
    <div id="home">
        <!-- Start: Header -->
        <div class="header" id="header">
            <div class="wrapper p-3 d-flex align-items-center">
                <div class="logo mr-auto">
                    <div class="name">ĐKT</div>
                </div>
                <div class="ml-auto d-flex align-items-center justify-content-end">
                    <div class="notifications--newest pr-3 position-relative">
                        <div class="position-relative">
                            <span class="bell"><i class="fa fa-bell" aria-hidden="true"></i></span>
                            <span class="position-absolute number--notification">3</span>
                        </div>
                        <div class="position-absolute detail--notification">
                            <div class="list--noti-newest">
                                <div class="items p-3">
                                    <ul>
                                        <li>
                                            <span>Chuẩn bị hẹn</span>
                                            <span class="px-1"><b>Anh</b></span>
                                            <span class="name">Nguyen Cong Khanh</span>
                                        </li>
                                        <li>
                                            <span class="time">Vào 10:10</span>
                                            <span class="day"> - 01/01/2018</span>
                                        </li>
                                        <li>
                                            <span class="local">Tại: Số nhà 11, Đường Xuân Phương, Nam Từ Liêm, Hà Nội</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="items p-3">
                                    <ul>
                                        <li>
                                            <span>Chuẩn bị hẹn</span>
                                            <span class="px-1"><b>Chu</b></span>
                                            <span class="name">Nguyen Cong Khanh</span>
                                        </li>
                                        <li>
                                            <span class="time">Vào 10:10</span>
                                            <span class="day"> - 01/01/2018</span>
                                        </li>
                                        <li>
                                            <span class="local">Tại: Số nhà 11, Đường Xuân Phương, Nam Từ Liêm, Hà Nội</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="items p-3">
                                    <ul>
                                        <li>
                                            <span>Chuẩn bị hẹn</span>
                                            <span class="px-1"><b>Chu</b></span>
                                            <span class="name">Nguyen Cong Khanh</span>
                                        </li>
                                        <li>
                                            <span class="time">Vào 10:10</span>
                                            <span class="day"> - 01/01/2018</span>
                                        </li>
                                        <li>
                                            <span class="local">Tại: Số nhà 11, Đường Xuân Phương, Nam Từ Liêm, Hà Nội</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="view--more py-2 text-center">Xem chi tiết</div>
                        </div>
                    </div>
                    <div class="info--user position-relative ml-auto">
                        <div class="info d-flex align-items-center">
                            <div class="avt"></div>
                            <div class="name px-2">Nguyễn Công Khanh</div>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                        <!-- Start: More info when click avt -->
                        <div class="more--info p-3 position-absolute">
                            <div class="d-flex align-items-center pb-3">
                                <div>
                                    <div class="pb-1 name">Nguyễn Công Khanh</div>
                                    <div class="pb-1 mail">congkhanh98.hp@gmail.com</div>
                                    <div class="pb-1 phone">Số điện thoại: 095096144</div>
                                </div>
                                <div class="avt ml-auto"></div>
                            </div>
                            <div class="log--out text-right pt-2">Đăng xuất</div>
                        </div>
                        <!-- End: More info when click avt -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Header -->
        <!-- Start: Main -->
        <div class="main" id="main">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'relationship')" id="defaultOpen">
                    <i class="fa fa-handshake-o" aria-hidden="true"></i><span class="pl-2">Mối quan hệ</span></button>
                <button class="tablinks" onclick="openCity(event, 'notification')"><i class="fa fa-bell"
                        aria-hidden="true"></i><span class="pl-2">Thông báo</span></button>
                <button class="tablinks" onclick="openCity(event, 'search')"><i class="fa fa-search"
                        aria-hidden="true"></i><span class="pl-2">Tìm kiếm</span></button>
            </div>
            <div id="relationship" class="tabcontent">
                <?php 
                    include $_SERVER['DOCUMENT_ROOT']."/Class/BaiTapLon/Relationship/index.php";
                ?>
            </div>

            <div id="notification" class="tabcontent">
                <?php 
                    include $_SERVER['DOCUMENT_ROOT']."/Class/BaiTapLon/Notification/index.php";
                ?>
            </div>

            <div id="search" class="tabcontent">
                <?php 
                    include $_SERVER['DOCUMENT_ROOT']."/Class/BaiTapLon/Search/index.php";
                ?>
            </div>
        </div>
        <!-- End: Main -->
        <!-- Start: Footer -->
        <div class="footer" id="footer">
        </div>
        <!-- End: Footer -->
    </div>


    <!-- link font awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- script jq -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- link js bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <!-- link js main -->
    <script src="index.script.js"></script>
</body>

</html>