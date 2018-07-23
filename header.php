<!DOCTYPE html>
<html>
<head>
    <title>newthemewp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--trình duyệt hiển thị tương ứng với kích thước của màn hình-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory") ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory") ?>/css/style.css">
    <?php wp_head(); ?>
    <script src="<?php bloginfo("template_directory") ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php bloginfo("template_directory") ?>/js/bootstrap.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            
    $('#header a').click(function(){//tạo sự kiện cho các thẻ a nằm trong ID header
        $('.current').removeClass("current");//loại bỏ tất cả class current
        var posClick = $(this).attr('href');//lấy giá trị trong thuộc tính href,gắn vào posClick. posClick sẽ có dạng #xxxxx
        var pos = $(posClick).position().top;//lấy khoảng cách từ id #xxxxx tới đầu trang gắn vào pos
        $("[href='"+posClick+"']").addClass("current");//thêm class current vào thẻ có href bằng giá trị trong posClick
        $('html, body').animate({
            scrollTop:pos+20//lăn tới vị trí cách đầu trang 1 khoảng pos + 20 so với đầu trang
        },1500);
    });
});

        //scroll page với thanh cuộn:
$(window).scroll(function(){
    var posA = $(window).scrollTop();//lấy vị trí hiện tại tính từ đầu trang tới thanh cuộn
    $('#wrapper').find('.wrap-inner').each(function(){//tìm các class wrap-inner trong id wrapper
    var posB = $(this).position().top;//lấy ra vị trí theo chiều dọc của mỗi class wrap-inner
    if(posB < posA){//khi cuộn tới vị trí B nhỏ hơn vị trí A
        $('.current').removeClass("current");//xóa hết các class current
        var pos = $(this).attr('id');//lấy id của vị trí hiện tại
        $("[href='#"+pos+"']").addClass("current");//thẻ a nào có href giống với id hiện tại thì thêm vào class current
        }
    });
});
    </script>
</head>
</head>
<body>
    <div id="wrapper" class="container container-max">
        <header id="header" class="wrap-inner">
            <div class="row header-top">
                <div class="col-xs-3 col-sm-3 col-md-3 logo">
                    <h1><a href="<?php bloginfo("url"); ?>"><img src="<?php bloginfo("template_directory") ?>/img/logo.png"></a></h1>
                </div>
                <nav class="col-xs-9 col-sm-9 col-md-9 navbar navbar-default header-menu" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse collapse-li" id="collapse">
                       
                      <?php wp_nav_menu(
                        array(
                            "theme_location" => "topmenu",
                            "container" => "false",
                            "menu_id" => "top-menu",
                            "menu_class" => "top-menu",
                        )
                       ) ; ?>
                      
                    </div>
                </nav>
            </div>
            <div class="row header-title">
                <div class="title col-xs-12">
                    <span class="light white">WE BUILD</span>
                    <span class="bold white">BRAND</span>
                    <p class="regular white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <button class="button btn white">LEARN MORE</button>
                    <p><a href="#"><img src="<?php bloginfo("template_directory") ?>/img/btn.png"></a></p>
                </div>
            </div>
        </header>