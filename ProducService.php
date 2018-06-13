   
<?php
class ProductService {
   private static function getProductInfo($productId){
       switch ($product_id) {
                        case 1 :
                            $output = [
                                'id' => '666',
                                'name' => 'Fluffy unicorn',
                                'description' => 'It\'s so fluffy you\'ll melt and bring it to the park and eat ice cream. https://timedotcom.files.wordpress.com/2015/03/deadpool.jpg',
                                'price' => ['amount' => 10000, 'currency' => 'USD']
                            ];
                            break;
                        case 2 :
                            $output = [
                                'id' => '667',
                                'name' => 'Fluffy tech lead',
                                'description' => '”I don’t care if it works on your machine! We are not shipping your machine!” – Vidiu Platon',
                                'price' => ['amount' => 300000, 'currency' => 'USD']
                            ];
                            break;
                    } 
    
	
}
	