<?
class helper {
	var $db = "";
	// var $mail = "";
	function helper() {
		$this->db = new DBAccess ();
		// $this -> mail = new PHPMailer();
	} // End of function users()

	/**
	 * Function selectRecord (field name, value to compare, tableName).
	 *
	 * @return true or false
	 */
	function selectRecord($field, $value, $tableName, $data) {
		$q = "SELECT * FROM `" . $tableName . "` WHERE `" . $field . "` = '" . $value . "' ";

		if (isset ( $data ['sort'] )) {
			$q .= " ORDER BY " . $data ['sort'] . " ";
		}

		if (isset ( $data ['order'] )) {
			$q .= $data ['order'];
		}
		// echo $q;
		$r = $this->db->getSingleRecord ( $q );
		if ($r != false)
			return $r;
		else
			return false;
	}

	/**
	 * Function selectSingleRecord (tableName)
	 * select single record of table
	 *
	 * @return true or false
	 */
	function selectSingleRecord($tableName) {
		$q = "SELECT * FROM `" . $tableName . "`";
		$r = $this->db->getSingleRecord ( $q );
		if ($r != false)
			return $r;
		else
			return false;
	}
	/**
	 * Function selectRows (tableName,$statusField,$statusValue).
	 * return multiple records
	 *
	 * @return true or false
	 */
	function selectRows($tableName, $statusField, $statusValue, $data = array()) {
		$q = "SELECT * FROM `" . $tableName . "` WHERE `" . $statusField . "` = '" . $statusValue . "' ";

		if (isset ( $data ['sort'] )) {
			$q .= " ORDER BY " . $data ['sort']." ";
		}

		if (isset ( $data ['order'] )) {
			$q .= $data['order'];
		}

		if (isset ( $data ['group'] )) {
			$q .= " GROUP BY " . $data ['group']." ";
		}

		$r = $this->db->getMultipleRecords ( $q );
		if ($r != false)
			return $r;
		else
			return false;
	}

	function getContentDetails($content_id) {
		$content_data = array();

		$q = "SELECT * FROM `".CONTENT."` WHERE `content_id` = '" . $content_id . "' ";
		$r =	$this->db->getMultipleRecords ( $q );
		foreach ($r as $result) {
			$content_data[$result['language_id']] = array(
					'content_title'	=> $result['content_title'],
					'content_text' 	=> $result['content_text'],
					'banner_description' 	=> $result['banner_description'],
					'meta_title' 	=> $result['meta_title'],
					'meta_description' 	=> $result['meta_description'],
					'meta_keywords' 	=> $result['meta_keywords']
			);
		}
		return $content_data;
	}

	function getOrderContentDetails($content_id) {
		$content_data = array();

		$q = "SELECT * FROM `".TBL_ORDERS_CONTENT."` WHERE `content_id` = '" . $content_id . "' ";
		$r =	$this->db->getMultipleRecords ( $q );
		foreach ($r as $result) {
			$content_data[$result['language_id']] = array(
					'content_title'	=> $result['content_title'],
					'content_text' 	=> $result['content_text'],
					'banner_heading' 	=> $result['banner_heading'],
					'banner_description' 	=> $result['banner_description'],
					'step_heading' 	=> $result['step_heading'],
					'meta_title' 	=> $result['meta_title'],
					'meta_description' 	=> $result['meta_description'],
					'meta_keywords' 	=> $result['meta_keywords']
			);
		}
		return $content_data;
	}


	function getBannerDetails($banner_id) {
		$content_data = array();

		$q = "SELECT * FROM `".BANNER_DETAIL."` WHERE `banner_id` = '" . $banner_id . "' ";
		$r =	$this->db->getMultipleRecords ( $q );
		foreach ($r as $result) {
			$content_data[$result['language_id']] = array(
					'title'	=> $result['title']
			);
		}
		return $content_data;
	}

	function getCountryDetails($country_id) {
		$content_data = array();

		$q = "SELECT * FROM `".COUNTRY_DETAIL."` WHERE `country_id` = '" . $country_id . "' ";
		$r =	$this->db->getMultipleRecords ( $q );
		foreach ($r as $result) {
			$content_data[$result['language_id']] = array(
					'title'	=> $result['title'],
					'country_description' 	=> $result['country_description'],
					'banner_description' 	=> $result['banner_description']
			);
		}
		return $content_data;
	}

