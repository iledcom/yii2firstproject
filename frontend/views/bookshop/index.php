<?php
/* @var $this yii\web\View */
?>
<h1>Books</h1>

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
