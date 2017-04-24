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
        	<div class="post">
        		<h2 class="title"><a href='/news/<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['title'].' # '.$newsItem['id'];?></a></h2>
        		<p class="meta"><?php echo $newsItem['date'];?>
        			&nbsp;&bull;&nbsp; <a href='/news/' class="permalink"> Назад</a></p>
        		<div class="entry">
        		<p><img src='/template/<?php echo $newsItem['preview'] ;?>' width=33% height = 33% alt="" vspace='5' hspace='8' /></p>
        			<p><?php echo $newsItem['content'];?></p>
        		</div>
        	</div>
        	<p><a href='/news/' class="permalink"> Назад</a></p>
        	<div style="clear: both;">&nbsp;</div>
    	</div>
    
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>
	