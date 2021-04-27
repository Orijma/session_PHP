<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<?php 



    if (!isset($_SESSION['loginname'])) {
    header('location: http://localhost:8000/login.php');
    exit;
}

?>
<section class="cookies container-fluid">
    <div class="row">
        <ul>
        <?php 

        if (isset($_SESSION['id'])) 
        {
            foreach($_SESSION['id'] as $cookieId){
                echo" <li>" . $catalog[$cookieId]['name'] . "</li> ";
            }
        }else{
            echo "cart is empty";
        }

        ?>
    </ul>
    </div>
    <a href="reset.php"> Delete cart </a>
</section>
<?php require 'inc/foot.php'; ?>
