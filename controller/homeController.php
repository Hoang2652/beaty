<?php
    include "connect.php";

    function getVoucher(){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM voucher");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $voucher = $stmt->fetchAll();
        return $voucher;
    }

    function getTopProduct(){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM product WHERE type = 'top'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $top = $stmt->fetchAll();
        return $top;
    }

    function getBestSellerProduct(){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM product WHERE type = 'best seller'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $top = $stmt->fetchAll();
        return $top;
    }

    function getNews(){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM new ORDER BY created_at DESC LIMIT 3");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $news = $stmt->fetchAll();
        return $news;
    }
?>