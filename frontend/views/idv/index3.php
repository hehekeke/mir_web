<style type="text/css">
    @media screen and (max-width:1000px) {
            .top{
            width: 100%;
            height: 43px;
            background-color: #3c80a2;
        }
        .top p{
            padding-top: 8px;
            text-align: center;
            color: white;
            font-size: 20px;
        }
        #triangle-left { 
            width: 0; 
            height: 0; 
            border-top: 15px solid transparent; 
            border-right:15px solid #076595; 
            border-bottom :15px solid transparent; 
            float: left;
        } 
        #left{
            width: 34px;
            height: 30px;
            background: #076595;
            margin-left: 15px;
        }
        .top span{
            display: inline-block;
            color: white;
        }
        .title h6{
            color: grey;
            padding-bottom: 20px;
            border-bottom:  1px dashed grey;
        }
        .shangxia{
            /*margin-left: 2%;*/
            padding-left: 8%;
        }
        .title{
            padding-bottom: 20px;
            border-bottom: 1px solid grey;
        }
    }
</style>
<script type="text/javascript">
    $(function(){
        $("#left").click(function(){
            window.location.href="/frontend/web/index.php?r=idv/index";
        });
    });
</script>
<div class="top _m">
    <div class="pull-left" style="margin-top:8px;margin-left:28px;">
        <div id="triangle-left"></div>
        <div id='left'>
            <span style="margin-top:5px;">返回</span>
        </div>
    </div>
    <p class="pull-left" style="width:70%;"><?php echo $model->product_name;?></p>
</div>
<div class='title _m'>
    <h3 class="text-center"><?php echo $model->product_name;?></h3>
    <h6 class="text-center">发布日期是：<?php echo date("Y-m-d",strtotime($model->product_date)); ?> </h6>
    <div style="padding:0 6%;">
        <?php echo $model->product_place;?>
    </div>
</div>