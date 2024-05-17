<div class="container mt-5">
        <h3 class="mb-5">Каталог</h3>
    <div class="row row-cols-1 row-cols-md-3 g-3">
        <?php 
        require('page1product.php');
        for($i = 0; $i < 8; $i++):
            require('content.php');
        endfor; ?>
        </div>

    </div>
