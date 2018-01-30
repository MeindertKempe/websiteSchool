<hr class="divider">
<div class="commentWrapper">
	<form class="commentForm" action="scripts/saveCommentScript.php" method="post">
		<input id="commentTitle" class="field commentTitleField" type="text" name="commentTitle" placeholder="Titel">
		<br>
		<textarea name="commentContent" id="commentContent" rows="10" class="field commentField" placeholder="Comment..."></textarea>
		<br>
		<input class="commentButton" type="submit" value="comment">
	</form>
</div>

<?php
include('scripts/getCommentScript.php');
?>
