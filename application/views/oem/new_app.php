      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
			    
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                  <h3 class="page-title">
                     儀器代工系統
					 <small>代工申請</small>
                  </h3>
                  <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <div class="widget">
                     <div class="widget-title">
                        <h4><i class="icon-reorder"></i>代工表單</h4>
                     </div>
                     <div class="widget-body form" ng-controller="oem_application_edit" ng-init="<?=isset($app_SN)?(isset($app_token)?"init_app($app_SN,'$app_token')":"init_app($app_SN)"):(isset($form_SN)?"init_new_app($form_SN)":"");?>">
                     	<form method="POST" class="form-horizontal">
                     		<div class="row-fluid">
                     			<div class="control-group span6">
						            <label class="control-label">代工單編號</label>
						            <div class="controls">
						            	<input type="text" name="app_ID" class="span12" value="{{app.app_SN}}" disabled="disabled"/>
									</div>
								</div>
								<div class="control-group span6">
						            <label class="control-label">代工申請日期</label>
						            <div class="controls">
						            	<input type="text" name="app_time" class="span12" value="{{app.app_time}}" disabled="disabled"/>
									</div>
								</div>
                     		</div>
							<h4>基本資料</h4>
							<div class="row-fluid">
                     			<div class="control-group span6">
						            <label class="control-label">委託人姓名</label>
						            <div class="controls">
						            	<input type="text" value="{{user.name}}" class="span12" disabled="disabled"/>
									</div>
								</div>
								<div class="control-group span6">
						            <label class="control-label">指導教授或主管姓名</label>
						            <div class="controls">
						            	<input type="text" value="{{user.boss_name}}" class="span12" disabled="disabled"/>
									</div>
								</div>
                     		</div>
                     		<div class="row-fluid">
                     			<div class="control-group span6">
						            <label class="control-label">手機</label>
						            <div class="controls">
						            	<input type="text" value="{{user.mobile}}" class="span12" disabled="disabled"/>
									</div>
								</div>
								<div class="control-group span6">
						            <label class="control-label">信箱</label>
						            <div class="controls">
						            	<input type="text" value="{{user.email}}" class="span12" disabled="disabled"/>
									</div>
								</div>
                     		</div>
                     		<div class="row-fluid">
                     			<div class="control-group span6">
						            <label class="control-label">單位</label>
						            <div class="controls">
						            	<input type="text" value="{{user.org_name}}" class="span12" disabled="disabled"/>
									</div>
								</div>
								<div class="control-group span6">
						            <label class="control-label">系所或部門</label>
						            <div class="controls">
						            	<input type="text" value="{{user.department}}" class="span12" disabled="disabled"/>  	
									</div>
								</div>
                     		</div>
							<h4>代工服務</h4>
							<div class="control-group">
					            <label class="control-label">代工服務名稱</label>
					            <div class="controls">
					            	<input type="text" class="span12" value="{{forms[0].form_cht_name}} ({{forms[0].form_eng_name}})" disabled="disabled"/>
								</div>
							</div>
							<div class="control-group" ng-show="forms.length > 1">
					            <label class="control-label">需要額外服務嗎?</label>
					            <div class="controls">
					            	<label class="radio" ng-repeat="form in forms track by $index"><input uniform type="radio" name="form_idx" ng-model="$parent.form_idx" value="{{$index}}"/>{{form.form_cht_name}}({{form.form_eng_name}})</label>
								</div>
							</div>
							<div class="control-group">
					            <label class="control-label">注意事項</label>
					            <div class="controls" >
					            	<pre>{{forms[0].form_note}}</pre>
					            	<pre ng-show="form_idx">{{forms[form_idx].form_note}}</pre>
								</div>
							</div>
							<div class="control-group" ng-repeat="col in app.app_cols" ng-show="col.col_enable">
								<label class="control-label">{{col.col_cht_name}}</label>
								<div class="controls">
									<input type="text" ng-model="col.col_value" value="{{col.col_value}}" class="span12"/>
								</div>
							</div>
							<div class="control-group">
					            <label class="control-label">其它事宜</label>
					            <div class="controls" >
					            	<textarea ng-model="app.app_description" rows="5" class="span12"></textarea>
								</div>
							</div>
							<h4>簽核流程</h4>
							<div class="control-group">
					            <label class="control-label">預估代工時數</label>
					            <div class="controls" >
					            	<input type="text" ng-model="app.app_estimated_hour" value=""/>
								</div>
							</div>
                     		<div class="row-fluid">
                     			<div class="control-group span6">
						            <label class="control-label">儀器負責人簽章</label>
						            <div class="controls">
						            	<div class="row_fluid" ng-repeat="checkpoint in app.app_checkpoints" ng-if="checkpoint.checkpoint_ID=='facility_admin_init'">
						            		{{checkpoint.checkpoint_comment}} <img ng-src="<?=base_url();?>{{checkpoint.stamp}}"/> {{checkpoint.checkpoint_timestamp}}
						            	</div>
						            	<textarea name="checkpoint_comment" class="span12" ng-model="app_checkpoint.checkpoint_comment" ng-show="app.app_checkpoint=='facility_admin_init'"></textarea>
									</div>
								</div>
								<div class="control-group span6">
						            <label class="control-label">技術組副組長簽章</label>
						            <div class="controls">
						            	<div class="row_fluid" ng-repeat="checkpoint in app.app_checkpoints" ng-if="checkpoint.checkpoint_ID=='common_lab_deputy_section_chief'">
						            		{{checkpoint.checkpoint_comment}} <img ng-src="<?=base_url();?>{{checkpoint.stamp}}"/> {{checkpoint.checkpoint_timestamp}}
						            	</div>
						            	<textarea name="checkpoint_comment" class="span12" ng-model="app_checkpoint.checkpoint_comment" ng-show="app.app_checkpoint=='common_lab_deputy_section_chief'"></textarea>
									</div>
								</div>
                     		</div>
                     		<div class="row-fluid">
								<div class="control-group span6">
						            <label class="control-label">老師/主管簽章：</label>
						            <div class="controls">
						            	<div class="row_fluid" ng-repeat="checkpoint in app.app_checkpoints" ng-if="checkpoint.checkpoint_ID=='user_boss'">
						            		{{checkpoint.checkpoint_comment}} {{checkpoint.checkpoint_timestamp}}
						            	</div>
						            	<textarea name="checkpoint_comment" class="span12" ng-model="app_checkpoint.checkpoint_comment" ng-show="app.app_checkpoint=='user_boss'" placeholder="您可輸入任何評論"></textarea>
									</div>
								</div>
								<div class="control-group span6 hide">
						            <label class="control-label">共同實驗室組長簽章</label>
						            <div class="controls">
						            	<div class="row_fluid" ng-repeat="checkpoint in app.app_checkpoints" ng-if="checkpoint.checkpoint_ID=='common_lab_section_chief'">
						            		{{checkpoint.checkpoint_comment}} <img ng-src="<?=base_url();?>{{checkpoint.stamp}}"/> {{checkpoint.checkpoint_timestamp}}
						            	</div>
						            	<textarea name="checkpoint_comment" class="span12" ng-model="app_checkpoint.checkpoint_comment" ng-show="app.app_checkpoint=='common_lab_section_chief'"></textarea>
									</div>
								</div>
                     		</div>
                     		<h4>時段排定</h4>
                 			<div class="control-group">
					            <label class="control-label">使用儀器</label>
					            <div class="controls">
					            	<select name="facility_ID[]" chosen watch="available_facilities" ng-options="facility.facility_SN as facility.facility_cht_name for (idx,facility) in available_facilities" ng-model="booking.booking_facility_SN" multiple="multiple" class="span12"></select>
								</div>
							</div>
							<div class="control-group">
					            <label class="control-label">檢測人員</label>
					            <div class="controls">
					            	<select ng-options="user.user_ID as user.user_name for user in available_users" ng-model="booking.booking_user_SN"></select>
								</div>
								<table id="table_oem_app_booking_list" class="table table-striped table-bordered">
									<thead>
										<th>起始時間</th>
										<th>結束時間</th>
										<th></th>
									</thead>
									
								</table>
							</div>
							
							<div class="control-group">
					            <label class="control-label">新增預約</label>
					            <div class="controls">
									<input type="text" id="query_facility_booking_date" value="<?=date("Y-m-d",strtotime("+2days"));?>" class="date-picker"/>
								</div>
								<table id="table_facility_booking_available_time" class="table table-striped table-bordered">
	                     			<thead>
	                     				<th></th>
	                     				<th></th>
	                     				<th></th>
	                     				<th></th>
	                     				<th></th>
	                     				<th></th>
	                     			</thead>
	                     		</table>
							</div>
							
	                     	<div class="form-actions">
	                     		<?
	                     		if(empty($app_checkpoint)||$app_checkpoint=='user_init')
	                     		{
									$display[] = form_button("save","儲存","class='btn btn-primary' ng-click='save()'");
	                     			$display[] = form_button("submit","送出","class='btn btn-warning' ng-click='submit()'");
								}else{
									$display[] = form_button("accept","接受","class='btn btn-warning' ng-click='accept()'");
	                     			$display[] = form_button("reject","退件","class='btn btn-danger' ng-click='reject()'");
	                     			$display[] = anchor("oem/app/list","回上一頁","class='btn btn-primary'");
								}
								echo implode(' ',$display);
	                     		?>
	                     	</div>
	                    </form>
                     </div>
                  </div>
               </div>
			</div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
