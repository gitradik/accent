<style>
    <?= include 'first-scroll.css'; ?>
</style>
<div class="position-relative">
<div class="first-scroll"
     style="background-image: url('<?= get_template_directory_uri(); ?>/images/photo_2019-08-05_09-16-33.jpg')"
>
    <div class="bg"></div>
    <div class="container-fluid ct">
        <div class="row justify-content-md-start">
            <div class="col-md-12 col-xl-5 pl-xl-5">
                <div class="t ml-xl-5 text-left">
                    <h1>Тренинг <span>"Акцент"</span> -<br> трехдневный тренинг в закрытом формате изменит твое мышление!</h1>
                </div>
            </div>
            <div class="col-md-12 pt-4 pr-md-5 d-flex justify-content-center justify-content-md-end">
                <div class="t-name mr-md-5">
                    <div class="d-flex">
                        <h4> <span>НИКОЛАЙ</span>  <br> САПСАН</h4>
                        <h5> Основатель тренинговой компании OVITTA,<br>

                            бизнес-тренер компании, коуч</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-md-5 mb-md-5 pt-md-5 pb-md-5 d-flex flex-column align-items-center justify-content-center">
                <div class="t t-sub pb-3 pb-lg-5">
                    <h3>23-25 августа, КИЕВ стартуем!<br>
                        Осталось <span>7 свободных мест</span>, <br> успей записаться!
                    </h3>
                    <p class="m-0"></p>
                </div>
                <div class="order">
                    <img class="left-arrow" src="<?= get_template_directory_uri();?>/images/upward-arrow.svg">
                    <button data-toggle="modal" data-target="#formModal"
                            onclick="onClickFormModal('Записаться на интенсив', 'formModalLongTitle', 'Акцент => Первый скролл => интенсив', 'formModalLocationId')">Записаться</button>
                </div>
            </div>
            <div class="col-md-6 mt-md-5 mb-md-5 pt-md-5 pb-md-5 d-flex flex-column align-items-center justify-content-center">
                <div class="t t-sub pb-3 pb-lg-5">
                    <h3>Запишись на <span>БЕСПЛАТНЫЙ</span> промо <br> вебинар и Николай ответит <br> на все Ваши вопросы</h3>
                </div>
                <div class="order">
                    <img class="right-arrow" src="<?= get_template_directory_uri();?>/images/undo-arrow.svg">
                    <button data-toggle="modal" data-target="#formModal"
                            onclick="onClickFormModal('Записаться на бесплатный промо вебинар', 'formModalLongTitle', 'Акцент => Первый скролл => бесплатный промо вебинар', 'formModalLocationId')">Записаться</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
