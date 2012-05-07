<div class="container" id="jobpost">
    <div class="pageTitleBox span-24">
        <h1 class="pageTitle advancedSearch"><span>Advanced Search</span></h1>
        <!-- Vietnamese
        <h1 class="pageTitle advancedSearch_Vn"><span>Tìm Kiếm Nâng Cao</span></h1>
        -->
    </div>
    <div class="content  span-24 floatLeft" id="content">
        <!-- Begin Message Box-->
        <div class="messageBox hide" id="messagebox">
            <div class="error"><strong class="sprite_icon errorIcon">This is a div with the class error.</strong></div>
            <!--<div class="notice"><strong class="sprite_icon noticeIcon">This is a div with the class notice.</strong></div>
                        <div class="success"><strong class="sprite_icon successIcon">This is a div with the class success.</strong></div>-->
        </div>
        <!--End Message Box-->
        <form class="jqtransform " onsubmit="return checkAtLeastCriteria()" id="frmsearch" method="GET" action="searchresults.php" name="frmsearch">
            <!-- Begin Step 1- Panel -->
            <!-- Begin Company Information -->
            <!-- Begin Job Information- Panel -->
            <div class="panelContainer last">
                <h2 class="panelHeader"><span>Search Criteria</span></h2>
                <div class="panelWrapper">
                    <div id="job" class="panelContent">
                        <fieldset>
                            <legend>Search Criteria</legend>
                            <dl class="formRow span-23">
                                <dt class="span-7">
                                    <label for="">Keywords</label>
                                </dt>
                                <dd class="formValue span-15">
                                    <input type="text" tabindex="1" value="" id="keyword" name="keyword" class="text span-14">
                                    <br class="clear">
                                    <input type="checkbox" style="float:left" checked="" tabindex="2" value="3" id="mustmatch" name="mustmatch">
                                    <span class="inlineText">Search for the exact wording or phrase I entered</span> <span class="errorMessage hide"><strong class="sprite_icon warningIcon">Error message goes here</strong></span></dd>
                            </dl>
							<dl class="formRow span-23">
                                <dt class="span-7">
                                    <label for="">Search keyword by section</label>
                                </dt>
                                <dd class="formValue span-15">
                                    	                                <span class="span-4"><input type="checkbox" id="priority_desiredjobtitle" name="priority[]" value="desiredjobtitle" tabindex="2"> Expected Job Title</span>
	                                <span class="span-4"><input type="checkbox" id="priority_education" name="priority[]" value="education" tabindex="2"> Education</span><br class="clear">
	                                <span class="span-4"><input type="checkbox" id="priority_workexperience" name="priority[]" value="workexperience" tabindex="2"> Experience</span>
	                                <span class="span-4"><input type="checkbox" id="priority_skill" name="priority[]" value="skill" tabindex="2"> Skills</span>
                                
                                </dd>
                            </dl>
                            <dl class="formRow span-23">
                                <dt class="span-7">
                                    <label for="companyName">Expected Job Category </label>
                                </dt>
                                <dd class="formValue span-15 relative">
                                    <select tabindex="9" class="select span-8" id="cateList" name="cateList" style="display: none;">
                                        <option value=""></option>
                                										<option value="1" id="cateItem_1">Accounting/Finance</option>
							        									<option value="58" id="cateItem_58">Accounting/Auditing</option>
							        									<option value="67" id="cateItem_67">Automotive</option>
							        									<option value="2" id="cateItem_2">Administrative/Clerical</option>
							        									<option value="3" id="cateItem_3">Advertising/Promotion/PR</option>
							        									<option value="4" id="cateItem_4">Agriculture/Forestry</option>
							        									<option value="5" id="cateItem_5">Architecture/Interior Design</option>
							        									<option value="22" id="cateItem_22">Health/Medical Care</option>
							        									<option value="10" id="cateItem_10">Arts/Design</option>
							        									<option value="42" id="cateItem_42">Banking</option>
							        									<option value="43" id="cateItem_43">Chemical/Biochemical</option>
							        									<option value="7" id="cateItem_7">Civil/Construction</option>
							        									<option value="68" id="cateItem_68">Industrial Products</option>
							        									<option value="8" id="cateItem_8">Consulting</option>
							        									<option value="11" id="cateItem_11">Customer Service</option>
							        									<option value="12" id="cateItem_12">Education/Training</option>
							        									<option value="64" id="cateItem_64">Electrical/Electronics</option>
							        									<option value="15" id="cateItem_15">Entry level</option>
							        									<option value="16" id="cateItem_16">Environment/Waste Services</option>
							        									<option value="17" id="cateItem_17">Executive management</option>
							        									<option value="18" id="cateItem_18">Expatriate Jobs in Vietnam</option>
							        									<option value="19" id="cateItem_19">Export-Import</option>
							        									<option value="54" id="cateItem_54">Food/Beverage</option>
							        									<option value="59" id="cateItem_59">Finance/Investment</option>
							        									<option value="60" id="cateItem_60">Food</option>
							        									<option value="63" id="cateItem_63">Fashion/Lifestyle</option>
							        									<option value="61" id="cateItem_61">Household/Personal Care</option>
							        									<option value="66" id="cateItem_66">High Technology</option>
							        									<option value="23" id="cateItem_23">Human Resources</option>
							        									<option value="24" id="cateItem_24">Insurance</option>
							        									<option value="47" id="cateItem_47">Interpreter/Translator</option>
							        									<option value="55" id="cateItem_55">IT - Hardware/Networking</option>
							        									<option value="57" id="cateItem_57">Internet/Online Media</option>
							        									<option value="35" id="cateItem_35">IT - Software</option>
							        									<option value="25" id="cateItem_25">Legal/Contracts</option>
							        									<option value="62" id="cateItem_62">Luxury Goods</option>
							        									<option value="65" id="cateItem_65">Mechanical</option>
							        									<option value="27" id="cateItem_27">Marketing</option>
							        									<option value="21" id="cateItem_21">NGO/Non-Profit</option>
							        									<option value="28" id="cateItem_28">Oil/Gas</option>
							        									<option value="6" id="cateItem_6">Pharmaceutical/Biotech</option>
							        									<option value="69" id="cateItem_69">Planning/Projects</option>
							        									<option value="26" id="cateItem_26">Production/Process</option>
							        									<option value="49" id="cateItem_49">Purchasing/Supply Chain</option>
							        									<option value="30" id="cateItem_30">Real Estate</option>
							        									<option value="32" id="cateItem_32">Retail/Wholesale</option>
							        									<option value="33" id="cateItem_33">Sales</option>
							        									<option value="34" id="cateItem_34">Sales Technical</option>
							        									<option value="56" id="cateItem_56">Securities &amp; Trading</option>
							        									<option value="41" id="cateItem_41">Telecommunications</option>
							        									<option value="51" id="cateItem_51">Temporary/Contract</option>
							        									<option value="52" id="cateItem_52">Textiles/Garments/Footwear</option>
							        									<option value="37" id="cateItem_37">Airlines/Tourism/Hotel</option>
							        									<option value="48" id="cateItem_48">TV/Media/Newspaper</option>
							        									<option value="36" id="cateItem_36">Freight/Logistics</option>
							        									<option value="53" id="cateItem_53">Warehouse</option>
							        									<option value="70" id="cateItem_70">QA/QC</option>
							        									<option value="71" id="cateItem_71">Overseas Jobs</option>
							        									<option value="39" id="cateItem_39">Other</option>
							        							        </select><input info="multi" tabindex="3" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" class="text span-8">
                                    <div style="height:115px;display: none;" class="scrollBox  nobold select span-8">
                                     	<ul>
                                        	                                            <li>
                                                <input type="checkbox" id="industry_1" value="1" name="industry[]">
                                                <label id="textindustry_1" for="industry_1">Accounting/Finance</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_58" value="58" name="industry[]">
                                                <label id="textindustry_58" for="industry_58">Accounting/Auditing</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_67" value="67" name="industry[]">
                                                <label id="textindustry_67" for="industry_67">Automotive</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_2" value="2" name="industry[]">
                                                <label id="textindustry_2" for="industry_2">Administrative/Clerical</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_3" value="3" name="industry[]">
                                                <label id="textindustry_3" for="industry_3">Advertising/Promotion/PR</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_4" value="4" name="industry[]">
                                                <label id="textindustry_4" for="industry_4">Agriculture/Forestry</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_5" value="5" name="industry[]">
                                                <label id="textindustry_5" for="industry_5">Architecture/Interior Design</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_22" value="22" name="industry[]">
                                                <label id="textindustry_22" for="industry_22">Health/Medical Care</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_10" value="10" name="industry[]">
                                                <label id="textindustry_10" for="industry_10">Arts/Design</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_42" value="42" name="industry[]">
                                                <label id="textindustry_42" for="industry_42">Banking</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_43" value="43" name="industry[]">
                                                <label id="textindustry_43" for="industry_43">Chemical/Biochemical</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_7" value="7" name="industry[]">
                                                <label id="textindustry_7" for="industry_7">Civil/Construction</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_68" value="68" name="industry[]">
                                                <label id="textindustry_68" for="industry_68">Industrial Products</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_8" value="8" name="industry[]">
                                                <label id="textindustry_8" for="industry_8">Consulting</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_11" value="11" name="industry[]">
                                                <label id="textindustry_11" for="industry_11">Customer Service</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_12" value="12" name="industry[]">
                                                <label id="textindustry_12" for="industry_12">Education/Training</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_64" value="64" name="industry[]">
                                                <label id="textindustry_64" for="industry_64">Electrical/Electronics</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_15" value="15" name="industry[]">
                                                <label id="textindustry_15" for="industry_15">Entry level</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_16" value="16" name="industry[]">
                                                <label id="textindustry_16" for="industry_16">Environment/Waste Services</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_17" value="17" name="industry[]">
                                                <label id="textindustry_17" for="industry_17">Executive management</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_18" value="18" name="industry[]">
                                                <label id="textindustry_18" for="industry_18">Expatriate Jobs in Vietnam</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_19" value="19" name="industry[]">
                                                <label id="textindustry_19" for="industry_19">Export-Import</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_54" value="54" name="industry[]">
                                                <label id="textindustry_54" for="industry_54">Food/Beverage</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_59" value="59" name="industry[]">
                                                <label id="textindustry_59" for="industry_59">Finance/Investment</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_60" value="60" name="industry[]">
                                                <label id="textindustry_60" for="industry_60">Food</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_63" value="63" name="industry[]">
                                                <label id="textindustry_63" for="industry_63">Fashion/Lifestyle</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_61" value="61" name="industry[]">
                                                <label id="textindustry_61" for="industry_61">Household/Personal Care</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_66" value="66" name="industry[]">
                                                <label id="textindustry_66" for="industry_66">High Technology</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_23" value="23" name="industry[]">
                                                <label id="textindustry_23" for="industry_23">Human Resources</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_24" value="24" name="industry[]">
                                                <label id="textindustry_24" for="industry_24">Insurance</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_47" value="47" name="industry[]">
                                                <label id="textindustry_47" for="industry_47">Interpreter/Translator</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_55" value="55" name="industry[]">
                                                <label id="textindustry_55" for="industry_55">IT - Hardware/Networking</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_57" value="57" name="industry[]">
                                                <label id="textindustry_57" for="industry_57">Internet/Online Media</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_35" value="35" name="industry[]">
                                                <label id="textindustry_35" for="industry_35">IT - Software</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_25" value="25" name="industry[]">
                                                <label id="textindustry_25" for="industry_25">Legal/Contracts</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_62" value="62" name="industry[]">
                                                <label id="textindustry_62" for="industry_62">Luxury Goods</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_65" value="65" name="industry[]">
                                                <label id="textindustry_65" for="industry_65">Mechanical</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_27" value="27" name="industry[]">
                                                <label id="textindustry_27" for="industry_27">Marketing</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_21" value="21" name="industry[]">
                                                <label id="textindustry_21" for="industry_21">NGO/Non-Profit</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_28" value="28" name="industry[]">
                                                <label id="textindustry_28" for="industry_28">Oil/Gas</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_6" value="6" name="industry[]">
                                                <label id="textindustry_6" for="industry_6">Pharmaceutical/Biotech</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_69" value="69" name="industry[]">
                                                <label id="textindustry_69" for="industry_69">Planning/Projects</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_26" value="26" name="industry[]">
                                                <label id="textindustry_26" for="industry_26">Production/Process</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_49" value="49" name="industry[]">
                                                <label id="textindustry_49" for="industry_49">Purchasing/Supply Chain</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_30" value="30" name="industry[]">
                                                <label id="textindustry_30" for="industry_30">Real Estate</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_32" value="32" name="industry[]">
                                                <label id="textindustry_32" for="industry_32">Retail/Wholesale</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_33" value="33" name="industry[]">
                                                <label id="textindustry_33" for="industry_33">Sales</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_34" value="34" name="industry[]">
                                                <label id="textindustry_34" for="industry_34">Sales Technical</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_56" value="56" name="industry[]">
                                                <label id="textindustry_56" for="industry_56">Securities &amp; Trading</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_41" value="41" name="industry[]">
                                                <label id="textindustry_41" for="industry_41">Telecommunications</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_51" value="51" name="industry[]">
                                                <label id="textindustry_51" for="industry_51">Temporary/Contract</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_52" value="52" name="industry[]">
                                                <label id="textindustry_52" for="industry_52">Textiles/Garments/Footwear</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_37" value="37" name="industry[]">
                                                <label id="textindustry_37" for="industry_37">Airlines/Tourism/Hotel</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_48" value="48" name="industry[]">
                                                <label id="textindustry_48" for="industry_48">TV/Media/Newspaper</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_36" value="36" name="industry[]">
                                                <label id="textindustry_36" for="industry_36">Freight/Logistics</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_53" value="53" name="industry[]">
                                                <label id="textindustry_53" for="industry_53">Warehouse</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_70" value="70" name="industry[]">
                                                <label id="textindustry_70" for="industry_70">QA/QC</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_71" value="71" name="industry[]">
                                                <label id="textindustry_71" for="industry_71">Overseas Jobs</label>
                                            </li>
                                                                                        <li>
                                                <input type="checkbox" id="industry_39" value="39" name="industry[]">
                                                <label id="textindustry_39" for="industry_39">Other</label>
                                            </li>
                                                                                    </ul>   
                                    </div>
                                    <div style="left:340px; display:none;" class="floatBox span-5 absolute" id="addindustry"> <span class="floatBoxArrow">&nbsp;</span>
                                    	<ul class="relative" id="industryadd"></ul>
                                    </div>
                                    <br class="clear">
                                    <!--div class="clear block">
                                    	<span>
                                    		<a href="javascript:uncheckAll(false)" >Uncheck  all</a>
                                    	</span> 
                                    	<span class="errorMessage hide">
                                    		<strong class="sprite_icon warningIcon">Error message goes here</strong>
                                    	</span>
                                    </div>
                                    <br class="clear" /-->
                                    </dd>
                            </dl>
                            <dl class="formRow span-23">
                                <dt class="span-7">
                                    <label for="companyName">Expected Job Location </label>
                                </dt>
                                <dd class="formValue span-15">
                                    <select tabindex="3" class="select span-8" id="city" name="city" style="display: none;">
                                        <option selected="" value="">All Locations</option>
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
                                    </select><input info="single" tabindex="4" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" class="text span-8">
                                    <span class="errorMessage hide"><strong class="sprite_icon warningIcon">Error message goes here</strong></span></dd>
                            </dl>
                            <dl class="formRow span-23">
                                <dt class="span-7">
                                    <label for="companyName">Expected Job Level</label>
                                </dt>
                                <dd class="formValue span-15">
                                    <select tabindex="4" class="select span-8" id="joblevel" name="joblevel">
                                        <option selected="" value="">No Preference</option>
										<option value="1">New Grad/Entry Level/Internship</option>
