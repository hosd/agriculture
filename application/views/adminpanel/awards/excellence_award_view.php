<?php
if ($cSaveStatus == "E") {
    $id = $edit_excellence_award[0]->id;
    $tContent = $edit_excellence_award[0]->tContent;
    $fImage1 = $edit_excellence_award[0]->fImage1;
    $fImage2 = $edit_excellence_award[0]->fImage2;
    $cEnable = $edit_excellence_award[0]->cEnable;
    $iOrder = $edit_excellence_award[0]->iOrder;
} else {
    $id = '';
    $tContent = '';
    $fImage1 = '';
    $fImage2 = '';
    $cEnable = '';
    $iOrder = '';
}
?>
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div style="text-align:center;">
            <div id="dialog" title="Error" style="display: none;">
                <p>Please fill required information.</p>
            </div>
            <?php
            $showinput = 1;
            if ($this->session->flashdata('message_saved') != "") {
                $showinput = 0;
                ?>
                <div  style="color:#096;">
                    <?php echo $this->session->flashdata('message_saved'); ?>
                </div>
                <?php
            }
            ?>
            <?php
            if ($this->session->flashdata('message_restricted') != "") {
                $showinput = 0;
                ?>
                <div  style="color:#F00;">
                    <?php echo $this->session->flashdata('message_restricted'); ?>
                </div>
                <?php
            }
            ?>
            <?php
            if ($this->session->flashdata('message_error') != "" || validation_errors() != "") {
                $showinput = 0;
                ?>
                <div  style="color:#F00;">
                    <?php
                    echo validation_errors('<div style="height:22px; padding:0px; margin-bottom:5px; " class="alert alert-danger" role="alert">', '</div>');
                    echo $this->session->flashdata('message_error');
                    ?>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <h2> CVCD Excellence Award</h2>
                        </div>
                        <ul class="nav navbar-right col-md-3 col-sm-3 col-xs-3">                           
                            <?php if($cSaveStatus == "E") { ?>
                            <li><a class="collapse-link" href="<?php echo base_url('adminpanel/awards/cvcd_excellence_award'); ?>" style="text-align:right;cursor:pointer;"><span class="btn btn-dark" style="color:#FFF;">Add Award</span>&nbsp;<i class="fa fa-chevron-down"></i></a></li>
                            <?php } else { ?>
                            <li><a class="collapse-link" style="text-align:right;cursor:pointer;"><span class="btn btn-dark"  style="color:#FFF;">Add Award</span>&nbsp;<i class="fa fa-chevron-down"></i></a></li>
                            <?php } ?>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                                
                    <div class="x_content" <?php
                    if ($cSaveStatus != "E") {
                        echo 'style="display:none;"';
                    }
                    ?>>
                        <br />
                        <form id="edit_excellence_award" name="edit_excellence_award" action="<?php echo base_url('adminpanel/awards/cvcd_excellence_award/save_cvcd_excellence_award'); ?>" method="post"  enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Content<span class="required">*</span></label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea rows="15" name="tContent" id="tContent" class="form-control col-md-7 col-xs-12" required><?php echo $tContent; ?></textarea>
                                        <?php echo display_ckeditor($ckeditor_tContent); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:20px;">                           
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name" >Image (Left)<br>
                                    </label>
                                    <div class="col-md-5 col-sm-5 col-xs-12" style="padding-top:8px;">
                                        <input type="file" id="fImage1" name="fImage1" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>>
                                    </div>                                    
                                </div> 
                                
                                <div class="item form-group">
                                    <?php if($fImage1!=''){ ?>
                                
                                    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name" >&nbsp;</label>
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'/front_img/'.$fImage1;?>" style="height:75px;"   />
                                        <!-- <a href="<?php echo base_url().'adminpanel/awards/research_committee/remove_image/'.$id.'/fChairmenImage/'.$fChairmenImage;?>">Remove image</a>  -->
                                    </div>
                               
								    <?php } ?>
                                </div>

                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:20px;">                           
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name" >Image (Right)<br>
                                    </label>
                                    <div class="col-md-5 col-sm-5 col-xs-12" style="padding-top:8px;">
                                        <input type="file" id="fImage2" name="fImage2" <?php if ($cSaveStatus != "E") {?> required  <?php } ?>>
                                    </div>                                    
                                </div> 
                                
                                <div class="item form-group">
                                    <?php if($fImage2!=''){ ?>
                                
                                    <label class="control-label col-md-1 col-sm-1 col-xs-1" for="first-name" >&nbsp;</label>
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <img class="img-responsive" src="<?php echo base_url().'/front_img/'.$fImage2;?>" style="height:75px;"   />
                                        <!-- <a href="<?php echo base_url().'adminpanel/awards/research_committee/remove_image/'.$id.'/fChairmenImage/'.$fChairmenImage;?>">Remove image</a>  -->
                                    </div>
                               
								    <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="item form-group">
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="vProTitle">Display Order <span class="required">*</span></label>
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <input type="text" id="iOrder" name="iOrder" value="<?php echo $iOrder; ?>" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>
                            </div>

                            <div style="clear:both;"></div>
                            <div class="ln_solid" style="margin-top:2px; margin-bottom:8px;"></div>
                            
                            <div class="form-group" style="margin-bottom:0px;">
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                    <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">

                                    <input type="hidden" id="uploadpath" name="uploadpath" value="front_img">
                                    <input type="hidden" id="cEnable" name="cEnable" value="<?php echo $cEnable ?>">
                                    <input type="hidden" id="cSaveStatus" name="cSaveStatus" value="<?php echo $cSaveStatus; ?>">
                                    <button type="button" class="btn btn-default pull-right" onclick="document.location.href = '<?php echo base_url('adminpanel/awards/cvcd_excellence_award'); ?>';">Cancel</button>
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style=" padding-top:0px;">
                    <div class="x_content">
                        <table id="example" class="table table-striped responsive-utilities jambo_table">
                            <thead>
                                <tr class="headings">
                                    <th style="display:none;">ID </th>
                                    <th style="width:50px;text-align:center;">No </th>
                                    <th>Description </th>                                  
                                    <th style="width:80px;text-align:center;">Order </th>
                                    <th style="width:80px; text-align:center">Edit </th>
                                    <th style="width:80px; text-align:center">Status </th>
                                    <th style="width:80px; text-align:center">Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $oddeven_count = 0;
                                $no_count = 0;
                                if (count($award_data) != 0) {
                                    foreach ($award_data as $rowlist) {
                                        $oddeven_count++;
                                        $no_count++;
                                        if ($oddeven_count == 1) {
                                            $oddeven = 'even pointer';
                                        } else {
                                            $oddeven = 'odd pointer';
                                            $oddeven_count = 0;
                                        }

                                        $recordid = $rowlist->id;
                                        $cEnable = $rowlist->cEnable;
                                        if ($cEnable == 'Y') {
                                            $clicon = 'fa fa-check';
                                        } else {
                                            $clicon = 'fa fa-remove';
                                        }
                                        ?>
                                         
                                        <tr class="<?php echo $oddeven; ?>">
                                            <td class="a-center " style="display:none;"><?php echo $no_count; ?></td>
                                            <td style="text-align:center;"><?php echo $no_count; ?></td>
                                            <td><?php echo $rowlist->tContent;?></td>                               
                                            <td style="text-align:center;"><?php echo $rowlist->iOrder; ?></td>
                                            <td style="text-align:center;"><a href="<?php echo base_url() . "adminpanel/awards/cvcd_excellence_award/edit_excellence_award/$recordid" ?>">
                                                    <i class="fa fa-edit"></i></a>
                                            </td>
                                            <td style="text-align:center;"><a  href="<?php echo base_url() . "adminpanel/awards/cvcd_excellence_award/change_status/status/$recordid" ?>" onclick="return confirm('Are you sure?')">
                                                    <i class="<?php echo $clicon; ?>"></i></a>
                                            </td>
                                            <td class="a-right a-right" style="text-align:center;"><a  href="<?php echo base_url() . "adminpanel/awards/cvcd_excellence_award/delete_record/delete/$recordid" ?>" onclick="return confirm('Are you sure?')">
                                                    <i class="fa fa-trash-o"></i></a></td>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .DTTT_container
        {
            display:none !important;
            visibility:hidden !important;
        }
        .alert
        {
            margin-left: 161px;
            border-style: none;
        }			
    </style>
   

</div>
