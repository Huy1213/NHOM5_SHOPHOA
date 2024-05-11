
   <?php
	session_start();
	$hoten = isset($_POST['hoten']) ? $_POST['hoten'] : '';
	
	$err = '';
	if(isset($_POST['btnlogin']))
	{
		if($hoten != '')
		{
			$_SESSION['hoten'] = $hoten;	
			header('Location:layma.php');
			exit();
		}
		else
		{
			$err = 'Vui lòng nhập đầy đủ thông tin';
		}
	}
?>
        <form action="layma.php" method="post">		 
                <label for="hoten">Họ và tên</label>
                <input type="text" id="hoten" name="hoten" required>
                <button type="submit" name="btnlogin"> dsad</button>
          	
        </form>
    </div>
</body>
</html>