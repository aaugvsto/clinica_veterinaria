<?php
    $consult = "SELECT * FROM exibiranimais";
    $con = $mysqli->query($consult) or die ($mysqli->error);
?>
<div style="padding: 20px; display: flex;">
    <table class="center">
        <tr>
            <td>Nome</td>
            <td>Raça</td>
            <td>Sexo</td>
            <td>Dono</td>
            <td>Procedimento</td>
        </tr>
        <?php while ($dado = $con->fetch_array()) { ?>
            <tr>
                <td><?php echo $dado["nome"] ?></td>
                <td><?php echo $dado["raca"] ?></td>
                <td><?php echo $dado["sexo"] ?></td>
                <td><?php echo $dado["nome_dono"] ?></td>
                <td><?php echo $dado["tipo_procedimento"] ?></td>
            </tr>
        <?php } ?>
    </table>
</div>