<?php
    include "../db_info.php";
?>
<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
?>
<?php
    session_save_path('../../session');
    session_start();

    if(isset($_SESSION['name'])) {
        $name = $_SESSION['name'];
    } else {
        $name = "wrong";
        echo "<script>alert('허가되지 않은 접근!');</script>";
        echo "<script>location.href='../../login/login.html'</script>";
    }
?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>게시판</title>
	<link rel="stylesheet" type="text/css" href="./css/read.css?v=<?php echo date("Y-m-d H:i:s",time());?>">
</head>
<body>
	<?php
		$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
		$hit = mysqli_fetch_array(sq("select * from board where idx ='".$bno."'"));
		$hit = $hit['hit'] + 1;
		$fet = sq("update board set hit = '".$hit."' where idx = '".$bno."'");
		$sql = sq("select * from board where idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$board = $sql->fetch_array();
	?>
<!-- 글 불러오기 -->
<div id="board_read">
	<h2 class="title">
		<?php echo $board['title']; ?>
	</h2>
	<hr>
		<div id="user_info">
			<h3 class="writer"><?php echo $board['id']; ?></h3>
			<p class="date_hit"></p>시간 : <?php echo $board['date']; ?> 조회:<?php echo $board['hit']; ?></p>
		</div>
		<div id="content">
			<?php echo nl2br("$board[content]"); ?>
		</div>
</div>
	<!-- 목록, 수정, 삭제 -->
	<div id="bo_ser" class="bo_ser">
		<ul>
			<li><a href="../index.php">[목록으로]</a></li>
			<!-- <li><a href="modify.php?idx=<?php // echo $board['idx']; ?>">[수정]</a></li> -->
			<!-- <li><a href="delete.php?idx=<?php // echo $board['idx']; ?>">[삭제]</a></li> -->
		</ul>
	</div>
<!--- 댓글 불러오기 -->
<div class="reply_view">
	<h3>댓글목록</h3>
		<?php
			$sql3 = sq("select * from reply where con_num='".$bno."' order by idx asc");
			while($reply = $sql3->fetch_array()) { 
		?>
		<div class="dap_lo">
			<div class="rep_me dap_to"><?php echo $reply['date']; ?></div>
			<b><?php echo $reply['id'];?></b>
			<div class="dap_to comt_edit"><?php echo nl2br("$reply[content]"); ?></div>
			<div class="rep_me rep_menu"></div>
		</div>
	<?php } ?>

	<!--- 댓글 입력 폼 -->
	<div class="dap_ins">
		<form action="reply_ok.php?idx=<?php echo $bno; ?>" method="POST">
			<?php echo $name; ?>
			<div style="margin-top:10px; ">
				<textarea name="content" class="reply_content" id="re_content" ></textarea>
				<button id="rep_bt" class="re_bt">댓글</button>
			</div>
		</form>
	</div>
</div><!--- 댓글 불러오기 끝 -->
<div id="foot_box"></div>
</div>
</body>
</html>