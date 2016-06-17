<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<?php echo $this->Html->css('default'); ?>

<div>
    <div class="topbar">
        
    </div>
    <div class="sidebar">
        <div id="top_button">
            X
        </div>
        <div id="entries">
            <div class="item <?php if (true):?>active<?php endif; ?>">
                <div>
                    <div style="display: inline-block;">X</div>
                    <div class="item_link" style="display: inline-block;"><?php echo $this->Html->link('Home', array('controller' => 'home', 'action' => 'index')); ?></div>
                </div>
            </div>
            <div class="item <?php if (true):?>active<?php endif; ?>">
                <div>Eintrag 2</div>
            </div>
            <div class="item <?php if (true):?>active<?php endif; ?>">
                <div>Eintrag Neu</div>
            </div>
        </div>
    </div>
<script>
    $("#top_button").click(function () {
        if ($(".sidebar").width() < 50) {
            $(".item_link").toggle();
            $(".item").removeClass("mini");
            $(".item").addClass("max");
            $(".sidebar").animate({
                width: "300px"   
            }, {
                duration: 200,
                specialEasing: {
                    width: 'linear'
                }
            });
            $(".topbar").animate({
                height: "30px"   
            }, {
                duration: 200,
                specialEasing: {
                    width: 'linear'
                }
            });
        } else {
            $(".item_link").toggle();
            $(".item").removeClass("max");
            $(".item").addClass("mini");
            $(".sidebar").animate({
                width: "40px"   
            }, {
                duration: 200,
                specialEasing: {
                    width: 'linear'
                }
            });
            $(".topbar").animate({
                height: "100px"   
            }, {
                duration: 200,
                specialEasing: {
                    width: 'linear'
                }
            });
        }
    });
</script>