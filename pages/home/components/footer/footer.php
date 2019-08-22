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
                <form class="telegram">
                    <div class="t">
                        <h4>Остались вопросы?</h4>
                    </div>
                    <input type="hidden" name="location" value="Aкцент => Футер">
                    <input placeholder="Ваше Имя" name="name" type="text" required>
                    <input placeholder="Ваш Email" name="email" type="email">
                    <input class="input-mask-s" placeholder="Ваш Телефон" name="phone" type="tel" required>
                    <div class="order">
                        <button>Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>