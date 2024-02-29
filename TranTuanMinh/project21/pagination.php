
<div class="container-fluid mt-3 ">
    <!-- <div class="container ">
        <form action="" method="get">
            <div class="row justify-content-end">
                <div class="col-3">
                    <label for="itemsperpage">Items per page:</label>
                    <select name="itemsperpage" id="itemsperpage" class="form-select">
                        <option value="6" <?php echo $itemsPerPage == 6 ? 'selected' : '' ?>>6</option>
                        <option value="12" <?php echo $itemsPerPage == 12 ? 'selected' : '' ?>>12</option>
                        <option value="24" <?php echo $itemsPerPage == 24 ? 'selected' : '' ?>>24</option>
                    </select>
                </div>
        </form>
    </div> -->
    <ul class="pagination justify-content-center">
        <?php if ($currentPage > 3): ?>
            <li class="page-item">
                <a class="page-link" href="?page=1&itemsperpage=<?=$itemsPerPage?>">First</a>
            </li>
        <?php endif; ?>
        <?php for ($i = max(1, $currentPage - 2); $i <= min($totalPages, $currentPage + 2); $i++): ?>
            <?php if ($i >= $currentPage - 2 && $i <= $currentPage + 2): ?>
                <li class="page-item <?php echo $i == $currentPage ? 'active' : '' ?>">
                    <a class="page-link" href="?page=<?=$i?>&itemsperpage=<?=$itemsPerPage?>"><?php echo $i ?></a>
                </li>
            <?php endif; ?>
        <?php endfor; ?>
        <?php if ($currentPage < $totalPages - 2): ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?=$totalPages?>&itemsperpage=<?=$itemsPerPage?>">Last</a>
            </li>
        <?php endif; ?>
    </ul>
</div>