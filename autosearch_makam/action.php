<?php
  require_once 'config.php';

  $searchText = $_POST['query'];
  $query = "SELECT nama_makam FROM list_makam WHERE nama_makam LIKE '%$searchText%' ORDER BY nama_makam LIMIT 10";
  $result = mysqli_query($conn, $query);
  
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<a href="#" class="list-group-item list-group-item-action">' . $row['nama_makam'] . '</a>';
    }
  } else {
    echo '<p>No Results Found</p>';
  }
?>
