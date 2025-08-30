<?php
    if (isset($_GET['excluir'])) {
        $idExcluir = intval($_GET['excluir']);
        Painel::deletar('tb_site.depoimentos', $idExcluir);
        Painel::redirect(INCLUDE_PATH_PAINEL . 'listar-depoimentos');
    } else if (isset($_GET['order']) && isset($_GET['id'])) {
        Painel::orderItem('tb_site.depoimentos', $_GET['order'], $_GET['id']);
    }

    $paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $porpagina = 4;
    $start = ($paginaAtual - 1) * $porpagina;
    $depoimentos = Painel::selectAll('tb_site.depoimentos', $start, $porpagina);
?>

<div class="box-content">
    <h2><ion-icon name="document-text-outline"></ion-icon> Depoimentos Cadastrasdos</h2>

    <table>
        <tr>
            <td>Nome</td>
            <td>Data</td>
            <td>#</td>
            <td>#</td>
            <td>#</td>
            <td>#</td>
        </tr>
        <?php
        foreach ($depoimentos as $key => $value) {
        ?>
            <tr>
                <td><?php echo $value['nome']; ?></td>
                <td><?php echo $value['data']; ?></td>
                <td><a class="btn edit" href="<?php echo INCLUDE_PATH_PAINEL; ?>editar-depoimento?id=<?php echo $value['id']; ?>"><ion-icon name="pencil"></ion-icon>Editar</a></td>
                <td><a actionBtn="delete" class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL; ?>listar-depoimentos?excluir=<?php echo $value['id']; ?>"><ion-icon name="close"></ion-icon>Excluir</a></td>
                <td><a class="btn order" href="<?php echo INCLUDE_PATH_PAINEL; ?>listar-depoimentos?order=up&id=<?php echo $value['id']; ?>"><ion-icon name="chevron-up"></ion-icon></a></td>
                <td><a class="btn order" href="<?php echo INCLUDE_PATH_PAINEL; ?>listar-depoimentos?order=down&id=<?php echo $value['id']; ?>"><ion-icon name="chevron-down"></ion-icon></a></td>
            </tr>
        <?php } ?>
    </table>
    <div class="paginacao">
        <?php
            $totalPagina = ceil(count(Painel::selectAll('tb_site.depoimentos')) / $porpagina);
            
            for($i = 1; $i <= $totalPagina; $i++){
                if($i == $paginaAtual){
                    echo '<a class="page-selected" href="'.INCLUDE_PATH_PAINEL.'listar-depoimentos?pagina='.$i.'">'.$i.'</a>';
                }else{
                    echo '<a href="'.INCLUDE_PATH_PAINEL.'listar-depoimentos?pagina='.$i.'">'.$i.'</a>';
                }
            }
        ?>
    </div>
</div><!--box-content-->
