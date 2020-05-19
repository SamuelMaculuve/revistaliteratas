<?php
/**
 * Created by PhpStorm.
 * User: gcondula
 * Date: 1/21/2019
 * Time: 9:23 AM
 */
?>
<!--
  SECTION
      NAME: SECÇÃO DE TEMPLATE DEFAULT PARA O Formulario para Pesquisas
  IMPLEMENTATION FUNCTIONS:
  DESCRIPTION:
-->
<form role="search" method="get" action="<?php echo home_url('/'); ?>">
    <div class="form-group text-center">
        <label for=""></label>
        <div class="input-group mb-3">
            <input type="search" name="s" class="form-control text-center" placeholder="Digite o Que Procura!!!" aria-label="Recipient's username" aria-describedby="button-addon2" value="<?=get_search_query();?>">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </div>
         <small id="helpId" class="text-muted">Pode Pesquisar por outros conteúdos aqui!!!</small>
            <hr class="my-2">
    </div>
</form>