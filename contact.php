<?php 
    $pgName = 'Contact';
    include './templates/header.php';
?>
	<main class="col-1">
        <div>
	        <h1>Contact Us</h1>

	        <form action="/thank-you.php" method="post" class="contact">
	        
	            <div>
	                <label for="fn">Firstname: </label>
	                <input type="text" id="fn" name="fn" required>
	            </div>

	            <div>
	                <label for="fn">lastname: </label>
	                <input type="text" id="ln" name="ln" required>
	            </div>

	            <div>
	                <label for="em">Email: </label>
	                <input type="text" id="em" name="em" required>
	            </div>

	            <div>
	                <div>
	                    <input type="radio" id="ps" name="st" value="ps">
	                    <label for="ps" class="rd-label">Prospective Student</label>
	                </div>
	                <div>
	                    <input type="radio" id="cs" name="st" value="cs">
	                    <label for="cs" class="rd-label">Current Student</label>
	                </div>            
	            </div>

	            <div>
	                <label for="sn">BCIT Student Number: </label>
	                <input type="text" id="sn" name="sn" required pattern="[A-Za-z](\d{8})" title="Format: A12345678">
	            </div>

	            <div>
	                <label for="ct">Message: </label>
	                <textarea name="ct" id="ct"></textarea>
	            </div>
	        
	            <div>
	                <input type="submit" id="sb" name="sb" value="Submit">
	            </div>
	        
	        </form>
        </div>
<?php include './templates/footer.php'; ?>