<?php
    require_once './controller/homeController.php';
?>

<div class="main-title">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0 12.1311C6.03175 10.0735 9.99206 6.07746 11.9921 0C12.9048 2.94737 14.3651 5.4578 16.4762 7.571C18.5794 9.68421 21.0635 11.1619 24 12.0914C17.9921 14.1013 14.0317 18.0258 11.9683 24C9.9127 18.0814 5.96825 14.1331 0 12.1311Z" fill="#B7212D"></path>
    </svg>
    <h2>
        Top Sản Phẩm
    </h2>
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0 12.1311C6.03175 10.0735 9.99206 6.07746 11.9921 0C12.9048 2.94737 14.3651 5.4578 16.4762 7.571C18.5794 9.68421 21.0635 11.1619 24 12.0914C17.9921 14.1013 14.0317 18.0258 11.9683 24C9.9127 18.0814 5.96825 14.1331 0 12.1311Z" fill="#B7212D"></path>
    </svg>
</div>
<div id="topProductCarousel" class="carousel slide" >
  <div class="carousel-inner">
  <?php
    $count = 0;
    $top = getTopProduct();
    foreach ($top as $product) {
        echo '<div class="carousel-item';
        echo $count == 0 ? ' active' : ''; 
        echo '">
            <div class="card_top">
                <img src="./assets/img/'.$product['img'].'" alt="img" loading="lazy">
                <div class="card_body">
                    <p>'.$product['name'].'</p>
                    <span style="color: #b7212d; font-weight: 700">' . number_format($product['price'], 0, ',', '.') . '₫</span>
                </div>
            </div>
        </div>';
        $count++;
    }
    ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#topProductCarousel" data-bs-slide="prev">
    <i class="fa-solid fa-chevron-left"></i>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#topProductCarousel" data-bs-slide="next">
    <i class="fa-solid fa-chevron-right"></i>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var items = document.querySelectorAll('#topProductCarousel .carousel-item');
        items.forEach((e) => {
            const slide = 4;
            let next = e.nextElementSibling;
            for(var i = 0; i < slide; i++){
                if(!next){
                    next = items[0];
                }
                let clonechild = next.cloneNode(true);
                e.appendChild(clonechild.children[0]);
                next = next.nextElementSibling;
            }
        });
    });
</script>