<option value="5">Experienced (Non-Manager)</option>
<option value="6">Team Leader/Supervisor</option>
<option value="7">Manager</option>
<option value="3">Director</option>
<option value="4">CEO</option>
<option value="8">Vice President</option>
<option value="9">President</option>
                                    </select>
                                    <span class="errorMessage hide"><strong class="sprite_icon warningIcon">Error message goes here</strong></span></dd>
                            </dl>
                            <dl class="formRow span-23">
                                <dt class="span-7">
                                    <label for="companyName">Total Years of Experience</label>
                                </dt>
                                <dd class="formValue span-15">
                                    <input type="text" tabindex="5" value="" id="experience" name="experience" class="text span-8">
                                    <span class="errorMessage hide"><strong class="sprite_icon warningIcon">Error message goes here</strong></span></dd>
                            </dl>
							<dl class="formRow span-23">
                                <dt class="span-7">
                                    <label>Language Proficiency </label>
                                </dt>
                                <dd class="formValue">
                                    <select onchange="showLanguageLevel(this)" id="language_proficiency" name="language_proficiency" class="span-8" tabindex="7">
                                        <option value="0">No Preference</option>
										<option value="1">Arabic</option>
<option value="2">Bengali</option>
<option value="3">Bulgarian</option>
<option value="4">Burmese</option>
<option value="5">Cambodian</option>
<option value="6">Cebuano</option>
<option value="7">Chinese (Cantonese)</option>
<option value="8">Chinese (Mandarin)</option>
<option value="9">Czech</option>
<option value="10">Danish</option>
<option value="11">Dutch</option>
<option value="12">English</option>
<option value="13">Finnish</option>
<option value="14">French</option>
<option value="15">German</option>
<option value="16">Greek</option>
<option value="17">Hindi</option>
<option value="18">Hungarian</option>
<option value="19">Indonesian</option>
<option value="20">Italian</option>
<option value="21">Japanese</option>
<option value="22">Javanese</option>
<option value="23">Korean</option>
<option value="24">Laotian</option>
<option value="25">Malay</option>
<option value="26">Norwegian</option>
<option value="27">Polish</option>
<option value="28">Portuguese</option>
<option value="29">Romanian</option>
<option value="30">Russian</option>
<option value="31">Spanish</option>
<option value="32">Swedish</option>
<option value="33">Tagolog</option>
<option value="34">Taiwanese</option>
<option value="35">Thai</option>
<option value="36">Turkish</option>
<option value="37">Ukranian</option>
<option value="38">Vietnamese</option>
<option value="39">Other</option>
                                    </select>
                                    <select id="language_level" name="language_level" class="span-5plus" tabindex="7" style="display: none;">
                                        <option value="0">No Preference</option>
										<option value="1">Beginner</option>
