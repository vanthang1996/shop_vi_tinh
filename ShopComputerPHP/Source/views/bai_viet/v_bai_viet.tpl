<!-- events -->
		<div class="events">
			<h3>Bài viết</h3>
		
			<div class="events-bottom">
            {foreach $bai_viets  as $bai_viet}
				<a href="bai_viet.php?ma_bai_viet={$bai_viet->ma_bai_viet}">
                <div class="col-md-6 events_bottom_left">
					<div class="col-md-4 events_bottom_left1">
						<div class="events_bottom_left1_grid">
							<h4>{date("d", strtotime($bai_viet->ngay_xuat_ban))}</h4>
							<p>{date("M, Y", strtotime($bai_viet->ngay_xuat_ban))}</p>
						</div>
					</div>
					<div class="col-md-8 events_bottom_left2">	
					<!--	<img src="images/15.jpg" alt=" " class="img-responsive" />-->
						<h4>{$bai_viet->tieu_de}</h4>
						<ul>
							<li><i class="fa fa-clock-o" aria-hidden="true"></i>{date("g:i a", strtotime($bai_viet->ngay_xuat_ban))}</li>
							<li><i class="fa fa-user" aria-hidden="true"></i><a href="#">{$nguoi_dungs[$bai_viet->ma_nguoi_dung]->ho_ten}</a></li>
						</ul>
						<p>{$bai_viet->noi_dung_tom_tat}</p>
					</div>
					<div class="clearfix"> </div>
				</div></a>
                
              {/foreach}  
			
				<div class="clearfix"> </div>
			</div>
              <div style="clear:both; text-align:center">{if isset($lst)} {$lst} {/if}</div>  
		</div>
<!-- //events -->