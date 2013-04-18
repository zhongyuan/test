
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