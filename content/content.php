<div class="col"> 
    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/<?php echo ($i + 1) ?>.jpeg'); background-size: cover;"> 
        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1"> 
            <h3 class="item-title pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><?php echo get_product_title($i+1)?></h3> 
            <ul class="d-flex list-unstyled mt-auto"> 
                <li class="d-flex align-items-center me-3"> 
                    <a href="http://localhost/index.php?&page=product&product_id=<?php echo ($i + 1); ?>" class="btn btn-light rounded-pill px-3" role="button">Подробнее</a>
                </li> 

            </ul> 
        </div> 
    </div> 
</div>