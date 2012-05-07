<div id="rc_container">
	<!-- begin left column -->
	<div class="rc_leftCol">
		<div class="rc_boxleftbg">
        <div class="rc_boxlefttop">
			<!-- begin My Recruitment Status -->
			<div class="rc_leftpackage rc_bigTitle">
				<h2>My Jobs</h2>
			</div>	
			<div class="rc_leftpackage_end">
				<ul class="rc_listleft">
					<li><a id="a_a" href="javascript:loadData('a')" class="listactive">Đã duyệt</a></li>
					<li><a id="a_pa" href="javascript:loadData('pa')">Chờ duyệt <strong>(<span id="allJobs_pa">1</span>)</strong></a></li>
					<li><a id="a_ic" href="javascript:loadData('ic')">Chưa hoàn thành<strong>(<span id="allJobs_ic">1</span>)</strong></a></li>
					<li><a id="a_mpa" href="javascript:loadData('mpa')">Modified Pending Approval </a></li>
					<li><a id="a_ain" href="javascript:loadData('ain')">Inactive </a></li>
					<li><a id="a_e" href="javascript:loadData('e')">Expired </a></li>
				</ul>
			</div><!-- end My Jobs -->
			
		</div></div>
        <div class="rc_boxleftbot"></div>
        <!-- end box left -->
	</div><!--end left column -->
	
	<!-- begin right column -->
	<div class="rc_rightCol">
		
		<!-- begin box Job Application -->
		<div class="rc_box_top"><span class="rc_box_topleft"><!-- --></span><span class="rc_box_topright"><!-- --></span></div>
		<div id="rc_box_approvedjobs" class="rc_box_content">
		<form onsubmit="return false;" method="post" action="" name="ofrm">
			<input type="hidden" name="total_job">
			<input type="hidden" value="0" name="current_page">
			<input type="hidden" value="getJobApproved" name="functionName">
			<!-- begin status_approved -->
			<div style="text-align: center; display: none;" id="status_approved_loading">
				<img alt="" src="http://images.vietnamworks.com/loading.gif"><br>
				<strong>Online Approved Jobs</strong>
			</div>
			<div style="" id="status_approved">
				<div class="rc_bigTitle">
					<h2>
												<span id="status_approved_title_approved">Currently Approved Job Posting</span>
						<span style="display:none" id="status_approved_title_expired">Job going to expire within 7 days</span>
											</h2>
				</div>
								<p id="have_no_job"></p>
				               
				<div style="" id="div_approved">	
					<div class="rc_navigation">
						<div class="rc_navigationLeft" id="approved_button" style="display: none;">
							<div class="rc_btnicon_edit"><input type="button" onclick="doEdit(document.ofrm.jobid_a)" class="rc_btnicon" value="Edit"></div>
							<div class="rc_btnicon_copy"><input type="button" onclick="doRenew(document.ofrm.jobid_a)" class="rc_btnicon" value="Copy"></div>
							<div class="rc_btnicon_inactive"><input type="button" onclick="doInactive(document.ofrm.jobid_a)" class="rc_btnicon" value="Inactive"></div>
						</div>
						<div class="rc_navigationRight">
							<div style="float:right" id="navigator_a_1"></div>						
						</div>
					</div>
					<br class="clear">
	
					<!-- begin table my jobs -->
					<div style="position:relative" id="div_table_approved">
						<div style="position: absolute; text-align: center; background-color: rgb(255, 255, 255); opacity: 0.3; display: none;" id="before_table_approved"></div>
								<div style="position: absolute; text-align: center; display: none;" id="before_before_table_approved">
									<img alt="" src="http://images.vietnamworks.com/loading.gif"><br>
									<strong>Online Approved Jobs</strong>
								</div>
						<div class="rc_table_top"><span class="rc_table_topleft"><!-- --></span><span class="rc_table_topright"><!-- --></span></div>
							<dl class="rc_tableList">							
								<div id="table_approved"><dt>
		<span class="rc_col_32px">&nbsp;</span>
		<span class="rc_col_200px"><a href="javascript:doSort('jt')">JOB TITLE</a></span>
		<span class="rc_col_100px">Job ID</span>
		<!--span class="rc_col_100px "><a href="javascript:doSort('apr')">Approved</a> <img src="http://images.vietnamworks.com/rc_icon_down.gif" border=0 alt="" width="7" height="4" /></span-->
		<span class="rc_col_110px "><a href="javascript:doSort('exp')">Expired</a></span>
		<span class="rc_col_60px rc_colAlignCenter">Views</span>
		<span class="rc_col_115px">Applications</span>
		<span class="rc_col_115px">Recommended resumes <b>New!</b></span><br class="clear">
	</dt>
	<dd style="" id="dd_no_job_a">
		<span style="text-align:center; width:100%"><strong>You have no jobs in this folder.</strong></span>
		<br class="clear">
	</dd></div>						
							</dl>
						<div class="rc_box_bottom"><span class="rc_box_botleft"><!-- --></span><span class="rc_box_botright"><!-- --></span></div>
					</div>
					<!-- end table my jobs -->   
					<div class="rc_navigation">
						<div class="rc_navigationLeft" id="approved_button2" style="display: none;">
							<div class="rc_btnicon_edit"><input type="button" onclick="doEdit(document.ofrm.jobid_a)" class="rc_btnicon" value="Edit"></div>
							<div class="rc_btnicon_copy"><input type="button" onclick="doRenew(document.ofrm.jobid_a)" class="rc_btnicon" value="Copy"></div>
							<div class="rc_btnicon_inactive"><input type="button" onclick="doInactive(document.ofrm.jobid_a)" class="rc_btnicon" value="Inactive"></div>
						</div>
						<div class="rc_navigationRight">
							<div style="float:right" id="navigator_a_2"></div>						
						</div>
					</div>
					<div class="rc_bgbutton" style="display:none" id="div_approved_nojob">
						<input type="button" value="Post job" onclick="window.location='job_post_n1.php'" name="postjob" class="rc_button">
					</div>		
					<br clear="all">				
				</div>
			</div>
			<!-- end status_approved -->
			
			<!-- begin status_incomplete -->
			<div style="text-align:center; display:none" id="status_incomplete_loading">
				<img alt="" src="http://images.vietnamworks.com/loading.gif"><br>
				<strong>Incomplete Job Posting</strong>
			</div>
			<div style="display:none;" id="status_incomplete">
				<div class="rc_bigTitle">
					<h2>Incomplete Job Posting</h2>
				</div>
				<p id="have_no_job_ic">You currently have <span id="total_job_ic" class="rc_bold_org"></span>&nbsp;<span class="rc_bold_org">job(s) </span> incomplete now.</p>               
				<div style="display:none" id="div_incomplete">	
					<div class="rc_navigation">
						<div class="rc_navigationLeft" id="incomplete_button">
							<div class="rc_btnicon_edit"><input type="button" onclick="doEdit(document.ofrm.jobid_ic)" class="rc_btnicon" value="Edit"></div>
							<div class="rc_btnicon_delete"><input type="button" onclick="doDelete(document.ofrm.jobid_ic)" class="rc_btnicon" value="Delete"></div>
						</div>
						<div class="rc_navigationRight">
							<div style="float:right" id="navigator_ic_1"></div>						
						</div>
					</div>
					<br class="clear">
	
					<!-- begin table my jobs -->		
					<div style="position:relative" id="div_table_incomplete">
						<div style="position:absolute; text-align:center; background-color:#FFFFFF; filter:alpha(opacity=30); -moz-opacity:.30; opacity:.30;" id="before_table_incomplete"></div>
						<div style="position:absolute; text-align:center;" id="before_before_table_incomplete">
							<img alt="" src="http://images.vietnamworks.com/loading.gif"><br>
							<strong>Incomplete Job Posting</strong>
						</div>
						<div class="rc_table_top"><span class="rc_table_topleft"><!-- --></span><span class="rc_table_topright"><!-- --></span></div>
							<dl class="rc_tableList">
								<div id="table_incomplete"></div>						
							</dl>
						<div class="rc_box_bottom"><span class="rc_box_botleft"><!-- --></span><span class="rc_box_botright"><!-- --></span></div>
					</div>
					<!-- end table my jobs -->  
					<div class="rc_navigation">
						<div class="rc_navigationLeft" id="incomplete_button2">
							<div class="rc_btnicon_edit"><input type="button" onclick="doEdit(document.ofrm.jobid_ic)" class="rc_btnicon" value="Edit"></div>
							<div class="rc_btnicon_delete"><input type="button" onclick="doDelete(document.ofrm.jobid_ic)" class="rc_btnicon" value="Delete"></div>
						</div>
						<div class="rc_navigationRight">
							<div style="float:right" id="navigator_ic_2"></div>						
						</div>
					</div>
					<div class="rc_bgbutton" style="display:none" id="div_incomplete_nojob">
						<input type="button" value="Post job" onclick="window.location='job_post_n1.php'" name="postjob" class="rc_button">
					</div>
					<br clear="all">				
				</div>
			</div>
			<!-- end status_incomplete -->	
			
			<!-- begin Pending Approved -->
			<div style="text-align:center; display:none" id="status_pending_loading">
				<img alt="" src="http://images.vietnamworks.com/loading.gif"><br>
				<strong>Pending Approval Jobs</strong>
			</div>
			<div style="display:none;" id="status_pending">
				<div class="rc_bigTitle">
					<h2>Pending Approval Jobs</h2>
				</div>
				<p id="have_no_job_pa">You currently have <span id="total_job_pa" class="rc_bold_org"></span>&nbsp;<span class="rc_bold_org">job(s) </span> pending approval now.</p>                
				<div style="display:none" id="div_pending">	
					<div class="rc_navigation">
						<div class="rc_navigationLeft" id="pending_button">
							<div class="rc_btnicon_edit"><input type="button" onclick="doEdit(document.ofrm.jobid_pa)" class="rc_btnicon" value="Edit"></div>
							<div class="rc_btnicon_copy"><input type="button" onclick="doRenew(document.ofrm.jobid_pa)" class="rc_btnicon" value="Copy"></div>
							<div class="rc_btnicon_delete"><input type="button" onclick="doDelete(document.ofrm.jobid_pa)" class="rc_btnicon" value="Delete"></div>
						</div>
						<div class="rc_navigationRight">
							<div style="float:right" id="navigator_pa_1"></div>						
						</div>
					</div>
					<br class="clear">
	
					<!-- begin table my jobs -->		
					<div style="position:relative" id="div_table_pending">
						<div style="position:absolute; text-align:center; background-color:#FFFFFF; filter:alpha(opacity=30); -moz-opacity:.30; opacity:.30;" id="before_table_pending"></div>
						<div style="position:absolute; text-align:center;" id="before_before_table_pending">
							<img alt="" src="http://images.vietnamworks.com/loading.gif"><br>
							<strong>Pending Approval Jobs</strong>
						</div>
						<div class="rc_table_top"><span class="rc_table_topleft"><!-- --></span><span class="rc_table_topright"><!-- --></span></div>
							<dl class="rc_tableList">								
								<div id="table_pending"></div>						
							</dl>
						<div class="rc_box_bottom"><span class="rc_box_botleft"><!-- --></span><span class="rc_box_botright"><!-- --></span></div>
					</div>	
					<!-- end table my jobs -->   
					<div class="rc_navigation">
						<div class="rc_navigationLeft" id="pending_button2">
							<div class="rc_btnicon_edit"><input type="button" onclick="doEdit(document.ofrm.jobid_pa)" class="rc_btnicon" value="Edit"></div>
							<div class="rc_btnicon_copy"><input type="button" onclick="doRenew(document.ofrm.jobid_pa)" class="rc_btnicon" value="Copy"></div>
							<div class="rc_btnicon_delete"><input type="button" onclick="doDelete(document.ofrm.jobid_pa)" class="rc_btnicon" value="Delete"></div>
						</div>
						<div class="rc_navigationRight">
							<div style="float:right" id="navigator_pa_2"></div>						
						</div>
					</div>

					<div class="rc_bgbutton" style="display:none" id="div_pending_nojob">
						<input type="button" value="Post job" onclick="window.location='job_post_n1.php'" name="postjob" class="rc_button">
					</div>
					<br clear="all">				
				</div>
			</div>
			<!-- end Pending Approved -->
			
			<!-- begin Modified Pending Approved -->
			<div style="text-align:center; display:none" id="status_modified_loading">
				<img alt="" src="http://images.vietnamworks.com/loading.gif"><br>
				<strong>Modified Pending Approved Job Posting</strong>
			</div>
			<div style="display:none;" id="status_modified">
				<div class="rc_bigTitle">
					<h2>Modified Pending Approved Job Posting</h2>
				</div>
				<p id="have_no_job_mpa">You currently have <span id="total_job_mpa" class="rc_bold_org"></span>&nbsp;<span class="rc_bold_org">job(s) </span> modified pending approval now.</p>                
				<div style="display:none" id="div_modified">	
					<div class="rc_navigation">
						<div class="rc_navigationLeft" id="modified_button">
							<div class="rc_btnicon_edit"><input type="button" onclick="doEdit(document.ofrm.jobid_mpa)" class="rc_btnicon" value="Edit"></div>
							<div class="rc_btnicon_copy"><input type="button" onclick="doRenew(document.ofrm.jobid_mpa)" class="rc_btnicon" value="Copy"></div>
							<div class="rc_btnicon_inactive"><input type="button" onclick="doInactive(document.ofrm.jobid_mpa)" class="rc_btnicon" value="Inactive"></div>
						</div>
						<div class="rc_navigationRight">
							<div style="float:right" id="navigator_mpa_1"></div>						
						</div>
					</div>
					<br class="clear">
	
					<!-- begin table my jobs -->	
					<div style="position:relative" id="div_table_modified">
						<div style="position:absolute; text-align:center; background-color:#FFFFFF; filter:alpha(opacity=30); -moz-opacity:.30; opacity:.30;" id="before_table_modified"></div>
						<div style="position:absolute; text-align:center;" id="before_before_table_modified">
							<img alt="" src="http://images.vietnamworks.com/loading.gif"><br>
							<strong>Currently Approved Job Posting</strong>
						</div>
						<div class="rc_table_top"><span class="rc_table_topleft"><!-- --></span><span class="rc_table_topright"><!-- --></span></div>
							<dl class="rc_tableList">
								<div id="table_modified"></div>						
							</dl>
						<div class="rc_box_bottom"><span class="rc_box_botleft"><!-- --></span><span class="rc_box_botright"><!-- --></span></div>
					</div>	
					<!-- end table my jobs -->  
					<div class="rc_navigation">
						<div class="rc_navigationLeft" id="modified_button2">
							<div class="rc_btnicon_edit"><input type="button" onclick="doEdit(document.ofrm.jobid_mpa)" class="rc_btnicon" value="Edit"></div>
							<div class="rc_btnicon_copy"><input type="button" onclick="doRenew(document.ofrm.jobid_mpa)" class="rc_btnicon" value="Copy"></div>
							<div class="rc_btnicon_inactive"><input type="button" onclick="doInactive(document.ofrm.jobid_mpa)" class="rc_btnicon" value="Inactive"></div>
						</div>
						<div class="rc_navigationRight">
							<div style="float:right" id="navigator_mpa_2"></div>						
						</div>
					</div>
						
					<div class="rc_bgbutton" style="display:none" id="div_modified_nojob">
						<input type="button" value="Post job" onclick="window.location='job_post_n1.php'" name="postjob" class="rc_button">
					</div>		
					<br clear="all">				
				</div>
			</div>
			<!-- end Modified Pending Approved -->
			
			<!-- begin status_Inactive -->
			<div style="text-align:center; display:none" id="status_inactive_loading">
				<img alt="" src="http://images.vietnamworks.com/loading.gif"><br>
				<strong>Currently Inactive Jobs</strong>
			</div>
			<div style="display:none" id="status_inactive">
				<div class="rc_bigTitle">
					<h2>Inactive jobs</h2>
				</div>
				<p id="have_no_job_ain">You currently have <span id="total_job_ain" class="rc_bold_org"></span>&nbsp;<span class="rc_bold_org">job(s) </span> inactive now.</p>                
				<div style="display:none" id="div_inactive">	
					<div class="rc_navigation">
						<div class="rc_navigationLeft" id="inactive_button">
							<div class="rc_btnicon_edit"><input type="button" onclick="doEdit(document.ofrm.jobid_ain)" class="rc_btnicon" value="Edit"></div>
							<div class="rc_btnicon_copy"><input type="button" onclick="doRenew(document.ofrm.jobid_ain)" class="rc_btnicon" value="Copy"></div>
							<div class="rc_btnicon_active"><input type="button" onclick="doActive(document.ofrm.jobid_ain)" class="rc_btnicon" value="Active"></div>
						</div>
						<div class="rc_navigationRight">
							<div style="float:right" id="navigator_ain_1"></div>						
						</div>
					</div>
					<br class="clear">
	
					<!-- begin table my jobs -->	
					<div style="position:relative" id="div_table_inactive">
						<div style="position:absolute; text-align:center; background-color:#FFFFFF; filter:alpha(opacity=30); -moz-opacity:.30; opacity:.30;" id="before_table_inactive"></div>
						<div style="position:absolute; text-align:center;" id="before_before_table_inactive">
							<img alt="" src="http://images.vietnamworks.com/loading.gif"><br>
							<strong>Currently Inactive Jobs</strong>
						</div>
						<div class="rc_table_top"><span class="rc_table_topleft"><!-- --></span><span class="rc_table_topright"><!-- --></span></div>
							<dl class="rc_tableList">								
								<div id="table_inactive"></div>						
							</dl>
						<div class="rc_box_bottom"><span class="rc_box_botleft"><!-- --></span><span class="rc_box_botright"><!-- --></span></div>
					</div>		
					<!-- end table my jobs -->   
					<div class="rc_navigation">
						<div class="rc_navigationLeft" id="inactive_button2">
							<div class="rc_btnicon_edit"><input type="button" onclick="doEdit(document.ofrm.jobid_ain)" class="rc_btnicon" value="Edit"></div>
							<div class="rc_btnicon_copy"><input type="button" onclick="doRenew(document.ofrm.jobid_ain)" class="rc_btnicon" value="Copy"></div>
							<div class="rc_btnicon_active"><input type="button" onclick="doActive(document.ofrm.jobid_ain)" class="rc_btnicon" value="Active"></div>
						</div>
						<div class="rc_navigationRight">
							<div style="float:right" id="navigator_ain_2"></div>						
						</div>
					</div>
						
					<div class="rc_bgbutton" style="display:none" id="div_inactive_nojob">
						<input type="button" value="Post job" onclick="window.location='job_post_n1.php'" name="postjob" class="rc_button">
					</div>		
					<br clear="all">				
				</div>
			</div>
			<!-- end status_Inactive -->
			
			<!-- begin status_Expired -->
			<div style="text-align:center; display:none" id="status_expired_loading">
				<img alt="" src="http://images.vietnamworks.com/loading.gif"><br>
				<strong>Currently Expired Job</strong>
			</div>
			<div style="display:none;" id="status_expired">
				<div class="rc_bigTitle">
					<h2>Expired Job</h2>
				</div>
				<p id="have_no_job_e">You currently have <span id="total_job_e" class="rc_bold_org"></span>&nbsp;<span class="rc_bold_org">job(s) </span> expired now.</p>
                <p style="padding-top:0px">Note: Application will be deleted from Recruitment Center after 13 months.</p>
				<div style="display:none" id="div_expired">	
					<div class="rc_navigation">
						<div class="rc_navigationLeft" id="expired_button">
							<div class="rc_btnicon_copy"><input type="button" onclick="doRenew(document.ofrm.jobid_e)" class="rc_btnicon" value="Renew"></div>
							<div class="rc_btnicon_delete"><input type="button" onclick="doDelete(document.ofrm.jobid_e)" class="rc_btnicon" value="Delete"></div>
						</div>
						<div class="rc_navigationRight">
							<div style="float:right" id="navigator_e_1"></div>						
						</div>
					</div>
					<br class="clear">
	
					<!-- begin table my jobs -->	
					<div style="position:relative" id="div_table_expired">
						<div style="position:absolute; text-align:center; background-color:#FFFFFF; filter:alpha(opacity=30); -moz-opacity:.30; opacity:.30;" id="before_table_expired"></div>
						<div style="position:absolute; text-align:center;" id="before_before_table_expired">
							<img alt="" src="http://images.vietnamworks.com/loading.gif"><br>
							<strong>Currently Expired Job</strong>
						</div>
						<div class="rc_table_top"><span class="rc_table_topleft"><!-- --></span><span class="rc_table_topright"><!-- --></span></div>
							<dl class="rc_tableList">								
								<div id="table_expired"></div>						
							</dl>
						<div class="rc_box_bottom"><span class="rc_box_botleft"><!-- --></span><span class="rc_box_botright"><!-- --></span></div>
					</div>		
					<!-- end table my jobs -->  
					<div class="rc_navigation">
						<div class="rc_navigationLeft" id="expired_button2">
							<div class="rc_btnicon_copy"><input type="button" onclick="doRenew(document.ofrm.jobid_e)" class="rc_btnicon" value="Renew"></div>
							<div class="rc_btnicon_delete"><input type="button" onclick="doDelete(document.ofrm.jobid_e)" class="rc_btnicon" value="Delete"></div>
						</div>
						<div class="rc_navigationRight">
							<div style="float:right" id="navigator_e_2"></div>						
						</div>
					</div>
						
					<div class="rc_bgbutton" style="display:none" id="div_expired_nojob">
						<input type="button" value="Post job" onclick="window.location='job_post_n1.php'" name="postjob" class="rc_button">
					</div>
					<br clear="all">				
				</div>
			</div>
			<!-- end status_Expired -->
			
			<!-- begin search my job posting -->
			<div style="width:auto; display:none" class="formType01" id="div_search">
				<div id="closed_search">
					<div style=" #margin-top:0px" class="rc_table_top"><span class="rc_table_topleft"><!-- --></span><span class="rc_table_topright"><!-- --></span></div>
						<dl class="rc_tableList">
							<dt>
								<span>
									<img border="0" onclick="javascript:doShow('open')" style="cursor:pointer" alt="" src="http://images.vietnamworks.com/rc_icon_plus.gif" id="img_find" name="img_find">
									<a title="Searching job posted." href="javascript:doShow('open')"><strong>Search My Job Posting</strong></a>
								</span>
								<br class="clear">
							</dt>
						</dl>	
					<div style=" #margin-top:0px" class="rc_table_bottom"><span class="rc_table_botleft"><!-- --></span><span class="rc_table_botright"><!-- --></span></div>
				</div>
				
				<div style="display:none" id="opened_search">
					<div style=" #margin-top:0px" class="rc_table_top"><span class="rc_table_topleft"><!-- --></span><span class="rc_table_topright"><!-- --></span></div>
						<dl class="rc_tableList">
							<dt>
								<span>
									<img border="0" onclick="javascript:doShow('close')" style="cursor:pointer" alt="" src="http://images.vietnamworks.com/rc_icon_minus.gif" id="img_find" name="img_find">
									<a title="Searching job posted." href="javascript:doShow('close')"><strong>Search My Job Posting</strong></a>
								</span>
								<br class="clear">
							</dt>
							<dd style="padding-top:10px">
								<label class="labelType01" for="textfield1">Keywords:</label>
								<input type="text" onkeypress="onEnter(event);" value="" class="inputType01" name="jobtitle">
								<br clear="all">
								<label class="labelType01"> Desired Job Category:</label>
								<div class="divType01">
									<div class="wrapper">
										<ul>
										<li><input type="checkbox" value="1" id="ind1" name="industryid"> <label for="ind1">Accounting/Finance</label></li><li><input type="checkbox" value="58" id="ind58" name="industryid"> <label for="ind58">Accounting/Auditing</label></li><li><input type="checkbox" value="67" id="ind67" name="industryid"> <label for="ind67">Automotive</label></li><li><input type="checkbox" value="2" id="ind2" name="industryid"> <label for="ind2">Administrative/Clerical</label></li><li><input type="checkbox" value="3" id="ind3" name="industryid"> <label for="ind3">Advertising/Promotion/PR</label></li><li><input type="checkbox" value="4" id="ind4" name="industryid"> <label for="ind4">Agriculture/Forestry</label></li><li><input type="checkbox" value="5" id="ind5" name="industryid"> <label for="ind5">Architecture/Interior Design</label></li><li><input type="checkbox" value="22" id="ind22" name="industryid"> <label for="ind22">Health/Medical Care</label></li><li><input type="checkbox" value="10" id="ind10" name="industryid"> <label for="ind10">Arts/Design</label></li><li><input type="checkbox" value="42" id="ind42" name="industryid"> <label for="ind42">Banking</label></li><li><input type="checkbox" value="43" id="ind43" name="industryid"> <label for="ind43">Chemical/Biochemical</label></li><li><input type="checkbox" value="7" id="ind7" name="industryid"> <label for="ind7">Civil/Construction</label></li><li><input type="checkbox" value="68" id="ind68" name="industryid"> <label for="ind68">Industrial Products</label></li><li><input type="checkbox" value="8" id="ind8" name="industryid"> <label for="ind8">Consulting</label></li><li><input type="checkbox" value="11" id="ind11" name="industryid"> <label for="ind11">Customer Service</label></li><li><input type="checkbox" value="12" id="ind12" name="industryid"> <label for="ind12">Education/Training</label></li><li><input type="checkbox" value="64" id="ind64" name="industryid"> <label for="ind64">Electrical/Electronics</label></li><li><input type="checkbox" value="15" id="ind15" name="industryid"> <label for="ind15">Entry level</label></li><li><input type="checkbox" value="16" id="ind16" name="industryid"> <label for="ind16">Environment/Waste Services</label></li><li><input type="checkbox" value="17" id="ind17" name="industryid"> <label for="ind17">Executive management</label></li><li><input type="checkbox" value="18" id="ind18" name="industryid"> <label for="ind18">Expatriate Jobs in Vietnam</label></li><li><input type="checkbox" value="19" id="ind19" name="industryid"> <label for="ind19">Export-Import</label></li><li><input type="checkbox" value="54" id="ind54" name="industryid"> <label for="ind54">Food/Beverage</label></li><li><input type="checkbox" value="59" id="ind59" name="industryid"> <label for="ind59">Finance/Investment</label></li><li><input type="checkbox" value="60" id="ind60" name="industryid"> <label for="ind60">Food</label></li><li><input type="checkbox" value="63" id="ind63" name="industryid"> <label for="ind63">Fashion/Lifestyle</label></li><li><input type="checkbox" value="61" id="ind61" name="industryid"> <label for="ind61">Household/Personal Care</label></li><li><input type="checkbox" value="66" id="ind66" name="industryid"> <label for="ind66">High Technology</label></li><li><input type="checkbox" value="23" id="ind23" name="industryid"> <label for="ind23">Human Resources</label></li><li><input type="checkbox" value="24" id="ind24" name="industryid"> <label for="ind24">Insurance</label></li><li><input type="checkbox" value="47" id="ind47" name="industryid"> <label for="ind47">Interpreter/Translator</label></li><li><input type="checkbox" value="55" id="ind55" name="industryid"> <label for="ind55">IT - Hardware/Networking</label></li><li><input type="checkbox" value="57" id="ind57" name="industryid"> <label for="ind57">Internet/Online Media</label></li><li><input type="checkbox" value="35" id="ind35" name="industryid"> <label for="ind35">IT - Software</label></li><li><input type="checkbox" value="25" id="ind25" name="industryid"> <label for="ind25">Legal/Contracts</label></li><li><input type="checkbox" value="62" id="ind62" name="industryid"> <label for="ind62">Luxury Goods</label></li><li><input type="checkbox" value="65" id="ind65" name="industryid"> <label for="ind65">Mechanical</label></li><li><input type="checkbox" value="27" id="ind27" name="industryid"> <label for="ind27">Marketing</label></li><li><input type="checkbox" value="21" id="ind21" name="industryid"> <label for="ind21">NGO/Non-Profit</label></li><li><input type="checkbox" value="28" id="ind28" name="industryid"> <label for="ind28">Oil/Gas</label></li><li><input type="checkbox" value="6" id="ind6" name="industryid"> <label for="ind6">Pharmaceutical/Biotech</label></li><li><input type="checkbox" value="69" id="ind69" name="industryid"> <label for="ind69">Planning/Projects</label></li><li><input type="checkbox" value="26" id="ind26" name="industryid"> <label for="ind26">Production/Process</label></li><li><input type="checkbox" value="49" id="ind49" name="industryid"> <label for="ind49">Purchasing/Supply Chain</label></li><li><input type="checkbox" value="30" id="ind30" name="industryid"> <label for="ind30">Real Estate</label></li><li><input type="checkbox" value="32" id="ind32" name="industryid"> <label for="ind32">Retail/Wholesale</label></li><li><input type="checkbox" value="33" id="ind33" name="industryid"> <label for="ind33">Sales</label></li><li><input type="checkbox" value="34" id="ind34" name="industryid"> <label for="ind34">Sales Technical</label></li><li><input type="checkbox" value="56" id="ind56" name="industryid"> <label for="ind56">Securities &amp; Trading</label></li><li><input type="checkbox" value="41" id="ind41" name="industryid"> <label for="ind41">Telecommunications</label></li><li><input type="checkbox" value="51" id="ind51" name="industryid"> <label for="ind51">Temporary/Contract</label></li><li><input type="checkbox" value="52" id="ind52" name="industryid"> <label for="ind52">Textiles/Garments/Footwear</label></li><li><input type="checkbox" value="37" id="ind37" name="industryid"> <label for="ind37">Airlines/Tourism/Hotel</label></li><li><input type="checkbox" value="48" id="ind48" name="industryid"> <label for="ind48">TV/Media/Newspaper</label></li><li><input type="checkbox" value="36" id="ind36" name="industryid"> <label for="ind36">Freight/Logistics</label></li><li><input type="checkbox" value="53" id="ind53" name="industryid"> <label for="ind53">Warehouse</label></li><li><input type="checkbox" value="70" id="ind70" name="industryid"> <label for="ind70">QA/QC</label></li><li><input type="checkbox" value="71" id="ind71" name="industryid"> <label for="ind71">Overseas Jobs</label></li><li><input type="checkbox" value="39" id="ind39" name="industryid"> <label for="ind39">Other</label></li>	
										</ul>
									</div>
									<ul class="listType02">
										<li><a href="javascript:doCheck('industryid', true)">Check All</a></li>
										<li><a href="javascript:doCheck('industryid', false)">Uncheck All</a></li>
									</ul>
									<br class="clear">
								</div>
								<br class="clear">
								<label class="labelType01" for="combo1">Location:</label>
								<select style="width:205px" name="cityid">
									<option value="">All</option>
									<option value="29">Ho Chi Minh</option>
