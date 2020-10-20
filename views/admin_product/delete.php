<?php include ROOT.'/views/layout/header_admin.php'; ?>
<section>
    <div class="container">
        <div class="row">
            <br>
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админ Панель</a></li>
                    <li class="active">Управление товарами</li>
                </ol>
            </div>

            <h4>Удалить товар № <?php echo $id; ?></h4>
            <p>Вы действительно хотите удалить этот товар?</p>
            <form method="post">
                <input type="submit" name="submit" value="Удалить"/>
            </form>
        </div>
    </div>
</section>


<?php include ROOT.'/views/layout/footer_admin.php'; ?>
