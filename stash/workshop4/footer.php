<?php
$footerMenu = [
    ["name" => "Legal", "link" => "legal.php"],
    ["name" => "Terms & Condition", "link" => "terms.php"],
]
?>
    
    <footer>
        <ul>
            <?php generateMenu($footerMenu) ?>
        </ul>
    </footer>
</body>
</html>