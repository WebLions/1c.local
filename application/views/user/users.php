<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/user/home">Административная панель</a></li>
                    <li><i class="fa fa-laptop"></i>Пользователи</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="custom-form-block">
                    <table style="width: 100%;" class="table table-condensed">
                        <tr>
                            <th style = "width: 25%">ФИО</th>
                            <th style = "width: 15%;text-align:center;">E-mail</th>
                            <th style = "width: 20%;text-align:center;">Дата регистраци</th>
                            <th style = "width: 10%">Действия</th>
                        </tr>
                            <tr>
                                <td style = "width: 25%"></td>
                                <td style = "width: 15%;text-align:center;"></td>
                                <td style = "width: 20%;text-align:center;"></td>
                                <td style = "width: 10%">
                                    <div class="btn-group">
                                        <a class="custom-btn btn-success"><i class="icon_cog"></i></a>
                                        <a class="custom-btn btn-danger"><i class="icon_trash_alt"></i></a>
                                    </div>
                                </td>
                            </tr>
                    </table>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Добавить пользователя</button>
                <div id="myModalAddUser" class="modal fade" role="dialog">
                </div>
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Добавление пользователя</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form" id="addform">
                                    <div class="form-group">
                                        <label for="name">ФИО</label>
                                        <input name="name" type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="contact">E-mail</label>
                                        <input name="contact" class="form-control" id="contact">
                                    </div>
                                    <button type="submit" class="btn btn-default adduser">Добавить</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


</section>
</section>

</section>