<h1>Custom Pagination View</h1>
<nav aria-label="Page navigation">
    <ul class="pagination" style="list-style: none; display: flex;">
        <?php if ($pager->hasPrevious()) : ?>
            <li style="margin-right: 5px;">
                <a href="<?= $pager->getPreviousPage() ?>" aria-label="<?= lang('Pager.previous') ?>">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link): ?>
            <li <?= $link['active'] ? 'class="active" style="margin-right: 5px; font-weight: bold;"' : 'style="margin-right: 5px;"' ?>>
                <a href="<?= $link['uri'] ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <?php if ($pager->hasNext()) : ?>
            <li style="margin-right: 5px;">
                <a href="<?= $pager->getNextPage() ?>" aria-label="<?= lang('Pager.next') ?>">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        <?php endif ?>
    </ul>
</nav>

<h1>Custom Pagination View</h1>