	function getProductAttributes($country_id) {

		$q = "SELECT * FROM `".COUNTRY_ADVANTAGES."` WHERE `country_id` = '" . $country_id . "' GROUP BY language_id";
		$r = $this->db->getMultipleRecords ( $q );

		if ($r != false)
			return $r;
		else
			return false;

	}

	function getCountryPrices($country_id) {
		$content_data = array();

		$q = "SELECT * FROM `".COUNTRY_PRICES."` WHERE `country_id` = '" . $country_id . "' ";
		$r =	$this->db->getMultipleRecords ( $q );
		foreach ($r as $result) {
			$content_data[$result['language_id']] = array(
					'first_yr_fee_tax_min' 	=> $result['first_yr_fee_tax_min'],
					'first_yr_fee_tax_max' 	=> $result['first_yr_fee_tax_max'],
					'annal_maintaince_fee_tax' 	=> $result['annal_maintaince_fee_tax'],
					'annal_maintaince_fee_tax_max' 	=> $result['annal_maintaince_fee_tax_max'],
					'dissolution_fees_min' 	=> $result['dissolution_fees_min'],
					'dissolution_fees_max' 	=> $result['dissolution_fees_max'],
					'drafting_mints' 	=> $result['drafting_mints'],
					'drafting_mints_max' 	=> $result['drafting_mints_max'],
					'general_power_attorney_min' 	=> $result['general_power_attorney_min'],
					'general_power_attorney_max' 	=> $result['general_power_attorney_max'],
					'specific_power_attorney' 	=> $result['specific_power_attorney'],
					'specific_power_attorney_max' 	=> $result['specific_power_attorney_max'],
					'amendment_memorandum_min' 	=> $result['amendment_memorandum_min'],
					'amendment_memorandum_max' 	=> $result['amendment_memorandum_max'],
					'search_public_registry_min' 	=> $result['search_public_registry_min'],
					'search_public_registry_max' 	=> $result['search_public_registry_max'],
					'good_standing_certificate' 	=> $result['good_standing_certificate'],
					'good_standing_certificate_max' 	=> $result['good_standing_certificate_max'],
					'legalization_documents' 	=> $result['legalization_documents'],
					'legalization_documents_max' 	=> $result['legalization_documents_max'],
					'apostille_min' 	=> $result['apostille_min'],
					'apostille_max' 	=> $result['apostille_max'],
					'custody_books' 	=> $result['custody_books'],
					'custody_books_max' 	=> $result['custody_books_max'],
					'director_fee_min' 	=> $result['director_fee_min'],
					'director_fee_max' 	=> $result['director_fee_max'],
					'directors' 	=> $result['directors'],
					'nominee_shareholder_min' 	=> $result['nominee_shareholder_min'],
					'nominee_shareholder_max' 	=> $result['nominee_shareholder_max'],
					'company_rubber_stamp' 	=> $result['company_rubber_stamp'],
					'company_rubber_stamp_max' 	=> $result['company_rubber_stamp_max'],
					'company_seal_min' 	=> $result['company_seal_min'],
					'company_seal_max' 	=> $result['company_seal_max'],
					'bank_account_fee' 	=> $result['bank_account_fee'],
					'offshore_account_fee' 	=> $result['offshore_account_fee'],
					'bank_order_fee' 	=> $result['bank_order_fee'],
					'shelf_order_fee' 	=> $result['shelf_order_fee'],
					'trust_order_fee' 	=> $result['trust_order_fee']
			);
		}
		return $content_data;
	}

	function getCountrySpecification($country_id) {
		$content_data = array();

		$q = "SELECT * FROM `".COUNTRY_SPECIFICATION."` WHERE `country_id` = '" . $country_id . "' ";
		$r =	$this->db->getMultipleRecords ( $q );
		foreach ($r as $result) {
			$content_data[$result['language_id']] = array(
					'type_of_company'	=> $result['type_of_company'],
					'avg_timeframe' 	=> $result['avg_timeframe'],
					'shelf_companies'	=> $result['shelf_companies'],
					'timeframe_activate_shelf' 	=> $result['timeframe_activate_shelf'],
					'migration_domicile'	=> $result['migration_domicile'],
					'political_stability' 	=> $result['political_stability'],
					'common_civil_law'	=> $result['common_civil_law']
			);
		}
		return $content_data;
	}

