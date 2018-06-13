public class ApiController {
	private $logger;
    private $dataBase = null;

    // What would be a correct way to write this constructor?
    public function ApiController(IDatabase $dataBase,LoggerInterface $logger) {
        // Where this exception could/should be thrown?
	if ($database == null)
            throw new Exception("IDatabase");

        $this->dataBase = $dataBase;
		$this->logger=$logger
    }
    

    public function doAction(CustomerReposiotry customer)
    {
	// What kind of problem can we have when using global variables?
//Concurrency issues//Testing and Confinement 
        $Case = $_GET["case"];
        $customer = $_POST["customer"];
        $product_id = $_GET["productId"];

        try {
	// think about what could be done to avoid this logic in a controller
	// try to move to services layer
            switch ($Case) :
                case 'product':
				//Get from server .
					getProductInfo(product_id)
                    break;
                case 'contact':
                    $output = 'contact@zemrooms.com';
                    break;
                case 'customer':
                    $output = 'OK';
                    
					// Save the new user
					$repository->save($user);
                    break;
                default:
                    throw new Exception('Invalid case');
            endswitch;
        } catch (Exception $e) {
            $this->logger->error('Oups');
        }
        return (new jsonResponse([$output]))->__toString();
    }

    // .... more code
}
    
}
