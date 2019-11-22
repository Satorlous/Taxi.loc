<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <title>Городская транспортная сеть</title>
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="container" id="page">

    <a href="<?=Url::toRoute('/')?>">
        <div id="header">
            <div id="logo"><!--Городская транспортная сеть--></div>
        </div></a>

    <div id="mainmenu">

        <ul>
            <? $url = Yii::getAlias("@web").'/images'?>
            <li>
                <a href="<?=Url::toRoute('line/index')?>" title="Line"><span class="" style="background-image: url(<?=$url?>/line.png)"></span><!--Маршрут--></a>
            </li>
            <li>
                <a href="<?=Url::toRoute('station/index')?>" title="Station"><span style="background-image: url(<?=$url?>/station.png)"></span><!--Остановка--></a>
            </li>
            <li>
                <a href="<?=Url::toRoute('vehicle/index')?>" title="Vehicle"><span style="background-image: url(<?=$url?>/vehicle.png)"></span><!--Транспорт--></a>
            </li>
            <li>
                <a href="<?=Url::toRoute('driver/index')?>" title="Driver"><span style="background-image: url(<?=$url?>/driver.png)"></span><!--Водитель--></a>
            </li>
            <li>
                <a href="<?=Url::toRoute('site/xml')?>" title="XML-XSD"><span style="background-image: url(<?=$url?>/xml.png)"></span><!--XML Schema--></a>
            </li>
            <li>
                <a href="<?=Url::toRoute('site/user')?>" title="User"><span style="background-image: url(<?=$url?>/user.png)"></span><!--User--></a>
            </li>
        </ul>

        <!-- Login / Logout -->
        <div id='access'>
            <div>
                <?
                if (Yii::$app->user->isGuest) {
                    echo Html::a('Войти', '/site/login');
                } else {
                        echo Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Выйти (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm();
                }
                ?>
            </div>
        </div>
    </div>
    <div style="margin: 15px 10px 0 5px">
        <?=$content?>
    </div>
    <div class="clear"></div>
    <div id="footer">
        <ul>
            <li class="sitemap"><a href="#">Карта сайта</a></li>
            <li class="copyr"><a href="#">Copyright &copy; 2018 ГТС</a></li>
            <li class="allright"><a href="#">Все права сохранены <br>ГТС</a></li>
        </ul>
    </div><!-- footer -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
