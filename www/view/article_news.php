<h3>Статьи:</h3>

<?php $getArrayArticles = article_Array_Get_Bd();

foreach ($getArrayArticles as $articles) { ?>
    <div>
        <span>
            <?php
            $date = $articles['date_time'];
            echo date("H:i:s", strtotime($date));
            ?>
        </span>
        <a href="/www/check_get_new.php?id=<?php echo $articles['id']; ?>"><?php echo $articles['title_article']; ?></a>
        <span>
            <?php
            $date = $articles['date_time'];
            echo date("d-F-Y", strtotime($date));
            ?>
        </span>
    </div>
<?php } ?>
<br>



