<?php
?>
<section class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headword-container">
                    <ul>
                        <?php if (!empty($section['jumbotron_items'])) : ?>
                            <?php foreach ($section['jumbotron_items'] as $item): ?>
                                <li class="headword"><span class="headword-site-name">WendeLot</span> <span class="headword-content"><?= $item['jumbotron_item_text'] ?></span></li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
