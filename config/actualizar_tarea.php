<?
require_once('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['taskId']) && isset($_POST['newListId'])) {
    $taskId = $_POST['taskId'];
    $newListId = $_POST['newListId'];
}
?>