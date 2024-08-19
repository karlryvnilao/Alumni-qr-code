<?php
$sql = "
SELECT 
  b.id AS batch_id,
  b.year AS batch_year
FROM 
  batch b
JOIN 
  students s ON b.id = s.batch
JOIN 
  courses c ON s.course = c.id
GROUP BY 
  b.id
ORDER BY 
  b.year DESC;
";

$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<div class="row">';  // Start the row

foreach ($result as $row) {
  $batchYear = htmlspecialchars($row['batch_year']);
  $batchId = htmlspecialchars($row['batch_id']);
  $imageSrc = "path_to_image/{$batchId}.jpg"; // Placeholder for batch image
  $galleryUrl = "gallery.php?batch_id={$batchId}"; // URL to gallery page

  echo '<div class="col-md-4 mb-4">';  // 3 cards per row
  echo '<div class="card h-100 shadow-sm">'; // h-100 makes cards the same height

  // Card Header: Batch Year
  echo '<div class="card-header text-center">';
  echo '<h4>' . $batchYear . '</h4>';
  echo '</div>';

  // Card Image: Placeholder Image
  echo '<img src="' . $imageSrc . '" class="card-img-top" alt="Batch Image">';

  // Card Body: Button Only
  echo '<div class="card-body text-center">';
  echo '<a href="' . $galleryUrl . '" class="btn btn-primary">View Gallery</a>';
  echo '</div>';

  echo '</div>'; // Close card
  echo '</div>'; // Close col-md-4
}

echo '</div>';  // Close the row
?>
