<form>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
        <input type="text" class="form-control" placeholder="Введите почту пользователя" aria-describedby="basic-addon1">
    </div>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" placeholder="Введите логин пользователя" aria-describedby="basic-addon1">
    </div>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-tower"></i></span>
        <input type="text" class="form-control" placeholder="Введите пароль пользователя" aria-describedby="basic-addon1">
    </div>

    <div style="text-align: center;">
        <button class="custom-btn btn-success" style="text-align: center;">Зарегистрировать</button>
    </div>

</form>

<? if($_SESSION['access'] == 1){?>
    <li class="sub-menu <?=($active=="users")? 'active' : ''?>">
        <a href="/user/users" class="">
            <i class="icon_group"></i>
            <span>Пользователи</span>
        </a>
    </li>
<? } ?>