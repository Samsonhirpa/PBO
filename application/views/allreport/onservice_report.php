

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
OIPMS

EOD;
$title = '<h1>List of WoredaNet On Servie</h1>';
$pdf->WriteHTMLCell(0,0,'','',$title,0,1,0,true,'C',true);
// $pdf->WriteHTMLCell(0,0,'','','',0,1,0,true,'C',true);
$table = '<table border="1px">';
   
     $table .='<tr style = "background-color:#eee; black;">
                <th style="width: 40.733px;">No</th>
                <th style="width: 100.733px;">Organization</th>
                <th style="width: 80.733px;">LAN IP</th>
                 <th style="width: 85.733px;">WAN IP</th>
                 <th>Service No</th>
                 <th>Service Type</th>
                 <th style="width: 40.733px;">Speed</th>
                <th>Media</th>
                
                <th>Date created</th>
                
               </tr>';
              
               $no=0;
        foreach($this->str->getpostcarbon() as $row)
         {
          $no++;
               $table .=
               '<tr border:1px solid black>
               <td>'.$no.'</td>
               <td>'.$row->orgname.'</td>
               <td>'.$row->lanip.'</td>
               <td>'.$row->wanip.'</td>
                <td>'.$row->servicenumber.'</td>
               <td>'.$row->servicetype.'</td>
               <td>'.$row->speed.'</td>
               <td>'.$row->media.'</td>
               <td>'.$row->date.'</td>
               

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
