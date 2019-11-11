<div class="span-19">
    <div id="content">

        <h1>Добавить остановочный пункт</h1>


        <div class="form">

            <form id="station-form" action="/pruebas/module_e_1/station/create.php" method="post">
                <p class="note">Поля <span class="required">*</span> обязательны к заполнению.</p>


                <div class="row">
                    <label for="Station_name" class="required">Название <span class="required">*</span></label>		<input size="60" maxlength="80" name="Station[name]" id="Station_name" type="text">			</div>

                <div class="row buttons">
                    <input type="submit" name="yt0" value="Сохранить">	</div>

            </form>
        </div><!-- form -->	</div>

    <!-- content -->



</div>
<div class="span-5 last">
    <div id="sidebar">
        <div class="portlet" >
            <div class="portlet-decoration">
                <div class="portlet-title">Редактирование</div>
            </div>
            <div class="portlet-content">
                <ul class="operations" >
                    <li><a href="#list">Список остановочных пунктов</a></li>
                    <li><a href="#manage">Управлять остановочными пунктами</a></li>
                </ul></div>
        </div>	</div><!-- sidebar -->
</div>