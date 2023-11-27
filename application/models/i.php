<?php
ini_set("display_errors", 1);

$data = $_REQUEST['data'];
$result = $_REQUEST['result'];
$customer = $_REQUEST['customer'];
$address = $_REQUEST['address'];
$total_array = $_REQUEST['total_array'];
$order_products = $_REQUEST['order_products'];
$order_history = $_REQUEST['order_history'];
$conn = odbc_connect('crm', 'sa', 'sa@1234');
$error_remove_order = 0;
$error_remove_products = 0;
$error_remove_batches = 0;
$error_remove_activity = 0;
$message = '';
if (!$conn) {
    echo json_encode(array(
        'success' => 0,
        'error' => "Unable to connection with database server",
        'data' => array()
    ));
    exit();
}

if (!$conn) {
    echo json_encode(array(
        'success' => 0,
        'error' => "Unable to connection with database server",
        'data' => array()
    ));
    exit();
}


if ($data['order_id'] == "" || strlen($data['order_id']) == 0) {

    echo json_encode(array(
        'success' => 0,
        'error' => "Valid order id is required",
        'data' => array()
    ));
    exit();
}

//$rs = odbc_exec($conn,"insert into CRM (OrderNo,ContactNo, Area)
//values('1021','11 contact number', '1 1 1area goes here')");
$json = array();

//Orders
$sql = "INSERT INTO CRM_Orders
([order_id]
,[first_name]
,[last_name]
,[email]
,[mobile_1]
,[mobile_2]
,[full_address]
,[area]
,[requested_date]
,[requested_time]
,[order_source]
,[with_insurance]
,[with_prescription]
,[branch_name]
,[branch_code]
,[order_created_at]
,[net_amount]
,[delivery_charges]
,[discount]
,[discount_reason]
,[total]
,[payment_method]
,[payment_referene_number]
,[change_required]
,[amount_received]
,[change_return]
,[source]
,[submitted_date]
,[task_created_at]
,[task_started_at]
,[task_ended_at]
,[task_estimated_distance]
,[task_estimated_duration]
,[patient_name]
,[type_of_delivery]
,[prepared_by]
,[Remarks]
,[lpo_date_time]
,[driver_back_by]
,[total_order_time]
,[total_task_time]
,[area_id]
,[agent_time]
,[multi_delivery]
,[dispatched_time]
,[Cust_name_pro]
,[driver_name]
,[Amt_rec_plus]
,[Balance_plus]
,[InsuranceCardNo]
,[Caimform_No]
,[Approval_code]
,[Sub_promo]
,[SalesManName]
,[order_reference]
,[Bank]
,[Sources])
VALUES
(
	             " . $result['order_id'] . "
	            ,'" . substr($customer[0]['firstname'], 0, 25) . "'
	            ,'" . substr($customer[0]['lastname'], 0, 25) . "'
	            ,'" . $customer[0]['email'] . "'
	            ,'" . $customer[0]['telephone'] . "'
	            ,'" . $customer[0]['more_number1'] . "'
	            ,'" . $address[0]['address'] . "'
	            ,'" . $address[0]['area_name'] . "'
	            ,'" . $data['requested_date'] . "'
	            ,'" . $data['requested_time'] . "'
	            ,'" . $data['source_name'] . "'
	            ," . $result['withInsurance'] . "
	            ," . $result['withPrescription'] . "
	            ,'" . $result['hub_name'] . "'
	            ," . $data['branch_code'] . "
	            ,'" . $data['date_added'] . "'
	            ," . $total_array['sub_total'] . "
	            ," . $total_array['shipping'] . "
	            ," . $total_array['discount'] . "
	            ,'" . $total_array['title'] . "'
	            ," . $total_array['total_number'] . "
	            ,'" . $data['payment_title'] . "'
	            ,'" . $result['cashier_card_refrenc'] . "'
	            ,'" . $result['change_required'] . "'
	            ," . $result['amount_received'] . "
	            ," . $result['change_back'] . "
	            ,'" . $data['source_name'] . "'
	            ,'" . $data['submitted_date'] . "'
	            ,'" . $data['task_created_date'] . "'
	            ,'" . $data['task_started_date'] . "'
	            ,'" . $data['task_end_date'] . "'
	            ,'" . $data['estimated_distance'] . "'
	            ,'" . $data['estimated_duration'] . "'
							,'" . substr($data['patient_name'], 0, 48) . "'
							,'" . $data['type_of_delivery'] . "'
							,'" . $data['scaned_by'] . "'
							,'" . $data['Remarks'] . "'
							,'" . $data['lpo_date_time'] . "'
							,'" . $data['driver_return_date'] . "'
							,'" . $data['total_order_time'] . " m'
							,'" . $data['total_task_time'] . " m'
						        ," . $data['branch_code'] . "
						        ,'" . $data['agent_time'] . "'
					  	        ," . $data['multi_delivery'] . "
						        ,'" . $data['dispatched_time'] . "'
                                                        ,'" . $data['Cust_name_pro'] . "'
                                                        ,'" . $data['driver_name'] . "'
                                                        ,'" . $data['amount_received_plus'] . "'
                                                        ,'" . $data['balance_plus'] . "'
                                                        ,'" . $data['insurance_card_no'] . "'
                                                        ,'" . $data['insurance_claim_no'] . "'
                                                        ,'" . $data['insurance_approval_code'] . "'
                                                        ,'" . $data['sub_promo'] . "'
                                                        ,'" . $data['prepared_by'] . "'
																												,'" . $data['order_reference'] . "'
																												,'" . $data['bank'] . "'
,'" . $data['crm_source_name'] . "'
                                                        )";
