<?php
    $numero = $_POST['Numero'];
    function factorial($numero) : int {
        $factorial = 1;
        for ($f = $numero; $f >= 1; $f--) {
            $factorial *= $f;
        }
        return $factorial;
    }
?>
<table border="1">
    <?php
        for ($i = 0; $i <= 10; $i++):
            ?>
            <tr>
                <td><?php echo "$numero x $i:"; ?></td>
                <td><?php echo $numero * $i; ?></td>
            </tr>
        <?php endfor; ?>
    <?php
        $factorial = factorial($numero);
    ?>
    <tr>
        <td><?php echo "$numero!"; ?></td>
        <td><?php echo $factorial; ?></td>
    </tr>
</table>