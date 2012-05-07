<div id="rc_container">
	<!-- begin left column -->
	<div class="rc_leftCol">
		<div class="rc_boxleftbg">
        <div class="rc_boxlefttop">
			<!-- begin My Recruitment Status -->
			<div class="rc_bigTitle">
				<h2>My Candidates</h2>
			</div>	
           
            <div id="folder_2" class="leftactive">
                                <a href="javascript:changeDataFolder(1, 0, 'Job Application')" name="ja">Job Application</a> <em id="ja_0">&nbsp;</em>
                            </div>
            <div class="rc_mycanct">
                <ul class="rc_listleft">
                                    </ul>
                <div class="rc_viewall">» <a href="folder_manage.php?folder_type=1">Edit Job Application folder</a></div>
            </div>	
			<!-- end Job Application -->
			
             <!-- beginComplete Resumes -->
			<div id="folder_1" class="rc_mycantitle">
                         <a href="javascript:changeDataFolder(3, 0, 'Complete Resumes')" name="cu">Complete Resumes</a> <em id="cu_0"></em><br>
            <em>(No active subscription)</em>            
                
             </div>     
             <div class="rc_mycanct">
                <ul class="rc_listleft">
                                    </ul>
                <div class="rc_viewall">» <a href="folder_manage.php?folder_type=3">Edit Complete Resumes folder</a></div>
            </div>	
			<!-- endComplete Resumes -->            
            
			<!-- begin Bookmarked Resumes -->			
            <div id="folder_3" class="rc_mycantitle">
                                <a href="javascript:changeDataFolder(2, 0, 'Bookmarked Resumes')" name="ja">Bookmarked Resumes</a> <em id="rs_0">&nbsp;</em>
                            </div>
            <div class="rc_mycanct">
                <ul class="rc_listleft">
                                    </ul>
                <div class="rc_viewall">» <a href="folder_manage.php?folder_type=2">Edit Bookmarked Resumes folder</a></div>
            </div>
         <!-- end Bookmarked Resumes -->
		<!-- Begin Deleted Resumes -->
		<div id="folder_4" class="rc_mycantitle">
                                <a href="javascript:changeDataFolder(4, 0, 'Deleted Resumes')" name="dr">Deleted Resumes</a> <em id="dr_0">&nbsp;</em>
                            </div>	
		<!-- end Delete Resumes -->
		</div></div>
        <div class="rc_boxleftbot"></div>
        <!-- end box left -->
	</div><!--end left column -->
	
	<!-- begin right column -->
	<div style="text-align: center; display: none;" id="loading_content_candiates">
		<img alt="" src="http://images.vietnamworks.com/loading.gif"><br>
		<strong>Job Application</strong>
	</div>
	
	<div style="" class="rc_rightCol" id="content_candiates">
		<!-- begin box Job Application -->
		<div class="rc_box_top"><span class="rc_box_topleft"><!-- --></span><span class="rc_box_topright"><!-- --></span></div>
		<div id="rc_box_jobapp" class="rc_box_content rc_box_jobapp">
				<div class="rc_bigTitle">
					<h2 id="foldername">
                    Job Application					                    </h2>				
				</div>
				<form onsubmit="return doSearch()" method="post" name="frm">
					<p id="p_mesg">
					<strong>These candidates applied for your job.</strong><br><br>Note: Application will be deleted from Recruitment Center after 13 months.					</p>
					<div id="top_navigation" class="rc_navigation" style="display: none;">
						<div id="rc_navigationLeft1" class="rc_navigationLeft">
							<ul class="rc_listOptions">
								<li><a onclick="checkAllBox()" href="javascript:void(0)">Check All</a>&nbsp;|&nbsp;</li>
								<li><a onclick="clearAllBox()" href="javascript:void(0)">Uncheck All</a></li>
							</ul>
                            <div id="btt_action" class="rc_btnicon_contact"><input type="button" onclick="contactCandidate()" value="Contact" class="rc_btnicon"></div>		
							<div id="rc_btnicon_delete1" class="rc_btnicon_delete"><input type="button" onclick="removeCandidate()" value="Remove" class="rc_btnicon"></div>														<select id="resumestatus" class="rc_comboOutTable" onchange="changeStatus(this.value)" name="resumestatus">
								<option value="-1">Change Status</option>
																<option value="1">To interview</option>
																<option value="4">Rejected</option>
																<option value="5">Sent email </option>
																<option value="6">Passed</option>
															</select>	
					
							<select class="rc_comboOutTable" onchange="moveFolder(this.value)" name="folder_id_cbx_1" id="div_folder_app">
								<option value="-1">Move to Folder</option>
								<option value="newfolder">[New Folder]</option>
								<optgroup label="-------------------------------------------------------">
								<option value="0">Job Application</option>				            		
																	
								</optgroup>
							</select>
							<select class="rc_comboOutTable" onchange="moveFolder(this.value)" name="folder_id_cbx_2" style="display:none" id="div_folder_rs">
								<option value="-1">Move to Folder</option>
								<option value="newfolder">[New Folder]</option>
								<optgroup label="-------------------------------------------------------">
								<option value="0">Bookmark Resumes</option> 					
																	
								</optgroup>
							</select>
                            <select class="rc_comboOutTable" onchange="moveFolder(this.value)" name="folder_id_cbx_5" style="display:none" id="div_folder_cu">
								<option value="-1">Move to Folder</option>
								<option value="newfolder">[New Folder]</option>
								<optgroup label="-------------------------------------------------------">
								<option value="0">Complete Resumes</option> 					
																	
								</optgroup>
							</select>
							<div style="display:none; position:absolute; width:130px; height:16px; z-index:1000; border:#e1e1e2 1px solid; background:#FFFFCC; color:#006600; text-align:center; top:23px; left:395px" id="movefolder_success">Moved Successfully</div>
						</div>		
						<div class="rc_navigationRight">
							<div style="float:right" id="navigator_1"></div>
						</div>
						<br clear="all">
					</div><!-- end navigation -->
					
					<!-- begin table job application -->
					<div style="margin-top:10px">
						<div style="position:absolute; text-align:center; background-color:#FFFFFF; filter:alpha(opacity=30); -moz-opacity:.30; opacity:.30; display:none" id="before_candidates_table"></div>
						<div style="position:absolute; text-align:center; display:none" id="before_before_candidates_table">
							<img alt="" src="http://images.vietnamworks.com/loading.gif"><br>
							<strong>Loading Candidates</strong>
						</div>
						<div class="rc_table_top"><span class="rc_table_topleft"><!-- --></span><span class="rc_table_topright"><!-- --></span></div>
							<dl class="rc_tableList" id="candidates_table" style="display: none;"></dl>
							<dl style="" class="rc_tableList" id="candidates_table_nodata"><dt><span class="rc_col_32px">&nbsp;</span><span class="rc_col_180px">Candidate name</span><span class="rc_col_125px">Job title</span><span class="rc_col_125px">&nbsp;</span><span class="rc_col_120px">Date Received</span><span class="rc_col_105px">Status</span><br class="clear"></dt><dd><p class="rc_colAlignCenter"><strong id="no_application">You have no resumes in this folder.</strong></p></dd></dl>
						<div class="rc_box_bottom"><span class="rc_box_botleft"><!-- --></span><span class="rc_box_botright"><!-- --></span></div>
					</div>
					<!-- end table job application -->  
					
					<div id="bot_navigation" class="rc_navigation" style="display: none;">
						<div id="rc_navigationLeft2" class="rc_navigationLeft">
							<ul class="rc_listOptions">
								<li><a onclick="checkAllBox()" href="javascript:void(0)">Check All</a>&nbsp;|&nbsp;</li>
								<li><a onclick="clearAllBox()" href="javascript:void(0)">Uncheck All</a></li>
							</ul>
							<div id="btt_action_1" class="rc_btnicon_contact"><input type="button" onclick="contactCandidate()" value="Contact" class="rc_btnicon"></div>							<div id="rc_btnicon_delete2" class="rc_btnicon_delete"><input type="button" onclick="removeCandidate()" value="Remove" class="rc_btnicon"></div>														<select id="resumestatus_2" class="rc_comboOutTable" onchange="changeStatus(this.value)" name="resumestatus_2">
								<option value="-1">Change Status</option>
																<option value="1">To interview</option>
																<option value="4">Rejected</option>
																<option value="5">Sent email </option>
																<option value="6">Passed</option>
															</select>							
							
							<select class="rc_comboOutTable" onchange="moveFolder(this.value)" name="folder_id_cbx_3" id="div_folder_app_2">
								<option value="-1">Move to Folder</option>
								<option value="newfolder">[New Folder]</option>
								<optgroup label="-------------------------------------------------------">
								<option value="0">Job Application</option>				            		
																	
								</optgroup>
							</select>			
	
							<select class="rc_comboOutTable" onchange="moveFolder(this.value)" name="folder_id_cbx_4" style="display:none" id="div_folder_rs_2">
								<option value="-1">Move to Folder</option>
								<option value="newfolder">[New Folder]</option>
								<optgroup label="-------------------------------------------------------">
								<option value="0">Bookmark Resumes</option> 					
																	
								</optgroup>
							</select>		
                             <select class="rc_comboOutTable" onchange="moveFolder(this.value)" name="folder_id_cbx_6" style="display:none" id="div_folder_cu_2">
								<option value="-1">Move to Folder</option>
								<option value="newfolder">[New Folder]</option>
								<optgroup label="-------------------------------------------------------">
								<option value="0">Complete Resumes</option> 					
																	
								</optgroup>
							</select>	
							<div style="display:none; position:absolute; width:130px; height:16px; z-index:1000; border:#e1e1e2 1px solid; background:#FFFFCC; color:#006600; text-align:center; top:23px; left:395px" id="movefolder_success_2">Moved Successfully</div>
						</div>
						
						<div class="rc_navigationRight">
							<div style="float:right" id="navigator_2"></div>
						</div>
						<br clear="all">
					</div><!-- end navigation -->
					<!-- begine button restore-->
						<div id="rc_btnicon_restore" class="rc_btnicon_restore" style="display: none;"><input type="button" onclick="restoreCandidate()" value="Restore" class="rc_btnicon"></div>	
					<!-- end button restore-->
					<!-- begin Search job application's candidate -->
					<div style="width:auto" method="get" action="" class="formType01" id="div_search">	
						<div id="closed_search" style="display: none;">
							<div class="rc_table_top"><span class="rc_table_topleft"><!-- --></span><span class="rc_table_topright"><!-- --></span></div>
								<dl class="rc_tableList">
									<dt>
										<span><img width="11" height="11" onclick="javascript:doShow('open')" alt="" src="http://images.vietnamworks.com/rc_icon_plus.gif">&nbsp;&nbsp; <a id="search_title" href="javascript:doShow('open')">Search Applied Candidates</a> </span>
										<br class="clear">
									</dt>
								</dl>	
							<div class="rc_table_bottom"><span class="rc_table_botleft"><!-- --></span><span class="rc_table_botright"><!-- --></span></div>	
						</div>		
						
						<div style="display:none" id="opened_search">
							<div class="rc_table_top"><span class="rc_table_topleft"><!-- --></span><span class="rc_table_topright"><!-- --></span></div>
								<dl class="rc_tableList">
									<dt>
										<span><img width="11" height="11" onclick="javascript:doShow('close')" alt="" src="http://images.vietnamworks.com/rc_icon_minus.gif">&nbsp;&nbsp; <a id="search_title2" href="javascript:doShow('close')">Search Applied Candidates</a> </span>
										<br class="clear">
									</dt>
									<dd style="padding-top:10px">									
										<label class="labelType01" for="textfield1">Keywords:</label>
										<input type="text" onkeypress="onEnter(event);" value="" class="inputType01" name="keyword">
										<br clear="all">
										<div id="keyword_note" class="rc_sub_note">e.g. search by applied job title or desired job title </div>
										<div style="display:none" id="tr_industry">					
											<label class="labelType01">Industries:</label>
											<div class="divType01">
												<div class="wrapper">
													<ul>
													<li><input type="checkbox" value="1" id="ind1" name="industryid"> <label for="ind1">Accounting/Finance</label></li><li><input type="checkbox" value="58" id="ind58" name="industryid"> <label for="ind58">Accounting/Auditing</label></li><li><input type="checkbox" value="67" id="ind67" name="industryid"> <label for="ind67">Automotive</label></li><li><input type="checkbox" value="2" id="ind2" name="industryid"> <label for="ind2">Administrative/Clerical</label></li><li><input type="checkbox" value="3" id="ind3" name="industryid"> <label for="ind3">Advertising/Promotion/PR</label></li><li><input type="checkbox" value="4" id="ind4" name="industryid"> <label for="ind4">Agriculture/Forestry</label></li><li><input type="checkbox" value="5" id="ind5" name="industryid"> <label for="ind5">Architecture/Interior Design</label></li><li><input type="checkbox" value="22" id="ind22" name="industryid"> <label for="ind22">Health/Medical Care</label></li><li><input type="checkbox" value="10" id="ind10" name="industryid"> <label for="ind10">Arts/Design</label></li><li><input type="checkbox" value="42" id="ind42" name="industryid"> <label for="ind42">Banking</label></li><li><input type="checkbox" value="43" id="ind43" name="industryid"> <label for="ind43">Chemical/Biochemical</label></li><li><input type="checkbox" value="7" id="ind7" name="industryid"> <label for="ind7">Civil/Construction</label></li><li><input type="checkbox" value="68" id="ind68" name="industryid"> <label for="ind68">Industrial Products</label></li><li><input type="checkbox" value="8" id="ind8" name="industryid"> <label for="ind8">Consulting</label></li><li><input type="checkbox" value="11" id="ind11" name="industryid"> <label for="ind11">Customer Service</label></li><li><input type="checkbox" value="12" id="ind12" name="industryid"> <label for="ind12">Education/Training</label></li><li><input type="checkbox" value="64" id="ind64" name="industryid"> <label for="ind64">Electrical/Electronics</label></li><li><input type="checkbox" value="15" id="ind15" name="industryid"> <label for="ind15">Entry level</label></li><li><input type="checkbox" value="16" id="ind16" name="industryid"> <label for="ind16">Environment/Waste Services</label></li><li><input type="checkbox" value="17" id="ind17" name="industryid"> <label for="ind17">Executive management</label></li><li><input type="checkbox" value="18" id="ind18" name="industryid"> <label for="ind18">Expatriate Jobs in Vietnam</label></li><li><input type="checkbox" value="19" id="ind19" name="industryid"> <label for="ind19">Export-Import</label></li><li><input type="checkbox" value="54" id="ind54" name="industryid"> <label for="ind54">Food/Beverage</label></li><li><input type="checkbox" value="59" id="ind59" name="industryid"> <label for="ind59">Finance/Investment</label></li><li><input type="checkbox" value="60" id="ind60" name="industryid"> <label for="ind60">Food</label></li><li><input type="checkbox" value="63" id="ind63" name="industryid"> <label for="ind63">Fashion/Lifestyle</label></li><li><input type="checkbox" value="61" id="ind61" name="industryid"> <label for="ind61">Household/Personal Care</label></li><li><input type="checkbox" value="66" id="ind66" name="industryid"> <label for="ind66">High Technology</label></li><li><input type="checkbox" value="23" id="ind23" name="industryid"> <label for="ind23">Human Resources</label></li><li><input type="checkbox" value="24" id="ind24" name="industryid"> <label for="ind24">Insurance</label></li><li><input type="checkbox" value="47" id="ind47" name="industryid"> <label for="ind47">Interpreter/Translator</label></li><li><input type="checkbox" value="55" id="ind55" name="industryid"> <label for="ind55">IT - Hardware/Networking</label></li><li><input type="checkbox" value="57" id="ind57" name="industryid"> <label for="ind57">Internet/Online Media</label></li><li><input type="checkbox" value="35" id="ind35" name="industryid"> <label for="ind35">IT - Software</label></li><li><input type="checkbox" value="25" id="ind25" name="industryid"> <label for="ind25">Legal/Contracts</label></li><li><input type="checkbox" value="62" id="ind62" name="industryid"> <label for="ind62">Luxury Goods</label></li><li><input type="checkbox" value="65" id="ind65" name="industryid"> <label for="ind65">Mechanical</label></li><li><input type="checkbox" value="27" id="ind27" name="industryid"> <label for="ind27">Marketing</label></li><li><input type="checkbox" value="21" id="ind21" name="industryid"> <label for="ind21">NGO/Non-Profit</label></li><li><input type="checkbox" value="28" id="ind28" name="industryid"> <label for="ind28">Oil/Gas</label></li><li><input type="checkbox" value="6" id="ind6" name="industryid"> <label for="ind6">Pharmaceutical/Biotech</label></li><li><input type="checkbox" value="69" id="ind69" name="industryid"> <label for="ind69">Planning/Projects</label></li><li><input type="checkbox" value="26" id="ind26" name="industryid"> <label for="ind26">Production/Process</label></li><li><input type="checkbox" value="49" id="ind49" name="industryid"> <label for="ind49">Purchasing/Supply Chain</label></li><li><input type="checkbox" value="30" id="ind30" name="industryid"> <label for="ind30">Real Estate</label></li><li><input type="checkbox" value="32" id="ind32" name="industryid"> <label for="ind32">Retail/Wholesale</label></li><li><input type="checkbox" value="33" id="ind33" name="industryid"> <label for="ind33">Sales</label></li><li><input type="checkbox" value="34" id="ind34" name="industryid"> <label for="ind34">Sales Technical</label></li><li><input type="checkbox" value="56" id="ind56" name="industryid"> <label for="ind56">Securities &amp; Trading</label></li><li><input type="checkbox" value="41" id="ind41" name="industryid"> <label for="ind41">Telecommunications</label></li><li><input type="checkbox" value="51" id="ind51" name="industryid"> <label for="ind51">Temporary/Contract</label></li><li><input type="checkbox" value="52" id="ind52" name="industryid"> <label for="ind52">Textiles/Garments/Footwear</label></li><li><input type="checkbox" value="37" id="ind37" name="industryid"> <label for="ind37">Airlines/Tourism/Hotel</label></li><li><input type="checkbox" value="48" id="ind48" name="industryid"> <label for="ind48">TV/Media/Newspaper</label></li><li><input type="checkbox" value="36" id="ind36" name="industryid"> <label for="ind36">Freight/Logistics</label></li><li><input type="checkbox" value="53" id="ind53" name="industryid"> <label for="ind53">Warehouse</label></li><li><input type="checkbox" value="70" id="ind70" name="industryid"> <label for="ind70">QA/QC</label></li><li><input type="checkbox" value="71" id="ind71" name="industryid"> <label for="ind71">Overseas Jobs</label></li><li><input type="checkbox" value="39" id="ind39" name="industryid"> <label for="ind39">Other</label></li>	
													</ul>
												</div>
												<ul class="listType02">
													<li><a href="javascript:doCheck('industryid', true)">Check All</a>&nbsp;&nbsp;&nbsp;<a href="javascript:doCheck('industryid', false)">Uncheck All</a></li>
												</ul>
												<br class="clear">
											</div>
											<br class="clear">
										</div>
										<div style="display:none" id="tr_city">
											<label class="labelType01" for="combo1">Location:</label>
											<select class="comboType01" name="cityid">
												<option value="">All Locations</option>
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
										</div>
										
										<label style="padding-top:1px" class="labelType01"><input type="checkbox" align="left" class="checkType01" value="1" name="checkcreated">&nbsp;&nbsp;<font id="td_createddate">Date applied</font></label>
										from: <input type="text" class="rc_inputInSearch" readonly="true" value="" name="fcreateddate" id="fcreateddate"> <img width="16" height="14" src="http://images.vietnamworks.com/rc_icon_calendar.gif" id="img_fcreateddate">&nbsp;
										to: <input type="text" class="rc_inputInSearch" readonly="true" value="" name="tcreateddate" id="tcreateddate"> <img width="16" height="14" src="http://images.vietnamworks.com/rc_icon_calendar.gif" id="img_tcreateddate">										
										<br clear="all">
										
										<div style="display:none" id="tr_updateddate">
											<label style="padding-top:1px" class="labelType01"><input type="checkbox" align="left" class="checkType01" value="1" name="checkupdated">&nbsp;&nbsp;Date updated</label>
											from: <input type="text" class="rc_inputInSearch" readonly="true" value="" name="fupdateddate" id="fupdateddate"> <img width="16" height="14" src="http://images.vietnamworks.com/rc_icon_calendar.gif" id="img_fupdateddate">&nbsp;
											to: <input type="text" class="rc_inputInSearch" readonly="true" value="" name="tupdateddate" id="tupdateddate"> <img width="16" height="14" src="http://images.vietnamworks.com/rc_icon_calendar.gif" id="img_tupdateddate">										
											<br clear="all">
										</div>
										
										<div id="tr_posteddate">
											<label style="padding-top:1px" class="labelType01"><input type="checkbox" class="checkType01" value="1" name="checkposted">&nbsp;&nbsp;Job posted</label>
											from: <input type="text" class="rc_inputInSearch" readonly="true" value="" name="fposteddate" id="fposteddate"> <img width="16" height="14" src="http://images.vietnamworks.com/rc_icon_calendar.gif" id="img_fposteddate">&nbsp;
											to: <input type="text" class="rc_inputInSearch" readonly="true" value="" name="tposteddate" id="tposteddate"> <img width="16" height="14" src="http://images.vietnamworks.com/rc_icon_calendar.gif" id="img_tposteddate">										
											<br clear="all">
										</div>
										
										<div style="padding-left:195px"><div class="rc_bgbutton"><input type="button" value="Search" class="rc_button" onclick="doSearch(1);"></div></div>
									</dd>
								</dl>
							<div class="rc_box_bottom"><span class="rc_box_botleft"><!-- --></span><span class="rc_box_botright"><!-- --></span></div>	
						</div>	
					</div>		
					<!-- end Search job application's candidate -->
			</form>
		</div>
		<div class="rc_box_bottom"><span class="rc_box_botleft"><!-- --></span><span class="rc_box_botright"><!-- --></span></div>
		<!-- end box Job Application -->
	</div><!--end right column -->
	<br clear="all">
</div>