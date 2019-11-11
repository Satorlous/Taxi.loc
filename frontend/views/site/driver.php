<div class="span-19">


    <div id="content">

        <h1>Добавить водителя</h1>


        <div class="form">

            <form enctype="multipart/form-data" id="driver-form" action="/pruebas/module_e_1/driver/create.php" method="post">
                <p class="note">Поля <span class="required">*</span> обязательны к заполнению.</p>


                <div class="row">
                    <label for="Driver_name" class="required">ФИО <span class="required">*</span></label>        <input size="45" maxlength="45" name="Driver[name]" id="Driver_name" type="text">            </div>

                <div class="row">
                    <label for="Driver_birth_date" class="required">Дата рождения <span class="required">*</span></label>        <input id="Driver_birth_date" name="Driver[birth_date]" type="text" class="hasDatepicker">                    </div>

                <div class="row">
                    <label for="Driver_email" class="required">Email <span class="required">*</span></label>        <input size="50" maxlength="50" name="Driver[email]" id="Driver_email" type="text">            </div>

                <div class="row">
                    <label for="Driver_phone" class="required">Телефон <span class="required">*</span></label>        <input size="40" maxlength="40" name="Driver[phone]" id="Driver_phone" type="text">            </div>

                <div class="row">
                    <label for="Driver_avatar">Фото</label>

                    <input id="ytDriver_avatar" type="hidden" value="" name="Driver[avatar]"><input name="Driver[avatar]" id="Driver_avatar" type="file">            </div>

                <div class="row">
                    <label for="Driver_type_vehicle" class="required">Тип транспорта <span class="required">*</span></label>
                    <select name="Driver[type_vehicle]" id="Driver_type_vehicle">
                        <option value="Tram">Трамвай</option>
                        <option value="Bus">Автобус</option>
                        <option value="Nightliner">Маршрутное такси</option>
                    </select>            </div>

                <div class="row buttons">
                    <input type="submit" name="yt0" value="Сохранить">    </div>

            </form>
        </div><!-- form -->
    </div>
    <!-- content -->



</div>
<div class="span-5 last">
    <div id="sidebar">
        <div class="portlet" >
            <div class="portlet-decoration">
                <div class="portlet-title">Действия</div>
            </div>
            <div class="portlet-content">
                <ul class="operations" >
                    <li><a href="#list">Список водителей</a></li>
                    <li><a href="#manage">Редактировать список</a></li>
                </ul></div>
        </div>
    </div><!-- sidebar -->
</div>