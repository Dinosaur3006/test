<script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.14189" type="text/javascript"></script>
<script type="text/javascript">
	JotForm.init(function(){
if (JotForm.accessible) $(input_19).setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_3').hint('ex: myname@example.com');
       }, 20);
      JotForm.description('input_4', 'Please fill in your Shipping address. Thank you');
      JotForm.description('input_7', 'Please fill in your Billing address. Thank you');
      JotForm.description('input_5', 'Please supply a number where you may be reached in case there is an issue with your order and we cannot contact you via email. We do not share this information!');
if (JotForm.accessible) $(input_20).setAttribute('tabindex',0);
      productID = {"0":"input_21_1003","1":"input_21_1058"};
      paymentType = "product";
      JotForm.setCurrencyFormat('USD',true, 'point');
      JotForm.totalCounter({"input_21_1003":{"price":"3","quantityField":"input_21_quantity_1003_0"},"input_21_1058":{"price":"5","quantityField":"input_21_quantity_1058_0"}});
      $$('.form-product-custom_quantity').each(function(el, i){el.observe('blur', function(){isNaN(this.value) || this.value < 1 ? this.value = '0' : this.value = parseInt(this.value)})});
      $$('.form-product-custom_quantity').each(function(el, i){el.observe('focus', function(){this.value == 0 ? this.value = '' : this.value})});
    /*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"name","qid":"1","text":"Name","type":"control_fullname"},null,{"name":"email3","qid":"3","text":"E-mail","type":"control_email"},{"description":"Please fill in your Shipping address. Thank you","name":"shippingAddress","qid":"4","text":"Shipping Address","type":"control_address"},{"description":"Please supply a number where you may be reached in case there is an issue with your order and we cannot contact you via email. We do not share this information!","name":"phoneNumber5","qid":"5","text":"Phone Number","type":"control_phone"},null,{"description":"Please fill in your Billing address. Thank you","name":"billingAddress","qid":"7","text":"Billing Address","type":"control_address"},null,null,null,null,null,null,null,null,null,null,{"name":"submitForm","qid":"18","text":"Submit Order","type":"control_button"},{"name":"companyName","qid":"19","text":"Company Name","type":"control_textbox"},{"name":"specialInstructions","qid":"20","text":"Special Instructions","type":"control_textarea"},{"name":"myProducts21","qid":"21","text":"My Products","type":"control_payment"},{"name":"clickTo","qid":"22","text":"Product Order","type":"control_head"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"name","qid":"1","text":"Name","type":"control_fullname"},null,{"name":"email3","qid":"3","text":"E-mail","type":"control_email"},{"description":"Please fill in your Shipping address. Thank you","name":"shippingAddress","qid":"4","text":"Shipping Address","type":"control_address"},{"description":"Please supply a number where you may be reached in case there is an issue with your order and we cannot contact you via email. We do not share this information!","name":"phoneNumber5","qid":"5","text":"Phone Number","type":"control_phone"},null,{"description":"Please fill in your Billing address. Thank you","name":"billingAddress","qid":"7","text":"Billing Address","type":"control_address"},null,null,null,null,null,null,null,null,null,null,{"name":"submitForm","qid":"18","text":"Submit Order","type":"control_button"},{"name":"companyName","qid":"19","text":"Company Name","type":"control_textbox"},{"name":"specialInstructions","qid":"20","text":"Special Instructions","type":"control_textarea"},{"name":"myProducts21","qid":"21","text":"My Products","type":"control_payment"},{"name":"clickTo","qid":"22","text":"Product Order","type":"control_head"}]);}, 20); 
</script>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.14189" rel="stylesheet" type="text/css" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.14189" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.14189" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=5dca5ac9a5e86d17235d90c1"/>
<link href="./css/Order.css">

<div class ="header">
    <a href="index.html">
    <img src="./img/logo.png" width="400" height="200">
</a>
 
    
</div>

<form class="jotform-form" action="https://submit.jotform.me/submit/93322920055451/" method="post" name="form_93322920055451" id="93322920055451" accept-charset="utf-8">
  <input type="hidden" name="formID" value="93322920055451" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_22" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h2 id="header_22" class="form-header" data-component="header">
              Product Order
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_1">
        <label class="form-label form-label-left form-label-auto" id="label_1" for="prefix_1"> Name </label>
        <div id="cid_1" class="form-input">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container " style="vertical-align:top">
              <input type="text" id="prefix_1" name="q1_name[prefix]" class="form-textbox" size="4" value="" data-component="prefix" aria-labelledby="label_1 sublabel_1_prefix" />
              <label class="form-sub-label" for="prefix_1" id="sublabel_1_prefix" style="min-height:13px"> Prefix </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top">
              <input type="text" id="first_1" name="q1_name[first]" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_1 sublabel_1_first" />
              <label class="form-sub-label" for="first_1" id="sublabel_1_first" style="min-height:13px"> First Name </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top">
              <input type="text" id="last_1" name="q1_name[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_1 sublabel_1_last" />
              <label class="form-sub-label" for="last_1" id="sublabel_1_last" style="min-height:13px"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_19">
        <label class="form-label form-label-left form-label-auto" id="label_19" for="input_19"> Company Name </label>
        <div id="cid_19" class="form-input">
          <input type="text" id="input_19" name="q19_companyName" data-type="input-textbox" class="form-textbox" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_19" />
        </div>
      </li>
      <li class="form-line" data-type="control_email" id="id_3">
        <label class="form-label form-label-left form-label-auto" id="label_3" for="input_3"> E-mail </label>
        <div id="cid_3" class="form-input">
          <input type="email" id="input_3" name="q3_email3" class="form-textbox validate[Email]" size="30" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_3" />
        </div>
      </li>
      <li class="form-line" data-type="control_address" id="id_4">
        <label class="form-label form-label-left form-label-auto" id="label_4" for="input_4undefined"> Shipping Address </label>
        <div id="cid_4" class="form-input">
          <table summary="" class="form-address-table">
            <tbody>
              <tr>
                <td colSpan="2">
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_4_addr_line1" name="q4_shippingAddress[addr_line1]" class="form-textbox form-address-line" autoComplete="address-line1" value="" data-component="address_line_1" aria-labelledby="label_4 sublabel_4_addr_line1" />
                    <label class="form-sub-label" for="input_4_addr_line1" id="sublabel_4_addr_line1" style="min-height:13px"> Street Address </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td colSpan="2">
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_4_addr_line2" name="q4_shippingAddress[addr_line2]" class="form-textbox form-address-line" autoComplete="address-line2" size="46" value="" data-component="address_line_2" aria-labelledby="label_4 sublabel_4_addr_line2" />
                    <label class="form-sub-label" for="input_4_addr_line2" id="sublabel_4_addr_line2" style="min-height:13px"> Street Address Line 2 </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_4_city" name="q4_shippingAddress[city]" class="form-textbox form-address-city" autoComplete="address-level2" size="21" value="" data-component="city" aria-labelledby="label_4 sublabel_4_city" />
                    <label class="form-sub-label" for="input_4_city" id="sublabel_4_city" style="min-height:13px"> City </label>
                  </span>
                </td>
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_4_state" name="q4_shippingAddress[state]" class="form-textbox form-address-state" autoComplete="address-level1" size="22" value="" data-component="state" aria-labelledby="label_4 sublabel_4_state" />
                    <label class="form-sub-label" for="input_4_state" id="sublabel_4_state" style="min-height:13px"> State / Province </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_4_postal" name="q4_shippingAddress[postal]" class="form-textbox form-address-postal" autoComplete="postal-code" size="10" value="" data-component="zip" aria-labelledby="label_4 sublabel_4_postal" />
                    <label class="form-sub-label" for="input_4_postal" id="sublabel_4_postal" style="min-height:13px"> Postal / Zip Code </label>
                  </span>
                </td>
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <select class="form-dropdown form-address-country noTranslate" name="q4_shippingAddress[country]" id="input_4_country" data-component="country" aria-labelledby="label_4 sublabel_4_country" autoComplete="country">
                      <option value=""> Please Select </option>
                      <option value="United States"> United States </option>
                      <option value="Viet Nam">Viet Nam</option>
                      <option value="other"> Other </option>
                    </select>
                    <label class="form-sub-label" for="input_4_country" id="sublabel_4_country" style="min-height:13px"> Country </label>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line" data-type="control_address" id="id_7">
        <label class="form-label form-label-left form-label-auto" id="label_7" for="input_7undefined"> Billing Address </label>
        <div id="cid_7" class="form-input">
          <table summary="" class="form-address-table">
            <tbody>
              <tr>
                <td colSpan="2">
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_7_addr_line1" name="q7_billingAddress[addr_line1]" class="form-textbox form-address-line" autoComplete="address-line1" value="" data-component="address_line_1" aria-labelledby="label_7 sublabel_7_addr_line1" />
                    <label class="form-sub-label" for="input_7_addr_line1" id="sublabel_7_addr_line1" style="min-height:13px"> Street Address </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td colSpan="2">
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_7_addr_line2" name="q7_billingAddress[addr_line2]" class="form-textbox form-address-line" autoComplete="address-line2" size="46" value="" data-component="address_line_2" aria-labelledby="label_7 sublabel_7_addr_line2" />
                    <label class="form-sub-label" for="input_7_addr_line2" id="sublabel_7_addr_line2" style="min-height:13px"> Street Address Line 2 </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_7_city" name="q7_billingAddress[city]" class="form-textbox form-address-city" autoComplete="address-level2" size="21" value="" data-component="city" aria-labelledby="label_7 sublabel_7_city" />
                    <label class="form-sub-label" for="input_7_city" id="sublabel_7_city" style="min-height:13px"> City </label>
                  </span>
                </td>
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_7_state" name="q7_billingAddress[state]" class="form-textbox form-address-state" autoComplete="address-level1" size="22" value="" data-component="state" aria-labelledby="label_7 sublabel_7_state" />
                    <label class="form-sub-label" for="input_7_state" id="sublabel_7_state" style="min-height:13px"> State / Province </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_7_postal" name="q7_billingAddress[postal]" class="form-textbox form-address-postal" autoComplete="postal-code" size="10" value="" data-component="zip" aria-labelledby="label_7 sublabel_7_postal" />
                    <label class="form-sub-label" for="input_7_postal" id="sublabel_7_postal" style="min-height:13px"> Postal / Zip Code </label>
                  </span>
                </td>
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <select class="form-dropdown form-address-country noTranslate" name="q7_billingAddress[country]" id="input_7_country" data-component="country" aria-labelledby="label_7 sublabel_7_country" autoComplete="country">
                      <option value=""> Please Select </option>
                      <option value="United States"> United States </option>
                      <option value="Viet Nam">Viet Nam</option>
                     
                      <option value="other"> Other </option>
                    </select>
                    <label class="form-sub-label" for="input_7_country" id="sublabel_7_country" style="min-height:13px"> Country </label>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line" data-type="control_phone" id="id_5">
        <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5_area"> Phone Number </label>
        <div id="cid_5" class="form-input">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container " style="vertical-align:top">
              <input type="tel" id="input_5_area" name="q5_phoneNumber5[area]" class="form-textbox" size="6" value="" data-component="areaCode" aria-labelledby="label_5 sublabel_5_area" />
              <span class="phone-separate" aria-hidden="true">
                 -
              </span>
              <label class="form-sub-label" for="input_5_area" id="sublabel_5_area" style="min-height:13px"> Area Code </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top">
              <input type="tel" id="input_5_phone" name="q5_phoneNumber5[phone]" class="form-textbox" size="12" value="" data-component="phone" aria-labelledby="label_5 sublabel_5_phone" />
              <label class="form-sub-label" for="input_5_phone" id="sublabel_5_phone" style="min-height:13px"> Phone Number </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_20">
        <label class="form-label form-label-left form-label-auto" id="label_20" for="input_20"> Special Instructions </label>
        <div id="cid_20" class="form-input">
          <textarea id="input_20" class="form-textarea" name="q20_specialInstructions" cols="40" rows="6" data-component="textarea" aria-labelledby="label_20"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_payment" id="id_21">
        <label class="form-label form-label-left form-label-auto" id="label_21" for="input_21"> My Products </label>
        <div id="cid_21" class="form-input">
          <div data-wrapper-react="true">
            <input type="hidden" name="simple_fpc" data-payment_type="payment" data-component="payment1" value="21" />
            <input type="hidden" name="payment_total_checksum" id="payment_total_checksum" data-component="payment2" />
            <div data-wrapper-react="true">
              <span class="form-product-item hover-product-item">
                <div data-wrapper-react="true" class="form-product-item-detail">
                  <input type="checkbox" class="form-checkbox " id="input_21_1003" name="q21_myProducts21[][id]" value="1003" />
                  <label for="input_21_1003" class="form-product-container">
                    <span data-wrapper-react="true">
                      <span class="form-product-name" id="product-name-input_21_1003">
                        Lego 1
                      </span>
                      <span class="form-product-details">
                        <b>
                          <span data-wrapper-react="true">
                            $
                            <span id="input_21_1003_price">
                              78.0
                            </span>
                          </span>
                        </b>
                      </span>
                    </span>
                  </label>
                  <br/>
                  <br/>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <label class="form-sub-label" for="input_21_quantity_1003_0" style="min-height:13px"> Quantity </label>
                    <select class="form-dropdown" name="q21_myProducts21[special_1003][item_0]" id="input_21_quantity_1003_0">
                      <option value="1"> 1 </option>
                      <option value="2"> 2 </option>
                      <option value="3"> 3 </option>
                      <option value="4"> 4 </option>
                      <option value="5"> 5 </option>
                      <option value="6"> 6 </option>
                      <option value="7"> 7 </option>
                      <option value="8"> 8 </option>
                      <option value="9"> 9 </option>
                      <option value="10"> 10 </option>
                    </select>
                  </span>
                </div>
              </span>
              <br/>
              <span class="form-product-item hover-product-item">
                <div data-wrapper-react="true" class="form-product-item-detail">
                  <input type="checkbox" class="form-checkbox " id="input_21_1058" name="q21_myProducts21[][id]" value="1058" />
                  <label for="input_21_1058" class="form-product-container">
                    <span data-wrapper-react="true">
                      <span class="form-product-name" id="product-name-input_21_1058">
                        Lego 2
                      </span>
                      <span class="form-product-details">
                        <b>
                          <span data-wrapper-react="true">
                            $
                            <span id="input_21_1058_price">
                              718.0
                            </span>
                          </span>
                        </b>
                      </span>
                    </span>
                  </label>
                  <br/>
                  <br/>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <label class="form-sub-label" for="input_21_quantity_1058_0" style="min-height:13px"> Quantity </label>
                    <select class="form-dropdown" name="q21_myProducts21[special_1058][item_0]" id="input_21_quantity_1058_0">
                      <option value="1"> 1 </option>
                      <option value="2"> 2 </option>
                      <option value="3"> 3 </option>
                      <option value="4"> 4 </option>
                      <option value="5"> 5 </option>
                      <option value="6"> 6 </option>
                      <option value="7"> 7 </option>
                      <option value="8"> 8 </option>
                      <option value="9"> 9 </option>
                      <option value="10"> 10 </option>
                    </select>
                  </span>
                </div>
              </span>
              <br/>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_18">
        <div id="cid_18" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper ">
            <button id="input_18" type="submit" class="form-submit-button form-submit-button-none" data-component="button">
              Submit Order
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
 
  <input type="hidden" id="simple_spc" name="simple_spc" value="93322920055451" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "93322920055451-93322920055451";
  
  </script>
 
</form>