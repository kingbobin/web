<?php
include_once "validation.php";
include_once "directAccess.php";
include_once "apis/query.php";
    
$commentID = $_GET['commentID'];
$postID = $_GET['postID'];
$id = $_GET['id'];

validate($commentID);

$sql = delete('comment',$id);     
$result = mq($sql);

if($result){
    echo "삭제되었습니다.";
}

$goback = "";
$goback .= "<a href=post_in.php?id=$postID>";
$goback .= "뒤로가기";
$goback .= "</a>";

echo $goback;
    
?>