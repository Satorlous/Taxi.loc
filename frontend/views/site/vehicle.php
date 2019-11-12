<div class="row">
    <div class="col-9">
        <div id="content">

            <h1>Добавить транспортное средство</h1>


            <div class="form">

                <form id="vehicle-form" action="/pruebas/module_e_1/vehicle/create.php" method="post">
                    <p class="note">Поля <span class="required">*</span> обязательны к заполнению.</p>


                    <div class="row">
                        <label for="Vehicle_name" class="required">Название <span class="required">*</span></label>		<input size="30" maxlength="30" name="Vehicle[name]" id="Vehicle_name" type="text">			</div>

                    <div class="row">
                        <label for="Vehicle_capacity" class="required">Вместимость <span class="required">*</span></label>		<input name="Vehicle[capacity]" id="Vehicle_capacity" type="text">			</div>

                    <div class="row">
                        <label for="Vehicle_type">Тип</label>
                        <select name="Line[type]" id="Line_type">
                            <option value="Tram">Трамвай</option>
                            <option value="Bus">Автобус</option>
                            <option value="Nightliner">Маршрутное такси</option>
                        </select>            </div>

                    <div class="row buttons">
                        <input type="submit" name="yt0" value="Сохранить">	</div>

                </form>
            </div><!-- form -->	</div>
        <!-- content -->



    </div>
    <div class="col-3">
        <div id="sidebar">
            <div class="portlet" >
                <div class="portlet-decoration">
                    <div class="portlet-title">Редактирование</div>
                </div>
                <div class="portlet-content">
                    <ul class="operations" >
                        <li><a href="#list">Список транспортных средств</a></li>
                        <li><a href="#manage">Управлять списком</a></li>
                    </ul></div>
            </div>	</div><!-- sidebar -->
    </div>
</div>