<div class="span-19">
    <div id="content">

        <h1>Добавить пользователя</h1>


        <div class="form">

            <form id="user-form" action="/pruebas/module_e_1/user/create.php" method="post">
                <p class="note">Поля <span class="required">*</span> обязательны к заполнению.</p>


                <div class="row">
                    <label for="User_name" class="required">Имя <span class="required">*</span></label>
                    <input size="50" maxlength="50" name="User[name]" id="User_name" type="text">
                </div>

                <div class="row">
                    <label for="User_gender" class="required">Gender <span class="required">*</span></label>
                    <select name="Driver[type_vehicle]" id="Driver_type_vehicle">
                        <option value="">Male</option>
                        <option value="">Female</option>
                    </select>


                </div>


                <div class="row">
                    <label for="User_birth_date" class="required">Дата рождения <span class="required">*</span></label>
                    <input id="User_birth_date" name="User[birth_date]" type="text" class="hasDatepicker">
                </div>

                <div class="row">
                    <label for="User_email" class="required">Email <span class="required">*</span></label>
                    <input size="50" maxlength="50" name="User[email]" id="User_email" type="text">
                </div>

                <div class="row">
                    <label for="User_login" class="required">Логин <span class="required">*</span></label>
                    <input size="40" maxlength="40" name="User[login]" id="User_login" type="text">
                </div>

                <div class="row">
                    <label for="User_password" class="required">Пароль <span class="required">*</span></label>
                    <input size="50" maxlength="50" name="User[password]" id="User_password" type="password">
                </div>

                <div class="row buttons">
                    <input type="submit" name="yt0" value="Сохранить">    </div>

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
                    <li><a href="#list">Список пользователей</a></li>
                    <li><a href="#manage">Управлять списком</a></li>
                </ul></div>
        </div>	</div><!-- sidebar -->
</div>