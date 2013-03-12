
<?php
defined('_JEXEC') or die('access restricted');



 ?>
 <div id="slides" style='background:url("<?php echo JURI::base(); ?>images/banner_bg.jpg") repeat-x scroll 0 0 transparent'>
<div class="slides_container">

<?php   
 for($i=0;$i<count($rows);$i++)
   { ?>
    <div>
        <span class="bannerimg"><img src="<?php echo $rows[$i]->image;?>" alt="banner"  /></span>
          <span class="bannercontent">
          <?php
          $buttons= explode( ',', $rows[$i]->buttons );
         
         
          ?>
                    <h1><?php echo ucwords($rows[$i]->textheader);?></h1>
                    <h2><?php echo ucwords($rows[$i]->textcontent);?></h2>
                    <?php $count=0; foreach ($buttons as $button ): $backgroundcolor='#0e4c01'; if($count==0)$backgroundcolor='#00416e' ?>
                       <a href="<?php echo strtolower($rows[$i]->links);?>"><span><button style="font-weight:bold; cursor:pointer;padding:2px;background-color:<?php echo $backgroundcolor ?>;color:#fff;border:solid 1px <?php echo $backgroundcolor ?>"><?php echo $button?></button></span></a>
                       <?php $count++; endforeach;?>
          </span>
        </div>
 <?php }?>
       
        
           
   
</div>
</div>
<style>
#slides{ background:url(/images/banner_bg.jpg) repeat-x 0 0; border:0px solid #9d9d9d; height:363px; position:relative;}
#slides .slides_container {width:957px; height:363px; display:none; }
#slides .slides_container div {width:957px; height:363px; display:block;}
#slides .slides_container span.bannerimg{display:block; float:left; width:560px; margin-right:20px; }
#slides .slides_container span.bannercontent{ padding:70px 0 0 25px; display:block; width:280px; float:left;}
#slides h1{ font-weight:normal; margin-bottom:10px; color:#224e9c;}
#slides h2{ font-weight:normal; margin-bottom:10px; color:#087003; line-height:22px;}
#slides span.bannercontent a{ margin-right:5px;}

#slides .pagination {position:absolute; right:0; bottom:15px; z-index:999; width:100px;}
#slides .pagination li {float:left; margin:0 1px; list-style:none;}
#slides .pagination li a {display:block; width:12px; height:0; padding-top:12px; background-image:url(images/pagination.png); background-position:0 0; float:left; overflow:hidden;}
#slides .pagination li.current a {background-position:0 -12px;}

</style>
<script>
$(function(){
    jQuery('#slides').slides({
        generateNextPrev: false,
        play: 5000
    });
   
});
</script>



 

   