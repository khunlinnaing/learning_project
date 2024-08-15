<!-- pizza list all -->
<div id="myDiv" class=" col justify-content-center" style="margin-left:20%;">
        <!-- menu bar -->
                               
        <ul class="nav nav-tabs">
               
        <?php
                foreach($data as $d){
                        echo'       
                                <li class="nav-item"> 
                                                <a class="nav-link text-primary" aria-current="page" href="">'.$d["category_name"].'</a>
                                                

                                </li>';
                }
            ?> 
                 
        </ul>
        <?php require '../../ajax/order/pizza.php'; ?>         
</div><br>