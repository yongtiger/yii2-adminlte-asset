<?php ///[yii2-adminlte-asset]

/**
 * @var $this yii\base\View
 * @var $name string
 * @var $message string
 * @var $exception Exception
 */

use yii\helpers\Html;

$this->title = $name;
?>
<section class="content">

    <div class="error-page">
        <h2 class="headline text-info"><i class="fa fa-warning text-yellow"></i></h2>

        <div class="error-content">
            <h3><?= $name ?></h3>

            <p>
                <?= nl2br(Html::encode($message)) ?>
            </p>

            <p>
                The above error occurred while the Web server was processing your request.
                Please contact us if you think this is a server error. Thank you.
            </p>

        </div>
    </div>

</section>
