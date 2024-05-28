
<?php 

    $obj = new Css_For_Elementor_Widget_List();

    $free_widgets           = $obj->Elementor_Free_Widget_List();
    $Free_Widget_Extender   = $obj->Elementor_Free_Widget_Extender_List();
    $pro_widgets            = $obj->Elementor_Pro_Widget_List();
    $Pro_Widget_extender    = $obj->Elementor_Pro_Widget_extender_List();

    //print_r($free_widgets);

    

?>



<div class="wrap cssef-pro-add-on-control">



    <div id="cssfe_widgetlist_tab" class="cssfe-ui-tabs">
        <ul>
            <li><a href="#tabs-1">Pro Features</a></li>
            <li><a href="#tabs-2">Free Features</a></li>
            <!-- <li><a href="#tabs-3">Feature Extender</a></li> -->
        </ul>

        <div id="tabs-1">
            <div class="postbox cssfe-bostbox" style="padding:15px;">
                <h4>Pro Widget Lists</h4> <a href="https://theinnovs.com/elementor-extender-pro" target="_blank" class="cssfe-pro-button"><i class="fas fa-hand-point-right"></i> Get Pro</a>
                <div class="row">

                    <?php 
                        foreach($pro_widgets as $list):
                    ?>
                    <div class="col-md-3">
                        <div class="meta-box cssfe-pro-box">
                            <p class="title"><?php echo __( $list['widget_name'], "css-for-elementor"); ?> <sup class="<?php echo $list['cat']; ?>">Pro</sup> <a href="https://theinnovs.com/elementor-extender-pro" target="_blank" title="More Details"><i class="fas fa-desktop"></i></a> <a href="https://docs.theinnovs.com/elementor-extender/" target="_blank" title="Documentation"><i class="far fa-question-circle"></i></a></p>
                            <p class="desc"><?php echo __( $list['widget_des'], "css-for-elementor"); ?></p>
                            <p class="feature-type">New Widget</p>
                        </div>
                    </div>

                    <?php endforeach; ?>
                
                </div>

            </div>

            <div class="postbox cssfe-bostbox" style="padding:15px;">
                <h4>Pro Widget Extender Lists</h4> <a href="https://theinnovs.com/elementor-extender-pro" target="_blank" class="cssfe-pro-button"><i class="fas fa-hand-point-right"></i> Get Pro</a>
                <div class="row">

                    <?php 
                        foreach($Pro_Widget_extender as $list):
                    ?>
                    <div class="col-md-3">
                        <div class="meta-box cssfe-pro-box">
                            <p class="title"><?php echo __( $list['widget_name'], "css-for-elementor"); ?> <sup class="<?php echo $list['cat']; ?>">Pro</sup> <a href="https://theinnovs.com/elementor-extender-pro" target="_blank" title="More Details"><i class="fas fa-desktop"></i></a> <a href="https://docs.theinnovs.com/elementor-extender/" target="_blank" title="Documentation"><i class="far fa-question-circle"></i></a></p>
                            <p class="desc"><?php echo __( $list['widget_des'], "css-for-elementor"); ?></p>
                            <p class="feature-type">Widget Extender</p>
                        </div>
                    </div>

                    <?php endforeach; ?>
                
                </div>

            </div>

        </div>

        <div id="tabs-2">
            <div class="wrap cssef-pro-add-on-control">
                <div class="postbox cssfe-bostbox" style="padding:15px;">
                    <h4>Free Widget Lists</h4>
                    <div class="row">

                        <?php 
                            foreach($free_widgets as $list):
                        ?>
                        <div class="col-md-3">
                            <div class="meta-box cssfe-pro-box">
                                <p class="title"><?php echo __( $list['widget_name'], "css-for-elementor"); ?><sup class="<?php echo $list['cat']; ?>">Free</sup> <a href="https://theinnovs.com/elementor-extender-pro" target="_blank" title="More Details"><i class="fas fa-desktop"></i></a> <a href="https://docs.theinnovs.com/elementor-extender/" target="_blank" title="Documentation"><i class="far fa-question-circle"></i></a> </p>
                                <p class="desc"><?php echo __( $list['widget_des'], "css-for-elementor"); ?></p>
                                <p class="feature-type free">New Widget</p>
                            </div>
                        </div>

                        <?php endforeach; ?>
                    
                    </div>
                </div>

                <div class="postbox cssfe-bostbox" style="padding:15px;">
                    <h4>Free Widget Extender Lists</h4>
                    <div class="row">

                        <?php 
                            foreach($Free_Widget_Extender as $list):
                        ?>
                        <div class="col-md-3">
                            <div class="meta-box cssfe-pro-box">
                                <p class="title"><?php echo __( $list['widget_name'], "css-for-elementor"); ?> <sup class="<?php echo $list['cat']; ?>">Free</sup> <a href="https://theinnovs.com/elementor-extender-pro" target="_blank" title="More Details"><i class="fas fa-desktop"></i></a> <a href="https://docs.theinnovs.com/elementor-extender/" target="_blank" title="Documentation"><i class="far fa-question-circle"></i></a> </p>
                                <p class="desc"><?php echo __( $list['widget_des'], "css-for-elementor"); ?></p>
                                <p class="feature-type free">Widget Extender</p>
                            </div>
                        </div>

                        <?php endforeach; ?>
                    
                    </div>
                </div>

            </div>
        </div>

        <!-- <div id="tabs-3">
            <div class="postbox cssfe-bostbox" style="padding:15px;">
                <h4>Pro Extender</h4> <a href="https://theinnovs.com/elementor-extender-pro" target="_blank" class="cssfe-pro-button"><i class="fas fa-hand-point-right"></i> Get Pro</a>
                <div class="row">

                    <?php 
                        //foreach($pro_Extendar as $list):
                    ?>
                    <div class="col-md-3">
                        <div class="meta-box cssfe-pro-box">
                            <p class="title"><?php //echo __( $list['widget_name'], "css-for-elementor"); ?> <a href="https://theinnovs.com/elementor-extender-pro" target="_blank" title="More Details"><i class="fas fa-desktop"></i></a> <a href="https://docs.theinnovs.com/elementor-extender/" target="_blank" title="Documentation"><i class="far fa-question-circle"></i></a> <span class="<?php //echo $list['cat']; ?>">Pro</span></p>
                            <p class="desc"><?php //echo __( $list['widget_des'], "css-for-elementor"); ?></p>
                        </div>
                    </div>

                    <?php //endforeach; ?>
                
                </div>
            </div>
        </div> -->
 
    </div>
   
</div>

