class CustomerRepository implements RepositoryInterface
{
    protected $db;

    public function __construct(IDatabase $db)
    {
        if ($db == null)
            throw new Exception("IDatabase");

        $this->db = $db;
    }

    public function save(Customer $customer)
    {
        // Insert or update the $customer
        // in the 'customer' table
        $this->db->save($customer, 'customer');
    }


}