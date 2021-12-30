<?php
//============================================================+
// File name   : example_005.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 005 for TCPDF class
//               Multicell
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Multicell
 * @author Nicola Asuni
 * @since 2008-03-04
 */


// Include the main TCPDF library (search for installation path).
// require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 005');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 10);

// add a page
$pdf->AddPage();

// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);

// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);

// set color for background
$pdf->SetFillColor(255, 255, 127);

// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)

// set some text for example
// move pointer to last page
$title = <<<EOD
OROMIA REGION CHILD DATA BASE MANAGEMENT REPORTING SYSTEM:

EOD;
$title = '<h1>Abuse Case Report</h1>';
$pdf->WriteHTMLCell(0,0,'','',$title,0,1,0,true,'C',true);
// $pdf->WriteHTMLCell(0,0,'','','',0,1,0,true,'C',true);
$table = '<table border="5px">';
   
     $table .='<tr style = "background-color:#eee; black;">
                <th>No</th>
                <th>Date</th>
                <th>Abuse Type</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Zone</th>
                <th>Woreda</th>
                <th>Kebele</th>
                <th>Law Decisions</th>
                <th>Data Encoder</th>
               </tr>';
              
               $no=0;
        foreach($this->str->getabusecasereport() as $row)
         {
         	$no++;
         
               $table .=
               '<tr border:5px solid black>
               <td>'.$no.'</td>
               <td>'.$row->date.'</td>
               <td>'.$row->name.'</td>
               <td>'.$row->age.'</td>
               <td>'.$row->gender_name.'</td>
               <td>'.$row->zname.'</td>
               <td>'.$row->woreda_name.'</td>
               <td>'.$row->kname.'</td>
               <td>'.$row->low.'</td>
               <td>'.$row->operator.'</td>

               </tr>
             ';

             }
$table .='</table>';
$pdf->WriteHTMLCell(0,0,'','',$image.$table,0,1,0,true,'C',true);
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
ob_clean();
$repeort=date('Y-m-d:H-i-s');
// $user=$this->session->userdata('user_name');
$pdf->Output('item_'.$repeort.'.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
