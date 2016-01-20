<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PdfController extends Controller {

	public function invoice()
	{
		$data = $this->getData();
		$date = date('Y-m-d');
		$view =  \View::make('pdf.invoice', compact('data', 'date', 'invoice'))->render();
		$pdf = \App::make('dompdf.wrapper');
		$pdf->loadHTML($view);
		return $pdf->download('invoice');
	}

}
