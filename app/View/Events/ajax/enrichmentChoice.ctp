<div class="popover_choice">
	<legend><?php echo __('Choose the enrichment module that you wish to use for the expansion'); ?></legend>
	<div class="popover_choice_main" id ="popover_choice_main">
		<div style="width:100%;">
		<?php foreach ($modules as $k => $module): ?>
			<div style="border-bottom:1px solid black; text-align:center;width:100%;" class="templateChoiceButton useCursorPointer" onClick="window.location='<?php echo $baseurl;?>/events/queryEnrichment/<?php echo implode('/', array(h($attribute_id), h($module['name'])));?>';" title="<?php echo h($module['description']);?>" role="button" tabindex="0" aria-label="Enrich using the <?php echo h($module['name']); ?> module"><?php echo h($module['name']);?></div>
		<?php endforeach; ?>
		</div>
	</div>
	<div role="button" tabindex="0" aria-label="Cancel" title="Cancel" class="templateChoiceButton templateChoiceButtonLast" onClick="cancelPopoverForm();">Cancel</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		resizePopoverBody();
	});

	$(window).resize(function() {
		resizePopoverBody();
	});
</script>
