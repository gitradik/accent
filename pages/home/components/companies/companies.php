<style>
    <?= include "companies.css"; ?>
</style>


<div class="companies">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="t">
                    <h2>У нас обучаются</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="company-slider">

                    <?php
                        for ($i = 1; $i <= 29; $i++):
                    ?>
                        <div>
                            <div class="company-item">
                                <img src="<?= get_template_directory_uri();?>/images/companies/<?= $i . '.jpg'; ?>">
                            </div>
                        </div>
                    <?php endfor; ?>

                </div>
            </div>
        </div>
    </div>
</div>