$file =  @fopen("data.txt", "a");
$write = array('order_id' => $result['order_id'], 'time' => date('d/m/Y H:i:s'), 'query' => $sql);
@fwrite($file, print_r($write, true));
@fclose($file);
$rs = @odbc_exec($conn, $sql);
if ($rs) {
    $error_remove = 0;
} else {
    $message = 'Order query failed ' . odbc_error();
    $error_remove = 1;
    $error_remove_order = 1;
    $error_file =  @fopen("error_log.txt", "a");
    $errorwrite = array('order_id' => $result['order_id'], 'time' => date('d/m/Y H:i:s'), 'message' => $message);
    @fwrite($error_file, print_r($errorwrite, true));
    @fclose($error_file);
}

/*
,<order_id, int,>
,<first_name, varchar(50),>
,<last_name, varchar(50),>
,<email, varchar(200),>
,<mobile_1, varchar(15),>
,<mobile_2, varchar(15),>
,<address, varchar(500),>
,<area, varchar(50),>
,<requested_date, date,>
,<requested_tie, varchar(50),>
,<order_source, varchar(50),>
,<with_insurance, tinyint,>
,<with_prescription, tinyint,>
,<branch_name, varchar(50),>
,<branch_code, int,>
,<order_created_at, datetime,>
,<net_amount, float,>
,<delivery_charges, float,>
,<discount, float,>
,<discount_reason, varchar(50),>
,<total, float,>
,<payment_method, varchar(50),>
,<payment_referene_number, varchar(50),>
,<change_required, varchar(100),>
,<amount_received, float,>
,<change_return, float,>
,<source, varchar(50),>
,<submitted_date, datetime,>
,<task_created_at, datetime,>
,<task_started_at, datetime,>
,<task_ended_at, datetime,>
,<task_estimated_distance, varchar(10),>
,<task_estimated_duration, varchar(20),>)';*/

