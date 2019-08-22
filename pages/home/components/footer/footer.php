<style>
    <?= include "footer.css"; ?>
</style>

<footer id="footerId">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 d-flex flex-column align-items-center justify-content-center">
                <img src="<?= get_template_directory_uri(); ?>/pages/home/components/navbar/ovitta-logo-white.png" alt="ovitta-logo-white">
                <a href="tel:+380673518218">Tel.: +38 067 351-82-18 </a>
                <a href="mailto: office@ovitta.com.ua">E-mail: office@ovitta.com.ua</a>
                <div class="t">
                    <p>© OVITTA Training Company</p>
                </div>
            </div>
            <div class="col-md-6">
                <form class="telegram" method="POST">
                    <div class="t">
                        <h4>Остались вопросы?</h4>
                    </div>
                    <input type="hidden" name="tag_id" value="5d5d15fbb4173a000db5a4e0">
                    <input type="hidden" name="location" value="Aкцент => Футер">
                    <input placeholder="Ваше Имя" name="name" type="text" required>
                    <input placeholder="Ваш Email" name="email" type="email" required>
                    <input class="input-mask-s" placeholder="Ваш Телефон" name="phone" type="tel" required>
                    <div class="order">

                        <p class="my-4" style="color: white">Выберите мессанджер:</p>

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

                       <!-- <a target="_blank" id="messangerId" href="https://m.me/1666774366666672?ref=nlS4luPur00gNRXs_" hidden></a>-->
                        <button>Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>