<?php

namespace gaohaoliang\plupload;

use Yii;
use yii\web\AssetManager;

/**
 * PluploadAsset class file.
 * @Author haoliang
 * @Date 09.02.2015 10:28
 */
class PluploadAsset extends AssetManager
{

    public $sourcePath = '@bower/plupload/js';

    public $css = [
    ];

    public $js = [
        'plupload.full.min.js'
    ];

}
