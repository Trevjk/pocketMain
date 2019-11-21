
<?php include "../includes/init.php" ?>

<?php
require 'vendor/autoload.php';

// use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_GET["character"])) {
    $character = $_GET["character"];
    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    $reader->setLoadSheetsOnly([$character]);
    $reader->setReadDataOnly(true);
    $spreadsheet = $reader->load("characters.xlsx");
    $worksheet = $spreadsheet->getActiveSheet();
    // $charbook = \PhpOffice\PhpSpreadsheet\IOFactory::load("characterstest.xlsx");
    // $spreadsheet = $charbook->getSheetByName($character);
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include "../includes/header.php" ?>
<head>
<title><?php echo $character ?></title>
<style>
	th, td
	{
		border: 1px solid;
		text-align: center;
		padding: 0.5em;
	}

    img
    {
        width: 100%;
        max-width: 600px;
    }
</style>
</head>

<body>
<?php include "../includes/nav.php" ?>
    <br>
    <div>
        <img src="<?php echo "./renders/" .str_replace(" ", "%20", $character) . ".png" ?>" alt = "No image loaded!">
    </div>
    <br>
    <h2><?php echo $character ?>'s Frame Data</h2>
    <div>
        <?php 

            // foreach ($worksheet->getRowIterator() as $row) {
            //     if()
            //         echo '<tr>' . PHP_EOL;
            //         $cellIterator = $row->getCellIterator();
            //         $cellIterator->setIterateOnlyExistingCells(TRUE); // This loops through all cells,
            //                                                         //    even if a cell value is not set.
            //                                                         // By default, only cells that have a value
            //                                                         //    set will be iterated.
            //         foreach ($cellIterator as $cell) {
            //             if ($cell->getValue() != null){
            //                 echo '<td>' .
            //                     $cell->getValue() .
            //                     '</td>' . PHP_EOL;
            //             }
            //         }
            //         echo '</tr>' . PHP_EOL;
            // }
            // echo '</table>' . PHP_EOL;
            // $highestRow = $worksheet->getHighestRow(); // e.g. 10
            // $highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
            // $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5

            // for ($row = 2; $row <= $highestRow; ++$row) {
            //     $col = 1;
            //     $cell = $worksheet->getCellByColumnAndRow($col, $row);
            //     if($cell->getValue() == null) {
            //         $count = $cell->getRow();
            //         break;
            //     }
            // }


            $highestRow = $worksheet->getHighestRow(); // e.g. 10
            $highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
            $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5

            // echo '<table>' . "\n";
            // for ($row = 1; $row <= $highestRow; ++$row) {
            //     echo '<tr>' . PHP_EOL;
            //     for ($col = 1; $col <= $highestColumnIndex; ++$col) {
            //         $value = $worksheet->getCellByColumnAndRow($col, $row)->getValue();
            //         echo '<td>' . $value . '</td>' . PHP_EOL;
            //     }
            //     echo '</tr>' . PHP_EOL;
            // }
            // echo '</table>' . PHP_EOL;

            $string = '<table>' . "\n";
            $substring = "";
            for ($row = 1; $row <= $highestRow; ++$row) {
                for ($col = 1; $col <= $highestColumnIndex; ++$col) {
                    $value = $worksheet->getCellByColumnAndRow($col, $row)->getValue();
                    if($value == null && $row != 1 && $col == 1)
                        break 2;
                    if ($row != 1) {
                        $substring .= "\t\t\t\t<td>" . $value . '</td>' . PHP_EOL;
                    }
                    else {
                        $substring .= "\t\t\t\t<th>" . $value . '</th>' . PHP_EOL;
                    }
                }
                $string .= "\t\t\t<tr>" . PHP_EOL . $substring . "\t\t\t</tr>" . PHP_EOL;
                $substring = "";
            }
            $string .= '</table>' . PHP_EOL;
            echo $string;
            
        ?>
    </div>
</body>


</html>