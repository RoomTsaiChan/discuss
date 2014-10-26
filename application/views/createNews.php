<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<style>
.title{width: 150px; margin-right: 90px;}
</style>
<body>
 新聞標題 <input class="title" type="text" name="firstname">
	 <select>
		<?php for($i = 0; $i < count($categoryArr); $i++){ ?>
			<option value = '<?= $categoryArr[$i]['id'] ?>'>
			<?= $categoryArr[$i]['name']?>
			</option>
		<?php } ?>fbfbfgfg
	</select>	
</body>
</html>