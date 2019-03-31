<h1>Customers</h1>
<ul>
    <?php
    foreach ($customers as $customer){
        echo '<li>'. $customer . '</li>';
    }
    ?>
    <?php
    foreach ($package as $p){
        echo '<li>'. $p . '</li>';
    }
    ?>
</ul>