//Order products
foreach ($order_products as $order_product) {
    if ($data['requested'] == 1 && $order_product['sku'] == '44434721') {
    } else {
        $sql_p = "INSERT INTO [dbo].[CRM_Orders_Products]
              ([order_id]
              ,[quantity]
              ,[price]
              ,[sku]
              ,[name]
              ,[discount]
              ,[tax]
              ,[tax_percent]
              ,[price_without_vat])
              VALUES
              (" . $data['order_id'] . "
              ," . $order_product['quantity'] . "
              ," . $order_product['price'] . "
              ,'" . $order_product['sku'] . "'
              ,'" . $order_product['name'] . "'
              ," . $order_product['discount'] . "
              ," . $order_product['vat_value'] . "
              ," . $order_product['vat'] . "
              ," . $order_product['price_without_vat'] . ")";
        $pro_discount = $order_product['discount'] / $order_product['quantity'];
        $rs_p = @odbc_exec($conn, $sql_p);
        if ($rs_p) {
            $error_remove = 0;
        } else {
            $message .= "Product query failed " . odbc_error();
            $error_remove = 1;
            $error_remove_products = 1;
            $error_file =  @fopen("error_log.txt", "a");
            $errorwrite = array('order_id' => $result['order_id'], 'time' => date('d/m/Y H:i:s'), 'message' => $message);
            @fwrite($error_file, print_r($errorwrite, true));
            @fclose($error_file);
        }

        $file =  @fopen("data_p.txt", "a");
        $write = array('order_id' => $result['order_id'], 'time' => date('d/m/Y H:i:s'), 'query' => $sql_p);
        @fwrite($file, print_r($write, true));
        @fclose($file);



        $batches = $order_product['batch_products'];
        if ($batches) {
            foreach ($batches as $batch) {

                $sql_b = "INSERT INTO [dbo].[CRM_Products_Batches]
	([sku]
	,[order_id]
	,[batch_number]
	,[expiry]
							,[discount]
							,[discount_percentage]
	,[Qty])
	VALUES
	('" . $order_product['sku'] . "'
	," . $result['order_id'] . "
	,'" . $batch['bar_code'] . "'
	,'" . $batch['expiry'] . "'
							,'" . $pro_discount * $batch['quantity'] . "'
							,'" . $order_product['discount_per'] . "'
	," . $batch['quantity'] . ")";

                $rs_b = @odbc_exec($conn, $sql_b);
                if ($rs_b) {
                    $error_remove = 0;
                } else {
                    $message .= "Batch query failed " . odbc_error();
                    $error_remove = 1;
                    $error_remove_batches = 1;
                    $error_file =  @fopen("error_log.txt", "a");
                    $errorwrite = array('order_id' => $result['order_id'], 'time' => date('d/m/Y H:i:s'), 'message' => $message);
                    @fwrite($error_file, print_r($errorwrite, true));
                    @fclose($error_file);
                }


                $file =  @fopen("data_b.txt", "a");
                $write = array('order_id' => $result['order_id'], 'time' => date('d/m/Y H:i:s'), 'query' => $sql_b);
                @fwrite($file, print_r($write, true));

                @fclose($file);


                //Order products batches



                //
                // $file =  fopen("data_b.txt","w");
                // fwrite($file,print_r($sql_b, true));
                // fclose($file);
            }
        } else {
            $message .= "No Products scanned";
            $error_remove = 1;
            $error_remove_batches = 1;
            $error_file =  @fopen("error_log.txt", "a");
            $errorwrite = array('order_id' => $result['order_id'], 'time' => date('d/m/Y H:i:s'), 'message' => $message);
            @fwrite($error_file, print_r($errorwrite, true));
            @fclose($error_file);
        }
    }
}
//copaytotal
if ($data['requested'] == 1 && $data['is_medi'] == 1) {
    if ($total_array['sub_total'] > 0) {
        $sql_d = "INSERT INTO [dbo].[CRM_Orders_Products]
								              ([order_id]
								              ,[quantity]
								              ,[price]
								              ,[sku]
								              ,[name]
								              ,[discount]
								              ,[tax]
								              ,[tax_percent]
								              ,[price_without_vat])
								              VALUES
								              (" . $data['order_id'] . "
								              , 1
								              ," . $total_array['sub_total'] . "
								              ,'44434722'
								              ,'MEDICLINIC COPAYMENT'
								              ,'0'
								              ,'0'
								              ,'0'
								              ," . $total_array['sub_total'] . ")";
        $rs_d = @odbc_exec($conn, $sql_d);
        $sql_db = "INSERT INTO [dbo].[CRM_Products_Batches]
															              ([sku]
								                             ,[order_id]
								                             ,[batch_number]
								                             ,[expiry]
																						 ,[discount]
															 							,[discount_percentage]
								                             ,[Qty])
															              VALUES
																						('44434722'
								                            ," . $data['order_id'] . "
								                            ,'444347229999'
								                            ,'9999'
																						,'0'
																						,'0'
								                            ,'1'
								                             )";
        $rs_db = @odbc_exec($conn, $sql_db);

        $file =  @fopen("data_d.txt", "a");
        $write = array('order_id' => $result['order_id'], 'time' => date('d/m/Y H:i:s'), 'query' => $sql_d);
        @fwrite($file, print_r($write, true));
        @fclose($file);
    } else {
        $sql_d = "INSERT INTO [dbo].[CRM_Orders_Products]
								              ([order_id]
								              ,[quantity]
								              ,[price]
								              ,[sku]
								              ,[name]
								              ,[discount]
								              ,[tax]
								              ,[tax_percent]
								              ,[price_without_vat])
								              VALUES
								              (" . $data['order_id'] . "
								              , 1
								              ,'0.01'
								              ,'44434722'
								              ,'MEDICLINIC COPAYMENT'
								              ,'0'
								              ,'0'
								              ,'0'
								              ,'0.01')";
        $rs_d = @odbc_exec($conn, $sql_d);
        $sql_db = "INSERT INTO [dbo].[CRM_Products_Batches]
															              ([sku]
								                             ,[order_id]
								                             ,[batch_number]
								                             ,[expiry]
																						 ,[discount]
															 							,[discount_percentage]
								                             ,[Qty])
															              VALUES
																						('44434722'
								                            ," . $data['order_id'] . "
								                            ,'444347229999'
								                            ,'9999'
																						,'0'
																						,'0'
								                            ,'1'
								                             )";
        $rs_db = @odbc_exec($conn, $sql_db);

        $file =  @fopen("data_d.txt", "a");
        $write = array('order_id' => $result['order_id'], 'time' => date('d/m/Y H:i:s'), 'query' => $sql_d);
        @fwrite($file, print_r($write, true));
        @fclose($file);
    }
}


