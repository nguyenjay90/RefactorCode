public class ApiController {
	private $logger;
    private $dataBase = null;

    public ApiController(IDatabase $dataBase,LoggerInterface $logger) {
        if ($database == null)
            throw new Exception("IDatabase");

        $this->dataBase = $dataBase;
		$this->logger=$logger
    }
    

    public function doAction(CustomerReposiotry customer)
    {
        $Case = $_GET["case"];
        $customer = $_POST["customer"];
        $product_id = $_GET["productId"];

        try {
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