	function getCountryReporting($country_id) {
		$content_data = array();

		$q = "SELECT * FROM `".COUNTRY_REPORTING_REQUIREMENTS."` WHERE `country_id` = '" . $country_id . "' ";
		$r =	$this->db->getMultipleRecords ( $q );
		foreach ($r as $result) {
			$content_data[$result['language_id']] = array(
					'beneficial_owner'	=> $result['beneficial_owner'],
					'govt_reg_directors' 	=> $result['govt_reg_directors'],
					'govt_reg_officers'	=> $result['govt_reg_officers'],
					'govt_reg_of' 	=> $result['govt_reg_of'],
					'shareholders'	=> $result['shareholders'],
					'annal_return' 	=> $result['annal_return'],
					'submission_account'	=> $result['submission_account'],
					'auditing_no' 	=> $result['auditing_no']
			);
		}
		return $content_data;
	}

	function getCountryCorporate($country_id) {
		$content_data = array();

		$q = "SELECT * FROM `".COUNTRY_CORPORATE_REQUIREMENTS."` WHERE `country_id` = '" . $country_id . "' ";
		$r =	$this->db->getMultipleRecords ( $q );
		foreach ($r as $result) {
			$content_data[$result['language_id']] = array(
					'minimum_capital'	=> $result['minimum_capital'],
					'bearer_allowed' 	=> $result['bearer_allowed'],
					'min_shareholders'	=> $result['min_shareholders'],
					'min_directors' 	=> $result['min_directors'],
					'corporate_directors'	=> $result['corporate_directors'],
					'local_meeting_required' 	=> $result['local_meeting_required'],
					'company_secretary_required'	=> $result['company_secretary_required'],
					'local_secretary_required' 	=> $result['local_secretary_required'],
					'authorized_share_capital'	=> $result['authorized_share_capital']
			);
		}
		return $content_data;
	}

	function getCountryTaxation($country_id) {
		$content_data = array();

		$q = "SELECT * FROM `".COUNTRY_TAXATION."` WHERE `country_id` = '" . $country_id . "' ";
		$r =	$this->db->getMultipleRecords ( $q );
		foreach ($r as $result) {
			$content_data[$result['language_id']] = array(
					'corporate_tax'	=> $result['corporate_tax'],
					'ordinary_tax' 	=> $result['ordinary_tax'],
					'tax_exemptions'	=> $result['tax_exemptions'],
					'tax_on_dividends' 	=> $result['tax_on_dividends'],
					'tax_on_interest'	=> $result['tax_on_interest'],
					'tax_on_license_fees' 	=> $result['tax_on_license_fees'],
					'double_taxation_treaties'	=> $result['double_taxation_treaties'],
					'vat' 	=> $result['vat']
			);
		}
		return $content_data;
	}


	/**
	 * Function selectRows (tableName).
	 * gives all rows of a table.
	 *
	 * @return true or false
	 */
	function selectAllRows($tableName, $data = array()) {
		$q = "SELECT * FROM `" . $tableName . "` ";

		if (isset ( $data ['sort'] )) {
			$q .= " ORDER BY " . $data ['sort'] . " ";
		}

		if (isset ( $data ['order'] )) {
			$q .= $data ['order'];
		}

		$r = $this->db->getMultipleRecords ( $q );

		if ($r != false)
			return $r;
		else
			return false;
	}



	/**
	 * Function selectSingleColumnOfAllRows (tableName,columnName,fieldName,valueName).
	 * This will return Arrayset of single column
	 *
	 * @return true or false
	 */
	function selectSingleColumnOfAllRows($tableName, $columnName, $statusField, $statusValue) {
		$q = "SELECT `" . $columnName . "` FROM `" . $tableName . "` WHERE `" . $statusField . "` = '" . $statusValue . "' ";
		$r = $this->db->getMultipleRecords ( $q );
		if ($r != false)
			return $r;
		else
			return false;
	}


