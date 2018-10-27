<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    public function __construct(){
     parent::__construct();
    } 

    public function index()
	{
        $this->load->view('about');
	}
    public function send_messages(){
     //GET DATA BY POST
     if($this->input->is_ajax_request()){   
            $name = $this->input->post("name");
            $email = $this->input->post("email");
            $subject = $this->input->post("subject");
            $comments = $this->input->post("comments");

            //status_value 0 means (not read)
                    $data = array(
                        'name' => $name,
                        'email' => $email,
                        'subject' => $subject,
                        'comment' => $comments,
                        'big_investor' => 0,
                        'date_comment' => date("Y-m-d H:i:s"),
                        'active' => 1,
                        'status_value' => 1,
                    );
                    $this->obj_comments->insert($data);
                    echo json_encode($data);            
                    exit();
        }
            }
            
    public function btc_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             return $price;
    }
    
    public function eth_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1027/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             return $price;
    }
    
    public function bch_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1831/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             return $price;
    }     
    
    public function dash_price(){
             $url =  "https://api.coinmarketcap.com/v2/ticker/131/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             return $price;
    }
    
    public function btc_price_percent($price, $percent){
             $price_percent = ($price * $percent)/100;
             $new_price = $price + $price_percent;
             return $new_price;
    }
    
    public function eth_price_percent($price, $percent){
             $price_percent = ($price * $percent)/100;
             $new_price = $price + $price_percent;
             return $new_price;
    }
    
    public function bch_price_percent($price, $percent){
             $price_percent = ($price * $percent)/100;
             $new_price = $price + $price_percent;
             return $new_price;
    }     
    
    public function dash_price_percent($price, $percent){
             $price_percent = ($price * $percent)/100;
             $new_price = $price + $price_percent;
             return $new_price;
    }
    
    public function ripple_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/52/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $price = $price + $price_percent;
             return $price;
    }
    
    public function litecoin_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/2/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $price = $price + $price_percent;
             return $price;
    }
    
    public function cardano_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/2010/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $price = $price + $price_percent;
             return $price;
    }
    
    public function tron_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1958/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $price = $price + $price_percent;
             return $price;
    }
    
    public function monero_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/328/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $price = $price + $price_percent;
             return $price;
    }
    
    public function omisego_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1808/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $price = $price + $price_percent;
             return $price;
    }
    
    public function zcash_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1437/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $price = $price + $price_percent;
             return $price;
    }
    
    public function siacoin_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/1042/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $price = $price + $price_percent;
             return $price;
    }
    
    public function verge_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/693/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $price = $price + $price_percent;
             return $price;
    }
    
    public function nxt_price_percent($percent){
             $url =  "https://api.coinmarketcap.com/v2/ticker/66/?convert=EUR";
             $fgc = file_get_contents($url);
             $json = json_decode($fgc, true);
             $price = $json['data']['quotes']['EUR']['price'];
             $price_percent = ($price * $percent)/100;
             $price = $price + $price_percent;
             return $price;
    }
    
    public function validate_usd() {
            if ($this->input->is_ajax_request()) {
                //SELECT ID FROM CUSTOMER
            $value = trim($this->input->post('value'));
            $price = trim($this->input->post('price'));
            $img = trim($this->input->post('img'));
            
            //MULTIPLE BY THE VALUE
            $data['amount_btc'] =  $value / $price;
            
            $images = site_url()."static/page_front/images/monedas/$img";
            $img = "<img src='$images' alt='criptomoneda' width='28'/>";
            
            //SEND DATA
            $data['img'] =  $img;            
            echo json_encode($data);
            }
    }
        
    public function validate_btc() {
            if ($this->input->is_ajax_request()) {
                //SELECT ID FROM CUSTOMER
            $value = trim($this->input->post('value'));
            $price = trim($this->input->post('price'));
            //MULTIPLE BY THE VALUE
            $new_data =  $value * $price;
            echo json_encode($new_data);
            
            }
    }
}