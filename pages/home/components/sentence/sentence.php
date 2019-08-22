<style>
    <?= include 'sentence.css'; ?>
</style>

<div class="sentence position-relative"
     >
    <div class="container position-relative" style="z-index: 1">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="t">
                <h3 style="color: white">«<span>Акцент</span> : Как превзойти ограничения<br> и разблокировать внутреннюю силу»</h3>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center align-items-end">
                <div class="sen-speaker-img">
                    <img src="<?= get_template_directory_uri(); ?>/images/trainer.png" alt="trainer">
                </div>
            </div>
            <div class="col-lg-8 pt-3 pt-lg-0 d-flex flex-column justify-content-end">
                <div class="t mb-3">
                    <p class="mb-5 mb-lg-2 pt-lg-0"><span>Специальное предложение</span> от Николая</p>
                    <div class="t-bg">
                        <p>Оплати до 19 августа<br> и получи в подарок 100 $</p>
                    </div>
                </div>
                <div class="order pb-3">
                    <button data-toggle="modal" data-target="#formModal"
                            onclick="onClickFormModal('Специальное предложение от Николая', 'formModalLongTitle',
                            '«Акцент: Как превзойти ограничения и разблокировать внутреннюю силу»', 'formModalLocationId')">
                        Получить
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>