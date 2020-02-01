 <h1 class = "archive-page-title">Archives</h1>

 <h2 class = "archive-title-style">Quote Authors</h2>

 <div class = "author-wrap">

<?php $arg = array(
        'type'=> 'postbypost', 'limit' => 1233, 'before'=>'<span class="author-quote">') ;?>

    <?php wp_get_archives($arg);?> 
</div>

 
<h1 class = "archive-title-style">Categories</h1>

<div class = "list-wrap">
<?php $listArg = array(
     'before' => '<span class ="list-quote">', 'title_li'=> __('')); ?>

 <?php wp_list_categories($listArg)?>
</div>


 <h1 class = "archive-title-style">Tags</h1>


<div class = "get-wrap">
 <?php 
$tags = get_tags(array(
  'hide_empty' => false
));
echo '<ul>';
foreach ($tags as $tag) {
  echo '<li class = "tags-quote">' . $tag->name . '</li>';
}
echo '</ul>';
?>
</div>

