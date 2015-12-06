<?php
use yii\helpers\Html;
use frontend\widgets\Panel;

?>
	<?php
		Panel::begin([
			'title'=>$data->judul,
			'type'=>Panel::TYPE_DEFAULT
		]);
	?>
<?= $data->isi ?>






<?php Panel::end(); ?>