	/**
	 * Function insertQuery (form data in array format, tableName)
	 * data parse in array format an insert into DB
	 *
	 * @return true or false
	 */
	function insertQuery($data, $tableName) {
		$fields = '';
		$values = '';
		foreach ( $data as $key => $value ) {
			$fields .= " `" . trim ( $key ) . "`,";
			$values .= " '" . trim ( mysql_real_escape_string($value) ) . "',";
		}
		$query = "INSERT INTO `" . $tableName . "` (" . rtrim ( $fields, ',' ) . ") VALUES (" . rtrim ( $values, ',' ) . ") ";
		$r = $this->db->insertRecord ( $query );
		if ($r != false)
			return true;
		else
			return false;
	}

	/**
	 * Function update Query(data in array format,table name)
	 *
	 * @return true or false
	 */
	function updateQuery($data, $tableName, $fieldName, $valueName) {
		$fields = '';
		$values = '';

		foreach ( $data as $key => $value ) {
			$prepareString .= "`" . trim ( $key ) . "`" . "=" . " '" . trim ( mysql_real_escape_string($value) ) . "',";
		}

		$q = "UPDATE `" . $tableName . "` SET " . rtrim ( $prepareString, ',' ) . " WHERE `" . $fieldName . "` = '" . $valueName . "' ";
		$r = $this->db->updateRecord ( $q );
		if ($r != false)
			return true;
		else
			return false;
	}

	/**
	 * Function update Query Language(data in array format,table name)
	 *
	 * @return true or false
	 */
	function updateQueryLanugage($data, $tableName, $fieldName, $valueName, $langId, $langIdValue) {
		$fields = '';
		$values = '';

		foreach ( $data as $key => $value ) {
			$prepareString .= "`" . trim ( $key ) . "`" . "=" . " '" .  trim ( mysql_real_escape_string($value) ) . "',";
		}

		$q = "UPDATE `" . $tableName . "` SET " . rtrim ( $prepareString, ',' ) . " WHERE `" . $fieldName . "` = '" . $valueName . "' AND `" . $langId . "` = '" . $langIdValue . "' ";
		$r = $this->db->updateRecord ( $q );
		if ($r != false)
			return true;
		else
			return false;
	}

	/**
	 * Function prepareString for check price of quote(option_id, option_value_id)
	 * "(`option_id` = ".$optionsIds." AND `option_value_id` = ".$optionValueIds.") OR
	 *
	 * @return true or false
	 */
	function prepareStringForQuotePrice($optionsIds, $optionValueIds) {
		$prepareString = "(`option_id` = " . $optionsIds . " AND `option_value_id` = " . $optionValueIds . ") OR ";
		return $prepareString;
		// echo "<pre>"; print_r($prepareString); echo "</pre>";
	}

	/**
	 * Function delete Query( $fieldid, $valueid, $tableName)
	 *
	 * @return true or false
	 */
	function deletRecord($fieldid, $valueid, $tableName) {
		$q = "DELETE FROM `" . $tableName . "` WHERE `" . $fieldid . "` = " . $valueid;
		$r = $this->db->deleteRecord ( $q );
		if ($r != false)
			return $r;
		else
			return false;
	}


	/**
	 * Function validationEmailAddress (email field name, email address, tabel name).
	 * will check if entered company email address already exists.
	 *
	 * @return true or false
	 */
	function validationEmailAddress($email_field_name, $email_address, $tableName) {
		$q = "SELECT `" . $email_field_name . "` FROM " . $tableName . " WHERE `email_address` = '" . $email_address . "' ";
		$r = $this->db->getSingleRecord ( $q );
		if ($r != false)
			return 1;
		else
			return 0;
	}

	/**
	 * Function validationEmailAddress (email field name, email address, tabel name).
	 * will check if entered company email address already exists.
	 *
	 * @return true or false
	 */
	function getOrderStatus($status) {
		if($status	==	0){
			return MISSING;
		}
		if($status	==	1){
			return PENDING;
		}
		if($status	==	2){
			return CONFIRMED;
		}
		if($status	==	3){
			return COMPLETED;
		}
		if($status	==	4){
			return CLOSED;
		}
	}

