
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    if (!is_dir("articles")) mkdir("articles");
    file_put_contents("articles/" . preg_replace('/[^a-zA-Z0-9]/', '_', $title) . ".txt", $content);
    echo "Article uploaded successfully!";
}
?>
<form method="POST">
  <input type="text" name="title" placeholder="Article Title" required><br>
  <textarea name="content" placeholder="Write article..." required></textarea><br>
  <button type="submit">Upload</button>
</form>
