<?php 
    $pgName = 'Contact';
    include './templates/header.php';
?>
        <div>
            <h1>Thank You</h1>

            <?php if(isset($_POST['fn'])): ?>

            <p>Thank you <?php echo trim(ucwords(strtolower($_POST['fn']))); ?> for contacting us. We will get back to you soon.</p>

            <p>The COMP1950 Team!</p>

            <?php endif ?>
        </div>
<?php include './templates/footer.php'; ?>