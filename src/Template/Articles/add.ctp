<h1>記事の追加</h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->control('tags.tag_string', ['options' => $tags]);
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>
