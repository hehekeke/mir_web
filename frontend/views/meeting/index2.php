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
    .neirong_date{
        border-bottom: 1px dashed grey;
        border-top: 1px dashed grey;
        
    }
    .zhangtai{
        display: inline-block;
        margin-left: 30px;
    }
    .shuoming{
        margin-top: 40px;
        font-size: 24px;
        margin-bottom: 20px;
        border-bottom: 1px solid black;
    }
    .tab-content  .table{
        width: 90%;
        margin-top: 40px;
    }
    .first{
        text-align: center;
        width: 21%;
    }
      .breadcrumb > li + li:before {
        color: #CCCCCC;
        content: ">";
        padding: 0 5px;
    }
    .breadcrumb a{
        font-size: 19px;
    }
</style>
<div class="content _pc">
    <div class="pull-left content-left">
        <ol class="breadcrumb _pc">
            <li>
                <a href="/frontend/web/">首页</a>
            </li>
            <li>
                <a href="/frontend/web/index.php?r=meeting/index">
                    <?php if($model->meeting_class == '1'){?>
                        学术会议
                    <?php }else{ ?>
                        展会信息
                    <?php }?>
                </a>
            </li>
        </ol>
        <div class="tab-content">
            <div>
                <h3 class="text-center">
                    <?php echo $model->meeting_name;?></h3>
                <div class="neirong_date">
                    <span>发布时间：2015-3-28</span>
                    <span class='zhangtai'>状态：未开始</span>
                </div>
                <table class="table table-hover table-bordered">
                    <tbody>
                        <tr>
                            <td class="first text-center">会议时间</td>
                            <td>
                                <?php echo date("Y-m-d",strtotime($model->meeting_bdate));?>
                                到
                                <?php echo date("Y-m-d",strtotime($model->meeting_edate));?>
                            </td>
                        </tr>
                        <tr>
                            <td class="first text-center">举办城市</td>
                            <td><?php echo $model->meeting_loc;?></td>
                        </tr>
                        <tr>
                            <td class="first text-center">会议地址</td>
                            <td><?php echo $model->meeting_loc;?></td>
                        </tr>
                        <tr >
                            <td class="first text-center">展馆名称</td>
                            <td>Pune</td>
                        </tr>
                        <tr >
                            <td class="first text-center">主板单位</td>
                            <td><?php echo $model->meeting_loc;?></div></td>
                        </tr>

                    </tbody>
                </table>
                <p class="shuoming">展会说明</p>
                <div>
                    <?php echo $model->meeting_mem;?></div>
            </div>

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
        <a href="/frontend/web/index.php?r=meeting/index2&id=<?php echo $newMeetings[$i]->
            meeting_id;?>">
            <h6>
                &bull;
                <?php echo $newMeetings[$i]->meeting_name;?></h6>
        </a>
        <?php }?></div>

</div>
<div class="clearfix"></div>
</div>