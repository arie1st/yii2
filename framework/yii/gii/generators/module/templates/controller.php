<?php
/**
 * This is the template for generating a controller class within a module.
 *
 * @var yii\base\View $this
 * @var yii\gii\generators\module\Generator $generator
 */
echo "<?php\n";
?>

namespace <?php echo $generator->getControllerNamespace(); ?>;

use yii\web\Controller;

class DefaultController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
}
