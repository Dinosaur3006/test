<script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.14238" type="text/javascript"></script>
<script type="text/javascript">

	JotForm.init(function(){
      productID = {"0":"input_3_1001","1":"input_3_1002","2":"input_3_1003"};
      paymentType = "product";
      JotForm.setCurrencyFormat('USD',true, 'point');
      JotForm.totalCounter({"input_3_1001":{"price":"100"},"input_3_1002":{"price":"200"},"input_3_1003":{"price":"300"}});
      $$('.form-product-custom_quantity').each(function(el, i){el.observe('blur', function(){isNaN(this.value) || this.value < 1 ? this.value = '0' : this.value = parseInt(this.value)})});
      $$('.form-product-custom_quantity').each(function(el, i){el.observe('focus', function(){this.value == 0 ? this.value = '' : this.value})});
      setTimeout(function() {
          $('input_5').hint('ex: myname@example.com');
       }, 20);
    /*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"clickTo","qid":"1","text":"PayPal Pro Payment Form","type":"control_head"},{"name":"submit","qid":"2","text":"Submit","type":"control_button"},{"name":"myProducts3","qid":"3","text":"My Products","type":"control_paypalpro"},{"name":"buyerName","qid":"4","text":"Buyer Name","type":"control_fullname"},{"name":"buyerEmail","qid":"5","text":"Buyer E-mail","type":"control_email"},{"name":"shippingAddress","qid":"6","text":"Shipping Address","type":"control_address"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"clickTo","qid":"1","text":"PayPal Pro Payment Form","type":"control_head"},{"name":"submit","qid":"2","text":"Submit","type":"control_button"},{"name":"myProducts3","qid":"3","text":"My Products","type":"control_paypalpro"},{"name":"buyerName","qid":"4","text":"Buyer Name","type":"control_fullname"},{"name":"buyerEmail","qid":"5","text":"Buyer E-mail","type":"control_email"},{"name":"shippingAddress","qid":"6","text":"Shipping Address","type":"control_address"}]);}, 20); 
</script>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.14238" rel="stylesheet" type="text/css" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.14238" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.14238" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=5dca5ac9a5e86d17235d90c1"/>
<link  rel="stylesheet" href="./css/pay.css"/>





<form class="jotform-form" action="https://pci.jotform.com/submit/93371098350459" method="post" name="form_93371098350459" id="93371098350459" accept-charset="utf-8">
  <input type="hidden" name="formID" value="93371098350459" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              PayPal 
            </h1>
            <div id="subHeader_1" class="form-subHeader">
              Would you like to buy one of our items?
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_paypalpro" id="id_3">
        <label class="form-label form-label-left form-label-auto" id="label_3" for="input_3"> My Products </label>
        <div id="cid_3" class="form-input">
          <div data-wrapper-react="true" id="payment-wrapper-songbird" data-currency="USD" data-paymentType="product" data-sandbox="Disabled">
            <div data-wrapper-react="true">
              <input type="hidden" name="simple_fpc" data-payment_type="paypalpro" data-component="payment1" value="3" />
              <input type="hidden" name="payment_total_checksum" id="payment_total_checksum" data-component="payment2" />
              <div data-wrapper-react="true">
                <span class="form-product-item hover-product-item">
                  <div data-wrapper-react="true" class="form-product-item-detail">
                    <input type="checkbox" class="form-checkbox " id="input_3_1001" name="q3_myProducts3[][id]" value="1001" />
                    <label for="input_3_1001" class="form-product-container">
                      <span data-wrapper-react="true">
                        <span class="form-product-name" id="product-name-input_3_1001">
                          New Product 1
                        </span>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              $
                              <span id="input_3_1001_price">
                                100.00
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                    </label>
                  </div>
                </span>
                <br/>
                <span class="form-product-item hover-product-item">
                  <div data-wrapper-react="true" class="form-product-item-detail">
                    <input type="checkbox" class="form-checkbox " id="input_3_1002" name="q3_myProducts3[][id]" value="1002" />
                    <label for="input_3_1002" class="form-product-container">
                      <span data-wrapper-react="true">
                        <span class="form-product-name" id="product-name-input_3_1002">
                          New Product 2
                        </span>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              $
                              <span id="input_3_1002_price">
                                200.00
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                    </label>
                  </div>
                </span>
                <br/>
                <span class="form-product-item hover-product-item">
                  <div data-wrapper-react="true" class="form-product-item-detail">
                    <input type="checkbox" class="form-checkbox " id="input_3_1003" name="q3_myProducts3[][id]" value="1003" />
                    <label for="input_3_1003" class="form-product-container">
                      <span data-wrapper-react="true">
                        <span class="form-product-name" id="product-name-input_3_1003">
                          New Product 3
                        </span>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              $
                              <span id="input_3_1003_price">
                                300.00
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                    </label>
                  </div>
                </span>
                <br/>
                <span class="form-payment-total">
                  <b>
                    <span id="total-text">
                      Total
                    </span>
                     
                    <span class="form-payment-price">
                      <span data-wrapper-react="true">
                        $
                        <span id="payment_total">
                          0.00
                        </span>
                      </span>
                    </span>
                  </b>
                </span>
              </div>
              <hr/>
            </div>
            <table class="form-address-table payment-form-table" style="border:0" cellPadding="4" cellSpacing="0">
              <tbody>
                <tr>
                  <th colSpan="2" style="text-align:left">
                    Payment Method
                  </th>
                </tr>
                <tr>
                  <td valign="top" style="min-width:50px;vertical-align:top" rowspan="2">
                    <input type="radio" class="paymentTypeRadios" id="input_3_paymentType_credit" name="q3_myProducts3[paymentType]" value="credit" />
                    <label for="input_3_paymentType_credit">
                      <div style="display:inline-block;padding-right:4px">
                        <img src="https://cdn.jotfor.ms/images/blank.gif" class="paypalpro_img paypalpro_visa" style="display:inline-block;vertical-align:middle" alt="visa" />
                        <img src="https://cdn.jotfor.ms/images/blank.gif" class="paypalpro_img paypalpro_mc" style="display:inline-block;vertical-align:middle" alt="mc" />
                        <img src="https://cdn.jotfor.ms/images/blank.gif" class="paypalpro_img paypalpro_amex" style="display:inline-block;vertical-align:middle" alt="amex" />
                        <img src="https://cdn.jotfor.ms/images/blank.gif" class="paypalpro_img paypalpro_dc" style="display:inline-block;vertical-align:middle" alt="dc" />
                      </div>
                    </label>
                  </td>
                  <td align="left" valign="top" style="padding-bottom:2px !important;text-align:left;vertical-align:top">
                    <input type="radio" class="paymentTypeRadios" id="input_3_paymentType_express" name="q3_myProducts3[paymentType]" checked="" value="express" />
                    <label for="input_3_paymentType_express"> <img style="vertical-align:middle" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/pp-acceptance-small.png" alt="PayPal" /> </label>
                  </td>
                </tr>
              </tbody>
            </table>
            <table style="display:none;border:0" id="creditCardTable" class="form-address-table payment-form-table" cellPadding="0" cellSpacing="0">
              <tbody>
                <tr>
                  <th colSpan="2" style="text-align:left;margin-top:20px;display:table" id="ccTitle3">
                    Credit Card
                  </th>
                </tr>
                <tr>
                  <td width="50%">
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <label class="form-sub-label" for="input_3_cc_firstName" id="sublabel_cc_firstName" style="min-height:13px;margin:0 0 3px 0"> First Name </label>
                      <input type="text" id="input_3_cc_firstName" name="q3_myProducts3[cc_firstName]" class="form-textbox cc_firstName" size="20" value="" data-component="cc_firstName" />
                    </span>
                  </td>
                  <td width="50%">
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <label class="form-sub-label" for="input_3_cc_lastName" id="sublabel_cc_lastName" style="min-height:13px;margin:0 0 3px 0"> Last Name </label>
                      <input type="text" id="input_3_cc_lastName" name="q3_myProducts3[cc_lastName]" class="form-textbox cc_lastName" size="20" value="" data-component="cc_lastName" />
                    </span>
                  </td>
                </tr>
                <tr>
                  <td width="50%">
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <label class="form-sub-label" for="input_3_cc_number" id="sublabel_cc_number" style="min-height:13px;margin:0 0 3px 0"> Credit Card Number </label>
                      <input type="number" id="input_3_cc_number" name="q3_myProducts3[cc_number]" class="form-textbox cc_number" autoComplete="off" size="20" value="" data-component="cc_number" />
                    </span>
                  </td>
                  <td width="50%">
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <label class="form-sub-label" for="input_3_cc_ccv" id="sublabel_cc_ccv" style="min-height:13px;margin:0 0 3px 0"> Security Code </label>
                      <input type="number" id="input_3_cc_ccv" name="q3_myProducts3[cc_ccv]" class="form-textbox cc_ccv" autoComplete="off" style="width:52px" value="" data-component="cc_ccv" />
                    </span>
                  </td>
                </tr>
                <tr>
                  <td width="50%">
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <label class="form-sub-label" for="input_3_cc_exp_month" id="sublabel_cc_exp_month" style="min-height:13px;margin:0 0 3px 0"> Expiration Month </label>
                      <select class="form-dropdown cc_exp_month" name="q3_myProducts3[cc_exp_month]" id="input_3_cc_exp_month" data-component="cc_exp_month">
                        <option>  </option>
                        <option value="January"> January </option>
                        <option value="February"> February </option>
                        <option value="March"> March </option>
                        <option value="April"> April </option>
                        <option value="May"> May </option>
                        <option value="June"> June </option>
                        <option value="July"> July </option>
                        <option value="August"> August </option>
                        <option value="September"> September </option>
                        <option value="October"> October </option>
                        <option value="November"> November </option>
                        <option value="December"> December </option>
                      </select>
                    </span>
                  </td>
                  <td width="50%">
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <label class="form-sub-label" for="input_3_cc_exp_year" id="sublabel_cc_exp_year" style="min-height:13px;margin:0 0 3px 0"> Expiration Year </label>
                      <select class="form-dropdown cc_exp_year" name="q3_myProducts3[cc_exp_year]" id="input_3_cc_exp_year" data-component="cc_exp_year">
                        <option>  </option>
                        <option value="2019"> 2019 </option>
                        <option value="2020"> 2020 </option>
                        <option value="2021"> 2021 </option>
                        <option value="2022"> 2022 </option>
                        <option value="2023"> 2023 </option>
                        <option value="2024"> 2024 </option>
                        <option value="2025"> 2025 </option>
                        <option value="2026"> 2026 </option>
                        <option value="2027"> 2027 </option>
                        <option value="2028"> 2028 </option>
                      </select>
                    </span>
                  </td>
                </tr>
                <tr>
                  <th colSpan="2" style="text-align:left;margin-top:20px;display:table">
                    Billing Address
                  </th>
                </tr>
                <tr>
                  <td colSpan="2">
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <input type="text" id="input_3_addr_line1" name="q3_myProducts3[addr_line1]" class="form-textbox form-address-line" value="" data-component="addr_line1" />
                      <label class="form-sub-label" for="input_3_addr_line1" id="sublabel_3_addr_line1" style="min-height:13px"> Street Address </label>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td colSpan="2">
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <input type="text" id="input_3_addr_line2" name="q3_myProducts3[addr_line2]" class="form-textbox form-address-line" size="46" value="" data-component="addr_line2" />
                      <label class="form-sub-label" for="input_3_addr_line2" id="sublabel_3_addr_line2" style="min-height:13px"> Street Address Line 2 </label>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td width="50%">
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <input type="text" id="input_3_city" name="q3_myProducts3[city]" class="form-textbox form-address-city" size="21" value="" data-component="city" />
                      <label class="form-sub-label" for="input_3_city" id="sublabel_3_city" style="min-height:13px"> City </label>
                    </span>
                  </td>
                  <td>
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <input type="text" id="input_3_state" name="q3_myProducts3[state]" class="form-textbox form-address-state" size="22" value="" data-component="state" />
                      <label class="form-sub-label" for="input_3_state" id="sublabel_3_state" style="min-height:13px"> State / Province </label>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td width="50%">
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <input type="text" id="input_3_postal" name="q3_myProducts3[postal]" class="form-textbox form-address-postal" size="10" value="" data-component="postal" />
                      <label class="form-sub-label" for="input_3_postal" id="sublabel_3_postal" style="min-height:13px"> Postal / Zip Code </label>
                    </span>
                  </td>
                  <td>
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <select class="form-dropdown form-address-country" name="q3_myProducts3[country]" id="input_3_country" data-component="country">
                        <option value="" selected=""> Please Select </option>
                        <option value="United States"> United States </option>
                        <option value="Viet Nam">Viet Nam</option>
                        <option value="USA">USA</option>
                        <option value="other"> Other </option>
                      </select>
                      <label class="form-sub-label" for="input_3_country" id="sublabel_3_country" style="min-height:13px"> Country </label>
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_4">
        <label class="form-label form-label-left form-label-auto" id="label_4" for="first_4"> Buyer Name </label>
        <div id="cid_4" class="form-input">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container " style="vertical-align:top">
              <input type="text" id="first_4" name="q4_buyerName[first]" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_4 sublabel_4_first" />
              <label class="form-sub-label" for="first_4" id="sublabel_4_first" style="min-height:13px"> First Name </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top">
              <input type="text" id="last_4" name="q4_buyerName[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_4 sublabel_4_last" />
              <label class="form-sub-label" for="last_4" id="sublabel_4_last" style="min-height:13px"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_email" id="id_5">
        <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5"> Buyer E-mail </label>
        <div id="cid_5" class="form-input">
          <input type="email" id="input_5" name="q5_buyerEmail" class="form-textbox validate[Email]" size="32" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_5" />
        </div>
      </li>
      <li class="form-line" data-type="control_address" id="id_6">
        <label class="form-label form-label-left form-label-auto" id="label_6" for="input_6undefined"> Shipping Address </label>
        <div id="cid_6" class="form-input">
          <table summary="" class="form-address-table">
            <tbody>
              <tr>
                <td colSpan="2">
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_6_addr_line1" name="q6_shippingAddress[addr_line1]" class="form-textbox form-address-line" autoComplete="address-line1" value="" data-component="address_line_1" aria-labelledby="label_6 sublabel_6_addr_line1" />
                    <label class="form-sub-label" for="input_6_addr_line1" id="sublabel_6_addr_line1" style="min-height:13px"> Street Address </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td colSpan="2">
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_6_addr_line2" name="q6_shippingAddress[addr_line2]" class="form-textbox form-address-line" autoComplete="address-line2" size="46" value="" data-component="address_line_2" aria-labelledby="label_6 sublabel_6_addr_line2" />
                    <label class="form-sub-label" for="input_6_addr_line2" id="sublabel_6_addr_line2" style="min-height:13px"> Street Address Line 2 </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_6_city" name="q6_shippingAddress[city]" class="form-textbox form-address-city" autoComplete="address-level2" size="21" value="" data-component="city" aria-labelledby="label_6 sublabel_6_city" />
                    <label class="form-sub-label" for="input_6_city" id="sublabel_6_city" style="min-height:13px"> City </label>
                  </span>
                </td>
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_6_state" name="q6_shippingAddress[state]" class="form-textbox form-address-state" autoComplete="address-level1" size="22" value="" data-component="state" aria-labelledby="label_6 sublabel_6_state" />
                    <label class="form-sub-label" for="input_6_state" id="sublabel_6_state" style="min-height:13px"> State / Province </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_6_postal" name="q6_shippingAddress[postal]" class="form-textbox form-address-postal" autoComplete="postal-code" size="10" value="" data-component="zip" aria-labelledby="label_6 sublabel_6_postal" />
                    <label class="form-sub-label" for="input_6_postal" id="sublabel_6_postal" style="min-height:13px"> Postal / Zip Code </label>
                  </span>
                </td>
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <select class="form-dropdown form-address-country noTranslate" name="q6_shippingAddress[country]" id="input_6_country" data-component="country" aria-labelledby="label_6 sublabel_6_country" autoComplete="country">
                      <option value=""> Please Select </option>
                      <option value="United States"> United States </option>
                      <option value="Viet Nam">Viet Nam</option>
                      <option value="USA">USA</option>
                      <option value="other"> Other </option>
                    </select>
                    <label class="form-sub-label" for="input_6_country" id="sublabel_6_country" style="min-height:13px"> Country </label>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper ">
            <button id="input_2" type="submit" class="form-submit-button" data-component="button">
              Submit
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
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <input type="hidden" id="simple_spc" name="simple_spc" value="93371098350459" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "93371098350459-93371098350459";
  </script>
  <div class="formFooter-heightMask">
  </div>
  <div class="formFooter f6">
    <a href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=93371098350459&utm_content=jotform_logo&utm_campaign=powered_by_jotform_le" target="_blank" class="formFooter-logoLink"><img class="formFooter-logo" src="https://cdn.jotfor.ms/assets/img/logo/logo-new@1x.png" alt="" style="height: 44px;"></a>
    <div class="formFooter-rightSide">
      <span class="formFooter-text">
        Now create your own JotForm - It's free!
      </span>
      <a class="formFooter-button" href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=93371098350459&utm_content=jotform_button&utm_campaign=powered_by_jotform_le" target="_blank">Create your own JotForm</a>
    </div>
  </div>
</form>