INSERT INTO `forms_search` (`id`, `theme`, `form_name`, `type`, `fields_order_primary`, `fields_order_secondary`) VALUES
(4, 'bootstrap4', 'Standard search', 'MAIN', '{  "PRIMARY": {  "SMART_SEARCH":{"direction":"NONE", "style":"", "class":"col-md-5", "id":"NONE", "type":"SMART_SEARCH"} ,"DROPDOWN_4":{"direction":"NONE", "style":"", "class":"col-md-2", "id":"4", "type":"DROPDOWN"} ,"DROPDOWN_2":{"direction":"NONE", "style":"", "class":"col-md-2", "id":"2", "type":"DROPDOWN"} ,"DROPDOWN_3":{"direction":"NONE", "style":"", "class":"col-md-2", "id":"3", "type":"DROPDOWN"} }, "SECONDARY": {  "INPUTBOX_19":{"direction":"NONE", "style":"", "class":"", "id":"19", "type":"INPUTBOX"} ,"INPUTBOX_20":{"direction":"NONE", "style":"", "class":"", "id":"20", "type":"INPUTBOX"} ,"INPUTBOX_36":{"direction":"NONE", "style":"", "class":"", "id":"36", "type":"INPUTBOX"} ,"INPUTBOX_59":{"direction":"NONE", "style":"", "class":"", "id":"59", "type":"INPUTBOX"} ,"CHECKBOX_24":{"direction":"NONE", "style":"", "class":"", "id":"24", "type":"CHECKBOX"} ,"CHECKBOX_28":{"direction":"NONE", "style":"", "class":"", "id":"28", "type":"CHECKBOX"} ,"CHECKBOX_31":{"direction":"NONE", "style":"", "class":"", "id":"31", "type":"CHECKBOX"} ,"CHECKBOX_30":{"direction":"NONE", "style":"", "class":"", "id":"30", "type":"CHECKBOX"} ,"CHECKBOX_33":{"direction":"NONE", "style":"", "class":"", "id":"33", "type":"CHECKBOX"} ,"CHECKBOX_25":{"direction":"NONE", "style":"", "class":"", "id":"25", "type":"CHECKBOX"} ,"CHECKBOX_29":{"direction":"NONE", "style":"", "class":"", "id":"29", "type":"CHECKBOX"} ,"CHECKBOX_32":{"direction":"NONE", "style":"", "class":"", "id":"32", "type":"CHECKBOX"} ,"CHECKBOX_23":{"direction":"NONE", "style":"", "class":"", "id":"23", "type":"CHECKBOX"} ,"CHECKBOX_11":{"direction":"NONE", "style":"", "class":"", "id":"11", "type":"CHECKBOX"} } }', '0');

INSERT INTO `custom_templates` (`id`, `theme`, `template_name`, `type`, `widgets_order`) VALUES
(2, 'bootstrap4', 'property page', 'LISTING', '{  "header": [ ], "top": [ ], "center": [  "center_slider_description", "center_amenities_indoor", "center_amenities_outdoor", "center_distances", "center_map-walkscore", "center_imagegallery", "center_facecomments", "center_otherlistings" ], "right": [  "right_overview", "right_print", "right_pdf", "right_property_energygas", "right_agent-details", "right_currency-conversions", "right_enquiry-form", "right_qrcode", "right_compare" ], "bottom": [ ], "footer": [ ] }');

UPDATE `forms_search` SET `fields_order_primary` = '{ \"PRIMARY\": { \"DROPDOWN\":{\"direction\":\"NONE\", \"style\":\"\", \"class\":\"col-lg-2\", \"id\":\"4\", \"type\":\"DROPDOWN\"} ,\"SMART_SEARCH\":{\"direction\":\"NONE\", \"style\":\"\", \"class\":\"col-lg-3\", \"id\":\"NONE\", \"type\":\"SMART_SEARCH\"} ,\"DROPDOWN_2\":{\"direction\":\"NONE\", \"style\":\"\", \"class\":\"col-lg-3\", \"id\":\"2\", \"type\":\"DROPDOWN\"} ,\"DROPDOWN_3\":{\"direction\":\"NONE\", \"style\":\"\", \"class\":\"col-lg-3\", \"id\":\"3\", \"type\":\"DROPDOWN\"} }, \"SECONDARY\": { \"INPUTBOX_19\":{\"direction\":\"NONE\", \"style\":\"\", \"class\":\"\", \"id\":\"19\", \"type\":\"INPUTBOX\"} ,\"INPUTBOX_20\":{\"direction\":\"NONE\", \"style\":\"\", \"class\":\"\", \"id\":\"20\", \"type\":\"INPUTBOX\"} ,\"INPUTBOX_36\":{\"direction\":\"NONE\", \"style\":\"\", \"class\":\"\", \"id\":\"36\", \"type\":\"INPUTBOX\"} ,\"INPUTBOX_59\":{\"direction\":\"NONE\", \"style\":\"\", \"class\":\"\", \"id\":\"59\", \"type\":\"INPUTBOX\"} ,\"CHECKBOX_24\":{\"direction\":\"NONE\", \"style\":\"\", \"class\":\"\", \"id\":\"24\", \"type\":\"CHECKBOX\"} ,\"CHECKBOX_28\":{\"direction\":\"NONE\", \"style\":\"\", \"class\":\"\", \"id\":\"28\", \"type\":\"CHECKBOX\"} ,\"CHECKBOX_31\":{\"direction\":\"NONE\", \"style\":\"\", \"class\":\"\", \"id\":\"31\", \"type\":\"CHECKBOX\"} ,\"CHECKBOX_30\":{\"direction\":\"NONE\", \"style\":\" \", \"class\":\"\", \"id\":\"30\", \"type\":\"CHECKBOX\"} ,\"CHECKBOX_33\":{\"direction\":\"NONE\", \"style\":\"\", \"class\":\"\", \"id\":\"33\", \"type\":\"CHECKBOX\"} ,\"CHECKBOX_25\":{\"direction\":\"NONE\", \"style\":\"\", \"class\":\"\", \"id\":\"25\", \"type\":\"CHECKBOX\"} ,\"CHECKBOX_29\":{\"direction\":\"NONE\", \"style\":\"\", \"class\":\"\", \"id\":\"29\", \"type\":\"CHECKBOX\"} ,\"CHECKBOX_32\":{\"direction\":\"NONE\", \"style\":\"\", \"class\":\"\", \"id\":\"32\", \"type\":\"CHECKBOX\"} ,\"CHECKBOX_23\":{\"direction\":\"NONE\", \"style\":\"\", \"class\":\"\", \"id\":\"23\", \"type\":\"CHECKBOX\"} ,\"CHECKBOX_11\":{\"direction\":\"NONE\", \"style\":\"\", \"class\":\"\", \"id\":\"11\", \"type\":\"CHECKBOX\"} } }' WHERE `forms_search`.`id` = 4

