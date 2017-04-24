 <?php include ROOT . '/views/layouts/header.php'; ?>
		<nav>
	   
	       <ul class="nav">
				<li><a href="/">Главная</a></li>
				<li><a href="/news/">Новости</a></li>
				<li><a href="/gallery/">Галерея</a></li>
				<li class="active"><a href="/feedback/">Обратная связь</a></li>
			</ul>
		    
	    </nav>
	    <section>
	    	
    	 <div class="col-sm-4 col-sm-offset-4 padding-right">

            <?php if ($result): ?>
                <p>Сообщение отправлено! Мы ответим Вам на указанный email.</p>
            <?php else: ?>
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                
				<div id="inline">
					<h1>Свяжитесь с нами</h1><br>
					<form class="feedback" action="#" method="post" name="form">
						Имя<br><input class="inp" name="name" type="text" /></br>
						E-mail:<br><input class="inp" name="email" type="text" /></br>
						Тема сообщения<br><input class="inp" name="theme" type="text" /></br>
						Ваш текст:<br><textarea class="inp" cols="1" name="message" rows="5"></textarea></br>
						<input type="submit" class="inp" name="submit" value="Отправить" />
					</form>
				</div>
				
			 <?php endif; ?>
			 
		</section>
		
		
<?php include ROOT . '/views/layouts/footer.php'; ?>