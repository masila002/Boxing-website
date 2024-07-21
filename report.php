<?php
require_once('php/config.php');
require_once('tcpdf/tcpdf.php'); // Path to TCPDF library

// Fetch data from database
$query = "SELECT id, username, email, dateofbirth, telephone, gender FROM clients";
$result = mysqli_query($con, $query);

// Check for errors in query execution
if (!$result) {
    die('Error in SQL query: ' . mysqli_error($con));
}

// Create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', true);

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Fank');
$pdf->SetTitle('Elit Boxing Club '); // Update document title with website name
$pdf->SetSubject('Clients Data');
$pdf->SetKeywords('Clients, Data, PDF, Download');

// Remove default header/footer
$pdf->setPrintHeader(False);
$pdf->setPrintFooter(False);

// Add a page
$pdf->AddPage();
// Set path to the logo
$logoPath = 'images/logo.png'; // Update with the actual path to your logo file

// Add logo
$pdf->Image($logoPath, 10, 10, 10); // Adjust position and size as needed

// Set font for the title
$pdf->SetFont('helvetica', 'B', 16);

// Move to the right to make space for the logo
$pdf->Cell(30);

// Set font for the title
$pdf->SetFont('helvetica', 'B', 16);

// Add title
$pdf->Cell(0, 10, 'Elit Boxing Club', 0, 1, 'C');
$pdf->Cell(0, 10, 'Clients Data', 0, 1, 'C');

// Line break
$pdf->Ln(10);

// Set font for the table headers
$pdf->SetFont('helvetica', 'B', 11);

// Table headers
$headers = ['ID', 'Username', 'Email', 'Date of Birth', 'Telephone', 'Gender'];

$column_widths = [
    'id' => 20,
    'username' => 40,
    'email' => 60, // Increased width for email column
    'dateofbirth' => 30,
    'telephone' => 30,
    'gender' => 20
];

// Output table headers
foreach ($headers as $i => $header) {
    $pdf->Cell($column_widths[strtolower(str_replace(' ', '', $header))], 10, $header, 1, 0, 'C');
}
$pdf->Ln();

// Set font for the table rows
$pdf->SetFont('helvetica', '', 11);


// Output data of each row
while ($row = mysqli_fetch_array($result)) {
    $pdf->Cell(20, 10, $row['id'], 1, 0, 'L');
    $pdf->Cell(40, 10, $row['username'], 1, 0, 'L');
    $pdf->Cell(60, 10, $row['email'], 1, 0, 'L');
    $pdf->Cell(30, 10, $row['dateofbirth'], 1, 0, 'L');
    $pdf->Cell(30, 10, $row['telephone'], 1, 0, 'L');
    $pdf->Cell(20, 10, $row['gender'], 1, 1, 'L');
}

// Close and output PDF document
$pdf->Output('clients_data.pdf', 'D'); // 'D' downloads the file as attachment

// Free result set
mysqli_free_result($result);


mysqli_close($con);

