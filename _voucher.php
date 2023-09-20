<?php
    require_once './controller/homeController.php';
?>
<div class="main-title">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0 12.1311C6.03175 10.0735 9.99206 6.07746 11.9921 0C12.9048 2.94737 14.3651 5.4578 16.4762 7.571C18.5794 9.68421 21.0635 11.1619 24 12.0914C17.9921 14.1013 14.0317 18.0258 11.9683 24C9.9127 18.0814 5.96825 14.1331 0 12.1311Z" fill="#B7212D"></path>
    </svg>
    <h2>
        Voucher Khuyến Mãi
    </h2>
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0 12.1311C6.03175 10.0735 9.99206 6.07746 11.9921 0C12.9048 2.94737 14.3651 5.4578 16.4762 7.571C18.5794 9.68421 21.0635 11.1619 24 12.0914C17.9921 14.1013 14.0317 18.0258 11.9683 24C9.9127 18.0814 5.96825 14.1331 0 12.1311Z" fill="#B7212D"></path>
    </svg>
</div>
<div class="list-voucher">
    <?php
        $voucher = getVoucher();
        foreach ($voucher as $v) {
            echo '
            <div class="ticket">
                <div class="ticket-1">
                    <h3>' . $v["type"] . '</h3>
                    <p>Đơn hàng từ ' .$v["min_order_amount"] . 'k</p>
                </div>
                <div class="ticket-2">
                    <div>
                        <p>Mã: <span>' . $v["code"] . '</span></p>
                        <p>HSD: <span>' . $v["expiry_date"] . '</span></p>
                    </div>
                    <div class="ticket-button copy-button" id="copy-button">
                        Sao chép mã
                    </div>
                </div>
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <path d="M9 0C4.02886 0 0 4.02886 0 9C0 13.9711 4.02886 18 9 18C13.9711 18 18 13.9711 18 9C18 4.02886 13.9711 0 9 0ZM14.9364 14.9364C13.4166 16.4561 11.3195 17.396 9 17.396C6.68054 17.396 4.58336 16.4561 3.06362 14.9364C1.54389 13.4166 0.604027 11.3195 0.604027 9C0.604027 6.68054 1.54389 4.58336 3.06362 3.06362C4.58336 1.54389 6.68054 0.604027 9 0.604027C11.3195 0.604027 13.4166 1.54389 14.9364 3.06362C16.4561 4.58336 17.396 6.68054 17.396 9C17.396 11.3195 16.4561 13.4166 14.9364 14.9364Z" fill="black"></path>
                    <path d="M9.69825 3.29074H8.30295V4.87933H9.69825V3.29074Z" fill="black"></path>
                    <path d="M9.69825 6.40752H8.30295V14.7093H9.69825V6.40752Z" fill="black"></path>
                </svg>
            </div>
            ';
        }
    ?>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var copyButtons = document.querySelectorAll('.copy-button');
    
    copyButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var codeElement = this.parentNode.querySelector('span');
            var codeText = codeElement.textContent || codeElement.innerText;
            copyTextToClipboard(codeText);
            alert('Đã cope mã ' + codeText);
        });
    });

    function copyTextToClipboard(text) {
        var dummy = document.createElement("textarea");
        document.body.appendChild(dummy);
        dummy.value = text;
        dummy.select();
        document.execCommand("copy");
        document.body.removeChild(dummy);
    }
});
</script>



