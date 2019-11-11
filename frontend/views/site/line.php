<div class="span-19">


    <div id="content">

        <h1>Добавить маршрут</h1>


        <div class="form">

            <form enctype="multipart/form-data" id="line-form" action="/pruebas/module_e_1/line/create.php" method="post">
                <p class="note">Поля <span class="required">*</span> обязательны к заполнению.</p>


                <div class="row">
                    <label for="Line_name" class="required">Название <span class="required">*</span></label>        <input size="50" maxlength="50" name="Line[name]" id="Line_name" type="text">            </div>

                <div class="row">
                    <label for="Line_start_time_operation" class="required">Начало работы <span class="required">*</span></label>

                    <select name="Line[start_time_operation]" id="start_time_operation">
                        <option value="">00:00:00</option>
                        <option value="">01:00:00</option>
                        <option value="">02:00:00</option>
                        <option value="">03:00:00</option>
                        <option value="">04:00:00</option>
                        <option value="">05:00:00</option>
                        <option value="">06:00:00</option>
                        <option value="">07:00:00</option>
                        <option value="">08:00:00</option>
                        <option value="">09:00:00</option>
                        <option value="">10:00:00</option>
                        <option value="">11:00:00</option>
                        <option value="">12:00:00</option>
                        <option value="">13:00:00</option>
                        <option value="">14:00:00</option>
                        <option value="">15:00:00</option>
                        <option value="">16:00:00</option>
                        <option value="">17:00:00</option>
                        <option value="">18:00:00</option>
                        <option value="">19:00:00</option>
                        <option value="">20:00:00</option>
                        <option value="">21:00:00</option>
                        <option value="">22:00:00</option>
                        <option value="">23:00:00</option>
                    </select>

                </div>

                <div class="row">
                    <label for="Line_end_time_operation" class="required">Окончание работы <span class="required">*</span></label>
                    <select name="Line[end_time_operation]" id="end_time_operation">
                        <option value="">00:00:00</option>
                        <option value="">01:00:00</option>
                        <option value="">02:00:00</option>
                        <option value="">03:00:00</option>
                        <option value="">04:00:00</option>
                        <option value="">05:00:00</option>
                        <option value="">06:00:00</option>
                        <option value="">07:00:00</option>
                        <option value="">08:00:00</option>
                        <option value="">09:00:00</option>
                        <option value="">10:00:00</option>
                        <option value="">11:00:00</option>
                        <option value="">12:00:00</option>
                        <option value="">13:00:00</option>
                        <option value="">14:00:00</option>
                        <option value="">15:00:00</option>
                        <option value="">16:00:00</option>
                        <option value="">17:00:00</option>
                        <option value="">18:00:00</option>
                        <option value="">19:00:00</option>
                        <option value="">20:00:00</option>
                        <option value="">21:00:00</option>
                        <option value="">22:00:00</option>
                        <option value="">23:00:00</option>
                    </select>
                </div>

                <div class="row">
                    <label for="Driver_type_vehicle" class="required">Тип транспорта <span class="required">*</span></label>                <select name="Driver[type_vehicle]" id="Driver_type_vehicle">
                        <option value="Tram">Трамвай</option>
                        <option value="Bus">Автобус</option>
                        <option value="Nightliner">Маршрутное такси</option>
                    </select>            </div>

                <div class="row">
                    <label for="Line_map" class="required">Map <span class="required">*</span></label>
                    <input id="ytLine_map" type="hidden" value="" name="Line[map]"><input name="Line[map]" id="Line_map" type="file">            </div>

                <div class="row buttons">
                    <input type="submit" name="yt0" value="Сохранить">    </div>

            </form>
        </div><!-- form -->	</div><!-- content -->



</div>
<div class="span-5 last">
    <div id="sidebar">
        <div class="portlet" >
            <div class="portlet-decoration">
                <div class="portlet-title">Редактирование</div>
            </div>
            <div class="portlet-content">
                <ul class="operations" >
                    <li><a href="#list">Список маршрутов</a></li>
                    <li><a href="#manage">Управлять маршрутами</a></li>
                </ul></div>
        </div>	</div><!-- sidebar -->
</div>