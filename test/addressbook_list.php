<?php
require  __DIR__. '/__connect_db.php';

$perPage = 7; //每頁有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) :1 ; //用戶要看的頁數

//算出總共有幾筆資料 -1
$t_sql = "SELECT COUNT(sid) FROM `addressbook`";
//$t_stmt = $pdo->query($t_sql);
//$totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0];
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

$totalPages = ceil($totalRows/$perPage);


//echo "<div>$totalRows,$totalPages</div>";


$sql = sprintf("SELECT * FROM addressbook LIMIT %s, %s", ($page-1)*$perPage,$perPage);
$stmt= $pdo->query($sql);

?>

<?php include  __DIR__. '/__html_head.php' ?>
<?php include  __DIR__. '/__navbar.php' ?>

<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item <?= $page==1 ? 'disabled':'' ?> ">
                        <a class="page-link" href="?page=<?= $page-1 ?>" tabindex="-1" aria-disabled="true"><i class="fas fa-arrow-alt-circle-left"></i></a>
                    </li>
                    <?php for($i=1; $i<=$totalPages; $i++): ?>
                    <li class="page-item"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
                    <?php endfor; ?>

                    <li class="page-item <?= $page==$totalPages ? 'disabled':'' ?>">
                        <a class="page-link" href="?page=<?= $page+1 ?>"><i class="fas fa-arrow-alt-circle-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>


    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Mobile</th>
                    <th>Birthday</th>
                    <th>Address</th>

                </tr>
                </thead>
                <tbody>
                <?php while($r = $stmt->fetch()): ?>
                <tr>
                    <td><?= $r['sid'] ?></td>
                    <td><?= $r['name'] ?></td>
                    <td><?= $r['email'] ?></td>
                    <td><?= $r['mobile'] ?></td>
                    <td><?= $r['birthday'] ?></td>
                    <td><?= $r['address'] ?></td>


                </tr>
                <?php endwhile; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include  __DIR__. '/__scripts.php' ?>
<?php include  __DIR__. '/__html_foot.php' ?>