<option value="24">Ha Noi</option>
<option value="71">Mekong Delta</option>
<option value="2">An Giang</option>
<option value="3">Ba Ria</option>
<option value="4">Bac Can</option>
<option value="5">Bac Giang</option>
<option value="6">Bac Lieu</option>
<option value="7">Bac Ninh</option>
<option value="8">Ben Tre</option>
<option value="9">Bien Hoa</option>
<option value="10">Binh Dinh</option>
<option value="11">Binh Duong</option>
<option value="12">Binh Phuoc</option>
<option value="13">Binh Thuan</option>
<option value="14">Ca Mau</option>
<option value="15">Can Tho</option>
<option value="16">Cao Bang</option>
<option value="17">Da Nang</option>
<option value="18">Dac Lac</option>
<option value="69">Dien Bien</option>
<option value="19">Dong Nai</option>
<option value="20">Dong Thap</option>
<option value="21">Gia Lai</option>
<option value="22">Ha Giang</option>
<option value="23">Ha Nam</option>
<option value="25">Ha Tay</option>
<option value="26">Ha Tinh</option>
<option value="27">Hai Duong</option>
<option value="28">Hai Phong</option>
<option value="30">Hoa Binh</option>
<option value="31">Hue</option>
<option value="32">Hung Yen</option>
<option value="33">Khanh Hoa</option>
<option value="34">Kon Tum</option>
<option value="35">Lai Chau</option>
<option value="36">Lam Dong</option>
<option value="37">Lang Son</option>
<option value="38">Lao Cai</option>
<option value="39">Long An</option>
<option value="40">Nam Dinh</option>
<option value="41">Nghe An</option>
<option value="42">Ninh Binh</option>
<option value="43">Ninh Thuan</option>
<option value="44">Phu Tho</option>
<option value="45">Phu Yen</option>
<option value="46">Quang Binh</option>
<option value="47">Quang Nam</option>
<option value="48">Quang Ngai</option>
<option value="49">Quang Ninh</option>
<option value="50">Quang Tri</option>
<option value="51">Soc Trang</option>
<option value="52">Son La</option>
<option value="53">Tay Ninh</option>
<option value="54">Thai Binh</option>
<option value="55">Thai Nguyen</option>
<option value="56">Thanh Hoa</option>
<option value="57">Thua Thien-Hue</option>
<option value="58">Tien Giang</option>
<option value="59">Tra Vinh</option>
<option value="60">Tuyen Quang</option>
<option value="61">Kien Giang</option>
<option value="62">Vinh Long</option>
<option value="63">Vinh Phuc</option>
<option value="64">Vung Tau</option>
<option value="65">Yen Bai</option>
<option value="66">Other</option>
<option value="70">International</option>
<option value="72">Hau Giang</option>
								</select>
								<br class="clear">
								<label style="padding-top:1px" class="labelType01"><input type="checkbox" class="checkType01" value="1" name="checkcreated">&nbsp;&nbsp;Date posted</label>
								
								from: <input type="text" class="rc_inputInSearch" readonly="true" value="" name="fcreateddate" id="fcreateddate"> <img width="16" height="14" border="0" style="cursor:pointer" title="From" alt="From" src="http://images.vietnamworks.com/rc_icon_calendar.gif" id="img_fcreateddate">
								
								to: <input type="text" class="rc_inputInSearch" readonly="true" value="" name="tcreateddate" id="tcreateddate"> <img width="16" height="14" border="0" style="cursor:pointer" title="To" alt="To" src="http://images.vietnamworks.com/rc_icon_calendar.gif" id="img_tcreateddate">										
								
								<br clear="all">
								<label style="padding-top:1px" class="labelType01"><input type="checkbox" class="checkType01" value="1" name="checkexpired">&nbsp;&nbsp;Date expired</label>
								
								from: <input type="text" class="rc_inputInSearch" readonly="true" value="" name="fexpireddate" id="fexpireddate"> <img width="16" height="14" border="0" style="cursor:pointer" title="From" alt="From" src="http://images.vietnamworks.com/rc_icon_calendar.gif" id="img_fexpireddate">
								
								to: <input type="text" class="rc_inputInSearch" readonly="true" value="" name="texpireddate" id="texpireddate"> <img width="16" height="14" border="0" style="cursor:pointer" title="To" alt="To" src="http://images.vietnamworks.com/rc_icon_calendar.gif" id="img_texpireddate">										
	
								<br clear="all">
								<div style="padding-left:200px"><div class="rc_bgbutton"><input type="button" value="Search" onclick="doSearch(1);" class="rc_button"></div></div>
							</dd>
						</dl>
					<div class="rc_box_bottom"><span class="rc_box_botleft"><!-- --></span><span class="rc_box_botright"><!-- --></span></div>	
				</div>	
			</div>
			<!-- end search my job posting -->				
			</form>
		</div>
		<div class="rc_box_bottom"><span class="rc_box_botleft"><!-- --></span><span class="rc_box_botright"><!-- --></span></div>
		<!-- end box Job Application -->
	</div><!--end right column -->
	<br clear="all">
</div>
<div class="ls"></div>