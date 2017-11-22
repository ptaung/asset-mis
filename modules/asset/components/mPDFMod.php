<?php

namespace app\modules\asset\components;

use \Mpdf\Mpdf;

class mPDFMod {

    public function mPDFModRender($content) {
        $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];
        $pp = __DIR__ . '/../../../custom/fonts/thsaraban';
        #print_r($pp);

        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'orientation' => 'L',
            'fontDir' => array_merge($fontDirs, [
                $pp,
            ]),
            'fontdata' => [
                "thsaraban" => [
                    'R' => "THSarabunNew.ttf",
                    'B' => "THSarabunNew-Bold.ttf",
                    'I' => "THSarabunNew-Italic.ttf",
                    'BI' => "THSarabunNew-BoldItalic.ttf"
                ],
            ],
            'default_font' => 'thsaraban'
        ]);
        $mpdf->WriteHTML($content);
        return $mpdf->Output();
    }

}