	function validationExistingPassword($password, $passwordField, $emailField, $tableName, $email_address) {
		$q = "SELECT `" . $passwordField . "` FROM `" . $tableName . "`
							WHERE `" . $passwordField . "` = '" . $password . "'
							AND `" . $emailField . "` = '" . $email_address . "' ";

		$r = $this->db->getSingleRecord ( $q );
		if ($r != false)
			return 1;
		else
			return 0;
	}
	function getAllCountries() {
		$q = "SELECT * FROM country WHERE status = 1";
		$r = $this->db->getMultipleRecords ( $q );
		if ($r != false)
			return $r;
		else
			return false;
	} // End of function getAllCountries( )

	function generateAutoString($length) {
		$autoString = "";
		$possible = "abcdefghijklmnopqrstuvwxyz___0123456789__ABCDEFGHIJKLMNOPQRSTUVWXYZ_";
		$i = 0;
		while ( $i < $length ) {

			$char = substr ( $possible, mt_rand ( 0, strlen ( $possible ) - 1 ), 1 );

			if (! strstr ( $autoString, $char )) {
				$autoString .= $char;
				$i ++;
			}
		}
		return $autoString;
	} // End of function generateAutoString( $length = 49)

	/**
	 * Function Current Display with Currency Sign defin in MISC file
	 *
	 * @return curreny complete result with currency sign
	 */
	function currencyDisplayWithSign($amount) {
		return CURRENCY_SYMBOL . number_format ( $amount, 2, '.', ',' );
		;
	}

	/**
	 * Function getShippingRate
	 *
	 * @return shipping value based on shipping post code
	 */
	function getShippingRate($post_code, $price, $currency) {
		$shippingRate = $this->selectSingleRecord ( TAX_RATE );
		$checkInFreeZone = $this->validationTaxFreePostCode ( $post_code );
		if ($checkInFreeZone == 1) {
			if ($currency == true) {
				return $this->currencyDisplayWithSign ( 0 );
			} else {
				return 0;
			}
		} else {
			if ($shippingRate ['type'] == 'F') {
				if ($currency == true) {
					return $this->currencyDisplayWithSign ( $shippingRate ['rate'] );
				} else {
					return $shippingRate ['rate'];
				}
			} else {
				$shipPrice = (($shippingRate ['rate'] * $price) / 100);

				if ($currency == true) {
					return $this->currencyDisplayWithSign ( $shipPrice );
				} else {
					return $shipPrice;
				}
			}
		}
	}

	/**
	 * Function GET GST
	 * GST value set in localization on shipping and product price
	 *
	 * @return with currency price
	 */
	function getGST($price, $shipping, $currency) {
		$subTotal = $price + $shipping;
		$gstRate = $this->selectSingleRecord ( GST_RATE );
		$gst = (($subTotal * $gstRate ['rate']) / 100);
		if ($currency == true) {
			return $this->currencyDisplayWithSign ( $gst );
		} else {
			return $gst;
		}
	}

	/**
	 * Function resize($filename, $width, $height).
	 *
	 * @return image thumbnail stored in cache folder
	 */
	function resize($filename, $width, $height) {
		if (! file_exists ( trim ( DIR_IMAGE . $filename ) ) || ! is_file ( trim ( DIR_IMAGE . $filename ) )) {
			return;
		}
		$info = pathinfo ( $filename );
		$extension = $info ['extension'];

		$old_image = $filename;
		$new_image = 'cache/' . substr ( $filename, 0, strrpos ( $filename, '.' ) ) . '-' . $width . 'x' . $height . '.' . $extension;

		if (! file_exists ( DIR_IMAGE . $new_image ) || (filemtime ( DIR_IMAGE . $old_image ) > filemtime ( DIR_IMAGE . $new_image ))) {
			$path = '';

			$directories = explode ( '/', dirname ( str_replace ( '../', '', $new_image ) ) );

			foreach ( $directories as $directory ) {
				$path = $path . '/' . $directory;

				if (! file_exists ( DIR_IMAGE . $path )) {
					@mkdir ( DIR_IMAGE . $path, 0777 );
				}
			}

			$image = new Image ( DIR_IMAGE . $old_image );
			$image->resize ( $width, $height );
			$image->save ( DIR_IMAGE . $new_image );
		}

		if (isset ( $this->request->server ['HTTPS'] ) && (($this->request->server ['HTTPS'] == 'on') || ($this->request->server ['HTTPS'] == '1'))) {
			return HTTPS_IMAGE . $new_image;
		} else {
			return HTTP_IMAGE . $new_image;
		}
	}


