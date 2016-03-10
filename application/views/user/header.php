<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">


    <?php echo link_tag('bootstrap/css/bootstrap.min.css'); ?>
    <?php echo link_tag('bootstrap/css/bootstrap-theme.css'); ?>
    <?php echo link_tag('bootstrap/css/elegant-icons-style.css'); ?>
    <?php echo link_tag('bootstrap/css/font-awesome.min.css'); ?>
    <?php echo link_tag('bootstrap/css/owl.carousel.css'); ?>
    <?php echo link_tag('bootstrap/css/fullcalendar.css'); ?>
    <?php echo link_tag('bootstrap/css/widgets.css'); ?>
    <?php echo link_tag('bootstrap/css/style-responsive.css'); ?>
    <?php echo link_tag('bootstrap/css/xcharts.min.css'); ?>
    <?php echo link_tag('bootstrap/css/jquery-ui-1.10.4.min.css'); ?>
    <?php echo link_tag('bootstrap/css/jquery-jvectormap-1.2.2.css'); ?>
    <?php echo link_tag('bootstrap/css/style.css'); ?>
    <?php echo link_tag('css/custom-css.css'); ?>

</head>

<body>
<!-- container section start -->
<section id="container" class="">


    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom">Вы зашли как: Пользователь</div>

        </div>
        <div class="toggle-nav"style="float:right;">
            <a class="btn btn-primary"> Сделать заказ</a>
        </div>
        <div class="toggle-nav"style="float:right;">
            <div class="cart">
                    <i class="icon_tags"></i>
                    <span id="cart-counter" style="font-size: 14pt"> Товаров в корзине:</span>
            </div>
        </div>


    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="sub-menu <?=($active=="home")? 'active' : ''?>">
                    <a class="" href="/user/home">
                        <i class="icon_house_alt"></i>
                        <span>Каталоги</span>
                    </a>
                </li>
                <? if($_SESSION['access'] == 1){?>
                    <li class="sub-menu <?=($active=="users")? 'active' : ''?>">
                        <a href="/user/users" class="">
                            <i class="icon_group"></i>
                            <span>Пользователи</span>
                        </a>
                    </li>
                <? } ?>
                <li class="sub-menu <?=($active=="currency")? 'active' : ''?>">
                    <a href="/user/currency" class="">
                        <i class="glyphicon glyphicon-briefcase"></i>
                        <span>Курс валют</span>
                    </a>
                </li>
                <li class="sub-menu <?=($active=="ohistory")? 'active' : ''?>">
                    <a href="/user/ohistory" class="">
                        <i class="icon_hourglass"></i>
                        <span>Утв. заказы</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="/user/logout" class="">
                        <i class="icon_lock_alt"></i>
                        <span>Выход</span>
                    </a>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->