<style>
    <?= include "form-modal.css"; ?>
</style>

<!-- Modal -->
<div class="modal fade form-modal" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form class="telegram" method="POST">
                    <div class="t">
                        <p>Оставьте свои контактные<br> данные для обратной связи</p>
                    </div>

                    <input type="hidden" name="tag_id" value="5d5d15fbb4173a000db5a4e0">
                    <input type="hidden" name="location" id="formModalLocationId">
                    <input placeholder="Ваше Имя" name="name" type="text" required>
                    <input placeholder="Ваш Email" name="email" type="email" required>
                    <input class="input-mask-s" placeholder="Ваш Телефон" name="phone" type="tel" required>
                    <div class="order">

                        <p class="mb-4">Выберите мессанджер:</p>

                        <div class="d-flex justify-content-center align-items-center">
                            <label onclick="onClickRadio('facebook')" class="container-radio"><img src="<?= get_template_directory_uri(); ?>/images/facebook.png" alt="facebook">
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label onclick="onClickRadio('telegram')" class="container-radio"><img src="<?= get_template_directory_uri(); ?>/images/telegram.png" alt="telegram">
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label onclick="onClickRadio('viber')" class="container-radio"><img src="<?= get_template_directory_uri(); ?>/images/viber.png" alt="viber">
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <a target="_blank" id="messangerId" href="https://m.me/1666774366666672?ref=nlS4luPur00gNRXs_" hidden></a>
                        <button>Отправить</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