	function getSuperAdminEmailAddress() {
		$q = "SELECT * FROM `users` WHERE `user_type` = '1' LIMIT 0,1 ";
		$r = $this->db->getSingleRecord ( $q );
		if ($r != false)
			return $r ['email_address'];
		else
			return false;
	}

	/**
	 * Function _selectSingleRecord ($tableName, $whereCondition).
	 *
	 * @return true or false
	 */
	function _selectSingleRecord($tableName, $whereCondition) {
		$q = "SELECT * FROM `" . $tableName . "`";

		if (isset ( $whereCondition )) {
			$q .= " where  $whereCondition";
		}
		// echo $q;
		$r = $this->db->getSingleRecord ( $q );
		if ($r != false)
			return $r;
		else
			return false;
	}

	/**
	 * Function getDateTimeFormat ($date).
	 * Return the date time format set in MISC file
	 *
	 * @return true or false
	 */
	function getDateTimeFormat($date) {
		$date = strtotime ( $date );
		return date ( DATE_FORMAT, $date );
	}

	function selectCountAsTotal($fieldName, $value, $tableName) {
		$q = "SELECT count(*) as total  FROM `$tableName` WHERE " . $fieldName . " = " . $value;
		$r = $this->db->getSingleRecord ( $q );
		if ($r != false)
			return $r;
		else
			return false;
	}

	function getDistinctRecords($DistinctValue, $tableName, $fieldName, $value) {
		$q = "SELECT DISTINCT(" . $DistinctValue . ") FROM `" . $tableName . "` WHERE " . $fieldName . " =" . $value;
		$r = $this->db->getMultipleRecords ( $q );
		if ($r != false)
			return $r;
		else
			return false;
	}
	function selectSingleColoum($id, $colName, $tableName) {
		$q = "SELECT  `" . $id . "` , `" . $colName . "` FROM `" . $tableName . "` ";
		$r = $this->db->getMultipleRecords ( $q );
		if ($r != false)
			return $r;
		else
			return false;
	}


	function _selectSingleRowAndSingleRecord($col, $table, $field, $value) {
		$q = "SELECT `$col` FROM `$table` WHERE `$field` = " . $value;
		$r = $this->db->getSingleRecord ( $q );
		if ($r != false)
			return $r[$col];
		else
			return false;
	}


	function returnPopUp($id) {
		$r	=	'<script type="text/javascript">
					$(function() {
					$("#foottip'.$id.' a").tooltip({
						bodyHandler: function() {
							return $($(this).attr("href")).html();
						},
						showURL: false
					});
					});
					</script>';
		$r	.=	'<span  id="foottip'.$id.'">';
		$r	.=	'<a  href="#'.$id.'"  ><img src="images/q_mark.png"/></a>';
		$r	.=	'<div id="'.$id.'" style="display:none;"  >'.$this->_selectSingleRowAndSingleRecord('description', TBL_QUESTION_DESCRIPTION, 'result_id', $id).'</div>';
		$r	.=	'</span>';
		if ($r != false)
			return $r;
		else
			return false;
	}


	function returnPopUpDefault($id) {
		$r	=	'
				<span  style="color:#000000; font-weight: normal; font-size:14px; font-family: Arial;">
				<img class="show-popover" style="color:#000000 !important;" data-content="'.$this->_selectSingleRowAndSingleRecord('description', TBL_QUESTION_DESCRIPTION, 'result_id', $id).'" data-placement="top" data-trigger="hover" src="images/q_mark.png"/></span>';
		if ($r != false)
			return $r;
		else
			return false;
	}

