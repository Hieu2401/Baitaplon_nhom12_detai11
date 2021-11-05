<?php include('includes/thongke.php') ?>
<div class="head_nav fix" style="margin-left: 1122px; height: 120%; width: 245px; float: right; 
width: 245px;
top: 0;
left: 0;
bottom: 0;
background-color: #333333;
color: #aaabae;
font-size: 1px;">
<div class="col-md-3 four-grid" style="width: 106%; background: red;">
	<a href="manage-users.php">
		<div class="four-agileits" style="height: 115px; ">
			<div class="icon" style="margin-top: 21px;">

				<i class="glyphicon glyphicon-road" aria-hidden="true"></i>
			</div>
			<div class="four-text" style="">

				<a href="create-package.php"><h2 style="color: white;"><i class="glyphicon glyphicon-plus" style="font-size: 20px;" aria-hidden="true"></i> Thêm tour</h2> </a>

			</div>

		</div>
	</a>
</div>

</div>

<style type="text/css">
	.head_nav{
		width: 230px;
		top: 0;
		left: 0;
		bottom: 0;
		background-color:#333333;
		color: #aaabae;
		box-shadow: 0px 0px 10px 0px rgb(58, 41, 31);
		-o-box-shadow: 0px 0px 10px 0px rgb(58, 41, 31);
		-webkit-box-shadow: 0px 0px 10px 0px rgb(58, 41, 31);
		-moz-box-shadow: 0px 0px 10px 0px rgb(58, 41, 31);
		z-index: 999;
	}
	h4{color: #fff;}
	.head_nav.fix {
		left: 0;
		max-width: 100%;
		overflow: visible;
		position: fixed !important;
		top: 0;
		width: 100%;
		z-index: 1000;
	}
</style>


<script type="text/javascript">
	jQuery(document).ready(function($) {
		var $filter = $('.head_nav');
		var $filterSpacer = $('<div />', {
			"class": "vnkings-spacer",
			"height": $filter.outerHeight()
		});
		if ($filter.size())
		{
			$(window).scroll(function ()
			{
				if (!$filter.hasClass('fix') && $(window).scrollTop() > $filter.offset().top)
				{
					$filter.before($filterSpacer);
					$filter.addClass("fix");
				}
				else if ($filter.hasClass('fix')  && $(window).scrollTop() < $filterSpacer.offset().top)
				{
					$filter.removeClass("fix");
					$filterSpacer.remove();
				}
			});
		}

	});
</script>