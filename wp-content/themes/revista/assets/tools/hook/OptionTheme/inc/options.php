<?php
/**
 * Created by PhpStorm.
 * User: gcondula
 * Date: 1/24/2019
 * Time: 9:39 AM
 */
?>
<script type="text/javascript" src="<?=bloginfo('template_url');?>/assets/node_modules/jquery/dist/jquery.js"></script>
<script type="text/javascript" src="<?=bloginfo('template_url');?>/assets/src/js/js.js"></script>
<script type="text/javascript" src="<?=bloginfo('template_url');?>/assets/node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script type="text/javascript" src="<?=bloginfo('template_url');?>/assets/node_modules/popper.js/dist/popper.js"></script>

<link rel="stylesheet" href="<?=bloginfo('template_url');?>/style.php">
<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/src/css/estilo.css">
<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/node_modules/bootstrap/dist/css/bootstrap.css">
<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/node_modules/font-awesome/css/font-awesome.css">

<div class="container mt-5 socialIconsOptions">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-3 options-flex-column">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a href="#v-pills-Icons"    id="v-pills-Icons-tab" class="nav-link active" data-toggle="pill" role="tab" aria-controls="v-pills-Icons" aria-selected="true">Excerto</a>
                <a href="#v-pills-profile" id="v-pills-profile-tab" class="nav-link" data-toggle="pill" role="tab" aria-controls="v-pills-profile" aria-selected="false">Mapa do Site</a>
                <a href="#v-pills-message" id="v-pills-message-tab" class="nav-link" data-toggle="pill" role="tab" aria-controls="v-pills-message" aria-selected="false">#</a>
                <a href="#v-pills-setting" id="v-pills-setting-tab" class="nav-link" data-toggle="pill" role="tab" aria-controls="v-pills-setting" aria-selected="false">#</a>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-9 options-tab-content">
            <div class="tab-content" id="v-pills-tabContenet">
                <div id="v-pills-Icons" class="tab-pane fade show active" role="tabpanel" aria-labelledby="v-pills-Icons-tab">
                    <div class="container">
                        <h5>Excerto</h5>
                        <hr>
                        <form method="post" action="options.php">
                            <?php wp_nonce_field('update-options'); ?>
                            <div class="form-group row">
                                <label for="excerto_id_" class="col-sm-1 col-form-label">Excerto</label>
                                <div class="col-sm-11">
                                    <textarea class="form-control" type="text" name="excerto_name_" id="excerto_id_" rows="6"><?= get_option('excerto_name_'); ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-11 ml-auto">
                                    <input type="submit" id="Excerpt_Submit" name="Submit" value="Store Options" class="btn btn-success" />
                                    <input type="hidden" name="action" value="update" />
                                    <input type="hidden" name="page_options" value="excerto_name_" />
                                </div>
                            </div>
                        </form>
                        <div class="alert alert-success" id="Excerpt_alert_Success" role="alert"></div>
                    </div>
                </div>
                <div id="v-pills-profile" class="tab-pane fade" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="container">
                        <h5>Mapa do Site</h5>
                        <hr>
                        <form action="options.php" method="post">
                            <?php wp_nonce_field('update_options'); ?>
                            <div class="form-group row">
                                <label for="firstRow_map" class="col-sm-2 col-form-label">Primeira Coluna</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" min="1" max="20" name="first_row_map_name" id="firstRow_map" value="<?= get_option('first_row_map_name')?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="firstRow_map" class="col-sm-2 col-form-label" style="font-size: 97%">Segunda Coluna</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" min="1" max="20" name="first_row_map_name" id="firstRow_map" value="<?= get_option('first_row_map_name')?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="firstRow_map" class="col-sm-2 col-form-label">Terceira Coluna</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" min="1" max="20" name="first_row_map_name" id="firstRow_map" value="<?= get_option('first_row_map_name')?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="firstRow_map" class="col-sm-2 col-form-label">Quarta Coluna</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" min="1" max="20" name="first_row_map_name" id="firstRow_map" value="<?= get_option('first_row_map_name')?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="firstRow_map" class="col-sm-2 col-form-label">Quinta Coluna</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" min="1" max="20" name="first_row_map_name" id="firstRow_map" value="<?= get_option('first_row_map_name')?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="firstRow_map" class="col-sm-2 col-form-label">Sexta Coluna</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" min="1" max="20" name="first_row_map_name" id="firstRow_map" value="<?= get_option('first_row_map_name')?>">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="v-pills-message" class="tab-pane fade" role="tabpanel" aria-labelledby="v-pills-message-tab">
                    <h1>Nothing yet</h1>
                </div>
                <div id="v-pills-setting" class="tab-pane fade" role="tabpanel" aria-labelledby="v-pills-setting-tab">
                    <h1>Nothing yet</h1>
                </div>
            </div>
        </div>
    </div>
</div>
