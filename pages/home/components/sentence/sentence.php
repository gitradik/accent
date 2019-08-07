<style>
    <?= include 'sentence.css'; ?>
</style>

<div class="sentence" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="t">
                    <h3>«Акцент: Как превзойти ограничения и разблокировать внутреннюю силу»</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sen-speaker-img">
                    <img src="<?= get_template_directory_uri(); ?>/images/trainer-white.png" alt="trainer">
                </div>
            </div>
            <div class="col-md-7 d-flex flex-column justify-content-end">
                <div class="t mb-3">
                    <p>Специальное предложение от Николая оплати до 19 августа и получи в подарок 100 $</p>
                </div>
                <div class="order pb-3">
                    <button data-toggle="modal" data-target="#formModal"
                            onclick="onClickFormModal('Специальное предложение от Николая', 'formModalLongTitle')">Подробнее</button>
                </div>
            </div>
        </div>
    </div>
</div>