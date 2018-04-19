<?
define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__.'/Facebook/');
require_once(__DIR__.'/Facebook/autoload.php');

$fb = new FacebookFacebook([
  'app_id' => 'XXXXXX',
  'app_secret' => 'XXXXXX',
  'default_graph_version' => 'v2.2',
  ]);
 
$linkData = [ 
  'link' => 'http://www.website.com',
  'message' => 'Welcome to Website',
  ];
$pageAccessToken="XXXXXXX"; 
try {
  // Returns a `FacebookFacebookResponse` object
  $response = $fb->post('/me/feed', $linkData, $pageAccessToken);
} catch(FacebookExceptionsFacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(FacebookExceptionsFacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
$graphNode = $response->getGraphNode();
print_r($graphNode);

?>