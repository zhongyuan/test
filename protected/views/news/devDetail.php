<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php $this->widget('DevWidget');?>
<style>
    .dev_dbody{
        padding: 20px 70px;
    }
    .dev_dphoto{
        text-align: center;
        margin: 20px auto;
    }
    .dev_dtitle{
        display: block;
        font-size: 24px;
        color: #e69c42;
        margin: 10px auto;
        text-align: center;
    }
    .dev_dbody p{
        text-indent: 35px;
    }
</style>
<div class="dev_dbody">

    <div id="devDetail_replace">
            <div>
                <span class="dev_dtitle">1.5GHz四核超强99张连拍HTC One X</span>

                <div class="dev_content">
                    <?php echo $news_detail; ?>
                </div>
            </div>

             <!-- ===========================翻页====================== -->
            <div class="green-black">

                <?php $this->widget('MyLinkPager',array(
                    'pages' => $pages,
                ));?>

            </div>

     </div>



</div>

    <script>
        $(function(){
            $('.yiiPager a').click(function(){
                $.ajax({
                    url:$(this).attr('href'),
                    success:function(res){
                        $('#devDetail_replace').html(res);
                    }
                });
                return false;
            });
        });
    </script>