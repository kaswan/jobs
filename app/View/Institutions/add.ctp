<?php echo $this->html->link('企業一覧へ', array('controller' => 'institutions', 'action' => 'index'), array('class' => 'btn btn-success')); ?>
<div class="users form">
	<div class="row">
        <div class="col-xs-11">
  			<pre><kbd>企業情報 新規登録</kbd></pre>
  		</div>
  	</div>		
    <?php echo $this->element('institution/form'); ?>
</div>