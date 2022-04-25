<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
<div class='dashboard-app'>
        <div class='dashboard-content'>
            <div class='container'>
                <div class='card1'>
                    <div class='card-header'>
                        <h1>Контактная информация</h1>
                    </div>
                    <div class='card-body'>
                        <h5 align="center"> Юридический адрес: Иркутская область,<br>
                            664005, г.Иркутск, ул.Гоголя, 33<br>
                            тел. 8 (3952) 48-69-82, факс 8 (3952) 48-69-83<br>
                            E-mail: 3dmsh@mail.ru<br>
                        </h5>
                        <h2 align="center">Как нас найти?</h2>
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8cc3cba1350840b50cc6ce853e99158214e66dfe964da45c4bba39d2b17f7911&amp;width=100%&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card1 {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #7751193a;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0);
    border-radius: 0;
}
</style>
</div>
