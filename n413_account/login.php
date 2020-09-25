<?php
    include("head.php");
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h2>Full Stack Amp Jam Log-in</h2>
        </div> <!-- /col-12 -->
    </div> <!-- /row -->
    <form method="POST" action="n413auth.php">
    <div class="row mt-5">
        <div class="col-4"></div>  <!-- spacer -->
        <div id="form-container" class="col-4">
            User Name: <input type="text" id="username" name="username" class="form-control" value="" placeholder="Enter User Name" required/><br/>
            Password: <input type="password" id="password" name="password" class="form-control" value="" placeholder="Enter Password" required/><br/>
            <button type="submit" id="submit" class="btn btn-primary float-right">Submit</button>
        </div>  <!-- /#form-container -->
    </div><!-- /.row -->
    </form>
</div>
</form>
</body>
<script>
    var this_page = "login";
    var page_title = 'AMP JAM Site | Login';
		
    $(document).ready(function(){ 
            document.title = page_title;
            navbar_update(this_page);
        }); //document.ready
</script>
</html>