<?php include ROOT.'/views/layout/header_admin.php'; ?>
<section>
    <div class="container">
        <div class="row">
            <br>
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админ панель</a></li>
                    <li><a href="/admin/product">Управление категориями</a></li>
                    <li class="active">Добавить категорию</li>
                </ol>

                <h4>Добавить новую категорию</h4>
                <br>
                <?php if (isset($errors)):?>
                    <ul>
                        <?php foreach ($errors as $error):?>
                            <li><?php echo $error;?></li>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>

                <div class="col-lg-4">
                    <div class="login-form">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <p>Название категории</p>
                            <input type="text" name="name" placeholder="" value=""/>

                            <p>Порядковый номер</p>
                            <input type="text" name="sort_order" placeholder="" value=""/>

                     <p>Статус</p>
                        <select name="status">
                            <option value="1" selected="selected">Отображается</option>
                            <option value="0">Скрыт</option>
                        </select>
                        <br>
                        <br>
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                        <br>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include ROOT.'/views/layout/footer_admin.php'; ?>

