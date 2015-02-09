<?php

namespace gaohaoliang\plupload;

use yii\base\Widget;
use yii\helpers\ArrayHelper;

/**
 * Plupload class file.
 * @Author haoliang
 * @Date 09.02.2015 10:37
 */
class Plupload extends Widget
{

    public $options = [];
    public $clientOptions = [];

    public function init()
    {/*{{{*/
        parent::init();
    }/*}}}*/

    public function run()
    {/*{{{*/
        $this->registerPlugin();
    }/*}}}*/

    public function registerPlugin()
    {/*{{{*/
        $view = $this->getView();
        PluploadAsset::register($view);
        $view->registerJs($this->registerJs);
    }/*}}}*/

    public function registerJs()
    {/*{{{*/

        return <<<JS
    alert('hello');
JS;

    }/*}}}*/

    public function preSet($key)
    {/*{{{*/
        $set = [
            'default' => [],
            'simple' => [],
            'full' => [],
        ];
        return ArrayHelper::getValue($set, $key, 'default');
    }/*}}}*/

}
