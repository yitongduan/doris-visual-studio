<div class="sidebar">
    <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
    <h2 class="sidebartitle">Categories</h2>
    <ul class="list-cat nonwidget">
        <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
    </ul>
 
    <h2 class="sidebartitle">Archives</h2>
    <ul class="list-archives nonwidget">
        <?php wp_get_archives('type=monthly'); ?>
    </ul>
    <?php endif; ?>
</div>