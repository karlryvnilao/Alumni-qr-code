<?php
require_once 'connection.php';

function get_gallery()
{
    global $db;
    $sql = "SELECT * FROM `gallery` ORDER BY `uploaded_at` DESC LIMIT 6";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row) {
        $imagePath = "images/gallery/" . htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8');
        echo "Image Path: " . $imagePath . "<br>"; // Debugging line to show the path
        ?>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card">
                <img src="<?php echo $imagePath; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8'); ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8'); ?></h5>
                    <p class="card-text">Uploaded on: <?php echo htmlspecialchars($row['uploaded_at'], ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
            </div>
        </div>
<?php
    }
}
