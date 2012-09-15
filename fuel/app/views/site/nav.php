			<nav>
				<ul>
					<?php foreach ($items as $url => $text): ?>
					<?php $attr = (isset($active) and $active == $url) ? array('class' => 'active') : array() ?>

					<li><?= Html::anchor($url, $text, $attr) ?></li>

					<?php endforeach; ?>
				</ul>
			</nav>