<?php
$sideBar = "hobbies-sidebar.inc.php";
?>
		<?php if(!empty($sideBar)) {
			require("includes/$sideBar");
		}
		?>
		</div>
		<footer>
			&copy; 201? YOUR NAME
			&nbsp;&nbsp;&nbsp;
			<a href="<?= PROJECT_DIR ?>privacy-policy.php">Privacy Policy</a>
		</footer>
		<div id="mobile-nav-button">&#9776;</div>
	</body>
</html>