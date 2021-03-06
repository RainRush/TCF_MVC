<div class="col-md-12 col-xs-12 article_list">

	<?php if(count($topics)==0) echo('<h1>:(</h1><br><h4>找不到符合條件的文章</h4>'); ?>

	<?php 
		if(count($topics)){
			if( ! isset($keys) ){
				$keys = '';
			}
			else{
				$keys = '/?q='.$keys;
			}

			$indexm = $index-$limit;
			$indexp = $index+$limit;
			
			if($indexm >= 0)
			{
				echo( "<a href=\"".base_url()."Topics/$mode/$indexm/$limit$keys\" class=\"pull-left search-nav\">←前".$limit."筆</a>" );
			}
			if( count($topics) == $limit ){
				echo( "<a href=\"".base_url()."Topics/$mode/$indexp/$limit$keys\" class=\"pull-right search-nav\">後".$limit."筆→</a>" );
			}
		}
	?>

	<?php if(count($topics)) foreach ($topics as $row): ?>

	<div class="col-md-12 col-xs-12 none_padding topics_item">
		<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
			<div class="topics_photo">
				<img class="img-rounded flip" src="<?=$row->topic_photo_addr?>">
				<!--<div class="topics_photo_back flip"><h1 class="center-block"><?=$row->aid?></h1></div>-->
			</div>
		</div>
		<div class="col-lg-7 col-md-7 col-sm-9 col-xs-9">
			<h2 class="hidden-xs hidden-sm"><a href="<?=base_url().'Topic/'.$row->aid?>"><?=$row->topicname?></a></h2>
			<h4 class="hidden-md hidden-lg"><a href="<?=base_url().'Topic/'.$row->aid?>"><?=$row->topicname?></a></h4>
		</div>
		<div class="col-lg-3 col-md-3 hidden-sm hidden-xs pull-right">
			<div><span class="glyphicon glyphicon-time" aria-hidden="true"></span><?=$row->edit_time?></div>
			<div><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span><?=$row->views?></div>
		</div>
	</div><!-- topics_item -->

	<?php endforeach;?>

</div>
