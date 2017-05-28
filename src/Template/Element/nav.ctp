<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed"data-toggle="collapse"data-target="#navbarEexample8">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
				タイトル
			</a>
		</div>
		
		<div class="collapse navbar-collapse" id="navbarEexample8">
			<ul class="nav navbar-nav">
				<li><a href="#">メニューＡ</a></li>
				<li class="active"><a href="#">メニューＢ</a></li>
				<li><a href="#">メニューＣ</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php if(!empty($currentUserRow)): ?>
					<li><a href="#"><?php echo h($currentUserRow->getName()); ?></a></li>
					<li>
						<a href="<?php echo $this->Url->build(['controller' => 'Users','action' => 'logout']);?>">	
							ログアウト
						</a>
					</li>	
				<?php else: ?>
					<li>
						<a href="<?php echo $this->Url->build(['controller' => 'Users','action' => 'login']);?>">
							ログイン
						</a>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</nav>
