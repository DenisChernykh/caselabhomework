<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>



<?php if (!empty($arResult)): ?>

                    <?php foreach ($arResult as $item): ?>
                        <?php if ($item["SELECTED"]): ?>
                            <li>
                                <a href="<?= $item['LINK'] ?>" style="color:gray"><?= $item['TEXT'] ?></a>
                            </li>
                        <?php else: ?>
                            <li>
                                <a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
                            </li>
                        <?php endif; ?>

                    <?php endforeach; ?>


    <?php endif; ?>