//copaytotal

//Delivery
if ($total_array['shipping'] > 0 && $total_array['shipping'] != '7.5000') {


    $t = ($total_array['shipping'] / 1.05);

    $sql_d = "INSERT INTO [dbo].[CRM_Orders_Products]
              ([order_id]
              ,[quantity]
              ,[price]
              ,[sku]
              ,[name]
              ,[discount]
              ,[tax]
              ,[tax_percent]
              ,[price_without_vat])
              VALUES
              (" . $data['order_id'] . "
              , 1
              ,'".$total_array['shipping']."'
              ,'44434951'
              ,'DELIVERY'
              ,'0'
              ,'".($total_array['shipping'] - $t)."'
              ,'5'
              ,'".$t."')";
    $rs_d = @odbc_exec($conn, $sql_d);
    $sql_db = "INSERT INTO [dbo].[CRM_Products_Batches]
							              ([sku]
                             ,[order_id]
                             ,[batch_number]
                             ,[expiry]
														 ,[discount]
							 							,[discount_percentage]
                             ,[Qty])
							              VALUES
														('44434951'
                            ," . $data['order_id'] . "
                            ,'444349519999'
                            ,'9999'
														,'0'
														,'0'
                            ,'1'
                             )";
    $rs_db = @odbc_exec($conn, $sql_db);

    $file =  @fopen("data_d.txt", "a");
    $write = array('order_id' => $result['order_id'], 'time' => date('d/m/Y H:i:s'), 'query' => $sql_d);
    @fwrite($file, print_r($write, true));
    @fclose($file);
} else if ($total_array['shipping'] > 0 && $total_array['shipping'] === '7.5000') {
    $sql_d = "INSERT INTO [dbo].[CRM_Orders_Products]
              ([order_id]
              ,[quantity]
              ,[price]
              ,[sku]
              ,[name]
              ,[discount]
              ,[tax]
              ,[tax_percent]
              ,[price_without_vat])
              VALUES
              (" . $data['order_id'] . "
              , 1
              ,'7.5'
              ,'44421499'
              ,'DELIVERY'
              ,'0'
              ,'0.357'
              ,'5'
              ,'7.143')";
    $rs_d = @odbc_exec($conn, $sql_d);
    $sql_db = "INSERT INTO [dbo].[CRM_Products_Batches]
							              ([sku]
                             ,[order_id]
                             ,[batch_number]
                             ,[expiry]
														 ,[discount]
							 							,[discount_percentage]
                             ,[Qty])
							              VALUES
														('44421499'
                            ," . $data['order_id'] . "
                            ,'444214999999'
                            ,'9999'
														,'0'
														,'0'
                            ,'1'
                             )";
    $rs_db = @odbc_exec($conn, $sql_db);

    $file =  @fopen("data_d.txt", "a");
    $write = array('order_id' => $result['order_id'], 'time' => date('d/m/Y H:i:s'), 'query' => $sql_d);
    @fwrite($file, print_r($write, true));
    @fclose($file);
} else if ($total_array['shipping'] == 0 && $total_array['additional'] == '21.0000') {
    $sql_d = "INSERT INTO [dbo].[CRM_Orders_Products]
	              ([order_id]
	              ,[quantity]
	              ,[price]
	              ,[sku]
	              ,[name]
	              ,[discount]
                      ,[tax]
                      ,[tax_percent]
                      ,[price_without_vat])
	              VALUES
	              (" . $data['order_id'] . "
	              , 1
	              ,'21'
	              ,'44419813'
	              ,'DELIVERY CHARGES 20'
	              ,'0'
                      ,'1'
                      ,'5'
                      ,'20')";
    $rs_d = @odbc_exec($conn, $sql_d);
    $sql_db = "INSERT INTO [dbo].[CRM_Products_Batches]
								              ([sku]
	                             ,[order_id]
	                             ,[batch_number]
	                             ,[expiry]
															 ,[discount]
								 							,[discount_percentage]
	                             ,[Qty])
								              VALUES
															('44419813'
	                            ," . $data['order_id'] . "
	                            ,'444198139999'
	                            ,'9999'
															,'0'
															,'0'
	                            ,'1'
	                             )";
    $rs_db = @odbc_exec($conn, $sql_db);
    $file =  @fopen("data_d.txt", "a");
    $write = array('order_id' => $result['order_id'], 'time' => date('d/m/Y H:i:s'), 'query' => $sql_d);
    @fwrite($file, print_r($write, true));

    @fclose($file);
} else if ($total_array['shipping'] == 0 && $total['additional'] == '26.2500') {
    $sql_d = "INSERT INTO [dbo].[CRM_Orders_Products]
	              ([order_id]
	              ,[quantity]
	              ,[price]
	              ,[sku]
	              ,[name]
	              ,[discount]
                      ,[tax]
                      ,[tax_percent]
                      ,[price_without_vat])
	              VALUES
	              (" . $data['order_id'] . "
	              , 1
	              ,'26.25'
	              ,'44428467'
	              ,'DELIVERY CHARGES 25'
	              ,'0'
                      ,'1.25'
                      ,'5'
                      ,'25')";
    $rs_d = @odbc_exec($conn, $sql_d);
    $sql_db = "INSERT INTO [dbo].[CRM_Products_Batches]
								              ([sku]
	                             ,[order_id]
	                             ,[batch_number]
	                             ,[expiry]
															 ,[discount]
								 							,[discount_percentage]
	                             ,[Qty])
								              VALUES
															('44428467'
	                            ," . $data['order_id'] . "
	                            ,'444284679999'
	                            ,'9999'
															,'0'
															,'0'
	                            ,'1'
	                             )";
    $rs_db = @odbc_exec($conn, $sql_db);
    $file =  @fopen("data_d.txt", "a");
    $write = array('order_id' => $result['order_id'], 'time' => date('d/m/Y H:i:s'), 'query' => $sql_d);
    @fwrite($file, print_r($write, true));
    @fclose($file);
} else if ($total_array['shipping'] == 0 && $total_array['additional'] == '31.5000') {
    $sql_d = "INSERT INTO [dbo].[CRM_Orders_Products]
	              ([order_id]
	              ,[quantity]
	              ,[price]
	              ,[sku]
	              ,[name]
	              ,[discount]
                      ,[tax]
                      ,[tax_percent]
                      ,[price_without_vat])
	              VALUES
	              (" . $data['order_id'] . "
	              , 1
	              ,'31.5'
	              ,'44424138'
	              ,'DELIVERY CHARGES 30'
	              ,'0'
                      ,'1.5'
                      ,'5'
                      ,'30')";

    $rs_d = @odbc_exec($conn, $sql_d);
    $sql_db = "INSERT INTO [dbo].[CRM_Products_Batches]
															([sku]
															 ,[order_id]
															 ,[batch_number]
															 ,[expiry]
															 ,[discount]
								 							,[discount_percentage]
															 ,[Qty])
															VALUES
															('44424138'
															," . $data['order_id'] . "
															,'444241389999'
															,'9999'
															,'0'
															,'0'
															,'1'
															 )";
    $rs_db = @odbc_exec($conn, $sql_db);
    $file =  @fopen("data_d.txt", "a");
    $write = array('order_id' => $result['order_id'], 'time' => date('d/m/Y H:i:s'), 'query' => $sql_d);
    @fwrite($file, print_r($write, true));
    @fclose($file);
} else if ($total_array['shipping'] == 0 && $total_array['additional'] == '52.5000') {
    $sql_d = "INSERT INTO [dbo].[CRM_Orders_Products]
	              ([order_id]
	              ,[quantity]
	              ,[price]
	              ,[sku]
	              ,[name]
	              ,[discount]
                      ,[tax]
                      ,[tax_percent]
                      ,[price_without_vat])
	              VALUES
	              (" . $data['order_id'] . "
	              , 1
	              ,'52.5'
	              ,'44419814'
	              ,'DELIVERY CHARGES 50'
	              ,'0'
                      ,'2.5'                      ,'5'
                      ,'50')";
    $rs_d = @odbc_exec($conn, $sql_d);
    $sql_db = "INSERT INTO [dbo].[CRM_Products_Batches]
															([sku]
															 ,[order_id]
															 ,[batch_number]
															 ,[expiry]
															 ,[discount]
								 							,[discount_percentage]
															 ,[Qty])
															VALUES
															('44419814'
															," . $data['order_id'] . "
															,'444198149999'
															,'9999'
															,'0'
															,'0'
															,'1'
															 )";
    $rs_db = @odbc_exec($conn, $sql_db);
    $file =  @fopen("data_d.txt", "a");
    $write = array('order_id' => $result['order_id'], 'time' => date('d/m/Y H:i:s'), 'query' => $sql_d);
    @fwrite($file, print_r($write, true));
    @fclose($file);
}
//Order activity
// foreach($order_history as $order_history)
// {
//
// $sql_h = "INSERT INTO [dbo].[CRM_Orders_Acvitity]
// ([order_id]
// ,[created_at]
// ,[activity]
// ,[agent_name])
// VALUES
// (".$result['order_id']."
// ,'".$order_history['date_added']."'
// ,'".$order_history['status']."'
// ,'".$order_history['name']."')";
//
//   $rs_h = @odbc_exec($conn,$sql_h);
// 	$file =  @fopen("data_h.txt","a");
// 	$write = array('order_id' => $result['order_id'],'time' => date('d/m/Y H:i:s'),'query'=> $sql_h );
// 	@fwrite($file,print_r($write, true));
// 	@fclose($file);
// }
//delete medi delivery
if ($data['requested'] == 1 && $data['is_medi'] == 1) {
    $sql_delete_do = "delete
						  FROM [dbo].[CRM_Orders_Products] where sku = '44434721' and order_id = '" . $result['order_id'] . "'";
    //odbc_exec($conn,$sql_delete_do);
    $sql_delete_db = "delete
						  FROM [dbo].[CRM_Products_Batches] where sku = '44434721' and order_id = '" . $result['order_id'] . "'";
    //odbc_exec($conn,$sql_delete_db);
}
//delete medi delivery

