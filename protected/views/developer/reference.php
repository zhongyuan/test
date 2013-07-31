<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$this->widget('SearchWidget');
?>
<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/default.css"  />-->
<style>
#body-content {
margin: 0;
}
.wrap{
    width: 100%;
    min-width: 600px;
    clear: both;
}
div{
    display: block;
}
#devdoc-nav.fixed {
position: fixed;
margin: 0;
top: 20px;
}
#api-nav-header {
height: 19px;
font-size: 14px;
padding: 8px 0;
margin: 0;
border-bottom: 1px solid #CCC;
background: #e9e9e9;
background: rgba(0, 0, 0, 0.05);
}
#api-level-toggle {
float: right;
padding: 0 5px;
}
#api-level-toggle label {
margin: 0;
vertical-align: top;
line-height: 19px;
font-size: 13px;
height: 19px;
}
#api-nav-title {
padding: 0 5px;
white-space: nowrap;
}
#nav-tree{
    display: none;
    overflow: hidden;
    padding: 0px;
    width: 0px;
}
.ui-resizable {
position: relative;
}
</style>
<div class="wrap clearfix" id="body-content">
    <div class="col-4" id="side-nav" itemscope itemtype="http://schema.org/SiteNavigationElement">
      <div id="devdoc-nav" class="fixed" style="width: 280px; left: 20px;">

            <div id="api-nav-header">
                <div id="api-level-toggle">
                  <label for="apiLevelCheckbox" class="disabled">API level: </label>

                </div><!-- end toggle -->
                <div id="api-nav-title">Android APIs</div>
            </div>

          <!-- 列表 -->
          <div id="swapper" style="height: 507px;">
              <div id="nav-panels">
                    <div id="resize-packages-nav" style="height: 288px; top: 0px; left: 0px; width: 280px;" class="ui-resizable">
                        <div id="packages-nav" class="scroll-pane jspScrollable" style="overflow: hidden; padding: 0px; height: 288px; width: 280px;">
                            <div class="jspContainer" style="width: 280px; height: 288px;">
                                <div class="jspPane" style="padding: 0px; top: -3407px; width: 276px;">

                                </div>
                            </div>
                        </div>
                    </div>


              </div>
              <div id="nav-tree"  class="scroll-pane">

              </div>
          </div>

      </div>
    </div>


</div>