<option value="2">Intermediate</option>
<option value="3">Advanced</option>
<option value="4">Native</option>
                                    </select>
                                   <br class="clear">
                                    <span id="noticeLanguage" class="span-14 light" style="display: none;">The language proficiency that candidates provide in resume is self-evaluated. 
                                    We recommend you to test during interview. </span>
								</dd>
                            </dl>
                            <dl class="formRow span-23">
                                <dt class="span-7">
                                    <label for="companyName">Updated in the last</label>
                                </dt>
                                <dd class="formValue span-15">
                                    <select tabindex="7" class="select span-8" id="days" name="days">
                                        <option value="0">Any</option>
																				<option value="3">3 day(s)</option>
																				<option value="7">7 day(s)</option>
																				<option value="14">14 day(s)</option>
																				<option value="30">30 day(s)</option>
																				<option value="60">60 day(s)</option>
																				<option value="90">90 day(s)</option>
																				<option value="120">120 day(s)</option>
																				<option value="150">150 day(s)</option>
																				<option selected="" value="180">180 day(s)</option>
																				<option value="210">210 day(s)</option>
																				<option value="240">240 day(s)</option>
																				<option value="270">270 day(s)</option>
																				<option value="300">300 day(s)</option>
																				<option value="365">365 day(s)</option>
										                                    </select>
                                    <span class="errorMessage hide"><strong class="sprite_icon warningIcon">Error message goes here</strong></span></dd>
                            </dl>
                            <br class="clear">
                            
                            <dl style="display:" id="more_search" class="formRow span-23">
                                <dt class="span-7">&nbsp;
                                    
                                </dt>
                                <dd class="formValue span-15">
                                    + <a onclick="showMoreOption()" href="javascript:void(0)">More Search Options</a></dd>
                            </dl>
                            <dl style="display:none" id="less_search" class="formRow span-23">
                                <dt class="span-7">&nbsp;
                                    
                                </dt>
                                <dd class="formValue span-15">
                                    - <a onclick="hideMoreOption()" href="javascript:void(0)">Less Search Options</a></dd>
                            </dl>
                           
                            <br class="clear">
                            <div id="div_more_search_option" style="display: none">
                            <dl class="formRow span-23">
                                <dt class="span-7">
                                    <label for="companyName">Minium Degree Attained</label>
                                </dt>
                                <dd class="formValue span-15">
                                    <select tabindex="8" class="select span-8" id="degree" name="degree">
                                        <option selected="" value="">No Preference</option>
										<option value="1">N/A</option>
