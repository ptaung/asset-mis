<?php

namespace app\modules\asset\controllers;

use Yii;
use yii\web\Controller;
use yii\data\ArrayDataProvider;
use app\modules\asset\components\mPDFMod;

class DefaultController extends Controller {

    public function actionCreatempdf() {
        /*
          $mpdf = new mPDFMod;
          $mpdf->WriteHTML($this->renderPartial('mpdf'));
          $mpdf->Output();
          exit;
         *
         */
        $mpdf = new mPDFMod;
        $mpdf->mPDFModRender($this->renderPartial('mpdf'));
        exit;
    }

    public function actionIndex() {

    }

}
