<?php

if ($_REQUEST) {
    print_r($_REQUEST);



    echo "Спасибо за информацию";
    exit;
}
?>


<form name="profile" method="post" >
    <div><label for="name">ФИО</label><input type="text" aria-invalid="false"/></div>
    <div><label for="position">Должность</label><input readonly="readonly" type="text" aria-invalid="false"/></div>
    <div>
        <button tabindex="-1" type="button" aria-hidden="true"></button>
        <div><input size="11" type="text" placeholder="Выполнить до" aria-label="Выполнить до" aria-haspopup="true"/>
            <button type="button" aria-label="Open calendar"></button>
        </div>
    </div>
    <div><label for="homePhone">Домашний телефон</label><input name="homePhone" type="text" aria-invalid="false"/></div>
    <div><label for="mobilePhone">Мобильный телефон</label><input name="mobilePhone" readonly="readonly" type="text" aria-invalid="false"/></div>
    <div><label for="innerPhone">Внутренний телефон</label><input name="innerPhone" type="tel" aria-invalid="false"/></div>
    <div><label for="email">Емеил</label><input type="email" aria-invalid="false"/></div>
    <div><label for="workEmail">Корпоративный емеил</label><input disabled="disabled" type="email" aria-invalid="false"/></div>
    <div><label for="adress">Адрес</label><input type="text" aria-invalid="false"/></div>
    <div><label for="{{itemLink.name}}">facebook</label><input name="facebook" type="text" aria-invalid="false"/><label for="{{itemLink.name}}">linkedin</label><input
                name="linkedin" type="text" aria-invalid="false"/></div>
    <div>
        <div>
            <button name="action" type="submit">ОБНОВИТЬ ДАННЫЕ</button>
        </div>
    </div>
</form>
