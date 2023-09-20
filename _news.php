<?php
    require_once './controller/homeController.php';
?>

<div class="main-title news-title">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0 12.1311C6.03175 10.0735 9.99206 6.07746 11.9921 0C12.9048 2.94737 14.3651 5.4578 16.4762 7.571C18.5794 9.68421 21.0635 11.1619 24 12.0914C17.9921 14.1013 14.0317 18.0258 11.9683 24C9.9127 18.0814 5.96825 14.1331 0 12.1311Z" fill="#B7212D"></path>
    </svg>
    <h2>
        Tin Tức & Sự Kiện
    </h2>
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0 12.1311C6.03175 10.0735 9.99206 6.07746 11.9921 0C12.9048 2.94737 14.3651 5.4578 16.4762 7.571C18.5794 9.68421 21.0635 11.1619 24 12.0914C17.9921 14.1013 14.0317 18.0258 11.9683 24C9.9127 18.0814 5.96825 14.1331 0 12.1311Z" fill="#B7212D"></path>
    </svg>
</div>
<div class="new_container">
    <?php 
        $new = getNews();

        function des($string, $maxLength) {
            if (strlen($string) > $maxLength) {
                $arr = explode(' ', $string);
                $word = array_slice($arr, 0, $maxLength);
                $result = implode(' ', $word) . ' [...]';
                return $result;
            }
            return $string;
        }

        function formatDate($dateString) {
            $timestamp = strtotime($dateString);
            $formattedDate = date('d/m/Y', $timestamp);
            return $formattedDate;
        }
        
        foreach ($new as $new) {
            echo '
            <div class="new_card">
                <div class="new_img">
                    <img src="./assets/img/'.$new['img'].'" alt="img" loading="lazy">
                </div>
                <div class="new_card-info">
                    <div class="new_card-date">
                        <i class="fa-solid fa-calendar-days"></i>
                        <p>'.formatDate($new['created_at']).'</p>
                    </div>
                    <div class="new_card-title">'.$new['title'].'</div>
                    <div class="new_card-description">'.des($new['description'],21).'</div>
                </div>
            </div>
            ';
        }   
    ?>
</div>