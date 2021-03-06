<div id="form_cash_receipt_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 900px; margin-left: -450px; ">
		<div class='modal-header'>
		    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
		    <h3 id='myModalLabel'>收據/發票</h3>
		</div>
		<div class='modal-body'>
			<form id="form_cash_receipt" action="<?=site_url('cash/receipt/add');?>" method="POST" class="form form-horizontal">
				<div class="row-fluid">
					<table id="table_cash_bill_list" class="table table-striped table-bordered" data-bill-type="<?=isset($bill_type)?$bill_type:"";?>">
					
					</table>
				</div>
				<input type="hidden" name="account_boss" value=""/>
				<div class="row-fluid">
					<div class="control-group span6">
						<label class="control-label">類別</label>
						<div class="controls">
							<label class="radio"><input name="receipt_type" type="radio" value="receipt"/>收據</label>
							<label class="radio"><input name="receipt_type" type="radio" value="invoice"/>發票</label>
						</div>
					</div>
					<div class="control-group span6">
						<!--<label class="control-label">編號</label>
						<div class="controls">
							<input name="receipt_ID" type="text" value=""/>
						</div>-->
					</div>
				</div>
				<div class="row-fluid">
					<div class="control-group span6">
						<label class="control-label">抬頭</label>
						<div class="controls">
							<input name="receipt_title" type="text" value=""/>
						</div>
					</div>
					<div class="control-group span6">
						<label class="control-label">金額</label>
						<div class="controls">
							<input name="account_amount" type="text" value=""/>
						</div>
					</div>
				</div>
				<div class="row-fluid ">
					<div class="control-group span6">
						<label class="control-label">作業</label>
						<div class="controls">
							<label class="radio"><input name="receipt_delivery_way" type="radio" value="pickup"/>自取</label>
							<label class="radio"><input name="receipt_delivery_way" type="radio" value="post"/>郵寄</label>
						</div>
					</div>
					<div class="control-group span6 receipt-email">
						<label class="control-label">電子郵件</label>
						<div class="controls">
							<input name="receipt_contact_email" type="text" value=""/>
						</div>
					</div>
					<div class="control-group span6 receipt-address hide">
						<label class="control-label">郵寄地址</label>
						<div class="controls">
							<input name="receipt_contact_address" type="text" value=""/>
						</div>
					</div>
				</div>
				<div class="row-fluid ">
					<div class="control-group span6">
						<label class="control-label">連絡人姓名</label>
						<div class="controls">
							<input name="receipt_contact_name" type="text" value=""/>
						</div>
					</div>
					<div class="control-group span6">
						<label class="control-label">連絡電話</label>
						<div class="controls">
							<input name="receipt_contact_tel" type="text" value=""/>
						</div>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">備註</label>
					<div class="controls">
						<input name="receipt_note" type="text" value="" class="span12"/>
					</div>
				</div>
			</form>
		</div>
		<div class='modal-footer'>
			<button type='button' id="open_receipt" name="confirm_receipt" class='btn btn-warning' data-dismiss='modal'>確認</button>
			<button type='button' class='btn btn-primary' data-dismiss='modal'>取消</button>
		</div>
</div>