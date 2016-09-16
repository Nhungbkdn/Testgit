<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/shophoa/template/public/inc/header.php';?>
		<div class="center_content">
			<form>
			<div class="left_content">
				<div class="crumb_nav">
					<a href="/">Trang chủ</a> &gt;&gt; Đăng ký
				</div>
				<div class="title">
					<span class="title_icon">
						<img alt="" src="images/bullet1.gif"> 
					</span> Đăng ký tài khoản
				</div>
				<div class="dangnhap">
		        	<div class="col-content">
		        		        		<p>
		        			Họ và tên: <br>
		        			<input type="text" required="" value="" name="hoten">
		        		</p>
		        		<p>
		        			Số phone: <br>
		        			<input type="text" required="" value="" name="phone">
		        		</p>
		        		<p>
		        			Địa chỉ: <br>
		        			<input type="text" required="" value="" name="diachi">
		        		</p>
		        		<p>
		        			Tên đăng nhập: <br>
		        			<input type="text" required="" value="" name="username">
		        		</p>
		        		<p>
		        			Mật khẩu: <br>
		        			<input type="password" required="" value="" name="password">
		        		</p>
		        		<p>
		        			<input type="submit" value="Đăng ký" name="submit">
		        			<input type="reset" value="Nhập lại" name="reset">
		        		</p>
		        	</div>
		        <div class="clear"></div>
			</div>
				<div class="clear"></div>
			</div>
			</form>
			<!--end of left content-->

			<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/shophoa/template/public/inc/right_content.php';?>
			<!--end of right content-->

<div class="clear"></div>
</div>
<!--end of center content-->
<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/shophoa/template/public/inc/footer.php';?>
