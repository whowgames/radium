<ul class="breadcrumb">
	<li><?=$this->html->link('Home', '/');?> <span class="divider">/</span></li>
	<li class="active"><?=$this->title('radium'); ?></li>
</ul>

<div class="page-header">
	<h1><?=$this->title(); ?> <small>See a list of all components of radium</small></h1>
</div>

<?= $this->html->link('Configurations', array('library' => 'radium', 'controller' => 'configurations', 'action' => 'index')); ?>