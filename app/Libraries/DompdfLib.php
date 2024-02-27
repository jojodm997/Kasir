<?php

namespace App\Libraries;

use Dompdf\Dompdf;

class DompdfLib
{

    protected $dompdf;

    public function __construct()
    {
        $this->dompdf = new Dompdf();
    }

    public function generatePDF($html, $filename = 'document')
    {
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'portrait');
        $this->dompdf->render();
        $this->dompdf->stream($filename . '.pdf', ['Attachment' => 0]);
    }
}
