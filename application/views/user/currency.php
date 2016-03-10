<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">

                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/user/home">Административная панель</a></li>
                    <li><i class="fa fa-laptop"></i>Курс валют</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="custom-content-block">
                    <table style="widows: 100%;">
                        <tr>
                            <td style="width: 25%">Текущий курс валют:</td>
                            <td style="width: 25%">1 &#8364 = 29.8965564 &#8372</td>
                            <td style="width: 25%">1 &#8364 = 0,88 $</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="custom-content-block">
                    <span>Флуктуации среднего курса:</span>
                    <br>
                    <br>
                    <table>
                        <tr>
                            <th style="width: 5%">&#8372</th>
                            <th style="width: 5%"></th>
                            <th style="width: 10%">Покупка</th>
                            <th style="width: 10%">Продажа</th>
                            <th style="width: 5%">$</th>
                            <th style="width: 5%"></th>
                            <th style="width: 10%">Покупка</th>
                            <th style="width: 10%">Продажа</th>
                        </tr>
                        <? for($i=0;$i<10;$i++) { ?>
                        <tr>
                            <td>1</td>
                            <td>=</td>
                            <td><?='29.9'.$i?></td>
                            <td><?='28.8'.$i?></td>
                            <td>1</td>
                            <td>=</td>
                            <td><?='0.8'.$i?></td>
                            <td><?='0.7'.$i?></td>
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