<option value="2">High school</option>
<option value="3">Associate's degree</option>
<option value="12">College</option>
<option value="4">Bachelors</option>
<option value="14">Bachelor of Engineering</option>
<option value="13">Post-graduate</option>
<option value="10">CPA</option>
<option value="5">Masters</option>
<option value="7">MBA</option>
<option value="8">JD</option>
<option value="6">Doctorate</option>
<option value="15">Doctor of Pharmacy (PharmD)</option>
<option value="9">MD</option>
<option value="11">Others</option>
                                    </select>
                                    <span class="errorMessage hide"><strong class="sprite_icon warningIcon">Error message goes here</strong></span></dd>
                            </dl>
                            <dl class="formRow span-23">
                                <dt class="span-7">
                                    <label for="companyName">School</label>
                                </dt>
                                <dd class="formValue span-15">
                                    <select tabindex="9" class="select span-8" id="school" name="school" style="display: none;">
                                        <option value="-1">All Schools</option>
										<option value="32">Academy of Finance</option>
<option value="25">An Giang University</option>
<option value="20">Can Tho University</option>
<option value="76">Can Tho University of Medicine and Pharmacy</option>
<option value="64">Da Lat University</option>
<option value="65">Da Nang Economics University</option>
<option value="67">Da Nang Foreign Language University</option>
<option value="68">Da Nang University of Education</option>
<option value="21">Da Nang University of Technology</option>
<option value="43">Dong Do Private University, Hanoi</option>
<option value="26">Duy Tan Private University, Da Nang</option>
<option value="44">Hai Phong Private University</option>
<option value="53">Hai Phong University of Education</option>
<option value="50">Hanoi Agricultural University</option>
<option value="38">Hanoi Architectural University</option>
<option value="62">Hanoi Banking Institute</option>
<option value="30">Hanoi Foreign Language University</option>
<option value="28">Hanoi Foreign Trade University</option>
<option value="41">Hanoi Industrial College</option>
<option value="36">Hanoi Open University</option>
<option value="51">Hanoi Oriental Studies University</option>
<option value="61">Hanoi Post &amp; Telecommunications Institute of Technology</option>
<option value="58">Hanoi University of Culture</option>
<option value="47">Hanoi University of Forestry</option>
<option value="42">Hanoi University of Industry</option>
<option value="37">Hanoi University of Law</option>
<option value="49">Hanoi University of Mining and Geology</option>
<option value="40">Hanoi University of Natural Sciences</option>
<option value="35">Hanoi University of Social and Humanities</option>
<option value="34">Hanoi University of Technology</option>
<option value="31">Hanoi University of Transport and Communications</option>
<option value="57">Hanoi University of Water Resouces</option>
<option value="75">HCMC Banking University</option>
<option value="69">HCMC College of Information Technology</option>
<option value="11">HCMC Economics University</option>
<option value="7">HCMC Foreign Trade University</option>
<option value="73">HCMC Open University</option>
<option value="18">HCMC Post &amp; Telecommunications Institute of Technology</option>
<option value="13">HCMC Private University of Technology</option>
<option value="8">HCMC Univeristy of Agriculture &amp; Forestry</option>
<option value="6">HCMC University of Architecture</option>
<option value="4">HCMC University of Education</option>
<option value="74">HCMC University of Fine Arts</option>
<option value="12">HCMC University of Foreign Languages &amp; Information Technology</option>
<option value="70">HCMC University of Industry</option>
<option value="5">HCMC University of Law</option>
<option value="10">HCMC University of Medicine and Pharmacy</option>
<option value="3">HCMC University of Natural Sciences</option>
<option value="14">HCMC University of Social Sciences and Humanities</option>
<option value="15">HCMC University of Technical Education</option>
<option value="2">HCMC University of Technology</option>
<option value="17">HCMC University of Transport and Communciations</option>
<option value="71">Hong Bang Private University, HCMC</option>
<option value="19">Hong Duc University, Thanh Hoa</option>
<option value="66">Hue Economics University</option>
<option value="24">Hue University</option>
<option value="54">Hung Yen University of Technical Education</option>
<option value="33">National Economics University</option>
<option value="52">National University of Education, Hanoi</option>
<option value="63">Nha Trang College of Education</option>
<option value="23">Nha Trang Fisheries University</option>
<option value="22">Quy Nhon University</option>
<option value="60">Thai Binh Medical University</option>
<option value="55">Thai Nguyen University of Education</option>
<option value="46">Thai Nguyen University of Technology</option>
<option value="27">Thang Long University, Hanoi</option>
<option value="1">The National University of HCMC</option>
<option value="16">Ton Duc Thang University of Technology</option>
<option value="29">University of Civil Engineering</option>
<option value="72">Van Hien Private University, HCMC</option>
<option value="9">Van Lang Private University, HCMC</option>
<option value="45">Vietnam Maritime University, Hai Phong</option>
<option value="39">Vietnam National University, Hanoi</option>
<option value="56">Vietnam University of Commerce, Hanoi</option>
<option value="48">Vietnam University of Forestry</option>
<option value="59">Vinh University</option>
<option value="77">VSIC Education Corporation</option>
                                    </select><input info="single" tabindex="9" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" class="text span-8">
                                    <span class="errorMessage hide"><strong class="sprite_icon warningIcon">Error message goes here</strong></span></dd>
                            </dl>
                            <dl class="formRow span-23">
                                <dt class="span-7">
                                    <label for="companyName">Gender</label>
                                </dt>
                                <dd class="formValue span-15">
                                    <select tabindex="10" class="select span-8" id="gender" name="gender">
                                        <option value="0">No Preference</option>
										<option value="1">Male</option>