	function returnPopUpForCountryOptions($text) {
		$randomNumber	=	$this->generateAutoString(3);
		$singleDigit	=	substr($text,0,1);
		$createId	=	$randomNumber.$singleDigit;
		$strLength	=	 strlen($text);
		if($strLength <=12){
			return $text;
		}else{
		$r	=	'<script type="text/javascript">
					$(function() {
					$("#foottip'.$createId.' a").tooltip({
						bodyHandler: function() {
							return $($(this).attr("href")).html();
						},
						showURL: false
					});
					});
					</script>';
		$r	.=	'<span  id="foottip'.$createId.'">';
		$r	.=	'<a  href="#'.$createId.'"  >'.substr($text,0, 10)."....".'</a>';
		$r	.=	'<div id="'.$createId.'" style="display:none;"  >'.$text.'</div>';
		$r	.=	'</span>';
		if ($r != false)
			return $r;
		else
			return false;
		}
	}

	function getPriceWithCurrency($price){
		if(($price != '') || ($price != 0)  ){
			return CURRENCY_SYMBOL."&nbsp;".$price;
		}
	}


function facebook_style_date_time($timestamp){
	$difference = time() - $timestamp;
	$periods = array("sec", "min", "hour", "day", "week", "month", "years", "decade");
	$lengths = array("60","60","24","7","4.35","12","10");

	if ($difference > 0) { // this was in the past time
		$ending = "ago";
	} else { // this was in the future time
		$difference = -$difference;
		$ending = "to go";
	}
	for($j = 0; $difference >= $lengths[$j]; $j++) $difference /= $lengths[$j];
	$difference = round($difference);
	if($difference != 1) $periods[$j].= "s";
	$text = "$difference $periods[$j] $ending";
	return $text;
}
function full_copy( $source, $target ) {
    if ( is_dir( $source ) ) {
        @mkdir( $target );
        $d = dir( $source );
        while ( FALSE !== ( $entry = $d->read() ) ) {
            if ( $entry == '.' || $entry == '..' ) {
                continue;
            }
            $Entry = $source . '/' . $entry;
            if ( is_dir( $Entry ) ) {
                full_copy( $Entry, $target . '/' . $entry );
                continue;
            }
            copy( $Entry, $target . '/' . $entry );
        }

        $d->close();
    }else {
        copy( $source, $target );
    }
}


/**
 * Function selectSingleRecordByLanguage (tableName,field name, value to compare,data array).
 *
 * @return true or false
 */
function selectSingleRecordByLanguage($tableName,$field,$value,$data) {
	$q = "SELECT * FROM `" . $tableName . "` WHERE `" . $field . "` = '" . $value . "' AND `language_id`	=	'".$_SESSION['language_id']."' ";

	if (isset ( $data ['sort'] )) {
		$q .= " ORDER BY " . $data ['sort'] . " ";
	}

	if (isset ( $data ['order'] )) {
		$q .= $data ['order'];
	}
	//echo $q;
	$r = $this->db->getSingleRecord ( $q );
	if ($r != false)
		return $r;
	else
		return false;
}

/**
 * Function selectMultipleRecordsByLanguage (tableName,field name, value to compare,data array).
 *
 * @return true or false
 */
function selectMultipleRecordsByLanguage($tableName,$field,$value,$data) {
	$q = "SELECT * FROM `" . $tableName . "` WHERE `" . $field . "` = '" . $value . "' AND `language_id`	=	'".$_SESSION['language_id']."' ";

	if (isset ( $data ['sort'] )) {
		$q .= " ORDER BY " . $data ['sort'] . " ";
	}

	if (isset ( $data ['order'] )) {
		$q .= $data ['order'];
	}
	// echo $q;
	$r = $this->db->getMultipleRecords ( $q );
	if ($r != false)
		return $r;
	else
		return false;
}

function selectAllCountiresImagesAndTitle() {
	$q = "SELECT c.country_id, cd.title, cd.image
				FROM `tbl_country` c
				LEFT JOIN `tbl_country_detail` cd ON ( c.country_id = cd.country_id )  WHERE `language_id`	=	'".$_SESSION['language_id']."'
				ORDER BY cd.title ASC		  ";
	$r = $this->db->getMultipleRecords ( $q );
	if ($r != false)
		return $r;
	else
		return false;
}


} // End of class helper
?>
