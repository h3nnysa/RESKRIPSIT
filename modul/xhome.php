			
			
			<p/><p/><table height="20px"  width="300px" bgcolor="" align="center">
			<td colspan="2"><div align="center"><font size="1px" color="red">
			<!-- Page Head -->
                <?php if(isset($_GET['sukses'])){?>
                <div class="notification success png_bg">
				<a href="#" class="close"><img src="images/icons/active.png" title="Close this notification" alt="close" /></a>
				<div><?php echo $_GET['sukses'];?></div>
				</div>
				<?php } ?>
				
				<?php if(isset($_GET['gagal'])){?>
                <div class="notification error png_bg">
				<a href="#" class="close"><img src="images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div><?php echo $_GET['gagal'];?></div>
				</div>
				<?php } ?>
			
			<!--<p>
			<h3>Selamat datang, <?php if ($_SESSION['level']==1){echo $_SESSION['userid'];}else{echo ucwords(strtolower($_SESSION['userid']));}?>.<h3/>
			<?php
			 if($_SESSION['level']==10){
			?>
			<br/><br/>
			<h3>Anda Login sebagai Member,
			<br/>Segera <a href="home.php?page=gpass">ganti password</a> anda untuk menjaga keamanan data anda.</h3>
			<?php
			}else if($_SESSION['level']==50){
			?>
			<br/><br/>
			<h3>Anda Login sebagai ADMIN,
			<br/>Segera ganti password</a> anda untuk menjaga keamanan data anda.</h3>
			<?php
			}
			?>
			
			</h3><hr/>-->
			</div></td></fieldset> 
			</table>
			