<option value="2">Female</option>
                                    </select>
                                    <span class="errorMessage hide"><strong class="sprite_icon warningIcon">Error message goes here</strong></span></dd>
                            </dl>
                            <dl class="formRow span-23">
                                <dt class="span-7">
                                    <label for="companyName">Salary Range</label>
                                </dt>
                                <dd class="formValue span-15"> <span class=" clear inlineText span-1">From </span>
                                    <input type="text" tabindex="11" onmouseout="checkInt(this, true);" onkeyup="checkInt(this, true);" maxlength="4" value="" id="salaryfrom" name="salaryfrom" class="text span-2 ">
                                    <span class=" inlineText span-1minus padding-left">To</span>
                                    <input type="text" tabindex="12" onmouseout="checkInt(this, true);" onkeyup="checkInt(this, true);" maxlength="4" value="" id="salaryto" name="salaryto" class="text span-2">
                                    <span class="inlineText span-3">&nbsp;(USD/Month)</span> <span class="errorMessage hide"><strong class="sprite_icon warningIcon">Error message goes here</strong></span> </dd>
                            </dl>
                            <dl class="formRow span-23">
                                <dt class="span-7">
                                    <label for="companyName">Age</label>
                                </dt>
                                <dd class="formValue span-15"> <span class=" clear inlineText span-1">From </span>
                                    <input type="text" tabindex="13" onmouseout="checkInt(this, true);" onkeyup="checkInt(this, true);" maxlength="4" value="" id="strfrom" name="agefrom" class="text span-2 ">
                                    <span class=" inlineText span-1minus padding-left">To </span>
                                    <input type="text" tabindex="14" onmouseout="checkInt(this, true);" onkeyup="checkInt(this, true);" maxlength="4" value="" id="strto" name="ageto" class="text span-2">
                                </dd>
                            </dl>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <!-- Form Action Bar-->
            <div class="prepend-7 padding-top">
                <fieldset>
                    <button tabindex="16" class="ActionBtn " type="submit"><span>Search</span></button>
                </fieldset>
            </div>
            <input type="hidden" value=" Search " name="search">
			<input type="hidden" value="1" name="isminimum">
			<input type="checkbox" style="visibility:hidden" id="checkinputall" name="checkinputall">
			<input type="hidden" value="" name="more_option">
            <input type="hidden" value="2" id="languageid">
        </form>
    </div>
    <!-- End Content-->
</div>