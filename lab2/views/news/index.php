 <?php include ROOT . '/views/layouts/header.php'; ?>
 
	<nav>
       <ul class="nav">
			<li><a href="/">Главная</a></li>
			<li class="active"><a href="/news/">Новости</a></li>
			<li><a href="/gallery/">Галерея</a></li>
			<li><a href="/feedback/">Обратная связь</a></li>
		</ul>
    </nav>
	<section>
	
		<div id="content">
				<?php foreach ($newsList as $newsItem):?>
				<div class="post">
					<h2 class="title"><a href='/news/<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['title'].' # '.$newsItem['id'];?></a></h2>
					<p class="meta"><?php echo $newsItem['date'];?>
						&nbsp;&bull;&nbsp; <a href='/news/<?php echo $newsItem['id'] ;?>' class="permalink"> Подробнее</a></p>
					<div class="entry">
						<p><?php echo $newsItem['short_content'];?></p>
					</div>
				</div>
			<?php endforeach;?>
				<div style="clear: both;">&nbsp;</div>
		</div>
		 
	</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>
	