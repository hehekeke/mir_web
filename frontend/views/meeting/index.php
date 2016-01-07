<style type="text/css">
    .h6-1{
        width: 55%;
        margin-left: 10px;
    }
    .h6-2{
        width: 20%;
        margin-left: 10px;
    }
    .h6-3{
        width: 20%;
        margin-left: 10px;
    }
    .scroll{
        border-bottom: 1px dashed grey;
    }
    a{
        color: black;
    }
</style>
<div class="indexTop _pc">
    <img src="/public/frontend/img/indexTop.png" class="img-responsive"></div>
<div class="content _pc">
    <div class="pull-left content-left">
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active">
                <a href="#home" role="tab" data-toggle="tab">学术会议</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="scroll" data-spy="scroll" data-target="#myScrollspy" data-offset="0" style="height:242px;overflow:auto; position: relative;">
                <?php for($i=0;$i<count($xueshuMeetings);$i++){ ?>
                <a href="">
                    <div>
                        <h6 class="pull-left h6-1">
                            &bull;
                            <?php echo $xueshuMeetings[$i]->meeting_name;?></h6>
                        <h6 class="pull-left h6-2">
                            [
                            <?php echo $xueshuMeetings[$i]->meeting_loc;?>]</h6>
                        <h6 class="pull-left h6-3"><?php echo $xueshuMeetings[$i]->meeting_bdate;?></h6>
                        <div class='clearfix'></div>
                    </div>
                </a>
                <?php }?></div>

        </div>
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active">
                <a href="#home" role="tab" data-toggle="tab">展会信息</a>
            </li>
        </ul>
        <div class="tab-content">

            <div class="scroll" data-spy="scroll" data-target="#myScrollspy" data-offset="0" style="height:242px;overflow:auto; position: relative;">
                <?php for($i=0;$i<count($zhanhuiMeetings);$i++){ ?>
                <a href="">
                    <div>
                        <h6 class="pull-left h6-1">
                            &bull;
                            <?php echo $zhanhuiMeetings[$i]->meeting_name;?></h6>
                        <h6 class="pull-left h6-2">
                            [
                            <?php echo $zhanhuiMeetings[$i]->meeting_loc;?>]</h6>
                        <h6 class="pull-left h6-3"><?php echo $zhanhuiMeetings[$i]->meeting_bdate;?></h6>
                        <div class='clearfix'></div>
                    </div>
                </a>
                <?php }?></div>
            </div>

        </div>
    </div>
    <div class="pull-left content-right rendian">
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active" style="border-bottom:9px solid orange;">
                <a href="#home" role="tab" data-toggle="tab" style="color:orange;">最新会议</a>
            </li>
        </ul>
        <div class="tab-content tab-div" style="border-bottom: 1px dashed grey;">
            <?php for($i=0;$i<count($newMeetings);$i++){ ?>
            <a href="">
                <h6>
                    &bull;
                    <?php echo $newMeetings[$i]->meeting_name;?></h6>
            </a>
            <?php }?></div>

    </div>
    <div class="clearfix"></div>
</div>