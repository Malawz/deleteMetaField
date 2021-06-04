<?php
class Producttag extends Base_Controller {
	function __construct() {
		parent::__construct();	
	}


/*
   public function metafield(){  
   					 $field = array("metafield"=>array(
												'namespace' => 'products',
												'key' => 'related',
												'value' => "",
												"value_type"=> "string"	
												)
											);

  					$fields = json_encode($field);
  				// print_r($fields);
  					$uniqueproduct_id="3054538948689";
  			
 					$page_metafield="https://".SHOPIFY_APP_API_KEY.":".SHOPIFY_APP_PASSWORD."@".SHOPIFY_SHOP."/admin/api/2019-10/products/".$uniqueproduct_id."/metafields.json";				
 					$request_metafield = curl_init($page_metafield); // initiate curl object
 					curl_setopt($request_metafield, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response
 					curl_setopt($request_metafield, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
 					curl_setopt($request_metafield, CURLOPT_SSL_VERIFYPEER, FALSE); // uncomment if you get no gateway response and are using HTTPS
 					//curl_setopt($request_metafield, CURLOPT_HTTPHEADER, ['Content-Type: application/json','Accept:* /*']);
 					curl_setopt($request_metafield, CURLOPT_CUSTOMREQUEST, "POST");
 					curl_setopt($request_metafield, CURLOPT_FOLLOWLOCATION, true);
 					curl_setopt($request_metafield, CURLOPT_POSTFIELDS, $fields);
 					$response_metafield = curl_exec($request_metafield); 
 					curl_close($request_metafield); 
  
 					$json_data_metafield=json_decode($response_metafield,true);
 print_r($json_data_metafield);
  }

  */

  public function metafield1($productId){
			$page_metafield = "https://6ec4c7c0c916d61c11765eb6c294fca7:d98e99102d07628467a5e87d847c0490@jasonl4.myshopify.com/admin/products/".$productId."/metafields.json";
					$request = curl_init($page_metafield); // initiate curl object
					curl_setopt($request, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response
					curl_setopt($request, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
					curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE); // uncomment if you get no gateway response and are using HTTPS
					curl_setopt($request, CURLOPT_HTTPHEADER, ['Content-Type: application/json','Accept:*/*']);
					curl_setopt($request, CURLOPT_CUSTOMREQUEST, "GET");
					curl_setopt($request, CURLOPT_FOLLOWLOCATION, true);
					$response = curl_exec($request); // execute curl fetch and store results in $response
					curl_close($request); 
					$json_data=json_decode($response,true);
				return $json_data;
  }


    public function delete1($ownerId, $metafieldId){
									$page_metafield = "https://6ec4c7c0c916d61c11765eb6c294fca7:d98e99102d07628467a5e87d847c0490@jasonl4.myshopify.com/admin/customers/".$ownerId."/metafields/".$metafieldId.".json";
									$request = curl_init($page_metafield); // initiate curl object
									curl_setopt($request, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response
									curl_setopt($request, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
									curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE); // uncomment if you get no gateway response and are using HTTPS
									curl_setopt($request, CURLOPT_HTTPHEADER, ['Content-Type: application/json','Accept:*/*']);
									curl_setopt($request, CURLOPT_CUSTOMREQUEST, "DELETE");
									curl_setopt($request, CURLOPT_FOLLOWLOCATION, true);
									//curl_setopt($request, CURLOPT_POSTFIELDS, $fields);
									$response = curl_exec($request); // execute curl fetch and store results in $response
									curl_close($request); 
									$json_data=json_decode($response,true);
									print "<pre>";
									 print_r($json_data);
  }


public function deleteMeta(){
	$pIds = "6631108806,3054538948689,3054539112529,3054538883153,2998892462161,2998892429393,6747786502,6630707974,6521419462,83679739916,83679870988,83680034828,83679281164,83678986252,6630748038,8953181388,8953181772,8953182092,6630743878,8921444236,8921444428,8921444748,4508290056273,4508289597521,4508289761361,4508289892433,4508290646097,4508290973777,4508291072081,4508290220113,4508290383953,2850923511889,2850924396625,2850924953681,2950832324689,2950877347921,2950877577297,2950877806673,2950885441617,2950885736529,2950885900369,2841645187153,2841645416529,2841645744209,2841648758865,2841649184849,2841649479761,2841649709137,2841650004049,2841650331729,6521850950,6521849606,6521847558,6521837510,67735355404,67735420940,67735486476,67735584780,6521835462,9751058892,9751170124,9751170700,9751059852,4593878073425,4648580612177,6630750918,4610755625041,4481661993041,6521420102,6521660870,1349662605393,6521788102,1349662703697,22901719052,22901850124,33300807692,33204207628,33301102604,33204338700,3010101739601,3010101772369,3010101805137,3010101903441,1347774742609,1347774775377,1347774808145,6630729798,8921220556,8921221132,8921221580,8953870092,8953870604,8953871116,8953871628,78772764684,6521684678,1349662670929,2342899351633,2342941458513,2345131409489,160588726284,3175840317521,158911266828,4472074633297,4472074666065,1341452419153,4589288849489,1352024883281,1352024916049,1352024817745,1352024850513,1352024719441,1352024784977,1352151072849,1352151334993,6521414918,1352150548561,4589297008721,8953635788,8953636108,8953636876,8953637196,6630739590,8953516940,8953517196,8953517452,6630741958,8953382220,8953382412,8953382668,6747764166,3058175213649,6747764422,6747779846,10960566988,10960567436,10960567564,10960565196,10960565772,10960566412,1365583855697,6522180166,8794739212,8794755916,6522082950,8794697292,8794700876,6522066950,8794566540,8794570316,8827784524,8827788044,8827788108,10960928716,10960929740,10960931020,8827998732,8827998796,8827998988,8827481740,8827550988";
$ids = explode(",",$pIds);
foreach ($ids as $key => $productId) {
				echo "<p>".$productId."</p>";
				sleep(1);
				$metaData = $this->metafield1($productId);
				foreach ($metaData as $key => $value) {
					foreach ($value as  $metafield) {	
						if($metafield['key'] == 'related'){
							$ownerId = $metafield['owner_id'];
							$metaId = $metafield['id'];
						}
					}
				}
				if($metaId){
					$this->delete1($ownerId, $metaId );
				}
	}
}




}
?>