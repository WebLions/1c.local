<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">

                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/user/home">Административная панель</a></li>
                    <li><i class="fa fa-laptop"></i>Утвержденные заказы</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="custom-content-block">
                    <span>Список ожидающих утверждения заказов:</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="custom-content-block">
                    <table>
                        <tr>
                            <th style="width: 15%">Номер заказа</th>
                            <th style="width: 10%">Кол-во товаров</th>
                            <th style="width: 20%">Итоговая стоимость</th>
                            <th style="width: 15%">Действия</th>
                        </tr>
                        <? for($i=0;$i<10;$i++) { ?>
                        <tr>
                            <td><?='1000'.$i?></td>
                            <td><?='2'.$i?></td>
                            <td><?='4'.$i.'00'?></td>
                            <td style = "width: 15%">
                                <div class="btn-group">
                                    <a class="custom-btn btn-success"><i class="icon_cog"></i></a>
                                    <a class="custom-btn btn-danger"><i class="icon_trash_alt"></i></a>
                                    <a class="custom-btn btn-primary add-to-cart"><i class="icon_check"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?}?>
                    </table>
                </div>
            </div>
        </div>




    </section>
</section>
<!--main content end-->
</section>