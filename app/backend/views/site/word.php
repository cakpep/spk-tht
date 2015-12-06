<?php


// \PhpOffice\PhpWord\Autoloader::register();

// Creating the new document...
$phpWord = new \PhpOffice\PhpWord\PhpWord();

/* Note: any element you append to a document must reside inside of a Section. */

// Adding an empty Section to the document...
$section = $phpWord->addSection();
// Adding Text element to the Section having font styled by default...
$section->addText(
    htmlspecialchars(
        '"Learn from yesterday, live for today, hope for tomorrow. '
            . 'The important thing is not to stop questioning." '
            . '(Albert Einstein)'
    )
);

/*
 * Note: it's possible to customize font style of the Text element you add in three ways:
 * - inline;
 * - using named font style (new font style object will be implicitly created);
 * - using explicitly created font style object.
 */

// Adding Text element with font customized inline...
$section->addText(
    htmlspecialchars(
        '"Great achievement is usually born of great sacrifice, '
            . 'and is never the result of selfishness." '
            . '(Napoleon Hill)'
    ),
    array('name' => 'Tahoma', 'size' => 10)
);

// Adding Text element with font customized using named font style...
$fontStyleName = 'oneUserDefinedStyle';
$phpWord->addFontStyle(
    $fontStyleName,
    array('name' => 'Tahoma', 'size' => 10, 'color' => '1B2232', 'bold' => true)
);
$section->addText(
    htmlspecialchars(
        '"The greatest accomplishment is not in never falling, '
            . 'but in rising again after you fall." '
            . '(Vince Lombardi)'
    ),
    $fontStyleName
);

// Adding Text element with font customized using explicitly created font style object...
$fontStyle = new \PhpOffice\PhpWord\Style\Font();
$fontStyle->setBold(true);
$fontStyle->setName('Tahoma');
$fontStyle->setSize(13);
$myTextElement = $section->addText(
    htmlspecialchars('"Believe you can and you\'re halfway there." (Theodor Roosevelt)')
);
$myTextElement->setFontStyle($fontStyle);

// Saving the document as OOXML file...
$header = array('size' => 16, 'bold' => true);

// 1. Basic table

$rows = 10;
$cols = 5;
$section->addText(htmlspecialchars('Basic table'), $header);

$table = $section->addTable();
for ($r = 1; $r <= 8; $r++) {
    $table->addRow();
    for ($c = 1; $c <= 5; $c++) {
        $table->addCell(1750)->addText(htmlspecialchars("Row {$r}, Cell {$c}"));
    }
}

// 2. Advanced table

$section->addTextBreak(1);
$section->addText(htmlspecialchars('Fancy table'), $header);

$styleTable = array('borderSize' => 6, 'borderColor' => '006699', 'cellMargin' => 80);
$styleFirstRow = array('borderBottomSize' => 18, 'borderBottomColor' => '0000FF', 'bgColor' => '66BBFF');
$styleCell = array('valign' => 'center');
$styleCellBTLR = array('valign' => 'center', 'textDirection' => \PhpOffice\PhpWord\Style\Cell::TEXT_DIR_BTLR);
$fontStyle = array('bold' => true, 'align' => 'center');
$phpWord->addTableStyle('Fancy Table', $styleTable, $styleFirstRow);
$table = $section->addTable('Fancy Table');
$table->addRow(900);
$table->addCell(2000, $styleCell)->addText(htmlspecialchars('Row 1'), $fontStyle);
$table->addCell(2000, $styleCell)->addText(htmlspecialchars('Row 2'), $fontStyle);
$table->addCell(2000, $styleCell)->addText(htmlspecialchars('Row 3'), $fontStyle);
$table->addCell(2000, $styleCell)->addText(htmlspecialchars('Row 4'), $fontStyle);
$table->addCell(500, $styleCellBTLR)->addText(htmlspecialchars('Row 5'), $fontStyle);
for ($i = 1; $i <= 8; $i++) {
    $table->addRow();
    $table->addCell(2000)->addText(htmlspecialchars("Cell {$i}"));
    $table->addCell(2000)->addText(htmlspecialchars("Cell {$i}"));
    $table->addCell(2000)->addText(htmlspecialchars("Cell {$i}"));
    $table->addCell(2000)->addText(htmlspecialchars("Cell {$i}"));
    $text = (0== $i % 2) ? 'X' : '';
    $table->addCell(500)->addText(htmlspecialchars($text));
}

// 3. colspan (gridSpan) and rowspan (vMerge)

$section->addPageBreak();
$section->addText(htmlspecialchars('Table with colspan and rowspan'), $header);

$styleTable = array('borderSize' => 6, 'borderColor' => '999999');
$cellRowSpan = array('vMerge' => 'restart', 'valign' => 'center', 'bgColor' => 'FFFF00');
$cellRowContinue = array('vMerge' => 'continue');
$cellColSpan = array('gridSpan' => 2, 'valign' => 'center');
$cellHCentered = array('align' => 'center');
$cellVCentered = array('valign' => 'center');

$phpWord->addTableStyle('Colspan Rowspan', $styleTable);
$table = $section->addTable('Colspan Rowspan');

$table->addRow();

$cell1 = $table->addCell(2000, $cellRowSpan);
$textrun1 = $cell1->addTextRun($cellHCentered);
$textrun1->addText(htmlspecialchars('A'));
$textrun1->addFootnote()->addText(htmlspecialchars('Row span'));

$cell2 = $table->addCell(4000, $cellColSpan);
$textrun2 = $cell2->addTextRun($cellHCentered);
$textrun2->addText(htmlspecialchars('B'));
$textrun2->addFootnote()->addText(htmlspecialchars('Colspan span'));

$table->addCell(2000, $cellRowSpan)->addText(htmlspecialchars('E'), null, $cellHCentered);

$table->addRow();
$table->addCell(null, $cellRowContinue);
$table->addCell(2000, $cellVCentered)->addText(htmlspecialchars('C'), null, $cellHCentered);
$table->addCell(2000, $cellVCentered)->addText(htmlspecialchars('D'), null, $cellHCentered);
$table->addCell(null, $cellRowContinue);

// 4. Nested table

$section->addTextBreak(2);
$section->addText(htmlspecialchars('Nested table in a centered and 50% width table.'), $header);

$table = $section->addTable(array('width' => 50 * 50, 'unit' => 'pct', 'align' => 'center'));
$cell = $table->addRow()->addCell();
$cell->addText(htmlspecialchars('This cell contains nested table.'));
$innerCell = $cell->addTable(array('align' => 'center'))->addRow()->addCell();
$innerCell->addText(htmlspecialchars('Inside nested table'));


    header("Pragma: no-cache");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: private", false);
    header("Content-type: application/vnd.ms-word");
    header("Content-Disposition: attachment; filename=\"test.docx");
    header("Content-Transfer-Encoding: binary");
    ob_clean();
    flush();
    
    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    $objWriter->save('php://output');
    exit;
