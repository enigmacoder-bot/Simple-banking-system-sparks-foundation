<?php include('nav.php') ?>

<!-- <div class="bg">
    <div class="center">
      <ul>
        <li class="operations"><a href="transfer_money.php"><button class="btn" id="red">View All Users</button></a></li>
        <li class="operations"><a href="transfer_money.php"><button class="btn" id="blue">Trasnfer Money</button></a></li>
        <li class="operations"><a href="transactionhistory.php"><button class="btn" id="green">View Transfer History</button></a></li>
      </ul>
    </div> -->
<main>
    <div class="container-fluid bg-trasparent my-4 p-3 m" style="position: relative;">
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3 justify-content-center">
            <div class="col">
                <div class="card h-100 shadow-sm"> <img src="./img/users.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="text-center my-4"> <a href="transfer_money.php" class="btn btn-warning">View Users</a> </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm"> <img src="./img/transfer-money.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="text-center my-4"> <a href="transfer_money.php" class="btn btn-warning">Trasfer Money</a> </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm"> <img src="./img/transaction-history.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="text-center my-4"> <a href="transfer_money.php" class="btn btn-warning">Transaction History</a> </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>


<?php include('footer.php') ?>

</body>

</html>