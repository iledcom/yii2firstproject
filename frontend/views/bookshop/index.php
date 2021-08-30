<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
?>
<h1>Books</h1>

<a href="<?=Url::to(['create']); ?>" class="btn btn-primary">Create book</a>
<br><br>

<?php foreach ($bookList as $book) { ?>
    <div class="col-md-10">
        <h3><?=$book->name; ?></h3>
        
        <p><?=$book->getDataPublished(); ?></p>
        
        <p><?=$book->getPublisherName(); ?></p>

        <?php
            foreach ($book->getAuthors() as $author) { ?>
               <p><?=$author->first_name . ' ' .$author->last_name;?></p> 
        <?php } ?>


    </div>
    
<?php } ?>