if ($error_remove_order == 1 || $error_remove_products == 1 || $error_remove_batches == 1) {
    $file =  @fopen("data_delete.txt", "a");
    $write = array('order_id' => $result['order_id'], 'time' => date('d/m/Y H:i:s'), 'order' => $error_remove_order, 'products' => $error_remove_products, 'batches' => $error_remove_batches);
    @fwrite($file, print_r($write, true));
    @fclose($file);
    $sql_delete_o = "delete
  FROM [dbo].[CRM_Orders] where order_id = '" . $result['order_id'] . "'";
    $sql_delete_p = "delete
  FROM [dbo].[CRM_Orders_Products] where order_id = '" . $result['order_id'] . "'";
    $sql_delete_h = "delete
  FROM [dbo].[CRM_Orders_Acvitity] where order_id = '" . $result['order_id'] . "'";
    $sql_delete_b = "delete
  FROM [dbo].[CRM_Products_Batches] where order_id = '" . $result['order_id'] . "'";
    //odbc_exec($conn,$sql_delete_o);
    //odbc_exec($conn,$sql_delete_p);
    //odbc_exec($conn,$sql_delete_h);
    //odbc_exec($conn,$sql_delete_b);
    $json['status'] = 'error';
    $json['response'] = $message;
} else {
    $json['status'] = 'success';
    $json['response'] = 'Success';
}

echo json_encode($json);

//Order products
/*(<order_id, int,>
,<quantity, int,>
,<price, float,>
,<sku, bigint,>
,<name, varchar(100),>)';*/


//Order products batches


/*
(<sku, bigint,>
,<order_id, int,>
,<batch_number, bigint,>
,<expiry, varchar(10),>)';
*/


//Order activity


/*(<order_id, int,>
,<created_at, datetime,>
,<activity, varchar(50),>
,<agent_name, varchar(50),>)';
*/
